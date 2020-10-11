<?php

declare(strict_types=1);

namespace Elements;

use DomainException;
use Elements\Keyword\AutocapitalizeKeyword;
use Elements\Keyword\ContentEditableKeyword;
use Elements\Keyword\DirKeyword;
use Elements\Keyword\DraggableKeyword;
use Elements\Keyword\EnterKeyHintKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens;

/**
 * Class Element
 *
 * @package Elements
 */
abstract class Element extends Node
{
    /**
     * @var string
     */
    protected string $tag;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens
     */
    protected ?OrderedUniqueSpaceSeparatedTokens $accessKey = null;

    /**
     * @var null|\Elements\Keyword\AutocapitalizeKeyword
     */
    protected ?AutocapitalizeKeyword $autocapitalize = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    protected BooleanAttribute $autofocus;

    /**
     * @var null|\Elements\Keyword\ContentEditableKeyword
     */
    protected ?ContentEditableKeyword $contentEditable = null;

    /**
     * @var null|\Elements\Keyword\DirKeyword
     */
    protected ?DirKeyword $dir = null;

    /**
     * @var null|\Elements\Keyword\DraggableKeyword
     */
    protected ?DraggableKeyword $draggable = null;

    /**
     * @var null|\Elements\Keyword\EnterKeyHintKeyword
     */
    protected ?EnterKeyHintKeyword $enterKeyHint = null;

    /**
     * @param string $tag
     */
    public function __construct(string $tag)
    {
        $this->tag = $tag;

        $this->autofocus = BooleanAttribute::false();
    }

    /**
     * @return \Elements\Keyword\EnterKeyHintKeyword
     * @throws \DomainException
     */
    public function getEnterKeyHint(): EnterKeyHintKeyword
    {
        if (!$this->hasEnterKeyHint()) {
            throw new DomainException('Property enterkeyhint is not set.');
        }

        return $this->enterKeyHint;
    }

    /**
     * @param \Elements\Keyword\EnterKeyHintKeyword $enterKeyHint
     */
    public function setEnterKeyHint(EnterKeyHintKeyword $enterKeyHint): void
    {
        $this->enterKeyHint = $enterKeyHint;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->enterKeyHint
     */
    public function hasEnterKeyHint(): bool
    {
        return $this->enterKeyHint !== null;
    }

    /**
     * @return \Elements\Keyword\DraggableKeyword
     * @throws \DomainException
     */
    public function getDraggable(): DraggableKeyword
    {
        if (!$this->hasDraggable()) {
            throw new DomainException('Property draggable is not set.');
        }

        return $this->draggable;
    }

    /**
     * @param \Elements\Keyword\DraggableKeyword $draggable
     */
    public function setDraggable(DraggableKeyword $draggable): void
    {
        $this->draggable = $draggable;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->draggable
     */
    public function hasDraggable(): bool
    {
        return $this->draggable !== null;
    }

    /**
     * @return \Elements\Keyword\DirKeyword
     * @throws \DomainException
     */
    public function getDir(): DirKeyword
    {
        if (!$this->hasDir()) {
            throw new DomainException('Property dir is not set.');
        }

        return $this->dir;
    }

    /**
     * @param \Elements\Keyword\DirKeyword $dir
     */
    public function setDir(DirKeyword $dir): void
    {
        $this->dir = $dir;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->dir
     */
    public function hasDir(): bool
    {
        return $this->dir !== null;
    }

    /**
     * @return \Elements\Keyword\ContentEditableKeyword
     * @throws \DomainException
     */
    public function getContentEditable(): ContentEditableKeyword
    {
        if (!$this->hasContentEditable()) {
            throw new DomainException('Property contenteditable is not set.');
        }

        return $this->contentEditable;
    }

    /**
     * @param \Elements\Keyword\ContentEditableKeyword $contentEditable
     */
    public function setContentEditable(ContentEditableKeyword $contentEditable): void
    {
        $this->contentEditable = $contentEditable;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->contentEditable
     */
    public function hasContentEditable(): bool
    {
        return $this->contentEditable !== null;
    }

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens
     * @throws \DomainException
     */
    public function getAccessKey(): OrderedUniqueSpaceSeparatedTokens
    {
        if (!$this->hasAccessKey()) {
            throw new DomainException('Property accesskey is not set.');
        }

        return $this->accessKey;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens $accessKey
     */
    public function setAccessKey(
        OrderedUniqueSpaceSeparatedTokens $accessKey
    ): void {
        $this->accessKey = $accessKey;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->accessKey
     */
    public function hasAccessKey(): bool
    {
        return $this->accessKey !== null;
    }

    /**
     * @return \Elements\Keyword\AutocapitalizeKeyword
     * @throws \DomainException
     */
    public function getAutocapitalize(): AutocapitalizeKeyword
    {
        if (!$this->hasAutocapitalize()) {
            throw new DomainException('Property autocapitalize is not set.');
        }

        return $this->autocapitalize;
    }

    /**
     * @param \Elements\Keyword\AutocapitalizeKeyword $autocapitalize
     */
    public function setAutocapitalize(AutocapitalizeKeyword $autocapitalize): void
    {
        $this->autocapitalize = $autocapitalize;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->autocapitalize
     */
    public function hasAutocapitalize(): bool
    {
        return $this->autocapitalize !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getAutofocus(): BooleanAttribute
    {
        return $this->autofocus;
    }

    public function setAutofocus(): void
    {
        $this->autofocus = BooleanAttribute::true();
    }

    public function resetAutofocus(): void
    {
        $this->autofocus = BooleanAttribute::false();
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }
}
