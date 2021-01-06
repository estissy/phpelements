<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Main
 *
 * @package Elements\Element
 */
class Main extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'main';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
