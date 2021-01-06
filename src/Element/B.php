<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;

/**
 * Class B
 *
 * @package Elements\Element
 */
class B extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'b';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
