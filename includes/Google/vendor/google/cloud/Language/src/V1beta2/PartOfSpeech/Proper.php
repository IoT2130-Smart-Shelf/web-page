<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2\PartOfSpeech;

use UnexpectedValueException;

/**
 * This category shows if the token is part of a proper name.
 *
 * Protobuf type <code>google.cloud.language.v1beta2.PartOfSpeech.Proper</code>
 */
class Proper
{
    /**
     * Proper is not applicable in the analyzed language or is not predicted.
     *
     * Generated from protobuf enum <code>PROPER_UNKNOWN = 0;</code>
     */
    const PROPER_UNKNOWN = 0;
    /**
     * Proper
     *
     * Generated from protobuf enum <code>PROPER = 1;</code>
     */
    const PROPER = 1;
    /**
     * Not proper
     *
     * Generated from protobuf enum <code>NOT_PROPER = 2;</code>
     */
    const NOT_PROPER = 2;

    private static $valueToName = [
        self::PROPER_UNKNOWN => 'PROPER_UNKNOWN',
        self::PROPER => 'PROPER',
        self::NOT_PROPER => 'NOT_PROPER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Proper::class, \Google\Cloud\Language\V1beta2\PartOfSpeech_Proper::class);

