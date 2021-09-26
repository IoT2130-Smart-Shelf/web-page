<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/prediction_apikey_registry_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Registered Api Key.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.PredictionApiKeyRegistration</code>
 */
class PredictionApiKeyRegistration extends \Google\Protobuf\Internal\Message
{
    /**
     * The API key.
     *
     * Generated from protobuf field <code>string api_key = 1;</code>
     */
    private $api_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api_key
     *           The API key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\PredictionApikeyRegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * The API key.
     *
     * Generated from protobuf field <code>string api_key = 1;</code>
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * The API key.
     *
     * Generated from protobuf field <code>string api_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApiKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_key = $var;

        return $this;
    }

}

