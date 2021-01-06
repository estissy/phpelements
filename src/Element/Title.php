<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\MetadataContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;
use Elements\Text;

/**
 * Class Title
 *
 * @package Elements\Element
 */
class Title extends Element implements MetadataContentInterface
{
    private const TAG = 'title';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
