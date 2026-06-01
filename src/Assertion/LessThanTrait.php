<?php

namespace Hichxm\Assert\Assertion;

/**
 * Provides methods for performing less-than and less-than-or-equal-to validations.
 * Includes functionality for inverting the validations and throwing exceptions when conditions are not met.
 */
trait LessThanTrait
{
    /**
     * Checks if the first value is less than the second value and throws an exception if the condition is not met.
     *
     * @param mixed $value1 The first value to compare.
     * @param mixed $value2 The second value to compare.
     *
     * @param string|null $message The custom message for the exception. If null, a default message will be used.
     *
     * @param bool $notLessThan If true, the method will check that $value1 is not less than $value2.
     *
     * @return bool Returns true if the condition is met.
     */
    public static function lessThan($value1, $value2, $message = null, $notLessThan = false)
    {
        $lessThan = $value1 < $value2;

        if ($notLessThan ? $lessThan : !$lessThan) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to ' . ($notLessThan ? 'not  ' : '') . 'be less than to "%s"',
                [
                    $value1,
                    $value2,
                ]
            );

            throw static::createException($message);
        }

        return true;
    }

    public static function notLessThan($value1, $value2, $message = null)
    {
        return static::lessThan($value1, $value2, $message, true);
    }

    /**
     * Validates whether the first value is less than or equal to the second value.
     * Optionally, it can check the opposite condition when the $notLessOrEqualThan parameter is true.
     *
     * @param mixed $value1 The first value to compare.
     * @param mixed $value2 The second value to compare against.
     *
     * @param string|null $message The custom error message to use if the validation fails.
     *
     * @param bool $notLessOrEqualThan Determines whether to invert the condition to check if $value1 is not less than or equal to $value2.
     *
     * @return bool Returns true if the validation passes.
     */
    public static function lessOrEqualThan($value1, $value2, $message = null, $notLessOrEqualThan = false)
    {
        $lessThan = $value1 <= $value2;

        if ($notLessOrEqualThan ? $lessThan : !$lessThan) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to ' . ($notLessOrEqualThan ? 'not  ' : '') . 'be less or equal than to "%s"',
                [
                    $value1,
                    $value2,
                ]
            );

            throw static::createException($message);
        }

        return true;
    }

    public static function notLessOrEqualThan($value1, $value2, $message = null)
    {
        return static::lessOrEqualThan($value1, $value2, $message, true);
    }

}