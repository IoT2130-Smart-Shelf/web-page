<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message that holds specific allowed and denied values.
 * This message can define specific values and subtrees of Cloud Resource
 * Manager resource hierarchy (`Organizations`, `Folders`, `Projects`) that
 * are allowed or denied. This is achieved by using the `under:` and
 * optional `is:` prefixes.
 * The `under:` prefix is used to denote resource subtree values.
 * The `is:` prefix is used to denote specific values, and is required only
 * if the value contains a ":". Values prefixed with "is:" are treated the
 * same as values with no prefix.
 * Ancestry subtrees must be in one of the following formats:
 *     - "projects/<project-id>", e.g. "projects/tokyo-rain-123"
 *     - "folders/<folder-id>", e.g. "folders/1234"
 *     - "organizations/<organization-id>", e.g. "organizations/1234"
 * The `supports_under` field of the associated `Constraint`  defines
 * whether ancestry prefixes can be used.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.PolicySpec.PolicyRule.StringValues</code>
 */
class StringValues extends \Google\Protobuf\Internal\Message
{
    /**
     * List of values allowed at this resource.
     *
     * Generated from protobuf field <code>repeated string allowed_values = 1;</code>
     */
    private $allowed_values;
    /**
     * List of values denied at this resource.
     *
     * Generated from protobuf field <code>repeated string denied_values = 2;</code>
     */
    private $denied_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_values
     *           List of values allowed at this resource.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $denied_values
     *           List of values denied at this resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * List of values allowed at this resource.
     *
     * Generated from protobuf field <code>repeated string allowed_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedValues()
    {
        return $this->allowed_values;
    }

    /**
     * List of values allowed at this resource.
     *
     * Generated from protobuf field <code>repeated string allowed_values = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_values = $arr;

        return $this;
    }

    /**
     * List of values denied at this resource.
     *
     * Generated from protobuf field <code>repeated string denied_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeniedValues()
    {
        return $this->denied_values;
    }

    /**
     * List of values denied at this resource.
     *
     * Generated from protobuf field <code>repeated string denied_values = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeniedValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->denied_values = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StringValues::class, \Google\Cloud\OrgPolicy\V2\PolicySpec_PolicyRule_StringValues::class);

