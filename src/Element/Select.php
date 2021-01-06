<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Core\Element;
use Elements\Number\IntegerValue;
use Elements\TextValue;

class Select extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'select';

    /**
     * TODO: Implement input autocomplete VO
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $autocomplete = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $disabled;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $form = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $multiple;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $name = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $required;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $size = null;

    public function __construct()
    {
        $this->disabled = BooleanAttribute::false();
        $this->multiple = BooleanAttribute::false();
        $this->required = BooleanAttribute::false();

        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAutocomplete(): TextValue
    {
        if (!$this->hasAutocomplete()) {
            throw new PropertyNotSetException('autocomplete');
        }

        return $this->autocomplete;
    }

    /**
     * @param \Elements\TextValue $autocomplete
     */
    public function setAutocomplete(TextValue $autocomplete): void
    {
        $this->autocomplete = $autocomplete;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->autocomplete
     */
    public function hasAutocomplete(): bool
    {
        return $this->autocomplete !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getForm(): TextValue
    {
        if (!$this->hasForm()) {
            throw new PropertyNotSetException('form');
        }

        return $this->form;
    }

    /**
     * @param \Elements\TextValue $form
     */
    public function setForm(TextValue $form): void
    {
        $this->form = $form;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->form
     */
    public function hasForm(): bool
    {
        return $this->form !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getName(): TextValue
    {
        if (!$this->hasName()) {
            throw new PropertyNotSetException('name');
        }

        return $this->name;
    }

    /**
     * @param \Elements\TextValue $name
     */
    public function setName(TextValue $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->name
     */
    public function hasName(): bool
    {
        return $this->name !== null;
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getSize(): IntegerValue
    {
        if (!$this->hasSize()) {
            throw new PropertyNotSetException('size');
        }

        return $this->size;
    }

    /**
     * @param \Elements\Number\IntegerValue $size
     */
    public function setSize(IntegerValue $size): void
    {
        $this->size = $size;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->size
     */
    public function hasSize(): bool
    {
        return $this->size !== null;
    }
}
