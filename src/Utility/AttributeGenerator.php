<?php

declare(strict_types=1);

namespace Elements\Utility;

use Elements\AttributeValue;
use Elements\Element;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;

/**
 * Class AttributeGenerator
 *
 * @package Elements\Utility
 */
class AttributeGenerator
{
    /**
     * @param \Elements\Element $tagElement
     *
     * @return string
     * @throws \ReflectionException
     */
    public static function generate(Element $tagElement): string
    {
        $elementReflection = new ReflectionClass($tagElement);
        $properties = $elementReflection->getProperties();

        $attributeProperties = self::getAttributeProperties($properties);
        $notNullProperties = self::getNotNullProperties($attributeProperties, $tagElement);

        $propertyNames = self::getPropertyNames($notNullProperties);
        $propertyValues = self::getPropertyValues($notNullProperties, $tagElement);

        $tagAttributes = array_map(
            static fn(string $attributeName, AttributeValue $attributeValue) => sprintf(
                '%s="%s"',
                $attributeName,
                (string)$attributeValue
            ),
            $propertyNames,
            $propertyValues
        );

        return implode('', $tagAttributes);
    }

    /**
     * Filters AttributeValue properties from a list of provided properties.
     *
     * @param \ReflectionProperty[] $properties
     *
     * @return \ReflectionProperty[]
     */
    private static function getAttributeProperties(array $properties): array
    {
        return array_filter(
            $properties,
            static function (ReflectionProperty $reflectionProperty) {
                $reflectionPropertyType = $reflectionProperty->getType();

                return $reflectionPropertyType instanceof ReflectionNamedType
                    && is_subclass_of($reflectionPropertyType->getName(), AttributeValue::class);
            }
        );
    }

    /**
     * Filters properties values that are not null.
     *
     * @param \ReflectionProperty[] $properties
     * @param \Elements\Element     $tagElement
     *
     * @return \ReflectionProperty[]
     */
    private static function getNotNullProperties(array $properties, Element $tagElement): array
    {
        return array_filter(
            $properties,
            static function (ReflectionProperty $reflectionProperty) use ($tagElement): bool {
                $reflectionProperty->setAccessible(true);
                return $reflectionProperty->getValue($tagElement) !== null;
            }
        );
    }

    /**
     * Gets properties names.
     *
     * @param \ReflectionProperty[] $properties
     *
     * @return string[]
     */
    private static function getPropertyNames(array $properties): array
    {
        return array_map(
            static fn(ReflectionProperty $reflectionProperty): string => strtolower($reflectionProperty->getName()),
            $properties
        );
    }

    /**
     * Gets properties values.
     *
     * @param \ReflectionProperty[] $properties
     * @param \Elements\Element     $tagElement
     *
     * @return \Elements\AttributeValue[]
     */
    private static function getPropertyValues(array $properties, Element $tagElement): array
    {
        return array_map(
            static function (ReflectionProperty $reflectionProperty) use ($tagElement): AttributeValue {
                $reflectionProperty->setAccessible(true);
                return $reflectionProperty->getValue($tagElement);
            },
            $properties
        );
    }
}
