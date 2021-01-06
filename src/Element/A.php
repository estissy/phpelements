<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\LinkType;
use Elements\Keyword\ReferencePolicyKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\SpaceSeparatedTokens;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class A
 *
 * @package Elements\Element
 */
class A extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'a';

    /**
     * @var \Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private UrlPotentiallySurroundedBySpaces $href;

    /**
     * @TODO Declare union types after switch to php 8
     * @var null|\Elements\Microsyntax\BrowserContextName|\Elements\Keyword\BrowserContextKeyword
     */
    private $target = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $download = null;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\SpaceSeparatedTokens
     */
    private ?SpaceSeparatedTokens $ping = null;

    /**
     * @var null|\Elements\Keyword\LinkType
     */
    private ?LinkType $rel = null;

    /**
     * TODO: Create value object for BCP 47 language tag.
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $hrefLang = null;

    /**
     * TODO: Create value object for mime types.
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $type = null;

    /**
     * @var null|\Elements\Keyword\ReferencePolicyKeyword
     */
    private ?ReferencePolicyKeyword $referrerPolicy = null;

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $href
     */
    public function __construct(UrlPotentiallySurroundedBySpaces $href)
    {
        parent::__construct(self::TAG);

        $this->href = $href;
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
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getDownload(): TextValue
    {
        if (!$this->hasDownload()) {
            throw new PropertyNotSetException('download');
        }

        return $this->download;
    }

    /**
     * @param \Elements\TextValue $download
     */
    public function setDownload(TextValue $download): void
    {
        $this->download = $download;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->download
     */
    public function hasDownload(): bool
    {
        return $this->download !== null;
    }

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\SpaceSeparatedTokens
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getPing(): SpaceSeparatedTokens
    {
        if (!$this->hasPing()) {
            throw new PropertyNotSetException('ping');
        }

        return $this->ping;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\SpaceSeparatedTokens $ping
     */
    public function setPing(SpaceSeparatedTokens $ping): void
    {
        $this->ping = $ping;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->ping
     */
    public function hasPing(): bool
    {
        return $this->ping !== null;
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    public function getHref(): UrlPotentiallySurroundedBySpaces
    {
        return $this->href;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $href
     */
    public function setHref(UrlPotentiallySurroundedBySpaces $href): void
    {
        $this->href = $href;
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

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getHrefLang(): TextValue
    {
        if (!$this->hasHrefLang()) {
            throw new PropertyNotSetException('hreflang');
        }

        return $this->hrefLang;
    }

    /**
     * @param \Elements\TextValue $hrefLang
     */
    public function setHrefLang(TextValue $hrefLang): void
    {
        $this->hrefLang = $hrefLang;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->hrefLang
     */
    public function hasHrefLang(): bool
    {
        return $this->hrefLang !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getType(): TextValue
    {
        if (!$this->hasType()) {
            throw new PropertyNotSetException('type');
        }

        return $this->type;
    }

    /**
     * @param \Elements\TextValue $type
     */
    public function setType(TextValue $type): void
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
     * @return \Elements\Keyword\ReferencePolicyKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getReferrerPolicy(): ReferencePolicyKeyword
    {
        if (!$this->hasReferrerPolicy()) {
            throw new PropertyNotSetException('referrerpolicy');
        }

        return $this->referrerPolicy;
    }

    /**
     * @param \Elements\Keyword\ReferencePolicyKeyword $referrerPolicy
     */
    public function setReferrerPolicy(ReferencePolicyKeyword $referrerPolicy): void
    {
        $this->referrerPolicy = $referrerPolicy;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->referrerPolicy
     */
    public function hasReferrerPolicy(): bool
    {
        return $this->referrerPolicy !== null;
    }
}
