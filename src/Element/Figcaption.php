<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Figcaption
 *
 * @package Elements\Element
 */
class Figcaption extends Element implements FlowContentInterface
{
    private const TAG = 'figcaption';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
