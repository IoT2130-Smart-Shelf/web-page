<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a license or certification.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Certification</code>
 */
class Certification extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of license or certification.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * Acquisition date or effective date of license or certification.
     *
     * Generated from protobuf field <code>.google.type.Date acquire_date = 2;</code>
     */
    private $acquire_date = null;
    /**
     * Expiration date of license of certification.
     *
     * Generated from protobuf field <code>.google.type.Date expire_date = 3;</code>
     */
    private $expire_date = null;
    /**
     * Authority of license, such as government.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string authority = 4;</code>
     */
    private $authority = '';
    /**
     * Description of license or certification.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Name of license or certification.
     *           Number of characters allowed is 100.
     *     @type \Google\Type\Date $acquire_date
     *           Acquisition date or effective date of license or certification.
     *     @type \Google\Type\Date $expire_date
     *           Expiration date of license of certification.
     *     @type string $authority
     *           Authority of license, such as government.
     *           Number of characters allowed is 100.
     *     @type string $description
     *           Description of license or certification.
     *           Number of characters allowed is 100,000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of license or certification.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Name of license or certification.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Acquisition date or effective date of license or certification.
     *
     * Generated from protobuf field <code>.google.type.Date acquire_date = 2;</code>
     * @return \Google\Type\Date|null
     */
    public function getAcquireDate()
    {
        return isset($this->acquire_date) ? $this->acquire_date : null;
    }

    public function hasAcquireDate()
    {
        return isset($this->acquire_date);
    }

    public function clearAcquireDate()
    {
        unset($this->acquire_date);
    }

    /**
     * Acquisition date or effective date of license or certification.
     *
     * Generated from protobuf field <code>.google.type.Date acquire_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setAcquireDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->acquire_date = $var;

        return $this;
    }

    /**
     * Expiration date of license of certification.
     *
     * Generated from protobuf field <code>.google.type.Date expire_date = 3;</code>
     * @return \Google\Type\Date|null
     */
    public function getExpireDate()
    {
        return isset($this->expire_date) ? $this->expire_date : null;
    }

    public function hasExpireDate()
    {
        return isset($this->expire_date);
    }

    public function clearExpireDate()
    {
        unset($this->expire_date);
    }

    /**
     * Expiration date of license of certification.
     *
     * Generated from protobuf field <code>.google.type.Date expire_date = 3;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setExpireDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->expire_date = $var;

        return $this;
    }

    /**
     * Authority of license, such as government.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string authority = 4;</code>
     * @return string
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Authority of license, such as government.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string authority = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthority($var)
    {
        GPBUtil::checkString($var, True);
        $this->authority = $var;

        return $this;
    }

    /**
     * Description of license or certification.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of license or certification.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

