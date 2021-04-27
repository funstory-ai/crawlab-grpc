// source: model.proto
/**
 * @fileoverview
 * @enhanceable
 * @suppress {messageConventions} JS Compiler reports an error if a variable or
 *     field starts with 'MSG_' and isn't a translatable message.
 * @public
 */
// GENERATED CODE -- DO NOT EDIT!
/* eslint-disable */
// @ts-nocheck

goog.provide('proto.grpc.Task');

goog.require('jspb.BinaryReader');
goog.require('jspb.BinaryWriter');
goog.require('jspb.Message');

/**
 * Generated by JsPbCodeGenerator.
 * @param {Array=} opt_data Optional initial data array, typically from a
 * server response, or constructed directly in Javascript. The array is used
 * in place and becomes part of the constructed object. It is not cloned.
 * If no data is provided, the constructed object will be empty, but still
 * valid.
 * @extends {jspb.Message}
 * @constructor
 */
proto.grpc.Task = function(opt_data) {
  jspb.Message.initialize(this, opt_data, 0, -1, null, null);
};
goog.inherits(proto.grpc.Task, jspb.Message);
if (goog.DEBUG && !COMPILED) {
  /**
   * @public
   * @override
   */
  proto.grpc.Task.displayName = 'proto.grpc.Task';
}



if (jspb.Message.GENERATE_TO_OBJECT) {
/**
 * Creates an object representation of this proto.
 * Field names that are reserved in JavaScript and will be renamed to pb_name.
 * Optional fields that are not set will be set to undefined.
 * To access a reserved field use, foo.pb_<name>, eg, foo.pb_default.
 * For the list of reserved names please see:
 *     net/proto2/compiler/js/internal/generator.cc#kKeyword.
 * @param {boolean=} opt_includeInstance Deprecated. whether to include the
 *     JSPB instance for transitional soy proto support:
 *     http://goto/soy-param-migration
 * @return {!Object}
 */
proto.grpc.Task.prototype.toObject = function(opt_includeInstance) {
  return proto.grpc.Task.toObject(opt_includeInstance, this);
};


/**
 * Static version of the {@see toObject} method.
 * @param {boolean|undefined} includeInstance Deprecated. Whether to include
 *     the JSPB instance for transitional soy proto support:
 *     http://goto/soy-param-migration
 * @param {!proto.grpc.Task} msg The msg instance to transform.
 * @return {!Object}
 * @suppress {unusedLocalVariables} f is only used for nested messages
 */
proto.grpc.Task.toObject = function(includeInstance, msg) {
  var f, obj = {
    id: jspb.Message.getFieldWithDefault(msg, 1, ""),
    spiderId: jspb.Message.getFieldWithDefault(msg, 2, ""),
    startTs: jspb.Message.getFieldWithDefault(msg, 3, ""),
    finishTs: jspb.Message.getFieldWithDefault(msg, 4, ""),
    status: jspb.Message.getFieldWithDefault(msg, 5, ""),
    nodeId: jspb.Message.getFieldWithDefault(msg, 6, ""),
    cmd: jspb.Message.getFieldWithDefault(msg, 8, ""),
    param: jspb.Message.getFieldWithDefault(msg, 9, ""),
    error: jspb.Message.getFieldWithDefault(msg, 10, ""),
    resultCount: jspb.Message.getFieldWithDefault(msg, 11, 0),
    errorLogCount: jspb.Message.getFieldWithDefault(msg, 12, 0),
    waitDuration: jspb.Message.getFieldWithDefault(msg, 13, 0),
    runtimeDuration: jspb.Message.getFieldWithDefault(msg, 14, 0),
    totalDuration: jspb.Message.getFieldWithDefault(msg, 15, 0),
    pid: jspb.Message.getFieldWithDefault(msg, 16, 0),
    runType: jspb.Message.getFieldWithDefault(msg, 17, ""),
    scheduleId: jspb.Message.getFieldWithDefault(msg, 18, ""),
    type: jspb.Message.getFieldWithDefault(msg, 19, ""),
    userId: jspb.Message.getFieldWithDefault(msg, 20, ""),
    createTs: jspb.Message.getFieldWithDefault(msg, 21, ""),
    updateTs: jspb.Message.getFieldWithDefault(msg, 22, "")
  };

  if (includeInstance) {
    obj.$jspbMessageInstance = msg;
  }
  return obj;
};
}


