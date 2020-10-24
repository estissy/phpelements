<?php

declare(strict_types=1);

namespace Elements\Url;

use DomainException;

/**
 * Class NonEmptyUrl
 *
 * @package Elements\Url
 */
class NonEmptyUrl extends Url
{
    /**
     * @param string $value
     *
     * @throws \DomainException
     */
    public function __construct(string $value)
    {
        if ($value === '') {
            throw new DomainException('Url can not be empty.');
        }

        parent::__construct($value);
    }
}
