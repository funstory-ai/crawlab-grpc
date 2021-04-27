<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: model.proto

namespace Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string _id = 1;</code>
     */
    protected $_id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string ip = 3;</code>
     */
    protected $ip = '';
    /**
     * Generated from protobuf field <code>string port = 5;</code>
     */
    protected $port = '';
    /**
     * Generated from protobuf field <code>string mac = 6;</code>
     */
    protected $mac = '';
    /**
     * Generated from protobuf field <code>string hostname = 7;</code>
     */
    protected $hostname = '';
    /**
     * Generated from protobuf field <code>string description = 8;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string key = 9;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>.grpc.NodeSettings settings = 10;</code>
     */
    protected $settings = null;
    /**
     * Generated from protobuf field <code>bool is_master = 11;</code>
     */
    protected $is_master = false;
    /**
     * Generated from protobuf field <code>string update_ts = 12;</code>
     */
    protected $update_ts = '';
    /**
     * Generated from protobuf field <code>string create_ts = 13;</code>
     */
    protected $create_ts = '';
    /**
     * Generated from protobuf field <code>int64 update_ts_unix = 14;</code>
     */
    protected $update_ts_unix = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $_id
     *     @type string $name
     *     @type string $ip
     *     @type string $port
     *     @type string $mac
     *     @type string $hostname
     *     @type string $description
     *     @type string $key
     *     @type \Grpc\NodeSettings $settings
     *     @type bool $is_master
     *     @type string $update_ts
     *     @type string $create_ts
     *     @type int|string $update_ts_unix
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string _id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Generated from protobuf field <code>string _id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ip = 3;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>string ip = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string port = 5;</code>
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>string port = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkString($var, True);
        $this->port = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mac = 6;</code>
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Generated from protobuf field <code>string mac = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMac($var)
    {
        GPBUtil::checkString($var, True);
        $this->mac = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hostname = 7;</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Generated from protobuf field <code>string hostname = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 9;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grpc.NodeSettings settings = 10;</code>
     * @return \Grpc\NodeSettings
     */
    public function getSettings()
    {
        return isset($this->settings) ? $this->settings : null;
    }

    public function hasSettings()
    {
        return isset($this->settings);
    }

    public function clearSettings()
    {
        unset($this->settings);
    }

    /**
     * Generated from protobuf field <code>.grpc.NodeSettings settings = 10;</code>
     * @param \Grpc\NodeSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \Grpc\NodeSettings::class);
        $this->settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_master = 11;</code>
     * @return bool
     */
    public function getIsMaster()
    {
        return $this->is_master;
    }

    /**
     * Generated from protobuf field <code>bool is_master = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMaster($var)
    {
        GPBUtil::checkBool($var);
        $this->is_master = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string update_ts = 12;</code>
     * @return string
     */
    public function getUpdateTs()
    {
        return $this->update_ts;
    }

    /**
     * Generated from protobuf field <code>string update_ts = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdateTs($var)
    {
        GPBUtil::checkString($var, True);
        $this->update_ts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string create_ts = 13;</code>
     * @return string
     */
    public function getCreateTs()
    {
        return $this->create_ts;
    }

    /**
     * Generated from protobuf field <code>string create_ts = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateTs($var)
    {
        GPBUtil::checkString($var, True);
        $this->create_ts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 update_ts_unix = 14;</code>
     * @return int|string
     */
    public function getUpdateTsUnix()
    {
        return $this->update_ts_unix;
    }

    /**
     * Generated from protobuf field <code>int64 update_ts_unix = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateTsUnix($var)
    {
        GPBUtil::checkInt64($var);
        $this->update_ts_unix = $var;

        return $this;
    }

}
