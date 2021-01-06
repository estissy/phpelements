<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Core\Element;
use Elements\Core\Node;
use Elements\Number\IntegerValue;

/**
 * Class Li
 *
 * @package Elements\Element
 */
class Li extends Element
{
    private const TAG = 'li';

    /**
     * @var null|\Elements\Number\IntegerValue
     */
    private ?IntegerValue $value = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Number\IntegerValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getValue(): IntegerValue
    {
        if (!$this->hasValue()) {
            throw new PropertyNotSetException('value');
        }

        return $this->value;
    }

    /**
     * @param \Elements\Number\IntegerValue $value
     */
    public function setValue(IntegerValue $value): void
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
}
