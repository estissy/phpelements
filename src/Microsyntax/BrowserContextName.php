<?php

declare(strict_types=1);

namespace Elements\Microsyntax;

use DomainException;
use Elements\AttributeValue;

/**
 * Class BrowserContextName
 *
 * @package Elements\Microsyntax
 */
class BrowserContextName extends AttributeValue
{
    /**
     * @param string $value
     *
     * @throws \DomainException
     */
    public function __construct(string $value)
    {
        if ($value === '') {
            throw new DomainException('');
        }

        if ($value[0] = '_') {
            throw new DomainException('');
        }

        parent::__construct($value);
    }
}
