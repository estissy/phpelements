<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class LanguageKeyword
 *
 * @package Elements\Keyword
 */
class LanguageKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function plPL(): self
    {
        return new self('pl-PL');
    }

    /**
     * @return self
     */
    public static function enUS(): self
    {
        return new self('en-US');
    }
}