/**
 * Deserializes binary data (in protobuf wire format).
 * @param {jspb.ByteSource} bytes The bytes to deserialize.
 * @return {!proto.grpc.Task}
 */
proto.grpc.Task.deserializeBinary = function(bytes) {
  var reader = new jspb.BinaryReader(bytes);
  var msg = new proto.grpc.Task;
  return proto.grpc.Task.deserializeBinaryFromReader(msg, reader);
};


/**
 * Deserializes binary data (in protobuf wire format) from the
 * given reader into the given message object.
 * @param {!proto.grpc.Task} msg The message object to deserialize into.
 * @param {!jspb.BinaryReader} reader The BinaryReader to use.
 * @return {!proto.grpc.Task}
 */
proto.grpc.Task.deserializeBinaryFromReader = function(msg, reader) {
  while (reader.nextField()) {
    if (reader.isEndGroup()) {
      break;
    }
    var field = reader.getFieldNumber();
    switch (field) {
    case 1:
      var value = /** @type {string} */ (reader.readString());
      msg.setId(value);
      break;
    case 2:
      var value = /** @type {string} */ (reader.readString());
      msg.setSpiderId(value);
      break;
    case 3:
      var value = /** @type {string} */ (reader.readString());
      msg.setStartTs(value);
      break;
    case 4:
      var value = /** @type {string} */ (reader.readString());
      msg.setFinishTs(value);
      break;
    case 5:
      var value = /** @type {string} */ (reader.readString());
      msg.setStatus(value);
      break;
    case 6:
      var value = /** @type {string} */ (reader.readString());
      msg.setNodeId(value);
      break;
    case 8:
      var value = /** @type {string} */ (reader.readString());
      msg.setCmd(value);
      break;
    case 9:
      var value = /** @type {string} */ (reader.readString());
      msg.setParam(value);
      break;
    case 10:
      var value = /** @type {string} */ (reader.readString());
      msg.setError(value);
      break;
    case 11:
      var value = /** @type {number} */ (reader.readInt32());
      msg.setResultCount(value);
      break;
    case 12:
      var value = /** @type {number} */ (reader.readInt32());
      msg.setErrorLogCount(value);
      break;
    case 13:
      var value = /** @type {number} */ (reader.readInt32());
      msg.setWaitDuration(value);
      break;
    case 14:
      var value = /** @type {number} */ (reader.readInt32());
      msg.setRuntimeDuration(value);
      break;
    case 15:
      var value = /** @type {number} */ (reader.readInt32());
      msg.setTotalDuration(value);
      break;
    case 16:
      var value = /** @type {number} */ (reader.readInt32());
      msg.setPid(value);
      break;
    case 17:
      var value = /** @type {string} */ (reader.readString());
      msg.setRunType(value);
      break;
    case 18:
      var value = /** @type {string} */ (reader.readString());
      msg.setScheduleId(value);
      break;
    case 19:
      var value = /** @type {string} */ (reader.readString());
      msg.setType(value);
      break;
    case 20:
      var value = /** @type {string} */ (reader.readString());
      msg.setUserId(value);
      break;
    case 21:
      var value = /** @type {string} */ (reader.readString());
      msg.setCreateTs(value);
      break;
    case 22:
      var value = /** @type {string} */ (reader.readString());
      msg.setUpdateTs(value);
      break;
    default:
      reader.skipField();
      break;
    }
  }
  return msg;
};


/**
 * Serializes the message to binary data (in protobuf wire format).
 * @return {!Uint8Array}
 */
proto.grpc.Task.prototype.serializeBinary = function() {
  var writer = new jspb.BinaryWriter();
  proto.grpc.Task.serializeBinaryToWriter(this, writer);
  return writer.getResultBuffer();
};


