<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\HeadingContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\NestedElement;
use Elements\Node;

/**
 * Class H4
 *
 * @package Elements\Element
 */
class H4 extends NestedElement implements FlowContentInterface, HeadingContentInterface, PalpableContentInterface
{
    private const TAG = 'h4';

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
        if (!($node instanceof PhrasingContentInterface)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
