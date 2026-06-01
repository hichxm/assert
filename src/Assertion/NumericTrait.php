<?php

namespace Hichxm\Assert\Assertion;

/**
 * Trait providing numeric-related assertion methods.
 */
trait NumericTrait
{
    /**
     * Checks if the given value is positive (> 0).
     *
     * @param mixed $value The value to check.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the value is positive.
     */
    public static function isPositive($value, $message = null)
    {
        if ($value <= 0) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be positive.',
                [$value]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the given value is negative (< 0).
     *
     * @param mixed $value The value to check.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the value is negative.
     */
    public static function isNegative($value, $message = null)
    {
        if ($value >= 0) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be negative.',
                [$value]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the given value is zero (== 0).
     *
     * @param mixed $value The value to check.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the value is zero.
     */
    public static function isZero($value, $message = null)
    {
        if ($value != 0) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be zero.',
                [$value]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the given value is between a minimum and a maximum value (inclusive).
     *
     * @param mixed $value The value to check.
     * @param mixed $min The minimum value.
     * @param mixed $max The maximum value.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the value is between min and max.
     */
    public static function between($value, $min, $max, $message = null)
    {
        if ($value < $min || $value > $max) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be between %s and %s.',
                [$value, $min, $max]
            );

            throw static::createException($message);
        }

        return true;
    }
}
