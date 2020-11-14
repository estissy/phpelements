<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\VoidElement;

/**
 * Class Hr
 *
 * @package Elements\Element
 */
class Hr extends VoidElement implements FlowContentInterface
{
    public const TAG = 'hr';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
