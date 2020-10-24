<?php

declare(strict_types=1);

namespace Elements\Url;

/**
 * Class UrlPotentiallySurroundedBySpaces
 *
 * @package Elements\Url
 */
class UrlPotentiallySurroundedBySpaces extends Url
{
    /**
     * @param string $value
     *
     * @throws \DomainException
     */
    public function __construct(string $value)
    {
        $trimmed = trim($value);

        parent::__construct($trimmed);
    }
}
