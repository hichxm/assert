<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('Success: contains should find needle in string', function () {
    Assert::contains('Hello world', 'world');
});

test('Fail: contains should throw exception if needle not found', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::contains('Hello world', 'planet');
    });
});

test('Success: notContains should not find needle in string', function () {
    Assert::notContains('Hello world', 'planet');
});

test('Fail: notContains should throw exception if needle found', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::notContains('Hello world', 'world');
    });
});

test('Success: startsWith should match prefix', function () {
    Assert::startsWith('Hello world', 'Hello');
});

test('Fail: startsWith should throw exception if prefix doesn\'t match', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::startsWith('Hello world', 'world');
    });
});

test('Success: endsWith should match suffix', function () {
    Assert::endsWith('Hello world', 'world');
});

test('Fail: endsWith should throw exception if suffix doesn\'t match', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::endsWith('Hello world', 'Hello');
    });
});

test('Success: stringLength should match expected length', function () {
    Assert::stringLength('Hello', 5);
});

test('Fail: stringLength should throw exception if length doesn\'t match', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::stringLength('Hello', 10);
    });
});

test('Success: contains with custom message', function () {
    try {
        Assert::contains('Hello', 'world', 'Custom message');
        fail('Should have thrown an exception');
    } catch (AssertException $e) {
        if ($e->getMessage() !== 'Custom message') {
            fail('Expected "Custom message", got "' . $e->getMessage() . '"');
        }
    }
});
