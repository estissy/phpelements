<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class AutocompleteKeyword
 *
 * @package Elements\Keyword
 */
class AutocompleteKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function on(): self
    {
        return new self('on');
    }

    /**
     * @return self
     */
    public static function off(): self
    {
        return new self('off');
    }
}
