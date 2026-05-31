<?php

use Hichxm\Assert\Assert;
use Hichxm\Assert\AssertException;

test('Success on same type and same value', function () {
    Assert::equals(1, 1);
});

test('Success on different type and same value', function () {
    Assert::equals('1', 1);
});

test('Fail on same type and different value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::equals(1, 2);
    });
});

test('Fail on different type and different value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::equals('1', 2);
    });
});

test('Success with strict on same type and same value', function () {
    Assert::strictEquals(1, 1);
});

test('Fail with strict mode on different type and same value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::strictEquals(1, '1');
    });
});

test('Fail with strict mode on same type and different value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::strictEquals(1, 2);
    });
});

test('Fail with strict mode on different type and different value', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::strictEquals('1', 2);
    });
});

test('Success with null values', function () {
    Assert::equals(null, null);
});

test('Success with strict mode on null values', function () {
    Assert::strictEquals(null, null);
});

test('Success with boolean values', function () {
    Assert::equals(true, true);
    Assert::equals(false, false);
});

test('Success with strict mode on boolean values', function () {
    Assert::strictEquals(true, true);
    Assert::strictEquals(false, false);
});

test('Success with string values', function () {
    Assert::equals('hello', 'hello');
});

test('Success with strict mode on string values', function () {
    Assert::strictEquals('hello', 'hello');
});

test('Fail on different string values', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::equals('hello', 'world');
    });
});

test('Success with float values', function () {
    Assert::equals(1.5, 1.5);
});

test('Success with strict mode on float values', function () {
    Assert::strictEquals(1.5, 1.5);
});

test('Success with array values', function () {
    Assert::equals([1, 2, 3], [1, 2, 3]);
});

test('Success with strict mode on array values', function () {
    Assert::strictEquals([1, 2, 3], [1, 2, 3]);
});

test('Fail on different array values', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::equals([1, 2, 3], [1, 2, 4]);
    });
});

test('Fail with zero and empty string in non-strict mode', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::equals(0, '');
    });
});

test('Fail with zero and empty string in strict mode', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::strictEquals(0, '');
    });
});

test('Success with false and zero in non-strict mode', function () {
    Assert::equals(false, 0);
});

test('Fail with false and zero in strict mode', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::strictEquals(false, 0);
    });
});

test('Success with true and one in non-strict mode', function () {
    Assert::equals(true, 1);
});

test('Fail with true and one in strict mode', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::strictEquals(true, 1);
    });
});

test('Success with null and empty string in non-strict mode', function () {
    Assert::equals(null, '');
});

test('Fail with null and empty string in strict mode', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::strictEquals(null, '');
    });
});

test('Success with negative numbers', function () {
    Assert::equals(-5, -5);
});

test('Success with strict mode on negative numbers', function () {
    Assert::strictEquals(-5, -5);
});

test('Fail on different negative numbers', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::equals(-5, -10);
    });
});
