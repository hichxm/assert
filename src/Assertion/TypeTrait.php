<?php

namespace Hichxm\Assert\Assertion;

/**
 * Provides various type validation functions to ensure values conform to specific types.
 */
trait TypeTrait
{
    /**
     * Validates if the given value is an integer. Throws an exception if validation fails.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is an integer.
     */
    public static function isInteger($value, $message = null)
    {
        if (!is_integer($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be integer.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not an integer. Throws an exception if the value is an integer.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not an integer.
     */
    public static function isNotInteger($value, $message = null)
    {
        if (is_integer($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be integer.',
                [ $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is a string. Throws an exception if the value is not a string.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is a string.
     */
    public static function isString($value, $message = null)
    {
        if (!is_string($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be string.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not a string. Throws an exception if the value is a string.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not a string.
     */
    public static function isNotString($value, $message = null)
    {
        if (is_string($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be string.',
                [ $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is a boolean. Throws an exception if the value is not a boolean.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is a boolean.
     */
    public static function isBoolean($value, $message = null)
    {
        if (!is_bool($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be boolean.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not a boolean. Throws an exception if the value is a boolean.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not a boolean.
     */
    public static function isNotBoolean($value, $message = null)
    {
        if (is_bool($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be boolean.',
                [ $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is a float. Throws an exception if the value is not a float.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is a float.
     */
    public static function isFloat($value, $message = null)
    {
        if (!is_float($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be float.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not a float. Throws an exception if the value is a float.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not a float.
     */
    public static function isNotFloat($value, $message = null)
    {
        if (is_float($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be float.',
                [ $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is an array. Throws an exception if the value is not an array.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is an array.
     */
    public static function isArray($value, $message = null)
    {
        if (!is_array($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be array.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not an array. Throws an exception if the value is an array.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not an array.
     */
    public static function isNotArray($value, $message = null)
    {
        if (is_array($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be array.',
                [ json_encode($value) ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is null. Throws an exception if the value is not null.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is null.
     */
    public static function isNull($value, $message = null)
    {
        if (!is_null($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be null.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not null. Throws an exception if the value is null.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not null.
     */
    public static function isNotNull($value, $message = null)
    {
        if (is_null($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be null.',
                [ $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is numeric. Throws an exception if the value is not numeric.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is numeric.
     */
    public static function isNumeric($value, $message = null)
    {
        if (!is_numeric($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be numeric.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not numeric. Throws an exception if the value is numeric.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not numeric.
     */
    public static function isNotNumeric($value, $message = null)
    {
        if (is_numeric($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be numeric.',
                [ $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is empty. Throws an exception if the value is not empty.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is empty.
     */
    public static function isEmpty($value, $message = null)
    {
        if (!empty($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be empty.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is not empty. Throws an exception if the value is empty.
     *
     * @param mixed $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not empty.
     */
    public static function isNotEmpty($value, $message = null)
    {
        if (empty($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be empty.',
                [ is_array($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }
}