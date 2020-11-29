<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\NestedElement;

/**
 * Class Datalist
 *
 * @package Elements\Element
 */
class Datalist extends NestedElement implements FlowContentInterface
{
    private const TAG = 'datalist';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
