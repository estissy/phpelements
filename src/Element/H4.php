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
 * Class H4
 *
 * @package Elements\Element
 */
class H4 extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'h4';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
