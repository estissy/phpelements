<?php

declare(strict_types=1);

namespace Elements\Url;

use DomainException;
use Elements\AttributeValue;

use function is_bool;

/**
 * Class Url
 *
 * @package Elements\Url
 */
abstract class Url extends AttributeValue
{
    /**
     * @param string $value
     *
     * @throws \DomainException
     */
    public function __construct(string $value)
    {
        $filterResult = filter_var($value, FILTER_VALIDATE_URL);

        if (is_bool($filterResult)) {
            throw new DomainException('Provider url is invalid.');
        }

        parent::__construct($value);
    }
}
