<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\ImageDecodingHintKeyword;
use Elements\Keyword\LazyLoadingKeyword;
use Elements\Keyword\ReferencePolicyKeyword;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;
use Elements\Core\VoidElement;

/**
 * Class Img
 *
 * @package Elements\Element
 */
class Img extends VoidElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'img';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $alt = null;

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $src = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $srcSet = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $sizes = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $crossOrigin = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $useMap = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $isMap;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $width = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $height = null;

    /**
     * @var null|\Elements\Keyword\ImageDecodingHintKeyword
     */
    private ?ImageDecodingHintKeyword $decoding = null;

    /**
     * @var null|\Elements\Keyword\LazyLoadingKeyword
     */
    private ?LazyLoadingKeyword $loading = null;

    /**
     * @var null|\Elements\Keyword\ReferencePolicyKeyword
     */
    private ?ReferencePolicyKeyword $referrerPolicy = null;

    public function __construct()
    {
        parent::__construct(self::TAG);

        $this->isMap = BooleanAttribute::false();
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
    public function getSrcSet(): TextValue
    {
        if (!$this->hasSrcSet()) {
            throw new PropertyNotSetException('srcset');
        }

        return $this->srcSet;
    }

    /**
     * @param \Elements\TextValue $srcSet
     */
    public function setSrcSet(TextValue $srcSet): void
    {
        $this->srcSet = $srcSet;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->srcSet
     */
    public function hasSrcSet(): bool
    {
        return $this->srcSet !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getSizes(): TextValue
    {
        if (!$this->hasSizes()) {
            throw new PropertyNotSetException('sizes');
        }

        return $this->sizes;
    }

    /**
     * @param \Elements\TextValue $sizes
     */
    public function setSizes(TextValue $sizes): void
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
    public function getCrossOrigin(): TextValue
    {
        if (!$this->hasCrossOrigin()) {
            throw new PropertyNotSetException('crossorigin');
        }

        return $this->crossOrigin;
    }

    /**
     * @param \Elements\TextValue $crossOrigin
     */
    public function setCrossOrigin(TextValue $crossOrigin): void
    {
        $this->crossOrigin = $crossOrigin;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->crossOrigin
     */
    public function hasCrossOrigin(): bool
    {
        return $this->crossOrigin !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getUseMap(): TextValue
    {
        if (!$this->hasUseMap()) {
            throw new PropertyNotSetException('useMap');
        }

        return $this->useMap;
    }

    /**
     * @param \Elements\TextValue $useMap
     */
    public function setUseMap(TextValue $useMap): void
    {
        $this->useMap = $useMap;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->useMap
     */
    public function hasUseMap(): bool
    {
        return $this->useMap !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getIsMap(): BooleanAttribute
    {
        return $this->isMap;
    }

    public function setIsMap(): void
    {
        $this->isMap = BooleanAttribute::true();
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getWidth(): TextValue
    {
        if (!$this->hasWidth()) {
            throw new PropertyNotSetException('width');
        }

        return $this->width;
    }

    /**
     * @param \Elements\TextValue $width
     */
    public function setWidth(TextValue $width): void
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

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getHeight(): TextValue
    {
        if (!$this->hasHeight()) {
            throw new PropertyNotSetException('height');
        }

        return $this->height;
    }

    /**
     * @param \Elements\TextValue $height
     */
    public function setHeight(TextValue $height): void
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
     * @return \Elements\Keyword\ImageDecodingHintKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getDecoding(): ImageDecodingHintKeyword
    {
        if (!$this->hasDecoding()) {
            throw new PropertyNotSetException('decoding');
        }

        return $this->decoding;
    }

    /**
     * @param \Elements\Keyword\ImageDecodingHintKeyword $decoding
     */
    public function setDecoding(ImageDecodingHintKeyword $decoding): void
    {
        $this->decoding = $decoding;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->decoding
     */
    public function hasDecoding(): bool
    {
        return $this->decoding !== null;
    }

    /**
     * @return \Elements\Keyword\LazyLoadingKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getLoading(): LazyLoadingKeyword
    {
        if (!$this->hasLoading()) {
            throw new PropertyNotSetException('loading');
        }

        return $this->loading;
    }

    /**
     * @param \Elements\Keyword\LazyLoadingKeyword $loading
     */
    public function setLoading(LazyLoadingKeyword $loading): void
    {
        $this->loading = $loading;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->loading
     */
    public function hasLoading(): bool
    {
        return $this->loading !== null;
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
