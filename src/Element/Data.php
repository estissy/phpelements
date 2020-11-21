<?php

declare(strict_types=1);

namespace Elements\Element;

use DomainException;
use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Category\PhrasingContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\NestedElement;
use Elements\Node;
use Elements\TextValue;

/**
 * Class Data
 *
 * @package Elements\Element
 */
class Data extends NestedElement implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'data';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $value = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getValue(): TextValue
    {
        if (!$this->hasValue()) {
            throw new PropertyNotSetException('value');
        }

        return $this->value;
    }

    /**
     * @param \Elements\TextValue $value
     */
    public function setValue(TextValue $value): void
    {
        $this->value = $value;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->value
     */
    public function hasValue(): bool
    {
        return $this->value !== null;
    }

    /**
     * @param \Elements\Node $node
     *
     * @throws \DomainException
     */
    public function appendNode(Node $node): void
    {
        if (!($node instanceof PhrasingContentInterface)) {
            throw new DomainException('');
        }

        parent::appendNode($node);
    }
}
