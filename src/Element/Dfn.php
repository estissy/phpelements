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
 * Class Dfn
 *
 * @package Elements\Element
 */
class Dfn extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'dfn';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
