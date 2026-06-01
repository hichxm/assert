<?php

namespace Hichxm\Assert\Assertion;

/**
 * Trait BooleanTrait
 * @package Hichxm\Assert\Assertion
 */
trait BooleanTrait
{
    /**
     * Validates that the given value is true. Throws an exception if the value is not true.
     *
     * @param boolean $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is true.
     */
    public static function isTrue($value, $message = null)
    {
        if ($value !== true) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be true.',
                [ is_array($value) || is_object($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Validates that the given value is false. Throws an exception if the value is not false.
     *
     * @param boolean $value The value to be validated.
     * @param string|null $message Optional custom error message. If not provided, a default message will be used.
     *
     * @return bool Returns true if the value is false.
     */
    public static function isFalse($value, $message = null)
    {
        if ($value !== false) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be false.',
                [ is_array($value) || is_object($value) ? json_encode($value) : $value ]
            );

            throw static::createException($message);
        }

        return true;
    }
}
