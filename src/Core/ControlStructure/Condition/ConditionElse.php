<?php

declare(strict_types=1);

namespace Elements\Core\ControlStructure\Condition;

use Elements\Core\Node;

/**
 * Class ConditionElse
 *
 * @package Elements\Core\ControlStructure\Condition
 */
class ConditionElse extends Node
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return '<?php else: ?>';
    }
}
