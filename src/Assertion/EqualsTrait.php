<?php

namespace Hichxm\Assert\Assertion;

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
    public static function equals($value1, $value2, $message = null, $strict = false)
    {
        if ($strict ? !($value1 === $value2) : !($value1 == $value2)) {
            $message = static::generateMessage(
                $message ?: 'Expected "%s" to be ' . ($strict ? 'strictly ' : '') . 'equal to "%s"',
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
}