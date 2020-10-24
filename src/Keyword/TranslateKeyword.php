<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class TranslateKeyword
 *
 * @package Elements\Keyword
 */
class TranslateKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function yes(): self
    {
        return new self('yes');
    }

    /**
     * @return self
     */
    public static function no(): self
    {
        return new self('no');
    }

    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('');
    }
}
