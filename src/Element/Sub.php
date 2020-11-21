<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\NestedElement;

/**
 * Class Sub
 *
 * @package Elements\Element
 */
class Sub extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'sub';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
