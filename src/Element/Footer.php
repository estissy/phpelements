<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;

/**
 * Class Footer
 *
 * @package Elements\Element
 */
class Footer extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'footer';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
