<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Exception\PropertyNotSetException;
use Elements\Number\IntegerValue;
use Elements\Core\VoidElement;

/**
 * Class Col
 *
 * @package Elements\Element
 */
class Col extends VoidElement
{
    private const TAG = 'col';

    private ?IntegerValue $span = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getSpan(): IntegerValue
    {
        if (!$this->hasSpan()) {
            throw new PropertyNotSetException('span');
        }

        return $this->span;
    }

    /**
     * @param \Elements\Number\IntegerValue $span
     */
    public function setSpan(IntegerValue $span): void
    {
        $this->span = $span;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->span
     */
    public function hasSpan(): bool
    {
        return $this->span !== null;
    }
}
