<?php

declare(strict_types=1);

namespace Elements\Exception;

use Exception;
use Throwable;

/**
 * Class PropertyNotSetException
 *
 * @package Elements\Exception
 */
class PropertyNotSetException extends Exception
{
    /**
     * @param string          $propertyName
     * @param int             $code
     * @param null|\Throwable $previous
     */
    public function __construct(string $propertyName, int $code = 0, ?Throwable $previous = null)
    {
        $message = sprintf(
            'Getting value of the %1$s property failed. Property %1$s is not initialized or is null. Check if property is set before getting it\'s value.',
            $propertyName
        );

        parent::__construct($message, $code, $previous);
    }
}
