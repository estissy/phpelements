<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Core\Element;

class Tr extends Element
{
    private const TAG = 'tr';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
