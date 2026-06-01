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

test('Success with string value', function () {
    Assert::isString('hello');
});

test('Success with empty string value', function () {
    Assert::isString('');
});

test('Fail with integer value on isString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isString(1);
    });
});

test('Fail with float value on isString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isString(1.5);
    });
});

test('Fail with boolean value on isString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isString(true);
    });
});

test('Fail with null value on isString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isString(null);
    });
});

test('Fail with array value on isString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isString(array('hello'));
    });
});

test('Success with custom message on isString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isString(1, 'Custom string error message');
    });
});

test('Success with not string value', function () {
    Assert::isNotString(1);
});

test('Success with not string float value', function () {
    Assert::isNotString(1.5);
});

test('Success with not string boolean value', function () {
    Assert::isNotString(false);
});

test('Success with not string null value', function () {
    Assert::isNotString(null);
});

test('Success with not string array value', function () {
    Assert::isNotString(array('hello'));
});

test('Fail with string value on isNotString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotString('hello');
    });
});

test('Fail with empty string value on isNotString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotString('');
    });
});

test('Success with custom message on isNotString', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotString('hello', 'Custom not string error message');
    });
});

test('Success with boolean value', function () {
    Assert::isBoolean(true);
    Assert::isBoolean(false);
});

test('Fail with integer value on isBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isBoolean(1);
    });
});

test('Fail with string value on isBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isBoolean('true');
    });
});

test('Fail with null value on isBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isBoolean(null);
    });
});

test('Fail with array value on isBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isBoolean(array(true));
    });
});

test('Success with custom message on isBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isBoolean(1, 'Custom boolean error message');
    });
});

test('Success with not boolean value', function () {
    Assert::isNotBoolean(1);
});

test('Success with not boolean string value', function () {
    Assert::isNotBoolean('true');
});

test('Success with not boolean null value', function () {
    Assert::isNotBoolean(null);
});

test('Success with not boolean array value', function () {
    Assert::isNotBoolean(array(true));
});

test('Fail with boolean value on isNotBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotBoolean(true);
    });
});

test('Fail with false value on isNotBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotBoolean(false);
    });
});

test('Success with custom message on isNotBoolean', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotBoolean(true, 'Custom not boolean error message');
    });
});

test('Success with float value', function () {
    Assert::isFloat(1.5);
});

test('Success with negative float value', function () {
    Assert::isFloat(-1.5);
});

test('Success with zero float value', function () {
    Assert::isFloat(0.0);
});

test('Fail with integer value on isFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFloat(1);
    });
});

test('Fail with string value on isFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFloat('1.5');
    });
});

test('Fail with boolean value on isFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFloat(true);
    });
});

test('Fail with null value on isFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFloat(null);
    });
});

test('Fail with array value on isFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFloat(array(1.5));
    });
});

test('Success with custom message on isFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isFloat(1, 'Custom float error message');
    });
});

test('Success with not float value', function () {
    Assert::isNotFloat(1);
});

test('Success with not float string value', function () {
    Assert::isNotFloat('1.5');
});

test('Success with not float boolean value', function () {
    Assert::isNotFloat(true);
});

test('Success with not float null value', function () {
    Assert::isNotFloat(null);
});

test('Success with not float array value', function () {
    Assert::isNotFloat(array(1.5));
});

test('Fail with float value on isNotFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotFloat(1.5);
    });
});

test('Fail with negative float value on isNotFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotFloat(-1.5);
    });
});

test('Fail with zero float value on isNotFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotFloat(0.0);
    });
});

test('Success with custom message on isNotFloat', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotFloat(1.5, 'Custom not float error message');
    });
});

test('Success with array value', function () {
    Assert::isArray(array(1, 2, 3));
});

test('Success with empty array value', function () {
    Assert::isArray(array());
});

test('Success with associative array value', function () {
    Assert::isArray(array('key' => 'value'));
});

test('Fail with string value on isArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isArray('hello');
    });
});

test('Fail with integer value on isArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isArray(1);
    });
});

test('Fail with boolean value on isArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isArray(true);
    });
});

test('Fail with null value on isArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isArray(null);
    });
});

test('Success with custom message on isArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isArray('hello', 'Custom array error message');
    });
});

test('Success with not array value', function () {
    Assert::isNotArray('hello');
});

test('Success with not array integer value', function () {
    Assert::isNotArray(1);
});

test('Success with not array boolean value', function () {
    Assert::isNotArray(true);
});

test('Success with not array null value', function () {
    Assert::isNotArray(null);
});

test('Fail with array value on isNotArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotArray(array(1));
    });
});

