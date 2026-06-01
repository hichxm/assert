<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('isPositive success', function () {
    Assert::isPositive(1);
    Assert::isPositive(0.1);
});

test('isPositive fail with zero', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isPositive(0);
    });
});

test('isPositive fail with negative', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isPositive(-1);
    });
});

test('isNegative success', function () {
    Assert::isNegative(-1);
    Assert::isNegative(-0.1);
});

test('isNegative fail with zero', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNegative(0);
    });
});

test('isNegative fail with positive', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNegative(1);
    });
});

test('isZero success', function () {
    Assert::isZero(0);
    Assert::isZero(0.0);
    Assert::isZero('0');
});

test('isZero fail', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isZero(1);
    });
});

test('between success', function () {
    Assert::between(5, 1, 10);
    Assert::between(1, 1, 10);
    Assert::between(10, 1, 10);
});

test('between fail (too low)', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::between(0, 1, 10);
    });
});

test('between fail (too high)', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::between(11, 1, 10);
    });
});

test('NumericTrait custom message', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isPositive(-1, 'Custom message');
    });
});
