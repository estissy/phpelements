<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\SectioningContentInterface;
use Elements\NestedElement;
use Elements\Node;

/**
 * Class Article
 *
 * @package Elements\Element
 */
class Article extends NestedElement implements
    FlowContentInterface,
    SectioningContentInterface,
    PalpableContentInterface
{
    private const TAG = 'article';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @param \Elements\Node $node
     *
     * @throws \DomainException
     */
    public function appendNode(Node $node): void
    {
        if (!($node instanceof FlowContentInterface)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
