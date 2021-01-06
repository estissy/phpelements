<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Dd
 *
 * @package Elements\Element
 */
class Dd extends Element
{
    private const TAG = 'dd';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
