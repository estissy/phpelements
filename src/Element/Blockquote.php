<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\SectioningContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\NestedElement;
use Elements\Node;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class Blockquote
 *
 * @package Elements\Element
 */
class Blockquote extends NestedElement implements
    FlowContentInterface,
    PalpableContentInterface
{
    private const TAG = 'blockquote';

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $cite = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @param \Elements\Node $node
     *
     * @throws \DomainException
     */
    public function appendNode(Node $node): void
    {
        if (!($node instanceof FlowContentInterface)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getCite(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasCite()) {
            throw new PropertyNotSetException('cite');
        }

        return $this->cite;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $cite
     */
    public function setCite(UrlPotentiallySurroundedBySpaces $cite): void
    {
        $this->cite = $cite;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->cite
     */
    public function hasCite(): bool
    {
        return $this->cite !== null;
    }
}