<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\SectioningContentInterface;
use Elements\NestedElement;

/**
 * Class Body
 * TODO: Consider events handling for element.
 *
 * @package Elements\Element
 */
class Body extends NestedElement implements SectioningContentInterface
{
    private const TAG = 'body';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
