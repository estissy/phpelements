<?php

declare(strict_types=1);

namespace Elements\Exception;

use Exception;
use Throwable;

/**
 * Class NestedNodeException
 *
 * @package Elements\Exception
 */
class NestedNodeException extends Exception
{
    /**
     * @param                 $parentNode
     * @param                 $childNode
     * @param                 $allowedChildNodes
     * @param int             $code
     * @param null|\Throwable $previous
     */
    public function __construct(
        $parentNode,
        $childNode,
        $allowedChildNodes,
        $code = 0,
        Throwable $previous = null
    ) {
        $message = sprintf(
            'Nesting node %1$s in %2$s failed. Parent element %1$s does not support nesting this type of element. Allowed child elements are: %3$s',
            $parentNode,
            $childNode,
            implode(', ', $allowedChildNodes)
        );

        parent::__construct($message, $code, $previous);
    }
}
