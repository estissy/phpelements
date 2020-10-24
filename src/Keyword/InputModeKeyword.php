<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class InputModeKeyword
 *
 * @package Elements\Keyword
 */
class InputModeKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function none(): self
    {
        return new self('none');
    }

    /**
     * @return self
     */
    public static function text(): self
    {
        return new self('text');
    }

    /**
     * @return self
     */
    public static function tel(): self
    {
        return new self('tel');
    }

    /**
     * @return self
     */
    public static function url(): self
    {
        return new self('url');
    }

    /**
     * @return self
     */
    public static function email(): self
    {
        return new self('email');
    }

    /**
     * @return self
     */
    public static function numeric(): self
    {
        return new self('numeric');
    }

    /**
     * @return self
     */
    public static function decimal(): self
    {
        return new self('decimal');
    }

    /**
     * @return self
     */
    public static function search(): self
    {
        return new self('search');
    }
}
