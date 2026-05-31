<?php

namespace Hichxm\Assert;

use Hichxm\Assert\Assertion\BiggerThanTrait;
use Hichxm\Assert\Assertion\EqualsTrait;

class Assert
{
    use EqualsTrait;
    use BiggerThanTrait;

    private static function generateMessage($format, array $args = [])
    {
        return vsprintf($format, $args);
    }

    private static function createException($message)
    {
        return new AssertException($message);
    }
}