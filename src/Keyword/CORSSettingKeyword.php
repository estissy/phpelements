<?php

declare(strict_types=1);

namespace Elements\Keyword;

use Elements\AttributeValue;

/**
 * Class CORSSettingKeyword
 *
 * @package Elements\Keyword
 */
class CORSSettingKeyword extends AttributeValue
{
    /**
     * @return self
     */
    public static function anonymous(): self
    {
        return new self('anonymous');
    }

    /**
     * @return self
     */
    public function useCredentials(): self
    {
        return new self('use-credentials');
    }

    /**
     * @return self
     */
    public function empty(): self
    {
        return new self('anonymous');
    }
}
