<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('Success on same type and value1 bigger than value2', function () {
    Assert::biggerThan(2, 1);
});

test('Success with integers where value1 is bigger', function () {
    Assert::biggerThan(10, 5);
});

test('Success with floats where value1 is bigger', function () {
    Assert::biggerThan(5.5, 2.3);
});

test('Success with negative numbers where value1 is bigger', function () {
    Assert::biggerThan(-1, -5);
});

test('Fail when value1 is equal to value2', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerThan(5, 5);
    });
});

test('Fail when value1 is smaller than value2', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerThan(1, 2);
    });
});

test('Fail with negative numbers when value1 is smaller', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerThan(-10, -5);
    });
});

test('Success with strings that compare numerically', function () {
    Assert::biggerThan('10', '5');
});

test('Success with mixed types where value1 is bigger', function () {
    Assert::biggerThan(10, '5');
});

test('Fail with zero and positive number', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerThan(0, 1);
    });
});

test('Success with positive and zero', function () {
    Assert::biggerThan(1, 0);
});

test('Success with custom message on biggerThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerThan(1, 2, 'Custom bigger than error message');
    });
});

test('Success with notBiggerThan when value1 is smaller', function () {
    Assert::notBiggerThan(1, 2);
});

test('Success with notBiggerThan when value1 equals value2', function () {
    Assert::notBiggerThan(5, 5);
});

test('Fail with notBiggerThan when value1 is bigger', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notBiggerThan(10, 5);
    });
});

test('Success with notBiggerThan on negative numbers', function () {
    Assert::notBiggerThan(-10, -5);
});

test('Success with custom message on notBiggerThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notBiggerThan(10, 5, 'Custom not bigger than error message');
    });
});

test('Success with biggerOrEqualThan when value1 is bigger', function () {
    Assert::biggerOrEqualThan(10, 5);
});

test('Success with biggerOrEqualThan when value1 equals value2', function () {
    Assert::biggerOrEqualThan(5, 5);
});

test('Fail with biggerOrEqualThan when value1 is smaller', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerOrEqualThan(1, 2);
    });
});

test('Success with biggerOrEqualThan on floats when equal', function () {
    Assert::biggerOrEqualThan(5.5, 5.5);
});

test('Success with biggerOrEqualThan on floats when bigger', function () {
    Assert::biggerOrEqualThan(5.6, 5.5);
});

test('Success with biggerOrEqualThan on negative numbers', function () {
    Assert::biggerOrEqualThan(-5, -10);
});

test('Success with biggerOrEqualThan on zero values', function () {
    Assert::biggerOrEqualThan(0, 0);
});

test('Success with custom message on biggerOrEqualThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerOrEqualThan(1, 2, 'Custom bigger or equal than error message');
    });
});

test('Success with notBiggerOrEqualThan when value1 is smaller', function () {
    Assert::notBiggerOrEqualThan(1, 2);
});

test('Fail with notBiggerOrEqualThan when value1 equals value2', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notBiggerOrEqualThan(5, 5);
    });
});

test('Fail with notBiggerOrEqualThan when value1 is bigger', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notBiggerOrEqualThan(10, 5);
    });
});

test('Success with notBiggerOrEqualThan on negative numbers', function () {
    Assert::notBiggerOrEqualThan(-10, -5);
});

test('Success with custom message on notBiggerOrEqualThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notBiggerOrEqualThan(10, 5, 'Custom not bigger or equal than error message');
    });
});

test('Success with biggerThan on large numbers', function () {
    Assert::biggerThan(1000000, 999999);
});

test('Success with biggerOrEqualThan on large numbers when equal', function () {
    Assert::biggerOrEqualThan(1000000, 1000000);
});

test('Fail with biggerThan on equal float values', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::biggerThan(1.5, 1.5);
    });
});

test('Success with notBiggerThan on equal float values', function () {
    Assert::notBiggerThan(1.5, 1.5);
});