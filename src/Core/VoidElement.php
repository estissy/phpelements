<?php

declare(strict_types=1);

namespace Elements\Core;

use Elements\Utility\AttributeGenerator;

/**
 * @package Elements\Architecture
 */
abstract class VoidElement extends HTMLNode
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        $attributes = AttributeGenerator::generate($this);

        if ($attributes !== '') {
            return sprintf('<%s %s>', $this->getTag(), $attributes);
        }

        return sprintf('<%s>', $this->getTag());
    }
}
