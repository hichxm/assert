<?php

namespace Hichxm\Assert;

class Assert
{
    use Assertion\EqualsTrait;
    use Assertion\BiggerThanTrait;
    use Assertion\LessThanTrait;
    use Assertion\TypeTrait;
    use Assertion\ArrayTrait;
    use Assertion\StringTrait;
    use Assertion\NumericTrait;

    private static function generateMessage($format, array $args = [])
    {
        return vsprintf($format, $args);
    }

    private static function createException($message)
    {
        return new AssertException($message);
    }
}