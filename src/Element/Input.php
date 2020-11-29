<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\EnctypeKeyword;
use Elements\Keyword\MethodKeyword;
use Elements\Keyword\TypeKeyword;
use Elements\Microsyntax\CommaSeparatedTokens;
use Elements\Number\IntegerValue;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;
use Elements\VoidElement;

/**
 * Class Input
 *
 * @package Elements\Element
 */
class Input extends VoidElement implements FlowContentInterface
{
    private const TAG = 'input';

    /**
     * @var null|\Elements\Microsyntax\CommaSeparatedTokens
     */
    private ?CommaSeparatedTokens $accept = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $alt = null;

    /**
     * TODO: Implement input autocomplete VO
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $autocomplete = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $checked;

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
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $formAction = null;

    /**
     * @var null|\Elements\Keyword\EnctypeKeyword
     */
    private ?EnctypeKeyword $formEnctype = null;

    /**
     * @var null|\Elements\Keyword\MethodKeyword
     */
    private ?MethodKeyword $formMethod = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $formNovalidate;

    /**
     * @var null|\Elements\Microsyntax\BrowserContextName|\Elements\Keyword\BrowserContextKeyword
     */
    private $formTarget;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $height = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $list = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $max = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $maxLength = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $min = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $minLength = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $multiple;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $name = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $pattern = null;

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
    private ?IntegerValue $size = null;

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $src = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $step = null;

    /**
     * @var null|\Elements\Keyword\TypeKeyword
     */
    private ?TypeKeyword $type = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $value = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $width = null;

    public function __construct(string $tag)
    {
        $this->checked = BooleanAttribute::false();
        $this->disabled = BooleanAttribute::false();
        $this->formNovalidate = BooleanAttribute::false();
        $this->multiple = BooleanAttribute::false();
        $this->readOnly = BooleanAttribute::false();
        $this->required = BooleanAttribute::false();

        parent::__construct($tag);
    }

