<?php

declare(strict_types=1);

namespace Elements\Core;

/**
 * @package Elements\Architecture
 */
class Text extends Node
{
    /**
     * @var string
     */
    public string $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}
