<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\AttributeValue;
use Elements\Category\MetadataContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\BrowserContextKeyword;
use Elements\Microsyntax\BrowserContextName;
use Elements\Url\UrlPotentiallySurroundedBySpaces;
use Elements\Core\VoidElement;

/**
 * Class Base
 *
 * @package Elements\Element
 */
class Base extends VoidElement implements MetadataContentInterface
{
    private const TAG = 'base';

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $href = null;

    /**
     * @TODO Declare union types after switch to php 8
     * @var null|BrowserContextKeyword|BrowserContextName
     */
    private $target;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getHref(): UrlPotentiallySurroundedBySpaces
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
        return $this->href === null;
    }

    /**
     * @return \Elements\Keyword\BrowserContextKeyword|\Elements\Microsyntax\BrowserContextName
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getTarget(): AttributeValue
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
}
