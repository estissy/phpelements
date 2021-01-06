<?php

declare(strict_types=1);

namespace Elements\Element;

use Elements\Category\MetadataContentInterface;
use Elements\Exception\PropertyNotSetException;
use Elements\Keyword\HttpEquivKeyword;
use Elements\TextValue;
use Elements\Core\VoidElement;

/**
 * Class Meta
 *
 * @package Elements\Element
 */
class Meta extends VoidElement implements MetadataContentInterface
{
    private const TAG = 'meta';

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $name = null;

    /**
     * @var null|\Elements\Keyword\HttpEquivKeyword
     */
    private ?HttpEquivKeyword $httpEquiv = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $content = null;

    /**
     * @var null|\Elements\TextValue
     */
    private ?TextValue $charset = null;

    public function __construct()
    {
        parent::__construct(self::TAG);
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

    /**
     * @return \Elements\Keyword\HttpEquivKeyword
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getHttpEquiv(): HttpEquivKeyword
    {
        if (!$this->hasHttpEquiv()) {
            throw new PropertyNotSetException('http-equiv');
        }

        return $this->httpEquiv;
    }

    /**
     * @param \Elements\Keyword\HttpEquivKeyword $httpEquiv
     */
    public function setHttpEquiv(HttpEquivKeyword $httpEquiv): void
    {
        $this->httpEquiv = $httpEquiv;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->httpEquiv
     */
    public function hasHttpEquiv(): bool
    {
        return $this->httpEquiv !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getContent(): TextValue
    {
        if (!$this->hasContent()) {
            throw new PropertyNotSetException('content');
        }

        return $this->content;
    }

    /**
     * @param \Elements\TextValue $content
     */
    public function setContent(TextValue $content): void
    {
        $this->content = $content;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->content
     */
    public function hasContent(): bool
    {
        return $this->content !== null;
    }

    /**
     * @return \Elements\TextValue
     * @throws \Elements\Exception\PropertyNotSetException
     */
    public function getCharset(): TextValue
    {
        if (!$this->hasCharset()) {
            throw new PropertyNotSetException('charset');
        }

        return $this->charset;
    }

    /**
     * @param \Elements\TextValue $charset
     */
    public function setCharset(TextValue $charset): void
    {
        $this->charset = $charset;
    }

    /**
     * @return bool
     * @psalm-assert-if-true !null $this->charset
     */
    public function hasCharset(): bool
    {
        return $this->charset !== null;
    }
}
