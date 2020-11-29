<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\WrapKeyword;
use Elements\NestedElement;
use Elements\Number\IntegerValue;
use Elements\TextValue;

/**
 * Class Textarea
 *
 * @package Elements\Element
 */
class Textarea extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'textarea';

    /**
     * TODO: Implement input autocomplete VO
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $autocomplete = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $cols = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $dirName = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $disabled;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $form = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $maxLength = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $minLength = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $name = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $placeHolder = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $readOnly;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $required;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $rows = null;

    /**
     * @var null|\Elements\Keyword\WrapKeyword
     */
    private ?WrapKeyword $wrap = null;

    public function __construct()
    {
        $this->disabled = BooleanAttribute::false();
        $this->readOnly = BooleanAttribute::false();
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
    public function getDirName(): TextValue
    {
        if (!$this->hasDirName()) {
            throw new PropertyNotSetException('dirname');
        }

        return $this->dirName;
    }

    /**
     * @param \Elements\TextValue $dirName
     */
    public function setDirName(TextValue $dirName): void
    {
        $this->dirName = $dirName;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->dirName
     */
    public function hasDirName(): bool
    {
        return $this->dirName !== null;
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
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getMaxLength(): IntegerValue
    {
        if (!$this->hasMaxLength()) {
            throw new PropertyNotSetException('maxlength');
        }

        return $this->maxLength;
    }

    /**
     * @param \Elements\Number\IntegerValue $maxLength
     */
    public function setMaxLength(IntegerValue $maxLength): void
    {
        $this->maxLength = $maxLength;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->maxLength
     */
    public function hasMaxLength(): bool
    {
        return $this->maxLength !== null;
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getMinLength(): IntegerValue
    {
        if (!$this->hasMinLength()) {
            throw new PropertyNotSetException('minlength');
        }

        return $this->minLength;
    }

    /**
     * @param \Elements\Number\IntegerValue $minLength
     */
    public function setMinLength(IntegerValue $minLength): void
    {
        $this->minLength = $minLength;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->minLength
     */
    public function hasMinLength(): bool
    {
        return $this->minLength !== null;
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
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getPlaceHolder(): TextValue
    {
        if (!$this->hasPlaceHolder()) {
            throw new PropertyNotSetException('placeholder');
        }

        return $this->placeHolder;
    }

    /**
     * @param \Elements\TextValue $placeHolder
     */
    public function setPlaceHolder(TextValue $placeHolder): void
    {
        $this->placeHolder = $placeHolder;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->placeHolder
     */
    public function hasPlaceHolder(): bool
    {
        return $this->placeHolder !== null;
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getCols(): IntegerValue
    {
        if (!$this->hasCols()) {
            throw new PropertyNotSetException('cols');
        }

        return $this->cols;
    }

    /**
     * @param \Elements\Number\IntegerValue $cols
     */
    public function setCols(IntegerValue $cols): void
    {
        $this->cols = $cols;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->cols
     */
    public function hasCols(): bool
    {
        return $this->cols !== null;
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getRows(): IntegerValue
    {
        if (!$this->hasRows()) {
            throw new PropertyNotSetException('rows');
        }

        return $this->rows;
    }

    /**
     * @param \Elements\Number\IntegerValue $rows
     */
    public function setRows(IntegerValue $rows): void
    {
        $this->rows = $rows;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->rows
     */
    public function hasRows(): bool
    {
        return $this->rows !== null;
    }

    /**
     * @return \Elements\Keyword\WrapKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getWrap(): WrapKeyword
    {
        if (!$this->hasWrap()) {
            throw new PropertyNotSetException('wrap');
        }

        return $this->wrap;
    }

    /**
     * @param \Elements\Keyword\WrapKeyword $wrap
     */
    public function setWrap(WrapKeyword $wrap): void
    {
        $this->wrap = $wrap;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->wrap
     */
    public function hasWrap(): bool
    {
        return $this->wrap !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getReadOnly(): BooleanAttribute
    {
        return $this->readOnly;
    }

    public function setReadOnly(): void
    {
        $this->readOnly = BooleanAttribute::true();
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getRequired(): BooleanAttribute
    {
        return $this->required;
    }

    public function setRequired(): void
    {
        $this->required = BooleanAttribute::true();
    }
}
