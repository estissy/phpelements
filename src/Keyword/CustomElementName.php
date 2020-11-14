<?php

declare(strict_types=1);

namespace Elements\Keyword;

use DomainException;
use Elements\AttributeValue;

use function in_array;

/**
 * Class CustomElementName
 *
 * @package Elements\Keyword
 */
class CustomElementName extends AttributeValue
{
    protected const INVALID_NAMES = [
        'annotation-xml',
        'color-profile',
        'font-face',
        'font-face-src',
        'font-face-uri',
        'font-face-format',
        'font-face-name',
        'missing-glyph',
    ];

    /**
     * @param string $value
     *
     * @throws \DomainException
     */
    public function __construct(string $value)
    {
        if (in_array($value, self::INVALID_NAMES, true)) {
            throw new DomainException('Invalid custom element name.');
        }

        parent::__construct($value);
    }
}
