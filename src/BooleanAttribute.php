<?php

declare(strict_types=1);

namespace Elements;

/**
 * Class BooleanAttribute
 *
 * @package Elements\Keyword
 */
class BooleanAttribute
{
    /**
     * @var bool
     */
    private bool $value;

    /**
     * @param bool $value
     */
    private function __construct(bool $value)
    {
        $this->value = $value;
    }

    public static function true(): self
    {
        return new self(true);
    }

    public static function false(): self
    {
        return new self(false);
    }

    /**
     * @param \Elements\BooleanAttribute $booleanAttribute
     *
     * @return bool
     */
    public function equal(BooleanAttribute $booleanAttribute): bool
    {
        return $this->value === $booleanAttribute->value;
    }
}
