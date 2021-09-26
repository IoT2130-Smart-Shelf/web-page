<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1\AptSettings;

use UnexpectedValueException;

/**
 * Apt patch type.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.AptSettings.Type</code>
 */
class Type
{
    /**
     * By default, upgrade will be performed.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Runs `apt-get dist-upgrade`.
     *
     * Generated from protobuf enum <code>DIST = 1;</code>
     */
    const DIST = 1;
    /**
     * Runs `apt-get upgrade`.
     *
     * Generated from protobuf enum <code>UPGRADE = 2;</code>
     */
    const UPGRADE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::DIST => 'DIST',
        self::UPGRADE => 'UPGRADE',
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
class_alias(Type::class, \Google\Cloud\OsConfig\V1\AptSettings_Type::class);

