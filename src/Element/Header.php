<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;
use Elements\Core\Node1;

/**
 * Class Header
 *
 * @package Elements\Element
 */
class Header extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'header';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
