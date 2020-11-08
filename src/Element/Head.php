<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\MetadataContentInterface;
use Elements\NestedElement;
use Elements\Node;

/**
 * Class Head
 *
 * @package Elements\Element
 */
class Head extends NestedElement implements MetadataContentInterface
{
    private const TAG = 'head';

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
        if (!($node instanceof Title) && !($node instanceof Base)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
