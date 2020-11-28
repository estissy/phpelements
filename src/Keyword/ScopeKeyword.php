<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class ScopeKeyword
 *
 * @package Elements\Keyword
 */
class ScopeKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function row(): self
    {
        return new self('row');
    }

    /**
     * @return self
     */
    public static function col(): self
    {
        return new self('col');
    }

    /**
     * @return self
     */
    public static function rowGroup(): self
    {
        return new self('rowgroup');
    }

    /**
     * @return self
     */
    public static function colGroup(): self
    {
        return new self('colgroup');
    }

    /**
     * @return self
     */
    public static function auto(): self
    {
        return new self('auto');
    }
}