    /**
     * @return \Elements\Microsyntax\CommaSeparatedTokens
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAccept(): CommaSeparatedTokens
    {
        if (!$this->hasAccept()) {
            throw new PropertyNotSetException('accept');
        }

        return $this->accept;
    }

    /**
     * @param \Elements\Microsyntax\CommaSeparatedTokens $accept
     */
    public function setAccept(CommaSeparatedTokens $accept): void
    {
        $this->accept = $accept;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->accept
     */
    public function hasAccept(): bool
    {
        return $this->accept !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAlt(): TextValue
    {
        if (!$this->hasAlt()) {
            throw new PropertyNotSetException('alt');
        }

        return $this->alt;
    }

    /**
     * @param \Elements\TextValue $alt
     */
    public function setAlt(TextValue $alt): void
    {
        $this->alt = $alt;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->alt
     */
    public function hasAlt(): bool
    {
        return $this->alt !== null;
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
     * @return \Elements\BooleanAttribute
     */
    public function getChecked(): BooleanAttribute
    {
        return $this->checked;
    }

    public function setChecked(): void
    {
        $this->checked = BooleanAttribute::true();
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
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getFormAction(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasFormAction()) {
            throw new PropertyNotSetException('formaction');
        }

        return $this->formAction;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $formAction
     */
    public function setFormAction(UrlPotentiallySurroundedBySpaces $formAction): void
    {
        $this->formAction = $formAction;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->formAction
     */
    public function hasFormAction(): bool
    {
        return $this->formAction !== null;
    }

    /**
     * @return \Elements\Keyword\EnctypeKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getFormEnctype(): EnctypeKeyword
    {
        if (!$this->hasFormEnctype()) {
            throw new PropertyNotSetException('formenctype');
        }

        return $this->formEnctype;
    }

    /**
     * @param \Elements\Keyword\EnctypeKeyword $formEnctype
     */
    public function setFormEnctype(EnctypeKeyword $formEnctype): void
    {
        $this->formEnctype = $formEnctype;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->formEnctype
     */
    public function hasFormEnctype(): bool
    {
        return $this->formEnctype !== null;
    }

    /**
     * @return \Elements\Keyword\MethodKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getFormMethod(): MethodKeyword
    {
        if (!$this->hasFormMethod()) {
            throw new PropertyNotSetException('formmethod');
        }

        return $this->formMethod;
    }

    /**
     * @param \Elements\Keyword\MethodKeyword $formMethod
     */
    public function setFormMethod(MethodKeyword $formMethod): void
    {
        $this->formMethod = $formMethod;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->formMethod
     */
    public function hasFormMethod(): bool
    {
        return $this->formMethod !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getFormNovalidate(): BooleanAttribute
    {
        return $this->formNovalidate;
    }

    public function setFormNovalidate(): void
    {
        $this->formNovalidate = BooleanAttribute::true();
    }

    /**
     * @return \Elements\Keyword\BrowserContextKeyword|\Elements\Microsyntax\BrowserContextName
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getFormTarget()
    {
        if (!$this->hasFormTarget()) {
            throw new PropertyNotSetException('formtarget');
        }

        return $this->formTarget;
    }

    /**
     * @param \Elements\Keyword\BrowserContextKeyword|\Elements\Microsyntax\BrowserContextName $formTarget
     */
    public function setFormTarget($formTarget): void
    {
        $this->formTarget = $formTarget;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->formTarget
     */
    public function hasFormTarget(): bool
    {
        return $this->formTarget !== null;
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getHeight(): IntegerValue
    {
        if (!$this->hasHeight()) {
            throw new PropertyNotSetException('height');
        }

        return $this->height;
    }

    /**
     * @param \Elements\Number\IntegerValue $height
     */
    public function setHeight(IntegerValue $height): void
    {
        $this->height = $height;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->height
     */
    public function hasHeight(): bool
    {
        return $this->height !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getList(): TextValue
    {
        if (!$this->hasList()) {
            throw new PropertyNotSetException('list');
        }

        return $this->list;
    }

    /**
     * @param \Elements\TextValue $list
     */
    public function setList(TextValue $list): void
    {
        $this->list = $list;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->list
     */
    public function hasList(): bool
    {
        return $this->list !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getMax(): TextValue
    {
        if (!$this->hasMax()) {
            throw new PropertyNotSetException('max');
        }

        return $this->max;
    }

    /**
     * @param \Elements\TextValue $max
     */
    public function setMax(TextValue $max): void
    {
        $this->max = $max;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->max
     */
    public function hasMax(): bool
    {
        return $this->max !== null;
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
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getMin(): TextValue
    {
        if (!$this->hasMin()) {
            throw new PropertyNotSetException('min');
        }

        return $this->min;
    }

    /**
     * @param \Elements\TextValue $min
     */
    public function setMin(TextValue $min): void
    {
        $this->min = $min;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->min
     */
    public function hasMin(): bool
    {
        return $this->min !== null;
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
     * @return \Elements\BooleanAttribute
     */
    public function getMultiple(): BooleanAttribute
    {
        return $this->multiple;
    }

    public function setMultiple(): void
    {
        $this->multiple = BooleanAttribute::true();
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
    public function getPattern(): TextValue
    {
        if (!$this->hasPattern()) {
            throw new PropertyNotSetException('pattern');
        }

        return $this->pattern;
    }

    /**
     * @param \Elements\TextValue $pattern
     */
    public function setPattern(TextValue $pattern): void
    {
        $this->pattern = $pattern;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->pattern
     */
    public function hasPattern(): bool
    {
        return $this->pattern !== null;
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

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getSrc(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasSrc()) {
            throw new PropertyNotSetException('src');
        }

        return $this->src;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $src
     */
    public function setSrc(UrlPotentiallySurroundedBySpaces $src): void
    {
        $this->src = $src;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->src
     */
    public function hasSrc(): bool
    {
        return $this->src !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getStep(): TextValue
    {
        if (!$this->hasStep()) {
            throw new PropertyNotSetException('step');
        }

        return $this->step;
    }

    /**
     * @param \Elements\TextValue $step
     */
    public function setStep(TextValue $step): void
    {
        $this->step = $step;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->step
     */
    public function hasStep(): bool
    {
        return $this->step !== null;
    }

    /**
     * @return \Elements\Keyword\TypeKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getType(): TypeKeyword
    {
        if (!$this->hasType()) {
            throw new PropertyNotSetException('type');
        }

        return $this->type;
    }

    /**
     * @param \Elements\Keyword\TypeKeyword $type
     */
    public function setType(TypeKeyword $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->type
     */
    public function hasType(): bool
    {
        return $this->type !== null;
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

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getWidth(): IntegerValue
    {
        if (!$this->hasWidth()) {
            throw new PropertyNotSetException('width');
        }

        return $this->width;
    }

    /**
     * @param \Elements\Number\IntegerValue $width
     */
    public function setWidth(IntegerValue $width): void
    {
        $this->width = $width;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->width
     */
    public function hasWidth(): bool
    {
        return $this->width !== null;
    }
}
