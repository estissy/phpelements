<?php

declare(strict_types=1);

namespace Elements;

use Elements\Utility\TextGenerator;

/**
 * Class Text
 *
 * @package Elements
 */
class Text extends Node
{
    /**
     * @var string
     */
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return TextGenerator::generate($this->text);
    }
}
