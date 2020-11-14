<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\NestedElement;

/**
 * Class Menu
 *
 * @package Elements\Element
 */
class Menu extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'menu';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
