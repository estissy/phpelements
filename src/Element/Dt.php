<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Dt
 *
 * @package Elements\Element
 */
class Dt extends Element
{
    private const TAG = 'dt';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
