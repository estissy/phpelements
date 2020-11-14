<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class ListTypeKeyword
 *
 * @package Elements\Keyword
 */
class ListTypeKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function decimal(): self
    {
        return new self('1');
    }

    /**
     * @return self
     */
    public static function lowerAlpha(): self
    {
        return new self('a');
    }

    /**
     * @return self
     */
    public static function upperAlpha(): self
    {
        return new self('A');
    }

    /**
     * @return self
     */
    public static function lowerRoman(): self
    {
        return new self('i');
    }

    /**
     * @return self
     */
    public static function upperRoman(): self
    {
        return new self('I');
    }
}
