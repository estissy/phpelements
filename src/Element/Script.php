<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\BooleanAttribute;
use Elements\Category\FlowContentInterface;
use Elements\Category\MetadataContentInterface;
use Elements\Category\ScriptSupportingElementInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\CORSSettingKeyword;
use Elements\Keyword\ReferencePolicyKeyword;
use Elements\Core\Element;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

/**
 * Class Script
 *
 * @package Elements\Element
 */
class Script extends Element implements
    MetadataContentInterface,
    FlowContentInterface,
    ScriptSupportingElementInterface
{
    private const TAG = 'script';

    /**
     * @var null|\Elements\Url\UrlPotentiallySurroundedBySpaces
     */
    private ?UrlPotentiallySurroundedBySpaces $src = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $type = null;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $noModule;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $async;

    /**
     * @var \Elements\BooleanAttribute
     */
    private BooleanAttribute $defer;

    /**
     * @var null|\Elements\Keyword\CORSSettingKeyword
     */
    private ?CORSSettingKeyword $crossorigin = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $integrity = null;

    /**
     * @var null|\Elements\Keyword\ReferencePolicyKeyword
     */
    private ?ReferencePolicyKeyword $referrerPolicy = null;

    public function __construct()
    {
        $this->noModule = BooleanAttribute::false();
        $this->async = BooleanAttribute::false();
        $this->defer = BooleanAttribute::false();

        parent::__construct(self::TAG);
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getType(): TextValue
    {
        if (!$this->hasType()) {
            throw new PropertyNotSetException('type');
        }

        return $this->type;
    }

    /**
     * @param \Elements\TextValue $type
     */
    public function setType(TextValue $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->type
     */
    public function hasType(): bool
    {
        return $this->type !== null;
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getNoModule(): BooleanAttribute
    {
        return $this->noModule;
    }

    public function setNoModule(): void
    {
        $this->noModule = BooleanAttribute::true();
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getAsync(): BooleanAttribute
    {
        return $this->async;
    }

    public function setAsync(): void
    {
        $this->async = BooleanAttribute::true();
    }

    /**
     * @return \Elements\BooleanAttribute
     */
    public function getDefer(): BooleanAttribute
    {
        return $this->defer;
    }

    public function setDefer(): void
    {
        $this->defer = BooleanAttribute::true();
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getIntegrity(): TextValue
    {
        if (!$this->hasIntegrity()) {
            throw new PropertyNotSetException('integrity');
        }

        return $this->integrity;
    }

    /**
     * @param \Elements\TextValue $integrity
     */
    public function setIntegrity(TextValue $integrity): void
    {
        $this->integrity = $integrity;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->integrity
     */
    public function hasIntegrity(): bool
    {
        return $this->integrity !== null;
    }

    /**
     * @return \Elements\Url\UrlPotentiallySurroundedBySpaces
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getSrc(): UrlPotentiallySurroundedBySpaces
    {
        if (!$this->hasSrc()) {
            throw new PropertyNotSetException('src');
        }

        return $this->src;
    }

    /**
     * @param \Elements\Url\UrlPotentiallySurroundedBySpaces $src
     */
    public function setSrc(UrlPotentiallySurroundedBySpaces $src): void
    {
        $this->src = $src;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->src
     */
    public function hasSrc(): bool
    {
        return $this->src !== null;
    }

    /**
     * @return \Elements\Keyword\CORSSettingKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getCrossorigin(): CORSSettingKeyword
    {
        if (!$this->hasCrossorigin()) {
            throw new PropertyNotSetException('crossorigin');
        }

        return $this->crossorigin;
    }

    /**
     * @param \Elements\Keyword\CORSSettingKeyword $crossorigin
     */
    public function setCrossorigin(CORSSettingKeyword $crossorigin): void
    {
        $this->crossorigin = $crossorigin;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->crossorigin
     */
    public function hasCrossorigin(): bool
    {
        return $this->crossorigin !== null;
    }

    /**
     * @return \Elements\Keyword\ReferencePolicyKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getReferrerPolicy(): ReferencePolicyKeyword
    {
        if (!$this->hasReferrerPolicy()) {
            throw new PropertyNotSetException('referrerpolicy');
        }

        return $this->referrerPolicy;
    }

    /**
     * @param \Elements\Keyword\ReferencePolicyKeyword $referrerPolicy
     */
    public function setReferrerPolicy(ReferencePolicyKeyword $referrerPolicy): void
    {
        $this->referrerPolicy = $referrerPolicy;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->referrerPolicy
     */
    public function hasReferrerPolicy(): bool
    {
        return $this->referrerPolicy !== null;
    }
}
