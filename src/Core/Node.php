<?php

declare(strict_types=1);

namespace Elements\Core;

/**
 * @package Elements\Architecture
 */
abstract class Node
{
    /**
     * @return string
     */
    abstract public function __toString(): string;
}
