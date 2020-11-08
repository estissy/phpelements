<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\NestedElement;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class Html
 *
 * @package Elements\Element
 */
class Html extends NestedElement
{
    private const TAG = 'html';

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $manifest = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \DomainException
     */
    public function getManifest(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasManifest()) {
            throw new DomainException('Property manifest is not set.');
        }

        return $this->manifest;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $manifest
     */
    public function setManifest(UrlPotentiallySurroundedBySpaces $manifest): void
    {
        $this->manifest = $manifest;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->manifest
     */
    public function hasManifest(): bool
    {
        return $this->manifest !== null;
    }
}
