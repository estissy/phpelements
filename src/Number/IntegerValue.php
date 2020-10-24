<?php

declare(strict_types=1);

namespace Elements\Number;

use Elements\AttributeValue;

/**
 * Class IntegerValue
 *
 * @package Elements\Number
 */
class IntegerValue extends AttributeValue
{
    public function __construct(int $value)
    {
        parent::__construct((string)$value);
    }
}
