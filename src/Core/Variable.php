<?php

declare(strict_types=1);

namespace Elements\Core;

/**
 * @package Elements\Architecture
 */
class Variable extends Node
{
    /**
     * @var string
     */
    private string $value;

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
        return "<?php echo \${$this->value}; ?>";
    }
}
