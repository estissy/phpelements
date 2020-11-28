<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\NestedElement;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class Del
 *
 * @package Elements\Element
 */
class Del extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'del';

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $cite = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $dateTime = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getCite(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasCite()) {
            throw new PropertyNotSetException('cite');
        }

        return $this->cite;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $cite
     */
    public function setCite(UrlPotentiallySurroundedBySpaces $cite): void
    {
        $this->cite = $cite;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->cite
     */
    public function hasCite(): bool
    {
        return $this->cite !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getDateTime(): TextValue
    {
        if (!$this->hasDateTime()) {
            throw new PropertyNotSetException('datetime');
        }

        return $this->dateTime;
    }

    /**
     * @param \Elements\TextValue $dateTime
     */
    public function setDateTime(TextValue $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->dateTime
     */
    public function hasDateTime(): bool
    {
        return $this->dateTime !== null;
    }
}
