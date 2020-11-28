<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class ImageDecodingHintKeyword
 *
 * @package Elements\Keyword
 */
class ImageDecodingHintKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function sync(): self
    {
        return new self('sync');
    }

    /**
     * @return self
     */
    public static function async(): self
    {
        return new self('async');
    }

    /**
     * @return self
     */
    public static function auto(): self
    {
        return new self('auto');
    }
}
