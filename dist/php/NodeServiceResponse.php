<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: node.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NodeServiceResponse</code>
 */
class NodeServiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ResponseCode code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>string error = 2;</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Node::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ResponseCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>.ResponseCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \ResponseCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 2;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 2;</code>
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

