<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;

/**
 * Class Ruby
 *
 * @package Elements\Element
 */
class Ruby extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'ruby';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
