<?php

class TestRunner
{
    private $tests;
    private $passed;
    private $failed;

    public function __construct()
    {
        $this->tests = array();
        $this->passed = 0;
        $this->failed = 0;
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

$GLOBALS['test_runner'] = new TestRunner();

function test($name, $callback)
{
    $GLOBALS['test_runner']->add($name, $callback);
}

function fail($message)
{
    throw new Exception($message);
}

function expectTrue($value, $message)
{
    if ($value !== true) {
        fail($message);
    }
}

function expectFalse($value, $message)
{
    if ($value !== false) {
        fail($message);
    }
}

function expectSame($expected, $actual, $message)
{
    if ($expected !== $actual) {
        fail($message . ' Expected: ' . var_export($expected, true) . ', got: ' . var_export($actual, true));
    }
}

function expectEquals($expected, $actual, $message)
{
    if ($expected != $actual) {
        fail($message . ' Expected: ' . var_export($expected, true) . ', got: ' . var_export($actual, true));
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