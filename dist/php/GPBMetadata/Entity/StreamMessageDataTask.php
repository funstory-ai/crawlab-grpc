<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: entity/stream_message_data_task.proto

namespace GPBMetadata\Entity;

class StreamMessageDataTask
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
w
%entity/stream_message_data_task.protogrpc"6
StreamMessageDataTask
task_id (	
data (BZ.;grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}
