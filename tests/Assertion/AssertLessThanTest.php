<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('Success on same type and value1 less than value2', function () {
    Assert::lessThan(1, 2);
});

test('Success with integers where value1 is less', function () {
    Assert::lessThan(5, 10);
});

test('Success with floats where value1 is less', function () {
    Assert::lessThan(2.3, 5.5);
});

test('Success with negative numbers where value1 is less', function () {
    Assert::lessThan(-5, -1);
});

test('Fail when value1 is equal to value2', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessThan(5, 5);
    });
});

test('Fail when value1 is greater than value2', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessThan(2, 1);
    });
});

test('Fail with negative numbers when value1 is greater', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessThan(-5, -10);
    });
});

test('Success with strings that compare numerically', function () {
    Assert::lessThan('5', '10');
});

test('Success with mixed types where value1 is less', function () {
    Assert::lessThan('5', 10);
});

test('Success with zero and positive number', function () {
    Assert::lessThan(0, 1);
});

test('Fail with positive and zero', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessThan(1, 0);
    });
});

test('Success with custom message on lessThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessThan(2, 1, 'Custom less than error message');
    });
});

test('Success with notLessThan when value1 is greater', function () {
    Assert::notLessThan(2, 1);
});

test('Success with notLessThan when value1 equals value2', function () {
    Assert::notLessThan(5, 5);
});

test('Fail with notLessThan when value1 is less', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notLessThan(5, 10);
    });
});

test('Success with notLessThan on negative numbers', function () {
    Assert::notLessThan(-5, -10);
});

test('Success with custom message on notLessThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notLessThan(5, 10, 'Custom not less than error message');
    });
});

test('Success with lessOrEqualThan when value1 is less', function () {
    Assert::lessOrEqualThan(5, 10);
});

test('Success with lessOrEqualThan when value1 equals value2', function () {
    Assert::lessOrEqualThan(5, 5);
});

test('Fail with lessOrEqualThan when value1 is greater', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessOrEqualThan(2, 1);
    });
});

test('Success with lessOrEqualThan on floats when equal', function () {
    Assert::lessOrEqualThan(5.5, 5.5);
});

test('Success with lessOrEqualThan on floats when less', function () {
    Assert::lessOrEqualThan(5.5, 5.6);
});

test('Success with lessOrEqualThan on negative numbers', function () {
    Assert::lessOrEqualThan(-10, -5);
});

test('Success with lessOrEqualThan on zero values', function () {
    Assert::lessOrEqualThan(0, 0);
});

test('Success with custom message on lessOrEqualThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessOrEqualThan(2, 1, 'Custom less or equal than error message');
    });
});

test('Success with notLessOrEqualThan when value1 is greater', function () {
    Assert::notLessOrEqualThan(2, 1);
});

test('Fail with notLessOrEqualThan when value1 equals value2', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notLessOrEqualThan(5, 5);
    });
});

test('Fail with notLessOrEqualThan when value1 is less', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notLessOrEqualThan(5, 10);
    });
});

test('Success with notLessOrEqualThan on negative numbers', function () {
    Assert::notLessOrEqualThan(-5, -10);
});

test('Success with custom message on notLessOrEqualThan', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notLessOrEqualThan(5, 10, 'Custom not less or equal than error message');
    });
});

test('Success with lessThan on large numbers', function () {
    Assert::lessThan(999999, 1000000);
});

test('Success with lessOrEqualThan on large numbers when equal', function () {
    Assert::lessOrEqualThan(1000000, 1000000);
});

test('Fail with lessThan on equal float values', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::lessThan(1.5, 1.5);
    });
});

test('Success with notLessThan on equal float values', function () {
    Assert::notLessThan(1.5, 1.5);
});
