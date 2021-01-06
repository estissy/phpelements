<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\MetadataContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\CORSSettingKeyword;
use Elements\Keyword\DestinationKeyword;
use Elements\Keyword\LinkType;
use Elements\Keyword\ReferencePolicyKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;
use Elements\Core\VoidElement;

/**
 * Class Link
 *
 * @package Elements\Element
 */
class Link extends VoidElement implements MetadataContentInterface, FlowContentInterface
{
    private const TAG = 'link';

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $href = null;

    /**
     * @var null|\Elements\Keyword\CORSSettingKeyword
     */
    private ?CORSSettingKeyword $crossorigin = null;

    /**
     * @var null|\Elements\Keyword\LinkType
     */
    private ?LinkType $rel = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $media = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $integrity = null;

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
    private ?TextValue $mime = null;

    /**
     * @var null|\Elements\Keyword\ReferencePolicyKeyword
     */
    private ?ReferencePolicyKeyword $referrerPolicy = null;

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     */
    private ?UnorderedUniqueSpaceSeparatedTokens $sizes = null;

    /**
     * TODO: Create value object for image candidate string.
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $imageSrcSet = null;

    /**
     * TODO: Create value object for source size grammar.
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $imageSizes = null;

    /**
     * @var null|\Elements\Keyword\DestinationKeyword
     */
    private ?DestinationKeyword $as = null;

    /**
     * TODO: Create value object for valid css color
     *
     * @var null|\Elements\TextValue
     */
    private ?TextValue $color = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $disabled;

    public function __construct()
    {
        parent::__construct(self::TAG);

        $this->disabled = BooleanAttribute::false();
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getHref(): ?UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasHref()) {
            throw new PropertyNotSetException('href');
        }

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
     * @return bool
     * @psalm-assert-if-true !null $this->href
     */
    public function hasHref(): bool
    {
        return $this->href !== null;
    }

    /**
     * @return \Elements\Keyword\CORSSettingKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getCrossorigin(): CORSSettingKeyword
    {
        if (!$this->hasCrossorigin()) {
            throw new PropertyNotSetException('crossorigin');
        }

        return $this->crossorigin;
    }

    /**
     * @param \Elements\Keyword\CORSSettingKeyword $crossorigin
     */
    public function setCrossorigin(CORSSettingKeyword $crossorigin): void
    {
        $this->crossorigin = $crossorigin;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->crossorigin
     */
    public function hasCrossorigin(): bool
    {
        return $this->crossorigin !== null;
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
    public function getMedia(): TextValue
    {
        if (!$this->hasMedia()) {
            throw new PropertyNotSetException('media');
        }

        return $this->media;
    }

    /**
     * @param \Elements\TextValue $media
     */
    public function setMedia(TextValue $media): void
    {
        $this->media = $media;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->media
     */
    public function hasMedia(): bool
    {
        return $this->media !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getIntegrity(): TextValue
    {
        if (!$this->hasIntegrity()) {
            throw new PropertyNotSetException('integrity');
        }

        return $this->integrity;
    }

    /**
     * @param \Elements\TextValue $integrity
     */
    public function setIntegrity(TextValue $integrity): void
    {
        $this->integrity = $integrity;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->integrity
     */
    public function hasIntegrity(): bool
    {
        return $this->integrity !== null;
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
    public function getMime(): TextValue
    {
        if (!$this->hasMime()) {
            throw new PropertyNotSetException('mime');
        }

        return $this->mime;
    }

    /**
     * @param \Elements\TextValue $mime
     */
    public function setMime(TextValue $mime): void
    {
        $this->mime = $mime;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->mime
     */
    public function hasMime(): bool
    {
        return $this->mime !== null;
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

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getSizes(): UnorderedUniqueSpaceSeparatedTokens
    {
        if (!$this->hasSizes()) {
            throw new PropertyNotSetException('sizes');
        }

        return $this->sizes;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens $sizes
     */
    public function setSizes(UnorderedUniqueSpaceSeparatedTokens $sizes): void
    {
        $this->sizes = $sizes;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->sizes
     */
    public function hasSizes(): bool
    {
        return $this->sizes !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getImageSrcSet(): TextValue
    {
        if (!$this->hasImageSrcSet()) {
            throw new PropertyNotSetException('imagesrcset');
        }

        return $this->imageSrcSet;
    }

    /**
     * @param \Elements\TextValue $imageSrcSet
     */
    public function setImageSrcSet(TextValue $imageSrcSet): void
    {
        $this->imageSrcSet = $imageSrcSet;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->imageSrcSet
     */
    public function hasImageSrcSet(): bool
    {
        return $this->imageSrcSet !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getImageSizes(): TextValue
    {
        if (!$this->hasImageSizes()) {
            throw new PropertyNotSetException('imagesizes');
        }

        return $this->imageSizes;
    }

    /**
     * @param \Elements\TextValue $imageSizes
     */
    public function setImageSizes(TextValue $imageSizes): void
    {
        $this->imageSizes = $imageSizes;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->imageSizes
     */
    public function hasImageSizes(): bool
    {
        return $this->imageSizes !== null;
    }

    /**
     * @return \Elements\Keyword\DestinationKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getAs(): DestinationKeyword
    {
        if (!$this->hasAs()) {
            throw new PropertyNotSetException('as');
        }

        return $this->as;
    }

    /**
     * @param \Elements\Keyword\DestinationKeyword $as
     */
    public function setAs(DestinationKeyword $as): void
    {
        $this->as = $as;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->as
     */
    public function hasAs(): bool
    {
        return $this->as !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getColor(): TextValue
    {
        if (!$this->hasColor()) {
            throw new PropertyNotSetException('color');
        }

        return $this->color;
    }

    /**
     * @param \Elements\TextValue $color
     */
    public function setColor(TextValue $color): void
    {
        $this->color = $color;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->color
     */
    public function hasColor(): bool
    {
        return $this->color !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getDisabled(): BooleanAttribute
    {
        return $this->disabled;
    }

    /**
     * @param \Elements\BooleanAttribute $disabled
     */
    public function setDisabled(BooleanAttribute $disabled): void
    {
        $this->disabled = $disabled;
    }
}
