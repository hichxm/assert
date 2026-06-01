<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('hasKey success', function () {
    Assert::hasKey(['a' => 1, 'b' => 2], 'a');
    Assert::hasKey(['a' => 1, 'b' => 2], 'b');
    Assert::hasKey([1, 2, 3], 0);
});

test('hasKey failure', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::hasKey(['a' => 1, 'b' => 2], 'c');
    });
});

test('hasKey failure with custom message', function () {
    try {
        Assert::hasKey(['a' => 1], 'b', 'Custom message');
    } catch (AssertException $e) {
        if ($e->getMessage() !== 'Custom message') {
            fail('Expected custom message "Custom message", but got "' . $e->getMessage() . '"');
        }
        return;
    }
    fail('Expected AssertException but none was thrown.');
});

test('notHasKey success', function () {
    Assert::notHasKey(['a' => 1, 'b' => 2], 'c');
    Assert::notHasKey([1, 2, 3], 3);
});

test('notHasKey failure', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notHasKey(['a' => 1, 'b' => 2], 'a');
    });
});

test('countEquals success', function () {
    Assert::countEquals([1, 2, 3], 3);
    Assert::countEquals([], 0);
    Assert::countEquals(['a' => 1], 1);
});

test('countEquals failure', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::countEquals([1, 2, 3], 2);
    });
});

test('inArray success', function () {
    Assert::inArray(1, [1, 2, 3]);
    Assert::inArray('a', ['a', 'b', 'c']);
    Assert::inArray(true, [false, true]);
});

test('inArray failure (strict check)', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::inArray('1', [1, 2, 3]);
    });
});

test('notInArray success', function () {
    Assert::notInArray(4, [1, 2, 3]);
    Assert::notInArray('d', ['a', 'b', 'c']);
    // Strict check: '1' is not in [1, 2, 3]
    Assert::notInArray('1', [1, 2, 3]);
});

test('notInArray failure', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notInArray(1, [1, 2, 3]);
    });
});
