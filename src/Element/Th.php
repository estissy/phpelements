<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\ScopeKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens;
use Elements\NestedElement;
use Elements\Number\IntegerValue;
use Elements\TextValue;

/**
 * Class Th
 *
 * @package Elements\Element
 */
class Th extends NestedElement
{
    private const TAG = 'th';

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $colSpan = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $rowSpan = null;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     */
    private ?UnorderedUniqueSpaceSeparatedTokens $headers = null;

    /**
     * @var null|\Elements\Keyword\ScopeKeyword
     */
    private ?ScopeKeyword $scope = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $abbr = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getColSpan(): IntegerValue
    {
        if (!$this->hasColSpan()) {
            throw new PropertyNotSetException('colspan');
        }

        return $this->colSpan;
    }

    /**
     * @param \Elements\Number\IntegerValue $colSpan
     */
    public function setColSpan(IntegerValue $colSpan): void
    {
        $this->colSpan = $colSpan;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->colSpan
     */
    public function hasColSpan(): bool
    {
        return $this->colSpan !== null;
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getRowSpan(): IntegerValue
    {
        if (!$this->hasRowSpan()) {
            throw new PropertyNotSetException('rowspan');
        }

        return $this->rowSpan;
    }

    /**
     * @param \Elements\Number\IntegerValue $rowSpan
     */
    public function setRowSpan(IntegerValue $rowSpan): void
    {
        $this->rowSpan = $rowSpan;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->rowSpan
     */
    public function hasRowSpan(): bool
    {
        return $this->rowSpan !== null;
    }

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getHeaders(): UnorderedUniqueSpaceSeparatedTokens
    {
        if (!$this->hasHeaders()) {
            throw new PropertyNotSetException('headers');
        }

        return $this->headers;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens $headers
     */
    public function setHeaders(UnorderedUniqueSpaceSeparatedTokens $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->headers
     */
    public function hasHeaders(): bool
    {
        return $this->headers !== null;
    }

    /**
     * @return \Elements\Keyword\ScopeKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getScope(): ScopeKeyword
    {
        if (!$this->hasScope()) {
            throw new PropertyNotSetException('scope');
        }

        return $this->scope;
    }

    /**
     * @param \Elements\Keyword\ScopeKeyword $scope
     */
    public function setScope(ScopeKeyword $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->scope
     */
    public function hasScope(): bool
    {
        return $this->scope !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAbbr(): TextValue
    {
        if (!$this->hasAbbr()) {
            throw new PropertyNotSetException('abbr');
        }

        return $this->abbr;
    }

    /**
     * @param \Elements\TextValue $abbr
     */
    public function setAbbr(TextValue $abbr): void
    {
        $this->abbr = $abbr;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->abbr
     */
    public function hasAbbr(): bool
    {
        return $this->abbr !== null;
    }
}
