<?php

declare(strict_types=1);

namespace Elements;

use Elements\Utility\NestedElementGenerator;

/**
 * Class NestedElement
 *
 * @package Elements
 */
abstract class NestedElement extends Element
{
    /**
     * @var \Elements\Node[]
     */
    private array $nodes = [];

    /**
     * @param \Elements\Node $node
     */
    public function appendNode(Node $node): void
    {
        $this->nodes[] = $node;
    }

    /**
     * @return bool
     */
    public function hasNodes(): bool
    {
        return !empty($this->nodes);
    }

    /**
     * @return \Elements\Node[]
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function __toString(): string
    {
        return NestedElementGenerator::generate($this);
    }
}
