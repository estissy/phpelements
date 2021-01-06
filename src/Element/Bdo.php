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
 * Class Bdo
 *
 * @package Elements\Element
 */
class Bdo extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'bdo';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
