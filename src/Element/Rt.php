<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\PhrasingContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Rt
 *
 * @package Elements\Element
 */
class Rt extends Element
{
    private const TAG = 'rt';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