/**
 * Serializes the given message to binary data (in protobuf wire
 * format), writing to the given BinaryWriter.
 * @param {!proto.grpc.Task} message
 * @param {!jspb.BinaryWriter} writer
 * @suppress {unusedLocalVariables} f is only used for nested messages
 */
proto.grpc.Task.serializeBinaryToWriter = function(message, writer) {
  var f = undefined;
  f = message.getId();
  if (f.length > 0) {
    writer.writeString(
      1,
      f
    );
  }
  f = message.getSpiderId();
  if (f.length > 0) {
    writer.writeString(
      2,
      f
    );
  }
  f = message.getStartTs();
  if (f.length > 0) {
    writer.writeString(
      3,
      f
    );
  }
  f = message.getFinishTs();
  if (f.length > 0) {
    writer.writeString(
      4,
      f
    );
  }
  f = message.getStatus();
  if (f.length > 0) {
    writer.writeString(
      5,
      f
    );
  }
  f = message.getNodeId();
  if (f.length > 0) {
    writer.writeString(
      6,
      f
    );
  }
  f = message.getCmd();
  if (f.length > 0) {
    writer.writeString(
      8,
      f
    );
  }
  f = message.getParam();
  if (f.length > 0) {
    writer.writeString(
      9,
      f
    );
  }
  f = message.getError();
  if (f.length > 0) {
    writer.writeString(
      10,
      f
    );
  }
  f = message.getResultCount();
  if (f !== 0) {
    writer.writeInt32(
      11,
      f
    );
  }
  f = message.getErrorLogCount();
  if (f !== 0) {
    writer.writeInt32(
      12,
      f
    );
  }
  f = message.getWaitDuration();
  if (f !== 0) {
    writer.writeInt32(
      13,
      f
    );
  }
  f = message.getRuntimeDuration();
  if (f !== 0) {
    writer.writeInt32(
      14,
      f
    );
  }
  f = message.getTotalDuration();
  if (f !== 0) {
    writer.writeInt32(
      15,
      f
    );
  }
  f = message.getPid();
  if (f !== 0) {
    writer.writeInt32(
      16,
      f
    );
  }
  f = message.getRunType();
  if (f.length > 0) {
    writer.writeString(
      17,
      f
    );
  }
  f = message.getScheduleId();
  if (f.length > 0) {
    writer.writeString(
      18,
      f
    );
  }
  f = message.getType();
  if (f.length > 0) {
    writer.writeString(
      19,
      f
    );
  }
  f = message.getUserId();
  if (f.length > 0) {
    writer.writeString(
      20,
      f
    );
  }
  f = message.getCreateTs();
  if (f.length > 0) {
    writer.writeString(
      21,
      f
    );
  }
  f = message.getUpdateTs();
  if (f.length > 0) {
    writer.writeString(
      22,
      f
    );
  }
};


/**
 * optional string _id = 1;
 * @return {string}
 */
proto.grpc.Task.prototype.getId = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 1, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setId = function(value) {
  return jspb.Message.setProto3StringField(this, 1, value);
};


/**
 * optional string spider_id = 2;
 * @return {string}
 */
proto.grpc.Task.prototype.getSpiderId = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 2, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setSpiderId = function(value) {
  return jspb.Message.setProto3StringField(this, 2, value);
};


/**
 * optional string start_ts = 3;
 * @return {string}
 */
proto.grpc.Task.prototype.getStartTs = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 3, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setStartTs = function(value) {
  return jspb.Message.setProto3StringField(this, 3, value);
};


/**
 * optional string finish_ts = 4;
 * @return {string}
 */
proto.grpc.Task.prototype.getFinishTs = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 4, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setFinishTs = function(value) {
  return jspb.Message.setProto3StringField(this, 4, value);
};


/**
 * optional string status = 5;
 * @return {string}
 */
proto.grpc.Task.prototype.getStatus = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 5, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setStatus = function(value) {
  return jspb.Message.setProto3StringField(this, 5, value);
};


/**
 * optional string node_id = 6;
 * @return {string}
 */
