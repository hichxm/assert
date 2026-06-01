<?php

namespace Hichxm\Assert\Assertion;

/**
 * Trait providing string-related assertion methods.
 */
trait StringTrait
{
    /**
     * Checks if the given string contains the specified needle.
     *
     * @param string $string The string to search in.
     * @param string $needle The needle to search for.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the string contains the needle.
     */
    public static function contains($string, $needle, $message = null)
    {
        if (strpos($string, $needle) === false) {
            $message = static::generateMessage(
                $message ?: 'Expected string to contain "%s", but it does not.',
                [$needle]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the given string does not contain the specified needle.
     *
     * @param string $string The string to search in.
     * @param string $needle The needle to search for.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the string does not contain the needle.
     */
    public static function notContains($string, $needle, $message = null)
    {
        if (strpos($string, $needle) !== false) {
            $message = static::generateMessage(
                $message ?: 'Expected string not to contain "%s", but it does.',
                [$needle]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the given string starts with the specified prefix.
     *
     * @param string $string The string to check.
     * @param string $prefix The prefix to check for.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the string starts with the prefix.
     */
    public static function startsWith($string, $prefix, $message = null)
    {
        if (strpos($string, $prefix) !== 0) {
            $message = static::generateMessage(
                $message ?: 'Expected string to start with "%s", but it does not.',
                [$prefix]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the given string ends with the specified suffix.
     *
     * @param string $string The string to check.
     * @param string $suffix The suffix to check for.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the string ends with the suffix.
     */
    public static function endsWith($string, $suffix, $message = null)
    {
        $length = strlen($suffix);
        if ($length === 0) {
            return true;
        }

        if (substr($string, -$length) !== $suffix) {
            $message = static::generateMessage(
                $message ?: 'Expected string to end with "%s", but it does not.',
                [$suffix]
            );

            throw static::createException($message);
        }

        return true;
    }

    /**
     * Checks if the given string has the specified length.
     *
     * @param string $string The string to check.
     * @param int $length The expected length.
     * @param string|null $message Optional custom error message.
     *
     * @return bool Returns true if the string has the specified length.
     */
    public static function stringLength($string, $length, $message = null)
    {
        $actualLength = strlen($string);
        if ($actualLength !== $length) {
            $message = static::generateMessage(
                $message ?: 'Expected string length to be %d, but got %d.',
                [$length, $actualLength]
            );

            throw static::createException($message);
        }

        return true;
    }
}
