<?php

declare(strict_types=1);

namespace Elements;

use Elements\Category\FlowContentInterface;
use Elements\Category\PhrasingContentInterface;

/**
 * Class Node
 *
 * @package Elements
 */
abstract class Node implements PhrasingContentInterface, FlowContentInterface
{
    /**
     * @return string
     */
    abstract public function __toString(): string;
}
