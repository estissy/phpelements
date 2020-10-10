<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class AutocapitalizeKeyword
 *
 * @package Elements\AttributeValue\Keyword
 */
class AutocapitalizeKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function off(): self
    {
        return new self('none');
    }

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
    public static function on(): self
    {
        return new self('sentences');
    }

    /**
     * @return self
     */
    public static function words(): self
    {
        return new self('words');
    }

    /**
     * @return self
     */
    public static function characters(): self
    {
        return new self('characters');
    }
}
