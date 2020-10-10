<?php

declare(strict_types=1);

namespace Elements;

use Elements\Keyword\AutocapitalizeKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens;
use Elements\Utility\AttributeGenerator;

/**
 * Class Element
 *
 * @package Elements
 */
abstract class Element extends Node
{
    /**
     * @var string
     */
    protected string $tag;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens
     */
    protected ?OrderedUniqueSpaceSeparatedTokens $accessKey = null;

    /**
     * @var null|\Elements\Keyword\AutocapitalizeKeyword
     */
    protected ?AutocapitalizeKeyword $autocapitalize = null;

    /**
     * @param string $tag
     */
    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @return bool
     */
    public function hasAccessKey(): bool
    {
        return $this->accessKey !== null;
    }

    /**
     * @return bool
     */
    public function hasAutocapitalize(): bool
    {
        return $this->autocapitalize !== null;
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function getAttributes(): string
    {
        return AttributeGenerator::generate($this);
    }
}
