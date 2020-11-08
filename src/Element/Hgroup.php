<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\NestedElement;
use Elements\Node;

/**
 * Class Hgroup
 *
 * @package Elements\Element
 */
class Hgroup extends NestedElement
{
    private const TAG = 'hgroup';

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
        if (!($node instanceof H1) && !($node instanceof H2) && !($node instanceof H3) && !($node instanceof H4) && !($node instanceof H5) && !($node instanceof H6)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
