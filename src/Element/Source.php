<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Exception\PropertyNotSetException;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;
use Elements\VoidElement;

/**
 * Class Source
 *
 * @package Elements\Element
 */
class Source extends VoidElement
{
    private const TAG = 'source';

    private ?UrlPotentiallySurroundedBySpaces $src = null;

    private ?TextValue $type = null;

    private ?TextValue $srcSet = null;

    private ?TextValue $sizes = null;

    private ?TextValue $media = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
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
}
