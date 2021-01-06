<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Address
 *
 * @package Elements\Element
 */
class Address extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'address';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
