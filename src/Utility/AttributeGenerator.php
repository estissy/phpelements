<?php

declare(strict_types=1);

namespace Elements\Utility;

use Elements\AttributeValue;
use Elements\BooleanAttribute;
use Elements\Core\HTMLNode;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;

class AttributeGenerator
{
    /**
     * @param \Elements\Core\HTMLNode $htmlNode
     *
     * @return string
     */
    public static function generate(HTMLNode $htmlNode): string
    {
        $elementReflection = new ReflectionClass($htmlNode);
        $properties = $elementReflection->getProperties();

        $attributeProperties = self::getAttributeProperties($properties);
        $notNullProperties = self::getNotNullProperties($attributeProperties, $htmlNode);

        $booleanAttributeProperties = self::getBooleanAttributeProperties($properties);
        $trueBooleanAttributeProperties = self::getTrueBooleanProperties($booleanAttributeProperties, $htmlNode);
        $trueBooleanAttributePropertyNames = self::getPropertyNames($trueBooleanAttributeProperties);

        $propertyNames = self::getPropertyNames($notNullProperties);
        $propertyValues = self::getPropertyValues($notNullProperties, $htmlNode);

        $tagAttributes = array_map(
            static fn(string $attributeName, AttributeValue $attributeValue) => sprintf(
                '%s="%s"',
                $attributeName,
                (string)$attributeValue
            ),
            $propertyNames,
            $propertyValues
        );

        $attributes = array_merge($tagAttributes, $trueBooleanAttributePropertyNames);
        return implode(' ', $attributes);
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
            static function (ReflectionProperty $reflectionProperty): bool {
                $reflectionPropertyType = $reflectionProperty->getType();

                return $reflectionPropertyType instanceof ReflectionNamedType
                    && is_subclass_of($reflectionPropertyType->getName(), AttributeValue::class);
            }
        );
    }

    /**
     * Filters properties values that are not null.
     *
     * @param \ReflectionProperty[]   $properties
     * @param \Elements\Core\HTMLNode $htmlNode
     *
     * @return \ReflectionProperty[]
     */
    private static function getNotNullProperties(array $properties, HTMLNode $htmlNode): array
    {
        return array_filter(
            $properties,
            static function (ReflectionProperty $reflectionProperty) use ($htmlNode): bool {
                $reflectionProperty->setAccessible(true);
                return $reflectionProperty->getValue($htmlNode) !== null;
            }
        );
    }

    /**
     * @param \ReflectionProperty[] $properties
     *
     * @return \ReflectionProperty[]
     */
    private static function getBooleanAttributeProperties(array $properties): array
    {
        return array_filter(
            $properties,
            static function (ReflectionProperty $reflectionProperty): bool {
                $reflectionPropertyType = $reflectionProperty->getType();

                return $reflectionPropertyType instanceof ReflectionNamedType &&
                    is_a($reflectionPropertyType->getName(), BooleanAttribute::class, true);
            }
        );
    }

    /**
     * @param \ReflectionProperty[]   $booleanProperties
     * @param \Elements\Core\HTMLNode $htmlNode
     *
     * @return \ReflectionProperty[]
     */
    private static function getTrueBooleanProperties(array $booleanProperties, HTMLNode $htmlNode): array
    {
        return array_filter(
            $booleanProperties,
            static function (ReflectionProperty $reflectionProperty) use ($htmlNode): bool {
                $reflectionProperty->setAccessible(true);

                return BooleanAttribute::true()->equal($reflectionProperty->getValue($htmlNode));
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
     * @param \ReflectionProperty[]   $properties
     * @param \Elements\Core\HTMLNode $htmlNode
     *
     * @return \Elements\AttributeValue[]
     */
    private static function getPropertyValues(array $properties, HTMLNode $htmlNode): array
    {
        return array_map(
            static function (ReflectionProperty $reflectionProperty) use ($htmlNode): AttributeValue {
                $reflectionProperty->setAccessible(true);
                return $reflectionProperty->getValue($htmlNode);
            },
            $properties
        );
    }
}
