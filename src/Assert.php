<?php

namespace Hichxm\Assert;

use Hichxm\Assert\Assertion\Comparator;

class Assert
{
    use Comparator\EqualsTrait;
    use Comparator\BiggerThanTrait;
    use Comparator\LessThanTrait;
    use Comparator\TypeTrait;

    private static function generateMessage($format, array $args = [])
    {
        return vsprintf($format, $args);
    }

    private static function createException($message)
    {
        return new AssertException($message);
    }
}