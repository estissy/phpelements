<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\NestedElement;
use Elements\Node;

/**
 * Class Figure
 *
 * @package Elements\Element
 */
class Figure extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'figure';

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
}
