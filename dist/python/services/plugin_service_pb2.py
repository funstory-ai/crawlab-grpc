# -*- coding: utf-8 -*-
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: services/plugin_service.proto
"""Generated protocol buffer code."""
from google.protobuf import descriptor as _descriptor
from google.protobuf import descriptor_pool as _descriptor_pool
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()


from entity import plugin_request_pb2 as entity_dot_plugin__request__pb2
from entity import response_pb2 as entity_dot_response__pb2
from entity import stream_message_pb2 as entity_dot_stream__message__pb2


DESCRIPTOR = _descriptor_pool.Default().AddSerializedFile(b'\n\x1dservices/plugin_service.proto\x12\x04grpc\x1a\x1b\x65ntity/plugin_request.proto\x1a\x15\x65ntity/response.proto\x1a\x1b\x65ntity/stream_message.proto2\xb5\x01\n\rPluginService\x12\x31\n\x08Register\x12\x13.grpc.PluginRequest\x1a\x0e.grpc.Response\"\x00\x12\x39\n\tSubscribe\x12\x13.grpc.PluginRequest\x1a\x13.grpc.StreamMessage\"\x00\x30\x01\x12\x36\n\x04Poll\x12\x13.grpc.StreamMessage\x1a\x13.grpc.StreamMessage\"\x00(\x01\x30\x01\x42\x08Z\x06.;grpcb\x06proto3')



_PLUGINSERVICE = DESCRIPTOR.services_by_name['PluginService']
if _descriptor._USE_C_DESCRIPTORS == False:

  DESCRIPTOR._options = None
  DESCRIPTOR._serialized_options = b'Z\006.;grpc'
  _PLUGINSERVICE._serialized_start=121
  _PLUGINSERVICE._serialized_end=302
# @@protoc_insertion_point(module_scope)
