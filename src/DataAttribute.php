<?php

declare(strict_types=1);

namespace Elements;

/**
 * Class DataAttribute
 *
 * @package Elements
 */
class DataAttribute
{
    /**
     * @var string
     */
    private string $suffix;

    /**
     * @var \Elements\TextValue
     */
    private TextValue $value;

    /**
     * @param string              $suffix
     * @param \Elements\TextValue $value
     */
    public function __construct(string $suffix, TextValue $value)
    {
        $this->suffix = $suffix;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getSuffix(): string
    {
        return 'data-' . $this->suffix;
    }

    /**
     * @return \Elements\TextValue
     */
    public function getValue(): TextValue
    {
        return $this->value;
    }
}
