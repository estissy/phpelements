<?php

declare(strict_types=1);

namespace Elements\Core\ControlStructure\Condition;

use Elements\Core\Node;
use Elements\Core\PHPNode;

/**
 * Class Condition
 *
 * @package Elements\Core\ControlStructure\Condition
 */
class Condition extends PHPNode
{
    /**
     * @var string[]
     */
    private array $expressions = [];

    /**
     * @param string $firstVariable
     * @param string $secondVariable
     *
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function checkIfVariablesStrictlyEqual(string $firstVariable, string $secondVariable): self
    {
        $this->expressions[] = sprintf('$%s === $%s', $firstVariable, $secondVariable);
        return $this;
    }

    /**
     * @param string $firstVariable
     * @param string $secondVariable
     *
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function checkIfVariablesEqual(string $firstVariable, string $secondVariable): self
    {
        $this->expressions[] = sprintf('$%s == $%s', $firstVariable, $secondVariable);
        return $this;
    }

    /**
     * @param string $firstVariable
     * @param string $secondVariable
     *
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function checkIfVariableIsGreaterThan(string $firstVariable, string $secondVariable): self
    {
        $this->expressions[] = sprintf('$%s > $%s', $firstVariable, $secondVariable);
        return $this;
    }

    /**
     * @param string $firstVariable
     * @param string $secondVariable
     *
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function checkIfVariableIsGreaterThanOrEqual(string $firstVariable, string $secondVariable): self
    {
        $this->expressions[] = sprintf('$%s >= $%s', $firstVariable, $secondVariable);
        return $this;
    }

    /**
     * @param string $firstVariable
     * @param string $secondVariable
     *
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function checkIfVariableIsLessThan(string $firstVariable, string $secondVariable): self
    {
        $this->expressions[] = sprintf('$%s < $%s', $firstVariable, $secondVariable);
        return $this;
    }

    /**
     * @param string $firstVariable
     * @param string $secondVariable
     *
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function checkIfVariableIsLessThanEqual(string $firstVariable, string $secondVariable): self
    {
        $this->expressions[] = sprintf('$%s <= $%s', $firstVariable, $secondVariable);
        return $this;
    }

    /**
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function and(): self
    {
        $this->expressions[] = '&&';
        return $this;
    }

    /**
     * @return \Elements\Core\ControlStructure\Condition\Condition
     */
    public function or(): self
    {
        $this->expressions[] = '||';
        return $this;
    }

    public function appendElse(): void
    {
        $this->appendNode(new ConditionElse());
    }

    public function appendNode(Node $node): void
    {
        parent::appendNode($node);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $result = [sprintf('<?php if(%s): ?>', implode(' ', $this->expressions))];

        foreach ($this->getNodes() as $node) {
            $result[] = (string)$node;
        }

        $result[] = '<?php endif; ?>';

        return implode('', $result);
    }
}
