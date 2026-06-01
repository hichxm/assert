<?php

namespace Hichxm\Assert;

use Hichxm\Assert\Assertion\Comparator;

class Assert
{
    use Assertion\EqualsTrait;
    use Assertion\BiggerThanTrait;
    use Assertion\LessThanTrait;
    use Assertion\TypeTrait;

    private static function generateMessage($format, array $args = [])
    {
        return vsprintf($format, $args);
    }

    private static function createException($message)
    {
        return new AssertException($message);
    }
}