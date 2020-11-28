<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class LazyLoadingKeyword
 *
 * @package Elements\Keyword
 */
class LazyLoadingKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function lazy(): self
    {
        return new self('lazy');
    }

    /**
     * @return self
     */
    public static function eager(): self
    {
        return new self('eager');
    }
}
