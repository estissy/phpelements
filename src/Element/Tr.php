<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\NestedElement;

/**
 * Class Tr
 *
 * @package Elements\Element
 */
class Tr extends NestedElement
{
    private const TAG = 'tr';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
