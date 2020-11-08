<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens;

/**
 * Class LinkType
 *
 * @package Elements\Keyword
 */
class LinkType extends UnorderedUniqueSpaceSeparatedTokens
{
    /**
     * @return self
     */
    public static function alternate(): self
    {
        return new self('alternate');
    }

    /**
     * @return self
     */
    public static function canonical(): self
    {
        return new self('canonical');
    }

    /**
     * @return self
     */
    public static function author(): self
    {
        return new self('author');
    }

    /**
     * @return self
     */
    public static function bookmark(): self
    {
        return new self('bookmark');
    }

    /**
     * @return self
     */
    public static function dnsPrefetch(): self
    {
        return new self('dns-prefetch');
    }

    /**
     * @return self
     */
    public static function external(): self
    {
        return new self('external');
    }

    /**
     * @return self
     */
    public static function help(): self
    {
        return new self('help');
    }

    /**
     * @return self
     */
    public static function icon(): self
    {
        return new self('icon');
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
    public static function modulePreload(): self
    {
        return new self('modulepreload');
    }

    /**
     * @return self
     */
    public static function licence(): self
    {
        return new self('licence');
    }

    /**
     * @return self
     */
    public static function next(): self
    {
        return new self('next');
    }

    /**
     * @return self
     */
    public static function noFollow(): self
    {
        return new self('noFollow');
    }

    /**
     * @return self
     */
    public static function noOpener(): self
    {
        return new self('noopener');
    }

    /**
     * @return self
     */
    public static function noReferrer(): self
    {
        return new self('noreferrer');
    }

    /**
     * @return self
     */
    public static function opener(): self
    {
        return new self('opener');
    }

    /**
     * @return self
     */
    public static function pingBack(): self
    {
        return new self('pingback');
    }

    /**
     * @return self
     */
    public static function preConnect(): self
    {
        return new self('preconnect');
    }

    /**
     * @return self
     */
    public static function preFetch(): self
    {
        return new self('prefetch');
    }

    /**
     * @return self
     */
    public static function preLoad(): self
    {
        return new self('preload');
    }

    /**
     * @return self
     */
    public static function preRender(): self
    {
        return new self('prerender');
    }

    /**
     * @return self
     */
    public static function prev(): self
    {
        return new self('prev');
    }

    /**
     * @return self
     */
    public static function search(): self
    {
        return new self('search');
    }

    /**
     * @return self
     */
    public static function stylesheet(): self
    {
        return new self('stylesheet');
    }

    /**
     * @return self
     */
    public static function tag(): self
    {
        return new self('tag');
    }
}
