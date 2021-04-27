<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: model.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.Spider</code>
 */
class Spider extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>string type = 4;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string col = 6;</code>
     */
    protected $col = '';
    /**
     * Generated from protobuf field <code>repeated .pb.Env envs = 8;</code>
     */
    private $envs;
    /**
     * Generated from protobuf field <code>string remark = 9;</code>
     */
    protected $remark = '';
    /**
     * Generated from protobuf field <code>string project_id = 11;</code>
     */
    protected $project_id = '';
    /**
     * Generated from protobuf field <code>bool is_public = 12;</code>
     */
    protected $is_public = false;
    /**
     * Generated from protobuf field <code>string cmd = 13;</code>
     */
    protected $cmd = '';
    /**
     * Generated from protobuf field <code>bool is_scrapy = 14;</code>
     */
    protected $is_scrapy = false;
    /**
     * Generated from protobuf field <code>string template = 15;</code>
     */
    protected $template = '';
    /**
     * Generated from protobuf field <code>bool is_dedup = 16;</code>
     */
    protected $is_dedup = false;
    /**
     * Generated from protobuf field <code>string dedup_field = 17;</code>
     */
    protected $dedup_field = '';
    /**
     * Generated from protobuf field <code>string dedup_method = 18;</code>
     */
    protected $dedup_method = '';
    /**
     * Generated from protobuf field <code>bool is_web_hook = 19;</code>
     */
    protected $is_web_hook = false;
    /**
     * Generated from protobuf field <code>string web_hook_url = 20;</code>
     */
    protected $web_hook_url = '';
    /**
     * Generated from protobuf field <code>string user_id = 21;</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string create_ts = 22;</code>
     */
    protected $create_ts = '';
    /**
     * Generated from protobuf field <code>string update_ts = 23;</code>
     */
    protected $update_ts = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $_id
     *     @type string $name
     *     @type string $display_name
     *     @type string $type
     *     @type string $col
     *     @type \Pb\Env[]|\Google\Protobuf\Internal\RepeatedField $envs
     *     @type string $remark
     *     @type string $project_id
     *     @type bool $is_public
     *     @type string $cmd
     *     @type bool $is_scrapy
     *     @type string $template
     *     @type bool $is_dedup
     *     @type string $dedup_field
     *     @type string $dedup_method
     *     @type bool $is_web_hook
     *     @type string $web_hook_url
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
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 4;</code>
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
     * Generated from protobuf field <code>string col = 6;</code>
     * @return string
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * Generated from protobuf field <code>string col = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCol($var)
    {
        GPBUtil::checkString($var, True);
        $this->col = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Env envs = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnvs()
    {
        return $this->envs;
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Env envs = 8;</code>
     * @param \Pb\Env[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnvs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Pb\Env::class);
        $this->envs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remark = 9;</code>
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Generated from protobuf field <code>string remark = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setRemark($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project_id = 11;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Generated from protobuf field <code>string project_id = 11;</code>
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
     * Generated from protobuf field <code>bool is_public = 12;</code>
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->is_public;
    }

    /**
     * Generated from protobuf field <code>bool is_public = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPublic($var)
    {
        GPBUtil::checkBool($var);
        $this->is_public = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cmd = 13;</code>
     * @return string
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * Generated from protobuf field <code>string cmd = 13;</code>
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
     * Generated from protobuf field <code>bool is_scrapy = 14;</code>
     * @return bool
     */
    public function getIsScrapy()
    {
        return $this->is_scrapy;
    }

    /**
     * Generated from protobuf field <code>bool is_scrapy = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsScrapy($var)
    {
        GPBUtil::checkBool($var);
        $this->is_scrapy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string template = 15;</code>
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Generated from protobuf field <code>string template = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->template = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_dedup = 16;</code>
     * @return bool
     */
    public function getIsDedup()
    {
        return $this->is_dedup;
    }

    /**
     * Generated from protobuf field <code>bool is_dedup = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDedup($var)
    {
        GPBUtil::checkBool($var);
        $this->is_dedup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dedup_field = 17;</code>
     * @return string
     */
    public function getDedupField()
    {
        return $this->dedup_field;
    }

    /**
     * Generated from protobuf field <code>string dedup_field = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setDedupField($var)
    {
        GPBUtil::checkString($var, True);
        $this->dedup_field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dedup_method = 18;</code>
     * @return string
     */
    public function getDedupMethod()
    {
        return $this->dedup_method;
    }

    /**
     * Generated from protobuf field <code>string dedup_method = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setDedupMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->dedup_method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_web_hook = 19;</code>
     * @return bool
     */
    public function getIsWebHook()
    {
        return $this->is_web_hook;
    }

    /**
     * Generated from protobuf field <code>bool is_web_hook = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsWebHook($var)
    {
        GPBUtil::checkBool($var);
        $this->is_web_hook = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string web_hook_url = 20;</code>
     * @return string
     */
    public function getWebHookUrl()
    {
        return $this->web_hook_url;
    }

    /**
     * Generated from protobuf field <code>string web_hook_url = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setWebHookUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->web_hook_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 21;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 21;</code>
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
     * Generated from protobuf field <code>string create_ts = 22;</code>
     * @return string
     */
    public function getCreateTs()
    {
        return $this->create_ts;
    }

    /**
     * Generated from protobuf field <code>string create_ts = 22;</code>
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
     * Generated from protobuf field <code>string update_ts = 23;</code>
     * @return string
     */
    public function getUpdateTs()
    {
        return $this->update_ts;
    }

    /**
     * Generated from protobuf field <code>string update_ts = 23;</code>
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

