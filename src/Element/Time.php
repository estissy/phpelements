<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Core\Element;
use Elements\TextValue;

/**
 * Class Time
 *
 * @package Elements\Element
 */
class Time extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'time';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $dateTime = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
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
