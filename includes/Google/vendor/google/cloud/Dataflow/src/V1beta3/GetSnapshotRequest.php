<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/snapshots.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get information about a snapshot
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.GetSnapshotRequest</code>
 */
class GetSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the Cloud Platform project that the snapshot belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The ID of the snapshot.
     *
     * Generated from protobuf field <code>string snapshot_id = 2;</code>
     */
    private $snapshot_id = '';
    /**
     * The location that contains this snapshot.
     *
     * Generated from protobuf field <code>string location = 3;</code>
     */
    private $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The ID of the Cloud Platform project that the snapshot belongs to.
     *     @type string $snapshot_id
     *           The ID of the snapshot.
     *     @type string $location
     *           The location that contains this snapshot.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Snapshots::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the Cloud Platform project that the snapshot belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The ID of the Cloud Platform project that the snapshot belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The ID of the snapshot.
     *
     * Generated from protobuf field <code>string snapshot_id = 2;</code>
     * @return string
     */
    public function getSnapshotId()
    {
        return $this->snapshot_id;
    }

    /**
     * The ID of the snapshot.
     *
     * Generated from protobuf field <code>string snapshot_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshotId($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot_id = $var;

        return $this;
    }

    /**
     * The location that contains this snapshot.
     *
     * Generated from protobuf field <code>string location = 3;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location that contains this snapshot.
     *
     * Generated from protobuf field <code>string location = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

