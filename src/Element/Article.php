<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Core\Element;
use Elements\Core\Node;

/**
 * Class Article
 *
 * @package Elements\Element
 */
class Article extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'article';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }
}
