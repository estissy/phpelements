<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\ButtonTypeKeyword;
use Elements\Keyword\EnctypeKeyword;
use Elements\Keyword\MethodKeyword;
use Elements\NestedElement;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class Button
 *
 * @package Elements\Element
 */
class Button extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'button';

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
     * @var null|\Elements\TextValue
     */
    private ?TextValue $name = null;

    /**
     * @var null|\Elements\Keyword\ButtonTypeKeyword
     */
    private ?ButtonTypeKeyword $type = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $value = null;

    public function __construct()
    {
        $this->disabled = BooleanAttribute::false();
        $this->formNovalidate = BooleanAttribute::false();

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
     * @return \Elements\Keyword\ButtonTypeKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getType(): ButtonTypeKeyword
    {
        if (!$this->hasType()) {
            throw new PropertyNotSetException('type');
        }

        return $this->type;
    }

    /**
     * @param \Elements\Keyword\ButtonTypeKeyword $type
     */
    public function setType(ButtonTypeKeyword $type): void
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
