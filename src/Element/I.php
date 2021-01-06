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
 * Class I
 *
 * @package Elements\Element
 */
class I extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'i';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
