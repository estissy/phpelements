<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Core\Element;
use Elements\Core\Node;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class Q
 *
 * @package Elements\Element
 */
class Q extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'q';

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $cite = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getCite(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasCite()) {
            throw new PropertyNotSetException('cite');
        }

        return $this->cite;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $cite
     */
    public function setCite(UrlPotentiallySurroundedBySpaces $cite): void
    {
        $this->cite = $cite;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->cite
     */
    public function hasCite(): bool
    {
        return $this->cite !== null;
    }
}
