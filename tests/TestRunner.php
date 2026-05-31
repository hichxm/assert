<?php

class TestRunner
{
    private $tests;
    private $passed;
    private $failed;

    private $skiped;

    public function __construct()
    {
        $this->tests = array();
        $this->passed = 0;
        $this->failed = 0;
        $this->skiped = 0;
    }

    public function add($name, $callback)
    {
        $this->tests[] = array(
            'name' => $name,
            'callback' => $callback
        );
    }

    public function run()
    {
        $this->printLine('');
        $this->printLine('Running tests...');
        $this->printLine('');

        foreach ($this->tests as $test) {
            $this->runOne($test['name'], $test['callback']);
        }

        $this->printLine('');
        $this->printLine('Results:');
        $this->printLine('  Passed: ' . $this->passed);
        $this->printLine('  Failed: ' . $this->failed);
        $this->printLine('  Skipped: ' . $this->skiped);
        $this->printLine('');

        if ($this->failed > 0) {
            exit(1);
        }

        exit(0);
    }

    private function runOne($name, $callback)
    {
        try {
            call_user_func($callback);

            $this->passed++;
            $this->printLine('[OK]   ' . $name);
        } catch (SkipException $exception) {
            $this->skiped++;
            $this->printLine('[SKIP] ' . $name);
            $this->printLine('       ' . $exception->getMessage());
        } catch (Exception $exception) {
            $this->failed++;
            $this->printLine('[FAIL] ' . $name);
            $this->printLine('       ' . get_class($exception) . ': ' . $exception->getMessage());
        }
    }

    private function printLine($message)
    {
        echo $message . PHP_EOL;
    }
}

class SkipException extends Exception
{

}

$GLOBALS['test_runner'] = new TestRunner();

function test($name, $callback)
{
    $GLOBALS['test_runner']->add($name, $callback);
}

function fail($message)
{
    throw new Exception($message);
}

function skip($message)
{
    throw new SkipException($message);
}

function skipIf($condition, $message)
{
    if ($condition) {
        skip($message);
    }
}

function expectException($exceptionClass, $callback)
{
    try {
        call_user_func($callback);
    } catch (Exception $exception) {
        if ($exception instanceof $exceptionClass) {
            return;
        }

        fail(
            'Expected exception ' . $exceptionClass .
            ', got ' . get_class($exception) .
            ': ' . $exception->getMessage()
        );
    }

    fail('Expected exception ' . $exceptionClass . ', but no exception was thrown.');
}