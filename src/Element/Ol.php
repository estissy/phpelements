<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\ListTypeKeyword;
use Elements\Core\Element;
use Elements\Number\IntegerValue;

/**
 * Class Ol
 *
 * @package Elements\Element
 */
class Ol extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'ol';

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $reversed;

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $start = null;

    /**
     * @var null|\Elements\Keyword\ListTypeKeyword
     */
    private ?ListTypeKeyword $type = null;

    public function __construct()
    {
        $this->reversed = BooleanAttribute::false();

        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getReversed(): BooleanAttribute
    {
        return $this->reversed;
    }

    public function setReversed(): void
    {
        $this->reversed = BooleanAttribute::true();
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getStart(): IntegerValue
    {
        if (!$this->hasStart()) {
            throw new PropertyNotSetException('start');
        }

        return $this->start;
    }

    /**
     * @param \Elements\Number\IntegerValue $start
     */
    public function setStart(IntegerValue $start): void
    {
        $this->start = $start;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->start
     */
    public function hasStart(): bool
    {
        return $this->start !== null;
    }

    /**
     * @return \Elements\Keyword\ListTypeKeyword
     * @throws \DomainException
     */
    public function getType(): ListTypeKeyword
    {
        if (!$this->hasType()) {
            throw new DomainException('type');
        }

        return $this->type;
    }

    /**
     * @param \Elements\Keyword\ListTypeKeyword $type
     */
    public function setType(ListTypeKeyword $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->type
     */
    public function hasType(): bool
    {
        return $this->type !== null;
    }
}
