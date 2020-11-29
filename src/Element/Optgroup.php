<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Exception\PropertyNotSetException;
use Elements\NestedElement;
use Elements\TextValue;

/**
 * Class Optgroup
 *
 * @package Elements\Element
 */
class Optgroup extends NestedElement
{
    private const TAG = 'optgroup';

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $disabled;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $label = null;

    public function __construct()
    {
        $this->disabled = BooleanAttribute::false();

        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getDisabled(): BooleanAttribute
    {
        return $this->disabled;
    }

    public function setDisabled(): void
    {
        $this->disabled = BooleanAttribute::true();
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getLabel(): TextValue
    {
        if (!$this->hasLabel()) {
            throw new PropertyNotSetException('label');
        }

        return $this->label;
    }

    /**
     * @param \Elements\TextValue $label
     */
    public function setLabel(TextValue $label): void
    {
        $this->label = $label;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->label
     */
    public function hasLabel(): bool
    {
        return $this->label !== null;
    }
}
