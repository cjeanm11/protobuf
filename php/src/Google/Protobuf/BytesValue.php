<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/protobuf/wrappers.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wrapper message for `bytes`.
 * The JSON representation for `BytesValue` is JSON string.
 *
 * Generated from protobuf message <code>google.protobuf.BytesValue</code>
 */
class BytesValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The bytes value.
     *
     * Generated from protobuf field <code>bytes value = 1;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The bytes value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        parent::__construct($data);
    }

    /**
     * The bytes value.
     *
     * Generated from protobuf field <code>bytes value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The bytes value.
     *
     * Generated from protobuf field <code>bytes value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

}

