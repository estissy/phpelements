<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Kdb
 *
 * @package Elements\Element
 */
class Kdb extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'kdb';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
