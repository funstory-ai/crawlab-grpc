<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: entity/response_code.proto

namespace GPBMetadata\Entity;

class ResponseCode
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
Q
entity/response_code.proto*!
ResponseCode
OK 	
ERRORBZ.;grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

