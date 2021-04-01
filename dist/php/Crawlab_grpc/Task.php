<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: model.proto

namespace Crawlab_grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>crawlab_grpc.Task</code>
 */
class Task extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string _id = 1;</code>
     */
    protected $_id = '';
    /**
     * Generated from protobuf field <code>string spider_id = 2;</code>
     */
    protected $spider_id = '';
    /**
     * Generated from protobuf field <code>string start_ts = 3;</code>
     */
    protected $start_ts = '';
    /**
     * Generated from protobuf field <code>string finish_ts = 4;</code>
     */
    protected $finish_ts = '';
    /**
     * Generated from protobuf field <code>string status = 5;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>string node_id = 6;</code>
     */
    protected $node_id = '';
    /**
     * Generated from protobuf field <code>string cmd = 8;</code>
     */
    protected $cmd = '';
    /**
     * Generated from protobuf field <code>string param = 9;</code>
     */
    protected $param = '';
    /**
     * Generated from protobuf field <code>string error = 10;</code>
     */
    protected $error = '';
    /**
     * Generated from protobuf field <code>int32 result_count = 11;</code>
     */
    protected $result_count = 0;
    /**
     * Generated from protobuf field <code>int32 error_log_count = 12;</code>
     */
    protected $error_log_count = 0;
    /**
     * Generated from protobuf field <code>int32 wait_duration = 13;</code>
     */
    protected $wait_duration = 0;
    /**
     * Generated from protobuf field <code>int32 runtime_duration = 14;</code>
     */
    protected $runtime_duration = 0;
    /**
     * Generated from protobuf field <code>int32 total_duration = 15;</code>
     */
    protected $total_duration = 0;
    /**
     * Generated from protobuf field <code>int32 pid = 16;</code>
     */
    protected $pid = 0;
    /**
     * Generated from protobuf field <code>string run_type = 17;</code>
     */
    protected $run_type = '';
    /**
     * Generated from protobuf field <code>string schedule_id = 18;</code>
     */
    protected $schedule_id = '';
    /**
     * Generated from protobuf field <code>string type = 19;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string user_id = 20;</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string create_ts = 21;</code>
     */
    protected $create_ts = '';
    /**
     * Generated from protobuf field <code>string update_ts = 22;</code>
     */
    protected $update_ts = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $_id
     *     @type string $spider_id
     *     @type string $start_ts
     *     @type string $finish_ts
     *     @type string $status
     *     @type string $node_id
     *     @type string $cmd
     *     @type string $param
     *     @type string $error
     *     @type int $result_count
     *     @type int $error_log_count
     *     @type int $wait_duration
     *     @type int $runtime_duration
     *     @type int $total_duration
     *     @type int $pid
     *     @type string $run_type
     *     @type string $schedule_id
     *     @type string $type
     *     @type string $user_id
     *     @type string $create_ts
     *     @type string $update_ts
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
     * Generated from protobuf field <code>string spider_id = 2;</code>
     * @return string
     */
    public function getSpiderId()
    {
        return $this->spider_id;
    }

    /**
     * Generated from protobuf field <code>string spider_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpiderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->spider_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string start_ts = 3;</code>
     * @return string
     */
    public function getStartTs()
    {
        return $this->start_ts;
    }

    /**
     * Generated from protobuf field <code>string start_ts = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTs($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_ts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string finish_ts = 4;</code>
     * @return string
     */
    public function getFinishTs()
    {
        return $this->finish_ts;
    }

    /**
     * Generated from protobuf field <code>string finish_ts = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFinishTs($var)
    {
        GPBUtil::checkString($var, True);
        $this->finish_ts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 5;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string node_id = 6;</code>
     * @return string
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * Generated from protobuf field <code>string node_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cmd = 8;</code>
     * @return string
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * Generated from protobuf field <code>string cmd = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCmd($var)
    {
        GPBUtil::checkString($var, True);
        $this->cmd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string param = 9;</code>
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Generated from protobuf field <code>string param = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setParam($var)
    {
        GPBUtil::checkString($var, True);
        $this->param = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 10;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 result_count = 11;</code>
     * @return int
     */
    public function getResultCount()
    {
        return $this->result_count;
    }

    /**
     * Generated from protobuf field <code>int32 result_count = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setResultCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->result_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 error_log_count = 12;</code>
     * @return int
     */
    public function getErrorLogCount()
    {
        return $this->error_log_count;
    }

    /**
     * Generated from protobuf field <code>int32 error_log_count = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setErrorLogCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->error_log_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 wait_duration = 13;</code>
     * @return int
     */
    public function getWaitDuration()
    {
        return $this->wait_duration;
    }

    /**
     * Generated from protobuf field <code>int32 wait_duration = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setWaitDuration($var)
    {
        GPBUtil::checkInt32($var);
        $this->wait_duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 runtime_duration = 14;</code>
     * @return int
     */
    public function getRuntimeDuration()
    {
        return $this->runtime_duration;
    }

    /**
     * Generated from protobuf field <code>int32 runtime_duration = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRuntimeDuration($var)
    {
        GPBUtil::checkInt32($var);
        $this->runtime_duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_duration = 15;</code>
     * @return int
     */
    public function getTotalDuration()
    {
        return $this->total_duration;
    }

    /**
     * Generated from protobuf field <code>int32 total_duration = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalDuration($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pid = 16;</code>
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Generated from protobuf field <code>int32 pid = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setPid($var)
    {
        GPBUtil::checkInt32($var);
        $this->pid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string run_type = 17;</code>
     * @return string
     */
    public function getRunType()
    {
        return $this->run_type;
    }

    /**
     * Generated from protobuf field <code>string run_type = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setRunType($var)
    {
        GPBUtil::checkString($var, True);
        $this->run_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string schedule_id = 18;</code>
     * @return string
     */
    public function getScheduleId()
    {
        return $this->schedule_id;
    }

    /**
     * Generated from protobuf field <code>string schedule_id = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setScheduleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type = 19;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 20;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string create_ts = 21;</code>
     * @return string
     */
    public function getCreateTs()
    {
        return $this->create_ts;
    }

    /**
     * Generated from protobuf field <code>string create_ts = 21;</code>
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
     * Generated from protobuf field <code>string update_ts = 22;</code>
     * @return string
     */
    public function getUpdateTs()
    {
        return $this->update_ts;
    }

    /**
     * Generated from protobuf field <code>string update_ts = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdateTs($var)
    {
        GPBUtil::checkString($var, True);
        $this->update_ts = $var;

        return $this;
    }

}

