<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Core\Element;
use Elements\TextValue;

/**
 * Class Label
 *
 * @package Elements\Element
 */
class Label extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'nameLabel';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $for = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getFor(): TextValue
    {
        if (!$this->hasFor()) {
            throw new PropertyNotSetException('for');
        }

        return $this->for;
    }

    /**
     * @param \Elements\TextValue $for
     */
    public function setFor(TextValue $for): void
    {
        $this->for = $for;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->for
     */
    public function hasFor(): bool
    {
        return $this->for !== null;
    }
}
