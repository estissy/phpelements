<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class TypeKeyword
 *
 * @package Elements\Keyword
 */
class TypeKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function hidden(): self
    {
        return new self('hidden');
    }

    /**
     * @return self
     */
    public static function text(): self
    {
        return new self('text');
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
    public static function tel(): self
    {
        return new self('tel');
    }

    /**
     * @return self
     */
    public static function url(): self
    {
        return new self('url');
    }

    /**
     * @return self
     */
    public static function email(): self
    {
        return new self('email');
    }

    /**
     * @return self
     */
    public static function password(): self
    {
        return new self('password');
    }

    /**
     * @return self
     */
    public static function date(): self
    {
        return new self('date');
    }

    /**
     * @return self
     */
    public static function month(): self
    {
        return new self('month');
    }

    /**
     * @return self
     */
    public static function week(): self
    {
        return new self('week');
    }

    /**
     * @return self
     */
    public static function time(): self
    {
        return new self('time');
    }

    /**
     * @return self
     */
    public static function datetimeLocale(): self
    {
        return new self('datetime-locale');
    }

    /**
     * @return self
     */
    public static function number(): self
    {
        return new self('number');
    }

    /**
     * @return self
     */
    public static function range(): self
    {
        return new self('range');
    }

    /**
     * @return self
     */
    public static function color(): self
    {
        return new self('color');
    }

    /**
     * @return self
     */
    public static function checkbox(): self
    {
        return new self('checkbox');
    }

    /**
     * @return self
     */
    public static function radio(): self
    {
        return new self('radio');
    }

    /**
     * @return self
     */
    public static function file(): self
    {
        return new self('file');
    }

    /**
     * @return self
     */
    public static function submit(): self
    {
        return new self('submit');
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
    public static function reset(): self
    {
        return new self('reset');
    }

    /**
     * @return self
     */
    public static function button(): self
    {
        return new self('button');
    }
}
