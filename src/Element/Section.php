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
 * Class Section
 *
 * @package Elements\Element
 */
class Section extends Element implements
    FlowContentInterface,
    PalpableContentInterface
{
    private const TAG = 'section';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
