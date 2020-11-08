<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class HttpEquivKeyword
 *
 * @package Elements\Keyword
 */
class HttpEquivKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function contentLanguage(): self
    {
        return new self('content-language');
    }

    /**
     * @return self
     */
    public static function contentType(): self
    {
        return new self('content-type');
    }

    /**
     * @return self
     */
    public static function defaultStyle(): self
    {
        return new self('default-style');
    }

    /**
     * @return self
     */
    public static function refresh(): self
    {
        return new self('refresh');
    }

    /**
     * @return self
     */
    public static function setCookie(): self
    {
        return new self('set-cookie');
    }

    /**
     * @return self
     */
    public static function xUaCompatible(): self
    {
        return new self('x-ua-compatible');
    }

    /**
     * @return self
     */
    public static function contentSecurityPolicy(): self
    {
        return new self('content-security-policy');
    }
}
