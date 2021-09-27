<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/resources.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A policy that defines the replication and encryption configuration of data.
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.Replication</code>
 */
class Replication extends \Google\Protobuf\Internal\Message
{
    protected $replication;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecretManager\V1\Replication\Automatic $automatic
     *           The [Secret][google.cloud.secretmanager.v1.Secret] will automatically be replicated without any restrictions.
     *     @type \Google\Cloud\SecretManager\V1\Replication\UserManaged $user_managed
     *           The [Secret][google.cloud.secretmanager.v1.Secret] will only be replicated into the locations specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The [Secret][google.cloud.secretmanager.v1.Secret] will automatically be replicated without any restrictions.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.Replication.Automatic automatic = 1;</code>
     * @return \Google\Cloud\SecretManager\V1\Replication\Automatic|null
     */
    public function getAutomatic()
    {
        return $this->readOneof(1);
    }

    public function hasAutomatic()
    {
        return $this->hasOneof(1);
    }

    /**
     * The [Secret][google.cloud.secretmanager.v1.Secret] will automatically be replicated without any restrictions.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.Replication.Automatic automatic = 1;</code>
     * @param \Google\Cloud\SecretManager\V1\Replication\Automatic $var
     * @return $this
     */
    public function setAutomatic($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\Replication\Automatic::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The [Secret][google.cloud.secretmanager.v1.Secret] will only be replicated into the locations specified.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.Replication.UserManaged user_managed = 2;</code>
     * @return \Google\Cloud\SecretManager\V1\Replication\UserManaged|null
     */
    public function getUserManaged()
    {
        return $this->readOneof(2);
    }

    public function hasUserManaged()
    {
        return $this->hasOneof(2);
    }

    /**
     * The [Secret][google.cloud.secretmanager.v1.Secret] will only be replicated into the locations specified.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.Replication.UserManaged user_managed = 2;</code>
     * @param \Google\Cloud\SecretManager\V1\Replication\UserManaged $var
     * @return $this
     */
    public function setUserManaged($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\Replication\UserManaged::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getReplication()
    {
        return $this->whichOneof("replication");
    }

}

