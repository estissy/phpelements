<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Core\Element;

/**
 * Class Picture
 *
 * @package Elements\Element
 */
class Picture extends Element implements FlowContentInterface
{
    private const TAG = 'picture';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
