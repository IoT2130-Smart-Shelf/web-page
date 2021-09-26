<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads_v1beta1.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1\Workload;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings specific to resources needed for FedRAMP High.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.Workload.FedrampHighSettings</code>
 */
class FedrampHighSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Input only. Immutable. Settings used to create a CMEK crypto key.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $kms_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings $kms_settings
     *           Required. Input only. Immutable. Settings used to create a CMEK crypto key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\AssuredworkloadsV1Beta1::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Input only. Immutable. Settings used to create a CMEK crypto key.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings|null
     */
    public function getKmsSettings()
    {
        return isset($this->kms_settings) ? $this->kms_settings : null;
    }

    public function hasKmsSettings()
    {
        return isset($this->kms_settings);
    }

    public function clearKmsSettings()
    {
        unset($this->kms_settings);
    }

    /**
     * Required. Input only. Immutable. Settings used to create a CMEK crypto key.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings $var
     * @return $this
     */
    public function setKmsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings::class);
        $this->kms_settings = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FedrampHighSettings::class, \Google\Cloud\AssuredWorkloads\V1beta1\Workload_FedrampHighSettings::class);

