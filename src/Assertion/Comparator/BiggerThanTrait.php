<?php

namespace Hichxm\Assert\Assertion\Comparator;

trait BiggerThanTrait
{
    /**
     * Compares two values to determine if one is bigger than the other.
     *
     * @param mixed $value1 The first value to be compared.
     * @param mixed $value2 The second value to be compared.
     *
     * @param string|null $message Optional custom exception message.
     *
     * @param bool $notBiggerThan If true, checks if the first value is not bigger than the second.
     *
     * @return bool Returns true if the condition is met, otherwise throws an exception.
     */
    public static function biggerThan($value1, $value2, $message = null, $notBiggerThan = false)
    {
        $biggerThan = $value1 > $value2;

        if ($notBiggerThan ? $biggerThan : !$biggerThan) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to ' . ($notBiggerThan ? 'not  ' : '') . 'be bigger than to "%s"',
                [
                    $value1,
                    $value2,
                ]
            );

            throw static::createException($message);
        }

        return true;
    }

    public static function notBiggerThan($value1, $value2, $message = null)
    {
        return static::biggerThan($value1, $value2, $message, true);
    }

    /**
     * Compares two values to determine if one is bigger or equal to the other.
     *
     * @param mixed $value1 The first value to be compared.
     * @param mixed $value2 The second value to be compared.
     *
     * @param string|null $message Optional custom exception message.
     *
     * @param bool $notBiggerOrEqualThan If true, checks if the first value is not bigger or equal to the second.
     *
     * @return bool Returns true if the condition is met, otherwise throws an exception.
     */
    public static function biggerOrEqualThan($value1, $value2, $message = null, $notBiggerOrEqualThan = false)
    {
        $biggerThan = $value1 >= $value2;

        if ($notBiggerOrEqualThan ? $biggerThan : !$biggerThan) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to ' . ($notBiggerOrEqualThan ? 'not  ' : '') . 'be bigger or equal than to "%s"',
                [
                    $value1,
                    $value2,
                ]
            );

            throw static::createException($message);
        }

        return true;
    }

    public static function notBiggerOrEqualThan($value1, $value2, $message = null)
    {
        return static::biggerOrEqualThan($value1, $value2, $message, true);
    }

}