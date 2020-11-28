<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class EnctypeKeyword
 *
 * @package Elements\Keyword
 */
class EnctypeKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function applicationXWwwFormUrlencoded(): self
    {
        return new self('application/x-www-form-urlencoded');
    }

    /**
     * @return self
     */
    public static function multipartFormData(): self
    {
        return new self('multipart/form-data');
    }

    /**
     * @return self
     */
    public static function textPlain(): self
    {
        return new self('text/plain');
    }
}
