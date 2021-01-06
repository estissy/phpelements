<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\SectioningContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Nav
 *
 * @package Elements\Element
 */
class Nav extends Element implements
    FlowContentInterface,
    PalpableContentInterface
{
    private const TAG = 'nav';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
