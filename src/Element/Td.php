<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Exception\PropertyNotSetException;
use Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens;
use Elements\Core\Element;
use Elements\Number\IntegerValue;

/**
 * Class Td
 *
 * @package Elements\Element
 */
class Td extends Element
{
    private const TAG = 'td';

    private ?IntegerValue $colSpan = null;

    private ?IntegerValue $rowSpan = null;

    private ?UnorderedUniqueSpaceSeparatedTokens $headers = null;

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
}
