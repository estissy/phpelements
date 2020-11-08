<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class DestinationKeyword
 *
 * @package Elements\Keyword
 */
class DestinationKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function audio(): self
    {
        return new self('audio');
    }

    /**
     * @return self
     */
    public static function audioworklet(): self
    {
        return new self('audioworklet');
    }

    /**
     * @return self
     */
    public static function document(): self
    {
        return new self('document');
    }

    /**
     * @return self
     */
    public static function embed(): self
    {
        return new self('embed');
    }

    /**
     * @return self
     */
    public static function font(): self
    {
        return new self('font');
    }

    /**
     * @return self
     */
    public static function frame(): self
    {
        return new self('frame');
    }

    /**
     * @return self
     */
    public static function iFrame(): self
    {
        return new self('iframe');
    }

    /**
     * @return self
     */
    public static function image(): self
    {
        return new self('image');
    }

    /**
     * @return self
     */
    public static function manifest(): self
    {
        return new self('manifest');
    }

    /**
     * @return self
     */
    public static function object(): self
    {
        return new self('object');
    }

    /**
     * @return self
     */
    public static function paintworklet(): self
    {
        return new self('paintworklet');
    }

    /**
     * @return self
     */
    public static function report(): self
    {
        return new self('report');
    }

    /**
     * @return self
     */
    public static function script(): self
    {
        return new self('script');
    }

    /**
     * @return self
     */
    public static function serviceWorker(): self
    {
        return new self('serviceworker');
    }

    /**
     * @return self
     */
    public static function sharedWorker(): self
    {
        return new self('sharedworker');
    }

    /**
     * @return self
     */
    public static function style(): self
    {
        return new self('style');
    }

    /**
     * @return self
     */
    public static function track(): self
    {
        return new self('track');
    }

    /**
     * @return self
     */
    public static function video(): self
    {
        return new self('video');
    }

    /**
     * @return self
     */
    public static function worker(): self
    {
        return new self('worker');
    }

    /**
     * @return self
     */
    public static function xstl(): self
    {
        return new self('xstl');
    }

    /**
     * @return self
     */
    public static function fetch(): self
    {
        return new self('');
    }

    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('');
    }
}
