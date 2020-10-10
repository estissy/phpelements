<?php

declare(strict_types=1);

namespace Elements;

use Elements\Utility\VoidElementGenerator;

/**
 * Class VoidElement
 *
 * @package Elements
 */
abstract class VoidElement extends Element
{
    /**
     * @return string
     * @throws \ReflectionException
     */
    public function __toString(): string
    {
        return VoidElementGenerator::generate($this);
    }
}
