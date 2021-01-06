<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Core\Element;

/**
 * Class Thead
 *
 * @package Elements\Element
 */
class Thead extends Element
{
    private const TAG = 'thead';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
