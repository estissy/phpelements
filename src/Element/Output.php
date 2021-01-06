<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\FlowContentInterface;
use Elements\Category\PalpableContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens;
use Elements\Core\Element;
use Elements\TextValue;

/**
 * Class Output
 *
 * @package Elements\Element
 */
class Output extends Element implements FlowContentInterface, PalpableContentInterface
{
    private const TAG = 'output';

    /**
     * @var null|\Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     */
    private ?UnorderedUniqueSpaceSeparatedTokens $for = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $form = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $name = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getFor(): UnorderedUniqueSpaceSeparatedTokens
    {
        if (!$this->hasFor()) {
            throw new PropertyNotSetException('for');
        }

        return $this->for;
    }

    /**
     * @param \Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens $for
     */
    public function setFor(UnorderedUniqueSpaceSeparatedTokens $for): void
    {
        $this->for = $for;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->for
     */
    public function hasFor(): bool
    {
        return $this->for !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getForm(): TextValue
    {
        if (!$this->hasForm()) {
            throw new PropertyNotSetException('form');
        }

        return $this->form;
    }

    /**
     * @param \Elements\TextValue $form
     */
    public function setForm(TextValue $form): void
    {
        $this->form = $form;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->form
     */
    public function hasForm(): bool
    {
        return $this->form !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getName(): TextValue
    {
        if (!$this->hasName()) {
            throw new PropertyNotSetException('name');
        }

        return $this->name;
    }

    /**
     * @param \Elements\TextValue $name
     */
    public function setName(TextValue $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->name
     */
    public function hasName(): bool
    {
        return $this->name !== null;
    }
}
