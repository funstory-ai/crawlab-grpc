<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: entity/stream_message.proto

namespace Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.StreamMessage</code>
 */
class StreamMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.grpc.StreamMessageCode code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>string node_key = 2;</code>
     */
    protected $node_key = '';
    /**
     * Generated from protobuf field <code>bytes data = 3;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>string error = 4;</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $node_key
     *     @type string $data
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Entity\StreamMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.grpc.StreamMessageCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>.grpc.StreamMessageCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Grpc\StreamMessageCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string node_key = 2;</code>
     * @return string
     */
    public function getNodeKey()
    {
        return $this->node_key;
    }

    /**
     * Generated from protobuf field <code>string node_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 4;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

