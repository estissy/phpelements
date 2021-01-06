<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Hgroup
 *
 * @package Elements\Element
 */
class Hgroup extends Element
{
    private const TAG = 'hgroup';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
