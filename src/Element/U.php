<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\NestedElement;
use Elements\Node;

/**
 * Class U
 *
 * @package Elements\Element
 */
class U extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'u';

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