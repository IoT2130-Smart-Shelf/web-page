<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Filter on create timestamp or update timestamp of profiles.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.TimeFilter</code>
 */
class TimeFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Start timestamp, matching profiles with the start time. If this field
     * missing, The API matches profiles with create / update timestamp before the
     * end timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * End timestamp, matching profiles with the end time. If this field
     * missing, The API matches profiles with create / update timestamp after the
     * start timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Specifies which time field to filter profiles.
     * Defaults to [TimeField.CREATE_TIME][google.cloud.talent.v4beta1.TimeFilter.TimeField.CREATE_TIME].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.TimeFilter.TimeField time_field = 3;</code>
     */
    private $time_field = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Start timestamp, matching profiles with the start time. If this field
     *           missing, The API matches profiles with create / update timestamp before the
     *           end timestamp.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           End timestamp, matching profiles with the end time. If this field
     *           missing, The API matches profiles with create / update timestamp after the
     *           start timestamp.
     *     @type int $time_field
     *           Specifies which time field to filter profiles.
     *           Defaults to [TimeField.CREATE_TIME][google.cloud.talent.v4beta1.TimeFilter.TimeField.CREATE_TIME].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * Start timestamp, matching profiles with the start time. If this field
     * missing, The API matches profiles with create / update timestamp before the
     * end timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start timestamp, matching profiles with the start time. If this field
     * missing, The API matches profiles with create / update timestamp before the
     * end timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * End timestamp, matching profiles with the end time. If this field
     * missing, The API matches profiles with create / update timestamp after the
     * start timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * End timestamp, matching profiles with the end time. If this field
     * missing, The API matches profiles with create / update timestamp after the
     * start timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Specifies which time field to filter profiles.
     * Defaults to [TimeField.CREATE_TIME][google.cloud.talent.v4beta1.TimeFilter.TimeField.CREATE_TIME].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.TimeFilter.TimeField time_field = 3;</code>
     * @return int
     */
    public function getTimeField()
    {
        return $this->time_field;
    }

    /**
     * Specifies which time field to filter profiles.
     * Defaults to [TimeField.CREATE_TIME][google.cloud.talent.v4beta1.TimeFilter.TimeField.CREATE_TIME].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.TimeFilter.TimeField time_field = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeField($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\TimeFilter\TimeField::class);
        $this->time_field = $var;

        return $this;
    }

}

