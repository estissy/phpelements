<?php

declare(strict_types=1);

namespace Elements;

/**
 * Class Node
 *
 * @package Elements
 */
abstract class Node
{
    /**
     * @return string
     */
    abstract public function __toString(): string;
}
