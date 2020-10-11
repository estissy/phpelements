<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class EnterKeyHintKeyword
 *
 * @package Elements\Keyword
 */
class EnterKeyHintKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function enter(): self
    {
        return new self('enter');
    }

    /**
     * @return self
     */
    public static function done(): self
    {
        return new self('done');
    }

    /**
     * @return self
     */
    public static function go(): self
    {
        return new self('go');
    }

    /**
     * @return self
     */
    public static function next(): self
    {
        return new self('next');
    }

    /**
     * @return self
     */
    public static function previous(): self
    {
        return new self('previous');
    }

    /**
     * @return self
     */
    public static function search(): self
    {
        return new self('search');
    }

    /**
     * @return self
     */
    public static function send(): self
    {
        return new self('send');
    }
}
