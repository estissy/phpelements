<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Core\Element;

/**
 * Class Tfoot
 *
 * @package Elements\Element
 */
class Tfoot extends Element
{
    private const TAG = 'tfoot';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
