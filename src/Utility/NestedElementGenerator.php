<?php

declare(strict_types=1);

namespace Elements\Utility;

use Elements\NestedElement;
use Elements\Node;

/**
 * Class NestedElementGenerator
 *
 * @package Elements\Utility
 */
class NestedElementGenerator
{
    /**
     * @param \Elements\NestedElement $nestedElement
     *
     * @return string
     * @throws \ReflectionException
     */
    public static function generate(NestedElement $nestedElement): string
    {
        $result = [];
        $generatedNodes = array_map(static fn(Node $node): string => (string)$node, $nestedElement->getNodes());
        $nestedElementAttributes = AttributeGenerator::generate($nestedElement);

        if ($nestedElementAttributes !== '') {
            $result[] = sprintf('<%s %s>', $nestedElement->getTag(), $nestedElementAttributes);
            foreach ($generatedNodes as $generatedNode) {
                $result[] = $generatedNode;
            }
            $result[] = sprintf('</%s>', $nestedElement->getTag());

            return implode('', $result);
        }

        $result[] = sprintf('<%s>', $nestedElement->getTag());
        foreach ($generatedNodes as $generatedNode) {
            $result[] = $generatedNode;
        }
        $result[] = sprintf('</%s>', $nestedElement->getTag());

        return implode('', $result);
    }
}
