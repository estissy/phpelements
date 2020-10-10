<?php

declare(strict_types=1);

namespace Elements;

/**
 * Class AttributeValue
 *
 * @package Elements
 */
abstract class AttributeValue
{
    /**
     * @var string
     */
    protected string $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
