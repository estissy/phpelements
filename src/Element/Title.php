<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\MetadataContentInterface;
use Elements\NestedElement;
use Elements\Node;
use Elements\Text;

/**
 * Class Title
 *
 * @package Elements\Element
 */
class Title extends NestedElement implements MetadataContentInterface
{
    private const TAG = 'title';

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
        if (!($node instanceof Text)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
