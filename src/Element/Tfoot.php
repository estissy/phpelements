<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\NestedElement;

/**
 * Class Tfoot
 *
 * @package Elements\Element
 */
class Tfoot extends NestedElement
{
    private const TAG = 'tfoot';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
