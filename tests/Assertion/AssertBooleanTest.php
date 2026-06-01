<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('isTrue success', function () {
    Assert::isTrue(true);
});

test('isTrue fail with false', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isTrue(false);
    });
});

test('isTrue fail with other types', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isTrue(1);
    });
});

test('isFalse success', function () {
    Assert::isFalse(false);
});

test('isFalse fail with true', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFalse(true);
    });
});

test('isFalse fail with other types', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFalse(0);
    });
});

test('BooleanTrait custom message', function () {
    try {
        Assert::isTrue(false, 'Custom error message');
    } catch (AssertException $e) {
        if ($e->getMessage() !== 'Custom error message') {
            throw new Exception("Expected 'Custom error message', got '{$e->getMessage()}'");
        }
        return;
    }
    throw new Exception("Expected AssertException was not thrown");
});
