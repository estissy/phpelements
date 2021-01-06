<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;

/**
 * Class Menu
 *
 * @package Elements\Element
 */
class Menu extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'menu';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
