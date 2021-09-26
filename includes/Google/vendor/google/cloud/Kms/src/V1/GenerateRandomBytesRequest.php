<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.GenerateRandomBytes][google.cloud.kms.v1.KeyManagementService.GenerateRandomBytes].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.GenerateRandomBytesRequest</code>
 */
class GenerateRandomBytesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project-specific location in which to generate random bytes.
     * For example, "projects/my-project/locations/us-central1".
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * The length in bytes of the amount of randomness to retrieve.  Minimum 8
     * bytes, maximum 1024 bytes.
     *
     * Generated from protobuf field <code>int32 length_bytes = 2;</code>
     */
    private $length_bytes = 0;
    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] to use when generating the random data. Defaults to
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 3;</code>
     */
    private $protection_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           The project-specific location in which to generate random bytes.
     *           For example, "projects/my-project/locations/us-central1".
     *     @type int $length_bytes
     *           The length in bytes of the amount of randomness to retrieve.  Minimum 8
     *           bytes, maximum 1024 bytes.
     *     @type int $protection_level
     *           The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] to use when generating the random data. Defaults to
     *           [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The project-specific location in which to generate random bytes.
     * For example, "projects/my-project/locations/us-central1".
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The project-specific location in which to generate random bytes.
     * For example, "projects/my-project/locations/us-central1".
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The length in bytes of the amount of randomness to retrieve.  Minimum 8
     * bytes, maximum 1024 bytes.
     *
     * Generated from protobuf field <code>int32 length_bytes = 2;</code>
     * @return int
     */
    public function getLengthBytes()
    {
        return $this->length_bytes;
    }

    /**
     * The length in bytes of the amount of randomness to retrieve.  Minimum 8
     * bytes, maximum 1024 bytes.
     *
     * Generated from protobuf field <code>int32 length_bytes = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLengthBytes($var)
    {
        GPBUtil::checkInt32($var);
        $this->length_bytes = $var;

        return $this;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] to use when generating the random data. Defaults to
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 3;</code>
     * @return int
     */
    public function getProtectionLevel()
    {
        return $this->protection_level;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] to use when generating the random data. Defaults to
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setProtectionLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\ProtectionLevel::class);
        $this->protection_level = $var;

        return $this;
    }

}

