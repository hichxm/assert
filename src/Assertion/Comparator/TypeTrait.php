<?php

namespace Hichxm\Assert\Assertion\Comparator;

trait TypeTrait
{
    /**
     * Validates if the given value is an integer. Throws an exception if validation fails.
     *
     * @param mixed $value The value to be validated.
     *
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is an integer.
     */
    public static function isInteger($value, $message = null)
    {
        if (!self::_isInteger($value)) {
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
     *
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is not an integer.
     */
    public static function isNotInteger($value, $message = null)
    {
        if (self::_isInteger($value)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" not to be integer.',
                [ $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    private static function _isInteger($value)
    {
        return is_integer($value);
    }
}