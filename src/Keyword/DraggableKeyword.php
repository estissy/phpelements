<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class DraggableKeyword
 *
 * @package Elements\Keyword
 */
class DraggableKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function true(): self
    {
        return new self('true');
    }

    /**
     * @return self
     */
    public static function false(): self
    {
        return new self('false');
    }
}
