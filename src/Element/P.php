<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\NestedElement;
use Elements\Node;
use Elements\Text;

/**
 * Class P
 *
 * @package Elements\Element
 */
class P extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'p';

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
        if (!($node instanceof PhrasingContentInterface) && !($node instanceof Text)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
