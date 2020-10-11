<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\NestedElement;

/**
 * Class P
 *
 * @package Elements\Element
 */
class P extends NestedElement
{
    private const TAG = 'p';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
