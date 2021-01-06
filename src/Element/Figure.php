<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Figure
 *
 * @package Elements\Element
 */
class Figure extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'figure';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
