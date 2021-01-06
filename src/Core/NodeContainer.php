<?php

declare(strict_types=1);

namespace Elements\Core;

/**
 * @package Elements\Architecture
 */
abstract class NodeContainer extends Node
{
    /**
     * @var \Elements\Core\Node[]
     */
    private array $nodes = [];

    /**
     * @return \Elements\Core\Node[]
     */
    protected function getNodes(): array
    {
        return $this->nodes;
    }

    /**
     * @param \Elements\Core\Node $node
     */
    protected function appendNode(Node $node): void
    {
        $this->nodes[] = $node;
    }
}
