<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\MetadataContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Core\Element;
use Elements\Core\Node;
use Elements\Text;
use Elements\TextValue;

/**
 * Class Style
 *
 * @package Elements\Element
 */
class Style extends Element implements MetadataContentInterface
{
    private const TAG = 'style';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $media = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
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
