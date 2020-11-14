<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\NestedElement;
use Elements\Node;

/**
 * Class Div
 *
 * @package Elements\Element
 */
class Div extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'div';

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
        if (!($node instanceof FlowContentInterface) && !($node instanceof Dl) && !($node instanceof Dt)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
