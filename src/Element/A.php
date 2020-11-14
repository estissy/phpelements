<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\NestedElement;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class A
 *
 * @package Elements\Element
 */
class A extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'a';

    private UrlPotentiallySurroundedBySpaces $href;

    /**
     * @TODO Declare union types after switch to php 8
     * @var null|\Elements\Microsyntax\BrowserContextName|\Elements\Keyword\BrowserContextKeyword
     */
    private $target = null;

    private ?TextValue $download = null;

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $href
     */
    public function __construct(UrlPotentiallySurroundedBySpaces $href)
    {
        parent::__construct(self::TAG);

        $this->href = $href;
    }
}
