<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\AutocompleteKeyword;
use Elements\Keyword\EnctypeKeyword;
use Elements\Keyword\LinkType;
use Elements\Keyword\MethodKeyword;
use Elements\NestedElement;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class Form
 *
 * @package Elements\Element
 */
class Form extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'form';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $acceptCharset = null;

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $action = null;

    /**
     * @var null|\Elements\Keyword\AutocompleteKeyword
     */
    private ?AutocompleteKeyword $autocomplete = null;

    /**
     * @var null|\Elements\Keyword\EnctypeKeyword
     */
    private ?EnctypeKeyword $enctype = null;

    /**
     * @var null|\Elements\Keyword\MethodKeyword
     */
    private ?MethodKeyword $method = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $name = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $novalidate;

    /**
     * @var null|\Elements\Microsyntax\BrowserContextName|\Elements\Keyword\BrowserContextKeyword
     */
    private $target = null;

    /**
     * @var null|\Elements\Keyword\LinkType
     */
    private ?LinkType $rel = null;

    public function __construct()
    {
        $this->novalidate = BooleanAttribute::false();

        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAcceptCharset(): TextValue
    {
        if (!$this->hasAcceptCharset()) {
            throw new PropertyNotSetException('accept-charset');
        }

        return $this->acceptCharset;
    }

    /**
     * @param \Elements\TextValue $acceptCharset
     */
    public function setAcceptCharset(TextValue $acceptCharset): void
    {
        $this->acceptCharset = $acceptCharset;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->acceptCharset
     */
    public function hasAcceptCharset(): bool
    {
        return $this->acceptCharset !== null;
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAction(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasAction()) {
            throw new PropertyNotSetException('action');
        }

        return $this->action;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $action
     */
    public function setAction(UrlPotentiallySurroundedBySpaces $action): void
    {
        $this->action = $action;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->action
     */
    public function hasAction(): bool
    {
        return $this->action !== null;
    }

    /**
     * @return \Elements\Keyword\AutocompleteKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAutocomplete(): AutocompleteKeyword
    {
        if (!$this->hasAutocomplete()) {
            throw new PropertyNotSetException('autocomplete');
        }

        return $this->autocomplete;
    }

    /**
     * @param \Elements\Keyword\AutocompleteKeyword $autocomplete
     */
    public function setAutocomplete(AutocompleteKeyword $autocomplete): void
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
     * @return \Elements\Keyword\EnctypeKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getEnctype(): EnctypeKeyword
    {
        if (!$this->hasEnctype()) {
            throw new PropertyNotSetException('enctype');
        }

        return $this->enctype;
    }

    /**
     * @param \Elements\Keyword\EnctypeKeyword $enctype
     */
    public function setEnctype(EnctypeKeyword $enctype): void
    {
        $this->enctype = $enctype;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->enctype
     */
    public function hasEnctype(): bool
    {
        return $this->enctype !== null;
    }

    /**
     * @return \Elements\Keyword\MethodKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getMethod(): MethodKeyword
    {
        if (!$this->hasMethod()) {
            throw new PropertyNotSetException('method');
        }

        return $this->method;
    }

    /**
     * @param \Elements\Keyword\MethodKeyword $method
     */
    public function setMethod(MethodKeyword $method): void
    {
        $this->method = $method;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->method
     */
    public function hasMethod(): bool
    {
        return $this->method !== null;
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
     * @return \Elements\BooleanAttribute
     */
    public function getNovalidate(): BooleanAttribute
    {
        return $this->novalidate;
    }

    public function setNovalidate(): void
    {
        $this->novalidate = BooleanAttribute::true();
    }

    /**
     * @return \Elements\Keyword\BrowserContextKeyword|\Elements\Microsyntax\BrowserContextName
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getTarget()
    {
        if (!$this->hasTarget()) {
            throw new PropertyNotSetException('target');
        }

        return $this->target;
    }

    /**
     * @param \Elements\Keyword\BrowserContextKeyword|\Elements\Microsyntax\BrowserContextName $target
     */
    public function setTarget($target): void
    {
        $this->target = $target;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->target
     */
    public function hasTarget(): bool
    {
        return $this->target !== null;
    }

    /**
     * @return \Elements\Keyword\LinkType
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getRel(): LinkType
    {
        if (!$this->hasRel()) {
            throw new PropertyNotSetException('rel');
        }

        return $this->rel;
    }

    /**
     * @param \Elements\Keyword\LinkType $rel
     */
    public function setRel(LinkType $rel): void
    {
        $this->rel = $rel;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->rel
     */
    public function hasRel(): bool
    {
        return $this->rel !== null;
    }
}
