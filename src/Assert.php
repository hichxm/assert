<?php

namespace Hichxm\Assert;

use Hichxm\Assert\Assertion\EqualsTrait;

class Assert
{
    use EqualsTrait;

    private static function generateMessage($format, array $args = [])
    {
        return vsprintf($format, $args);
    }

    private static function createException($message)
    {
        return new AssertException($message);
    }
}