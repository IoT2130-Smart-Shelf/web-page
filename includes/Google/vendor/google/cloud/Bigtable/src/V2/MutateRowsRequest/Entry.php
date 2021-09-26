<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2\MutateRowsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mutation for a given row.
 *
 * Generated from protobuf message <code>google.bigtable.v2.MutateRowsRequest.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * The key of the row to which the `mutations` should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     */
    private $row_key = '';
    /**
     * Required. Changes to be atomically applied to the specified row. Mutations are
     * applied in order, meaning that earlier mutations can be masked by
     * later ones.
     * You must specify at least one mutation.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation mutations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mutations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $row_key
     *           The key of the row to which the `mutations` should be applied.
     *     @type \Google\Cloud\Bigtable\V2\Mutation[]|\Google\Protobuf\Internal\RepeatedField $mutations
     *           Required. Changes to be atomically applied to the specified row. Mutations are
     *           applied in order, meaning that earlier mutations can be masked by
     *           later ones.
     *           You must specify at least one mutation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * The key of the row to which the `mutations` should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     * @return string
     */
    public function getRowKey()
    {
        return $this->row_key;
    }

    /**
     * The key of the row to which the `mutations` should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRowKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->row_key = $var;

        return $this;
    }

    /**
     * Required. Changes to be atomically applied to the specified row. Mutations are
     * applied in order, meaning that earlier mutations can be masked by
     * later ones.
     * You must specify at least one mutation.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation mutations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * Required. Changes to be atomically applied to the specified row. Mutations are
     * applied in order, meaning that earlier mutations can be masked by
     * later ones.
     * You must specify at least one mutation.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation mutations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\V2\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\Mutation::class);
        $this->mutations = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Entry::class, \Google\Cloud\Bigtable\V2\MutateRowsRequest_Entry::class);

