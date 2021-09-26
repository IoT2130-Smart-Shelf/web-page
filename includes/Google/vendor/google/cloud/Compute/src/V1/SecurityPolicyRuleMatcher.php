<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a match condition that incoming traffic is evaluated against. Exactly one field must be specified.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyRuleMatcher</code>
 */
class SecurityPolicyRuleMatcher extends \Google\Protobuf\Internal\Message
{
    /**
     * The configuration options available when specifying versioned_expr. This field must be specified if versioned_expr is specified and cannot be specified if versioned_expr is not specified.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcherConfig config = 255820610;</code>
     */
    private $config = null;
    /**
     * User defined CEVAL expression. A CEVAL expression is used to specify match criteria such as origin.ip, source.region_code and contents in the request header.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Expr expr = 3127797;</code>
     */
    private $expr = null;
    /**
     * Preconfigured versioned expression. If this field is specified, config must also be specified. Available preconfigured expressions along with their requirements are: SRC_IPS_V1 - must specify the corresponding src_ip_range field in config.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcher.VersionedExpr versioned_expr = 322286013;</code>
     */
    private $versioned_expr = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig $config
     *           The configuration options available when specifying versioned_expr. This field must be specified if versioned_expr is specified and cannot be specified if versioned_expr is not specified.
     *     @type \Google\Cloud\Compute\V1\Expr $expr
     *           User defined CEVAL expression. A CEVAL expression is used to specify match criteria such as origin.ip, source.region_code and contents in the request header.
     *     @type int $versioned_expr
     *           Preconfigured versioned expression. If this field is specified, config must also be specified. Available preconfigured expressions along with their requirements are: SRC_IPS_V1 - must specify the corresponding src_ip_range field in config.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The configuration options available when specifying versioned_expr. This field must be specified if versioned_expr is specified and cannot be specified if versioned_expr is not specified.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcherConfig config = 255820610;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig|null
     */
    public function getConfig()
    {
        return isset($this->config) ? $this->config : null;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * The configuration options available when specifying versioned_expr. This field must be specified if versioned_expr is specified and cannot be specified if versioned_expr is not specified.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcherConfig config = 255820610;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * User defined CEVAL expression. A CEVAL expression is used to specify match criteria such as origin.ip, source.region_code and contents in the request header.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Expr expr = 3127797;</code>
     * @return \Google\Cloud\Compute\V1\Expr|null
     */
    public function getExpr()
    {
        return isset($this->expr) ? $this->expr : null;
    }

    public function hasExpr()
    {
        return isset($this->expr);
    }

    public function clearExpr()
    {
        unset($this->expr);
    }

    /**
     * User defined CEVAL expression. A CEVAL expression is used to specify match criteria such as origin.ip, source.region_code and contents in the request header.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Expr expr = 3127797;</code>
     * @param \Google\Cloud\Compute\V1\Expr $var
     * @return $this
     */
    public function setExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Expr::class);
        $this->expr = $var;

        return $this;
    }

    /**
     * Preconfigured versioned expression. If this field is specified, config must also be specified. Available preconfigured expressions along with their requirements are: SRC_IPS_V1 - must specify the corresponding src_ip_range field in config.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcher.VersionedExpr versioned_expr = 322286013;</code>
     * @return int
     */
    public function getVersionedExpr()
    {
        return isset($this->versioned_expr) ? $this->versioned_expr : 0;
    }

    public function hasVersionedExpr()
    {
        return isset($this->versioned_expr);
    }

    public function clearVersionedExpr()
    {
        unset($this->versioned_expr);
    }

    /**
     * Preconfigured versioned expression. If this field is specified, config must also be specified. Available preconfigured expressions along with their requirements are: SRC_IPS_V1 - must specify the corresponding src_ip_range field in config.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcher.VersionedExpr versioned_expr = 322286013;</code>
     * @param int $var
     * @return $this
     */
    public function setVersionedExpr($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcher\VersionedExpr::class);
        $this->versioned_expr = $var;

        return $this;
    }

}

