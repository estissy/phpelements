<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;

/**
 * Class Ul
 *
 * @package Elements\Element
 */
class Ul extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'ul';
}
