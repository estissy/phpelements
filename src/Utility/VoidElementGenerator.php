<?php

declare(strict_types=1);

namespace Elements\Utility;

use Elements\VoidElement;

/**
 * Class VoidElementGenerator
 *
 * @package Elements\Utility
 */
class VoidElementGenerator
{
    /**
     * @param \Elements\VoidElement $voidElement
     *
     * @return string
     * @throws \ReflectionException
     */
    public static function generate(VoidElement $voidElement): string
    {
        $attributes = AttributeGenerator::generate($voidElement);

        if ($attributes !== '') {
            return sprintf('<%s %s>', $voidElement->getTag(), $attributes);
        }

        return sprintf('<%s>', $voidElement->getTag());
    }
}
