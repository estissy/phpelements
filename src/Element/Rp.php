<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Core\Element;
use Elements\Core\Node;
use Elements\Text;

/**
 * Class Rp
 *
 * @package Elements\Element
 */
class Rp extends Element
{
    private const TAG = 'rp';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
