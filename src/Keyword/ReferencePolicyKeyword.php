<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class ReferencePolicyKeyword
 *
 * @package Elements\Keyword
 */
class ReferencePolicyKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function noReferrer(): self
    {
        return new self('no-referrer');
    }

    /**
     * @return self
     */
    public static function noReferrerWhenDowngrade(): self
    {
        return new self('no-referrer-when-downgrade');
    }

    /**
     * @return self
     */
    public static function sameOrigin(): self
    {
        return new self('same-origin');
    }

    /**
     * @return self
     */
    public static function origin(): self
    {
        return new self('origin');
    }

    /**
     * @return self
     */
    public static function strictOrigin(): self
    {
        return new self('strict-origin');
    }

    /**
     * @return self
     */
    public static function originWhenCrossOrigin(): self
    {
        return new self('origin-when-cross-origin');
    }

    /**
     * @return self
     */
    public static function strictOriginWhenCrossOrigin(): self
    {
        return new self('strict-origin-when-cross-origin');
    }

    /**
     * @return self
     */
    public static function unsafeUrl(): self
    {
        return new self('unsafe-url');
    }
}
