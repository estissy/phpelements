<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\NestedElement;

/**
 * Class Tbody
 *
 * @package Elements\Element
 */
class Tbody extends NestedElement
{
    private const TAG = 'tbody';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
