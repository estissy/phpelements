<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Core\Element;
use Elements\TextValue;

/**
 * Class Progress
 *
 * @package Elements\Element
 */
class Progress extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'progress';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $value = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $max = null;

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
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getMax(): TextValue
    {
        if (!$this->hasMax()) {
            throw new PropertyNotSetException('max');
        }

        return $this->max;
    }

    /**
     * @param \Elements\TextValue $max
     */
    public function setMax(TextValue $max): void
    {
        $this->max = $max;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->max
     */
    public function hasMax(): bool
    {
        return $this->max !== null;
    }
}
