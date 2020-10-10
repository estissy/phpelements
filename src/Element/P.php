<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Keyword\AutocapitalizeKeyword;
use Elements\NestedElement;

/**
 * Class P
 *
 * @package Elements\Element
 */
class P extends NestedElement
{
    private const TAG = 'p';

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @param \Elements\Keyword\AutocapitalizeKeyword|null $autocapitalize
     */
    public function setAutocapitalize(?AutocapitalizeKeyword $autocapitalize): void
    {
        $this->autocapitalize = $autocapitalize;
    }
}
