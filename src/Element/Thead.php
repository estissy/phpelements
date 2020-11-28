<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\NestedElement;

/**
 * Class Thead
 *
 * @package Elements\Element
 */
class Thead extends NestedElement
{
    private const TAG = 'thead';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
