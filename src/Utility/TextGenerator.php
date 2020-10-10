<?php

declare(strict_types=1);

namespace Elements\Utility;

/**
 * Class TextGenerator
 *
 * @package Elements\Utility
 */
class TextGenerator
{
    /**
     * @param string $text
     *
     * @return string
     */
    public static function generate(string $text): string
    {
        return sprintf('%s', $text);
    }
}
