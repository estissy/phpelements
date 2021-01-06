<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Core\Element;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\Core\Node;

/**
 * Class Abbr
 *
 * @package Elements\Element
 */
class Abbr extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'abbr';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
