<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\HTTPSHealthCheck;

use UnexpectedValueException;

/**
 * Specifies how port is selected for health checking, can be one of following values:
 * USE_FIXED_PORT: The port number in port is used for health checking.
 * USE_NAMED_PORT: The portName is used for health checking.
 * USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking.
 * If not specified, HTTPS health check follows behavior specified in port and portName fields.
 *
 * Protobuf type <code>google.cloud.compute.v1.HTTPSHealthCheck.PortSpecification</code>
 */
class PortSpecification
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PORT_SPECIFICATION = 0;</code>
     */
    const UNDEFINED_PORT_SPECIFICATION = 0;
    /**
     * Generated from protobuf enum <code>USE_FIXED_PORT = 190235748;</code>
     */
    const USE_FIXED_PORT = 190235748;
    /**
     * Generated from protobuf enum <code>USE_NAMED_PORT = 349300671;</code>
     */
    const USE_NAMED_PORT = 349300671;
    /**
     * Generated from protobuf enum <code>USE_SERVING_PORT = 362637516;</code>
     */
    const USE_SERVING_PORT = 362637516;

    private static $valueToName = [
        self::UNDEFINED_PORT_SPECIFICATION => 'UNDEFINED_PORT_SPECIFICATION',
        self::USE_FIXED_PORT => 'USE_FIXED_PORT',
        self::USE_NAMED_PORT => 'USE_NAMED_PORT',
        self::USE_SERVING_PORT => 'USE_SERVING_PORT',
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