test('Fail with empty array value on isNotArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotArray(array());
    });
});

test('Fail with associative array value on isNotArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotArray(array('key' => 'value'));
    });
});

test('Success with custom message on isNotArray', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotArray(array(1), 'Custom not array error message');
    });
});

test('Success with null value', function () {
    Assert::isNull(null);
});

test('Fail with string value on isNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNull('hello');
    });
});

test('Fail with empty string value on isNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNull('');
    });
});

test('Fail with integer value on isNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNull(0);
    });
});

test('Fail with boolean value on isNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNull(false);
    });
});

test('Fail with array value on isNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNull(array());
    });
});

test('Success with custom message on isNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNull('hello', 'Custom null error message');
    });
});

test('Success with not null value', function () {
    Assert::isNotNull('hello');
});

test('Success with not null integer value', function () {
    Assert::isNotNull(0);
});

test('Success with not null boolean value', function () {
    Assert::isNotNull(false);
});

test('Success with not null array value', function () {
    Assert::isNotNull(array());
});

test('Fail with null value on isNotNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotNull(null);
    });
});

test('Success with custom message on isNotNull', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotNull(null, 'Custom not null error message');
    });
});

test('Success with numeric value', function () {
    Assert::isNumeric(1);
    Assert::isNumeric(1.5);
    Assert::isNumeric('1.5');
});

test('Success with numeric string integer value', function () {
    Assert::isNumeric('123');
});

test('Success with numeric negative value', function () {
    Assert::isNumeric(-10);
});

test('Success with numeric hexadecimal value', function () {
    Assert::isNumeric(0xFF);
});

test('Fail with string value on isNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNumeric('hello');
    });
});

test('Fail with boolean value on isNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNumeric(true);
    });
});

test('Fail with null value on isNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNumeric(null);
    });
});

test('Fail with array value on isNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNumeric(array(1));
    });
});

test('Success with custom message on isNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNumeric('hello', 'Custom numeric error message');
    });
});

test('Success with not numeric value', function () {
    Assert::isNotNumeric('hello');
});

test('Success with not numeric boolean value', function () {
    Assert::isNotNumeric(true);
});

test('Success with not numeric null value', function () {
    Assert::isNotNumeric(null);
});

test('Success with not numeric array value', function () {
    Assert::isNotNumeric(array(1));
});

test('Fail with numeric value on isNotNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotNumeric(1);
    });
});

test('Fail with numeric float value on isNotNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotNumeric(1.5);
    });
});

test('Fail with numeric string value on isNotNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotNumeric('123');
    });
});

test('Success with custom message on isNotNumeric', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotNumeric(1, 'Custom not numeric error message');
    });
});

test('Success with empty value', function () {
    Assert::isEmpty('');
    Assert::isEmpty(0);
    Assert::isEmpty(false);
    Assert::isEmpty(null);
    Assert::isEmpty(array());
});

test('Success with empty string zero value', function () {
    Assert::isEmpty('0');
});

test('Fail with not empty value on isEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isEmpty('hello');
    });
});

test('Fail with not empty integer value on isEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isEmpty(1);
    });
});

test('Fail with not empty boolean value on isEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isEmpty(true);
    });
});

test('Fail with not empty array value on isEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isEmpty(array(1));
    });
});

test('Success with custom message on isEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isEmpty('hello', 'Custom empty error message');
    });
});

test('Success with not empty value', function () {
    Assert::isNotEmpty('hello');
    Assert::isNotEmpty(1);
    Assert::isNotEmpty(true);
    Assert::isNotEmpty(array(1));
});

test('Success with not empty negative integer value', function () {
    Assert::isNotEmpty(-1);
});

test('Success with not empty float value', function () {
    Assert::isNotEmpty(1.5);
});

test('Fail with empty value on isNotEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotEmpty('');
    });
});

test('Success with object value', function () {
    Assert::isObject(new stdClass());
});

test('Fail with integer value on isObject', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isObject(1);
    });
});

test('Success with not object value', function () {
    Assert::isNotObject(1);
});

test('Fail with object value on isNotObject', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotObject(new stdClass());
    });
});

test('Fail with empty zero value on isNotEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotEmpty(0);
    });
});

test('Fail with empty false value on isNotEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotEmpty(false);
    });
});

test('Fail with empty null value on isNotEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotEmpty(null);
    });
});

test('Fail with empty array value on isNotEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotEmpty(array());
    });
});

test('Success with custom message on isNotEmpty', function () {
    expectException(get_class(new AssertException()), function () {
        Assert::isNotEmpty('', 'Custom not empty error message');
    });
});