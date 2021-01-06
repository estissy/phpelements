<?php

declare(strict_types=1);

namespace Elements\Core;

use function get_class;

abstract class Component
{
    /**
     * @return int
     */
    public function renderFormTemplate(): int
    {
        $component = get_class($this);
        $templateHash = sprintf('%s.php', hash('md5', $component));

        $data = $this->getData();

        return (static function () use ($data, $templateHash): int {
            extract($data, EXTR_SKIP);

            /** @psalm-suppress UnresolvableInclude */
            return require $templateHash;
        })();
    }

    /**
     * @return mixed[]
     */
    abstract public function getData(): array;
}
