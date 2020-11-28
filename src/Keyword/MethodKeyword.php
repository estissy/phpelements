<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class MethodKeyword
 *
 * @package Elements\Keyword
 */
class MethodKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function get(): self
    {
        return new self('get');
    }

    /**
     * @return self
     */
    public static function post(): self
    {
        return new self('post');
    }

    /**
     * @return self
     */
    public static function dialog(): self
    {
        return new self('dialog');
    }
}
