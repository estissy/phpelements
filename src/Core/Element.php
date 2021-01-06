<?php

declare(strict_types=1);

namespace Elements\Core;

use Elements\Utility\AttributeGenerator;

/**
 * @package Elements\Architecture
 */
abstract class Element extends HTMLNode
{
    /**
     * @param \Elements\Core\Node $node
     */
    public function appendNode(Node $node): void
    {
        parent::appendNode($node);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $result = [];
        $generatedChildNodes = array_map(static fn(Node $node): string => (string)$node, $this->getNodes());

        $nestedElementAttributes = AttributeGenerator::generate($this);

        if ($nestedElementAttributes !== '') {
            $result[] = sprintf('<%s %s>', $this->getTag(), $nestedElementAttributes);
            foreach ($generatedChildNodes as $generatedNode) {
                $result[] = $generatedNode;
            }
            $result[] = sprintf('</%s>', $this->getTag());

            return implode('', $result);
        }

        $result[] = sprintf('<%s>', $this->getTag());

        foreach ($generatedChildNodes as $generatedNode) {
            $result[] = $generatedNode;
        }

        $result[] = sprintf('</%s>', $this->getTag());

        return implode('', $result);
    }
}
