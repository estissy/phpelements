<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class ButtonTypeKeyword
 *
 * @package Elements\Keyword
 */
class ButtonTypeKeyword extends AttributeValue
{
    public static function submit(): self
    {
        return new self('submit');
    }

    public static function reset(): self
    {
        return new self('reset');
    }

    public static function button(): self
    {
        return new self('button');
    }
}