proto.grpc.Task.prototype.getNodeId = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 6, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setNodeId = function(value) {
  return jspb.Message.setProto3StringField(this, 6, value);
};


/**
 * optional string cmd = 8;
 * @return {string}
 */
proto.grpc.Task.prototype.getCmd = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 8, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setCmd = function(value) {
  return jspb.Message.setProto3StringField(this, 8, value);
};


/**
 * optional string param = 9;
 * @return {string}
 */
proto.grpc.Task.prototype.getParam = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 9, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setParam = function(value) {
  return jspb.Message.setProto3StringField(this, 9, value);
};


/**
 * optional string error = 10;
 * @return {string}
 */
proto.grpc.Task.prototype.getError = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 10, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setError = function(value) {
  return jspb.Message.setProto3StringField(this, 10, value);
};


/**
 * optional int32 result_count = 11;
 * @return {number}
 */
proto.grpc.Task.prototype.getResultCount = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 11, 0));
};


/**
 * @param {number} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setResultCount = function(value) {
  return jspb.Message.setProto3IntField(this, 11, value);
};


/**
 * optional int32 error_log_count = 12;
 * @return {number}
 */
proto.grpc.Task.prototype.getErrorLogCount = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 12, 0));
};


/**
 * @param {number} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setErrorLogCount = function(value) {
  return jspb.Message.setProto3IntField(this, 12, value);
};


/**
 * optional int32 wait_duration = 13;
 * @return {number}
 */
proto.grpc.Task.prototype.getWaitDuration = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 13, 0));
};


/**
 * @param {number} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setWaitDuration = function(value) {
  return jspb.Message.setProto3IntField(this, 13, value);
};


/**
 * optional int32 runtime_duration = 14;
 * @return {number}
 */
proto.grpc.Task.prototype.getRuntimeDuration = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 14, 0));
};


/**
 * @param {number} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setRuntimeDuration = function(value) {
  return jspb.Message.setProto3IntField(this, 14, value);
};


/**
 * optional int32 total_duration = 15;
 * @return {number}
 */
proto.grpc.Task.prototype.getTotalDuration = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 15, 0));
};


/**
 * @param {number} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setTotalDuration = function(value) {
  return jspb.Message.setProto3IntField(this, 15, value);
};


/**
 * optional int32 pid = 16;
 * @return {number}
 */
proto.grpc.Task.prototype.getPid = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 16, 0));
};


/**
 * @param {number} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setPid = function(value) {
  return jspb.Message.setProto3IntField(this, 16, value);
};


/**
 * optional string run_type = 17;
 * @return {string}
 */
proto.grpc.Task.prototype.getRunType = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 17, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setRunType = function(value) {
  return jspb.Message.setProto3StringField(this, 17, value);
};


/**
 * optional string schedule_id = 18;
 * @return {string}
 */
proto.grpc.Task.prototype.getScheduleId = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 18, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setScheduleId = function(value) {
  return jspb.Message.setProto3StringField(this, 18, value);
};


/**
 * optional string type = 19;
 * @return {string}
 */
proto.grpc.Task.prototype.getType = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 19, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setType = function(value) {
  return jspb.Message.setProto3StringField(this, 19, value);
};


/**
 * optional string user_id = 20;
 * @return {string}
 */
proto.grpc.Task.prototype.getUserId = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 20, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setUserId = function(value) {
  return jspb.Message.setProto3StringField(this, 20, value);
};


/**
 * optional string create_ts = 21;
 * @return {string}
 */
proto.grpc.Task.prototype.getCreateTs = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 21, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setCreateTs = function(value) {
  return jspb.Message.setProto3StringField(this, 21, value);
};


/**
 * optional string update_ts = 22;
 * @return {string}
 */
proto.grpc.Task.prototype.getUpdateTs = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 22, ""));
};


/**
 * @param {string} value
 * @return {!proto.grpc.Task} returns this
 */
proto.grpc.Task.prototype.setUpdateTs = function(value) {
  return jspb.Message.setProto3StringField(this, 22, value);
};


