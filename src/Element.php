<?php

declare(strict_types=1);

namespace Elements;

use DomainException;
use Elements\Keyword\AutocapitalizeKeyword;
use Elements\Keyword\ContentEditableKeyword;
use Elements\Keyword\CustomElementName;
use Elements\Keyword\DirKeyword;
use Elements\Keyword\DraggableKeyword;
use Elements\Keyword\EnterKeyHintKeyword;
use Elements\Keyword\InputModeKeyword;
use Elements\Keyword\LanguageKeyword;
use Elements\Keyword\SpellcheckKeyword;
use Elements\Keyword\TranslateKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens;
use Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens;
use Elements\Number\IntegerValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

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
     * @var \Elements\BooleanAttribute
     */
    protected BooleanAttribute $hidden;

    /**
     * @var null|\Elements\Keyword\InputModeKeyword
     */
    protected ?InputModeKeyword $inputMode = null;

    /**
     * @var null|\Elements\Keyword\CustomElementName
     */
    protected ?CustomElementName $is = null;

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    protected ?UrlPotentiallySurroundedBySpaces $itemId = null;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     */
    protected ?UnorderedUniqueSpaceSeparatedTokens $itemProp = null;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     */
    protected ?UnorderedUniqueSpaceSeparatedTokens $itemRef = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    protected BooleanAttribute $itemScope;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     */
    protected ?UnorderedUniqueSpaceSeparatedTokens $itemType = null;

    /**
     * @var null|\Elements\Keyword\LanguageKeyword
     */
    protected ?LanguageKeyword $lang = null;

    /**
     * @var null|\Elements\TextValue
     * @TODO: Implement this
     */
    protected ?TextValue $nonce = null;

    /**
     * @var null|\Elements\Keyword\SpellcheckKeyword
     */
    protected ?SpellcheckKeyword $spellcheck = null;

    /**
     * @var null|\Elements\TextValue
     * @TODO: Implement this
     */
    protected ?TextValue $style = null;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    protected ?IntegerValue $tabIndex = null;

    /**
     * The title attribute represents advisory information for the element, such as would be appropriate for a tooltip.
     * On a link, this could be the title or a description of the target resource; on an image, it could be the image
     * credit or a description of the image; on a paragraph, it could be a footnote or commentary on the text; on a
     * citation, it could be further information about the source; on interactive content, it could be a label for, or
     * instructions for, use of the element; and so forth. The value is text.
     *
     * @var null|\Elements\TextValue
     */
    protected ?TextValue $title = null;

    /**
     * @var null|\Elements\Keyword\TranslateKeyword
     */
    protected ?TranslateKeyword $translate = null;

    /**
     * @param string $tag
     */
    public function __construct(string $tag)
    {
        $this->tag = $tag;

        $this->autofocus = BooleanAttribute::false();
        $this->hidden = BooleanAttribute::false();
        $this->itemScope = BooleanAttribute::false();
    }

    /**
     * @return \Elements\Keyword\TranslateKeyword
     * @throws \DomainException
     */
    public function getTranslate(): TranslateKeyword
    {
        if (!$this->hasTranslate()) {
            throw new DomainException('Property translate is not set.');
        }

        return $this->translate;
    }

    /**
     * @param \Elements\Keyword\TranslateKeyword $translate
     */
    public function setTranslate(TranslateKeyword $translate): void
    {
        $this->translate = $translate;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->translate
     */
    public function hasTranslate(): bool
    {
        return $this->translate !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \DomainException
     */
    public function getTitle(): TextValue
    {
        if (!$this->hasTitle()) {
            throw new DomainException('Property title is not set.');
        }

        return $this->title;
    }

    /**
     * @param \Elements\TextValue $title
     */
    public function setTitle(TextValue $title): void
    {
        $this->title = $title;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->title
     */
    public function hasTitle(): bool
    {
        return $this->title !== null;
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \DomainException
     */
    public function getTabIndex(): IntegerValue
    {
        if (!$this->hasTabIndex()) {
            throw new DomainException('Property tabindex is not set.');
        }

        return $this->tabIndex;
    }

    /**
     * @param \Elements\Number\IntegerValue $tabIndex
     */
    public function setTabIndex(IntegerValue $tabIndex): void
    {
        $this->tabIndex = $tabIndex;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->tabIndex
     */
    public function hasTabIndex(): bool
    {
        return $this->tabIndex !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \DomainException
     */
    public function getNonce(): TextValue
    {
        if (!$this->hasNonce()) {
            throw new DomainException('Property nonce is not set.');
        }

        return $this->nonce;
    }

    /**
     * @param \Elements\TextValue $nonce
     */
    public function setNonce(TextValue $nonce): void
    {
        $this->nonce = $nonce;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->nonce
     */
    public function hasNonce(): bool
    {
        return $this->nonce !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \DomainException
     */
    public function getStyle(): TextValue
    {
        if (!$this->hasStyle()) {
            throw new DomainException('Property style is not set.');
        }

        return $this->style;
    }

    /**
     * @param \Elements\TextValue $style
     */
    public function setStyle(TextValue $style): void
    {
        $this->style = $style;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->style
     */
    public function hasStyle(): bool
    {
        return $this->style !== null;
    }

    /**
     * @return \Elements\Keyword\LanguageKeyword
     * @throws \DomainException
     */
    public function getLang(): LanguageKeyword
    {
        if (!$this->hasLang()) {
            throw new DomainException('Property lang is not set.');
        }

        return $this->lang;
    }

    /**
     * @param \Elements\Keyword\LanguageKeyword $lang
     */
    public function setLang(LanguageKeyword $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->lang
     */
    public function hasLang(): bool
    {
        return $this->lang !== null;
    }

    /**
     * @return \Elements\Keyword\SpellcheckKeyword
     * @throws \DomainException
     */
    public function getSpellcheck(): SpellcheckKeyword
    {
        if (!$this->hasSpellcheck()) {
            throw new DomainException('Property spellcheck is not set.');
        }

        return $this->spellcheck;
    }

    /**
     * @param \Elements\Keyword\SpellcheckKeyword $spellcheck
     */
    public function setSpellcheck(SpellcheckKeyword $spellcheck): void
    {
        $this->spellcheck = $spellcheck;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->spellcheck
     */
    public function hasSpellcheck(): bool
    {
        return $this->spellcheck !== null;
    }

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     * @throws \DomainException
     */
    public function getItemType(): UnorderedUniqueSpaceSeparatedTokens
    {
        if (!$this->hasItemType()) {
            throw new DomainException('Property itemtype is not set.');
        }

        return $this->itemType;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens $itemType
     */
    public function setItemType(UnorderedUniqueSpaceSeparatedTokens $itemType): void
    {
        $this->itemType = $itemType;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->itemType
     */
    public function hasItemType(): bool
    {
        return $this->itemType !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getItemScope(): BooleanAttribute
    {
        return $this->itemScope;
    }

    public function setItemScope(): void
    {
        $this->itemScope = BooleanAttribute::true();
    }

    public function resetItemScope(): void
    {
        $this->itemScope = BooleanAttribute::false();
    }

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     * @throws \DomainException
     */
    public function getItemRef(): UnorderedUniqueSpaceSeparatedTokens
    {
        if (!$this->hasItemRef()) {
            throw new DomainException('Property itemref is not set.');
        }

        return $this->itemRef;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens $itemRef
     */
    public function setItemRef(UnorderedUniqueSpaceSeparatedTokens $itemRef): void
    {
        $this->itemRef = $itemRef;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->itemRef
     */
    public function hasItemRef(): bool
    {
        return $this->itemRef !== null;
    }

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     * @throws \DomainException
     */
    public function getItemProp(): UnorderedUniqueSpaceSeparatedTokens
    {
        if (!$this->hasItemProp()) {
            throw new DomainException('Property itemprop is not set.');
        }

        return $this->itemProp;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens $itemProp
     */
    public function setItemProp(UnorderedUniqueSpaceSeparatedTokens $itemProp): void
    {
        $this->itemProp = $itemProp;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->itemProp
     */
    public function hasItemProp(): bool
    {
        return $this->itemProp !== null;
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \DomainException
     */
    public function getItemId(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasItemId()) {
            throw new DomainException('Property itemid is not set.');
        }

        return $this->itemId;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $itemId
     */
    public function setItemId(UrlPotentiallySurroundedBySpaces $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->itemId
     */
    public function hasItemId(): bool
    {
        return $this->itemId !== null;
    }

    /**
     * @return \Elements\Keyword\CustomElementName
     * @throws \DomainException
     */
    public function getIs(): CustomElementName
    {
        if (!$this->is) {
            throw new DomainException('Property is is not set.');
        }

        return $this->is;
    }

    /**
     * @param \Elements\Keyword\CustomElementName $is
     */
    public function setIs(CustomElementName $is): void
    {
        $this->is = $is;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->is
     */
    public function hasIs(): bool
    {
        return $this->is !== null;
    }

    /**
     * @return \Elements\Keyword\InputModeKeyword
     * @throws \DomainException
     */
    public function getInputMode(): InputModeKeyword
    {
        if (!$this->hasInputMode()) {
            throw new DomainException('Property inputmode is not set.');
        }

        return $this->inputMode;
    }

    /**
     * @param \Elements\Keyword\InputModeKeyword $inputMode
     */
    public function setInputMode(InputModeKeyword $inputMode): void
    {
        $this->inputMode = $inputMode;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->inputMode
     */
    public function hasInputMode(): bool
    {
        return $this->inputMode !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getHidden(): BooleanAttribute
    {
        return $this->hidden;
    }

    public function setHidden(): void
    {
        $this->hidden = BooleanAttribute::true();
    }

    public function resetHidden(): void
    {
        $this->hidden = BooleanAttribute::false();
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
