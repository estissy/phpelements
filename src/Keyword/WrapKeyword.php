<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class WrapKeyword
 *
 * @package Elements\Keyword
 */
class WrapKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function soft(): self
    {
        return new self('soft');
    }

    /**
     * @return self
     */
    public static function hard(): self
    {
        return new self('hard');
    }
}
