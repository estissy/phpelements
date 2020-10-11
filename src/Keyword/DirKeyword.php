<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class DirKeyword
 *
 * @package Elements\Keyword
 */
class DirKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function ltr(): self
    {
        return new self('ltr');
    }

    /**
     * @return self
     */
    public static function rtl(): self
    {
        return new self('rtl');
    }

    /**
     * @return self
     */
    public static function auto(): self
    {
        return new self('auto');
    }
}
