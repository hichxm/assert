<?php

namespace Hichxm\Assert;

use Hichxm\Assert\Assertion\BiggerThanTrait;
use Hichxm\Assert\Assertion\EqualsTrait;
use Hichxm\Assert\Assertion\LessThanTrait;
use Hichxm\Assert\Assertion\TypeTrait;

class Assert
{
    use EqualsTrait;
    use BiggerThanTrait;
    use LessThanTrait;
    use TypeTrait;

    private static function generateMessage($format, array $args = [])
    {
        return vsprintf($format, $args);
    }

    private static function createException($message)
    {
        return new AssertException($message);
    }
}