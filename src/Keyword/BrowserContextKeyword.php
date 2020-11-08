<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class BrowserContextKeyword
 *
 * @package Elements\Keyword
 */
class BrowserContextKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function blank(): self
    {
        return new self('_blank');
    }

    /**
     * @return self
     */
    public static function self(): self
    {
        return new self('_self');
    }

    /**
     * @return self
     */
    public static function parent(): self
    {
        return new self('_parent');
    }

    /**
     * @return self
     */
    public static function top(): self
    {
        return new self('_top');
    }
}
