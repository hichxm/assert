<?php

require_once __DIR__ . '/TestRunner.php';

$autoload = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoload)) {
    require_once $autoload;
} else {
    require_once __DIR__ . '/../src/Assert.php';
    require_once __DIR__ . '/../src/AssertException.php';
    require_once __DIR__ . '/../src/Assertion/EqualsTrait.php';
}

require_once __DIR__ . '/Assertion/AssertEqualsTest.php';
require_once __DIR__ . '/Assertion/AssertBiggerThanTest.php';
require_once __DIR__ . '/Assertion/AssertLessThanTest.php';
require_once __DIR__ . '/Assertion/AssertTypeTest.php';
require_once __DIR__ . '/Assertion/AssertArrayTest.php';
require_once __DIR__ . '/Assertion/AssertStringTest.php';

$GLOBALS['test_runner']->run();