<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: entity/stream_message_code.proto

namespace Grpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>grpc.StreamMessageCode</code>
 */
class StreamMessageCode
{
    /**
     * Generated from protobuf enum <code>PING = 0;</code>
     */
    const PING = 0;

    private static $valueToName = [
        self::PING => 'PING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

