<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class SpellcheckKeyword
 *
 * @package Elements\Keyword
 */
class SpellcheckKeyword extends AttributeValue
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

    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('');
    }
}
