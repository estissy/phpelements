<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\HeadingContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class H3
 *
 * @package Elements\Element
 */
class H3 extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'h3';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
