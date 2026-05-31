<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('Success with integer value', function () {
    Assert::isInteger(1);
});

test('Success with zero integer value', function () {
    Assert::isInteger(0);
});

test('Success with negative integer value', function () {
    Assert::isInteger(-10);
});

test('Fail with string numeric value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isInteger('1');
    });
});

test('Fail with float value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isInteger(1.5);
    });
});

test('Fail with boolean value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isInteger(true);
    });
});

test('Fail with null value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isInteger(null);
    });
});

test('Fail with array value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isInteger(array(1));
    });
});

test('Success with custom message on isInteger', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isInteger('1', 'Custom integer error message');
    });
});

test('Success with not integer string value', function () {
    Assert::isNotInteger('1');
});

test('Success with not integer float value', function () {
    Assert::isNotInteger(1.5);
});

test('Success with not integer boolean value', function () {
    Assert::isNotInteger(false);
});

test('Success with not integer null value', function () {
    Assert::isNotInteger(null);
});

test('Success with not integer array value', function () {
    Assert::isNotInteger(array(1));
});

test('Fail with isNotInteger on integer value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotInteger(1);
    });
});

test('Fail with isNotInteger on zero integer value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotInteger(0);
    });
});

test('Fail with isNotInteger on negative integer value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotInteger(-10);
    });
});

test('Success with custom message on isNotInteger', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotInteger(1, 'Custom not integer error message');
    });
});