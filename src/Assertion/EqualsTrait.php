<?php

namespace Hichxm\Assert\Assertion;

/**
 * Provides utility methods for comparing two values for equality or inequality,
 * with support for strict comparison and custom error handling.
 */
trait EqualsTrait
{

    /**
     * Compares two values for equality and throws an exception if they are not equal.
     *
     * @param mixed $value1 The first value to compare.
     * @param mixed $value2 The second value to compare.
     *
     * @param string $message The custom error message to use if the values are not equal.
     *
     * @param bool $strict Determines whether strict comparison should be used (e.g., type checking).
     *
     * @return bool Returns true if the values are equal.
     */
    public static function equals($value1, $value2, $message = null, $strict = false, $isEquals = true)
    {
        $areEqual = static::areEquals($value1, $value2, $strict);

        if ($isEquals ? !$areEqual : $areEqual) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to ' . ($isEquals ? 'not  ' : '') . 'be ' . ($strict ? 'strictly ' : '') . 'equal to "%s"',
                [
                    is_array($value1) ? json_encode($value1) : $value1,
                    is_array($value2) ? json_encode($value2) : $value2,
                ]
            );

            throw static::createException($message);
        }

        return true;
    }

    public static function strictEquals($value1, $value2, $message = null)
    {
        return self::equals($value1, $value2, $message, true);
    }

    public static function notEquals($value1, $value2, $message = null)
    {
        return self::equals($value1, $value2, $message, false, false);
    }

    public static function strictNotEquals($value1, $value2, $message = null)
    {
        return self::equals($value1, $value2, $message, true, false);
    }

    private static function areEquals($value1, $value2, $strict = false)
    {
        // TODO : https://wiki.php.net/rfc/string_to_number_comparison

        return $strict
            ? $value1 === $value2
            : $value1 == $value2;
    }
}