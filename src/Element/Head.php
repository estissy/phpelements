<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\MetadataContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Head
 *
 * @package Elements\Element
 */
class Head extends Element implements MetadataContentInterface
{
    private const TAG = 'head';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
