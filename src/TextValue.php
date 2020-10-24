<?php

declare(strict_types=1);

namespace Elements;

/**
 * Class TextValue
 *
 * @package Elements
 */
class TextValue extends AttributeValue
{
    /**
     * @param string $value
     *
     * @return self
     */
    public static function fromString(string $value): self
    {
        return new self($value);
    }
}
