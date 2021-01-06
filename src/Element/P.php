<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class P
 *
 * @package Elements\Element
 */
class P extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'p';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
