<?php

namespace Hichxm\Assert\Assertion;

/**
 * Provides assertion methods for array operations.
 */
trait ArrayTrait
{
    /**
     * Checks if the array has the specified key. If the key does not exist, an exception is thrown.
     *
     * @param array $array The array to check for the key.
     * @param mixed $key The key to check for presence in the array.
     * @param string|null $message Optional custom message for the exception, if the key is not found in the array.
     *
     * @return bool Returns true if the key is found, otherwise throws an exception.
     */
    public static function hasKey($array, $key, $message = null)
    {
        if (!array_key_exists($key, $array)) {
            $message = static::generateMessage(
                $message ?: 'Expected array to have key "%s".',
                [$key]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the array does not have the specified key. If the key exists, an exception is thrown.
     *
     * @param array $array The array to check for the key.
     * @param mixed $key The key to check for absence in the array.
     * @param string|null $message Optional custom message for the exception, if the key is found in the array.
     *
     * @return bool Returns true if the key is not found, otherwise throws an exception.
     */
    public static function notHasKey($array, $key, $message = null)
    {
        if (array_key_exists($key, $array)) {
            $message = static::generateMessage(
                $message ?: 'Expected array not to have key "%s".',
                [$key]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the array has the expected number of elements. If the count does not match, an exception is thrown.
     *
     * @param array $array The array to check the count of.
     * @param int $count The expected number of elements in the array.
     * @param string|null $message Optional custom message for the exception, if the count does not match.
     *
     * @return bool Returns true if the count matches, otherwise throws an exception.
     */
    public static function countEquals($array, $count, $message = null)
    {
        $actualCount = count($array);
        if ($actualCount !== $count) {
            $message = static::generateMessage(
                $message ?: 'Expected array to have %d elements, but got %d.',
                [$count, $actualCount]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if a value is present in a given array. If the value is not found in the array, an exception is thrown.
     *
     * @param mixed $value The value to check for presence in the array.
     * @param array $array The array in which to check for the value.
     * @param string|null $message Optional custom message for the exception, if the value is not found in the array.
     *
     * @return bool Returns true if the value is found in the array.
     */
    public static function inArray($value, $array, $message = null)
    {
        if (!in_array($value, $array, true)) {
            $message = static::generateMessage(
                $message ?: 'Expected value "%s" to be in array.',
                [is_array($value) ? json_encode($value) : $value]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if a value is not present in a given array. If the value is found in the array, an exception is thrown.
     *
     * @param mixed $value The value to check for absence in the array.
     * @param array $array The array in which to check for the value.
     *
     * @param string|null $message Optional custom message for the exception, if the value is found in the array.
     *
     * @return bool Returns true if the value is not in the array.
     */
    public static function notInArray($value, $array, $message = null)
    {
        if (in_array($value, $array, true)) {
            $message = static::generateMessage(
                $message ?: 'Expected value "%s" not to be in array.',
                [is_array($value) ? json_encode($value) : $value]
            );

            throw static::createException($message);
        }

        return true;
    }
}