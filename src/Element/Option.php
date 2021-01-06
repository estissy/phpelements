<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Core\Element;
use Elements\Exception\PropertyNotSetException;
use Elements\TextValue;

/**
 * Class Option
 *
 * @package Elements\Element
 */
class Option extends Element
{
    private const TAG = 'option';

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $disabled;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $label = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $selected;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $value = null;

    public function __construct(string $tag)
    {
        $this->disabled = BooleanAttribute::false();
        $this->selected = BooleanAttribute::false();

        parent::__construct($tag);
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getSelected(): BooleanAttribute
    {
        return $this->selected;
    }

    public function setSelected(): void
    {
        $this->selected = BooleanAttribute::true();
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
            throw new PropertyNotSetException('nameLabel');
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

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getValue(): TextValue
    {
        if (!$this->hasValue()) {
            throw new PropertyNotSetException('value');
        }

        return $this->value;
    }

    /**
     * @param \Elements\TextValue $value
     */
    public function setValue(TextValue $value): void
    {
        $this->value = $value;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->value
     */
    public function hasValue(): bool
    {
        return $this->value !== null;
    }
}
