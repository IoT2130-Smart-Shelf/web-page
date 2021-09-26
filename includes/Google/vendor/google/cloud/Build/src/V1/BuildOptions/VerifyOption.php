<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\BuildOptions;

use UnexpectedValueException;

/**
 * Specifies the manner in which the build should be verified, if at all.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.BuildOptions.VerifyOption</code>
 */
class VerifyOption
{
    /**
     * Not a verifiable build. (default)
     *
     * Generated from protobuf enum <code>NOT_VERIFIED = 0;</code>
     */
    const NOT_VERIFIED = 0;
    /**
     * Verified build.
     *
     * Generated from protobuf enum <code>VERIFIED = 1;</code>
     */
    const VERIFIED = 1;

    private static $valueToName = [
        self::NOT_VERIFIED => 'NOT_VERIFIED',
        self::VERIFIED => 'VERIFIED',
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
class_alias(VerifyOption::class, \Google\Cloud\Build\V1\BuildOptions_VerifyOption::class);

