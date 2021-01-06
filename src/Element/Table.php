<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;

/**
 * Class Table
 *
 * @package Elements\Element
 */
class Table extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'table';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
