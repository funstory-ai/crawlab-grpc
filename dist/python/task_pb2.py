# -*- coding: utf-8 -*-
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto
"""Generated protocol buffer code."""
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()




DESCRIPTOR = _descriptor.FileDescriptor(
  name='task.proto',
  package='',
  syntax='proto3',
  serialized_options=b'Z\016.;crawlab_grpc',
  create_key=_descriptor._internal_create_key,
  serialized_pb=b'\n\ntask.proto\"3\n\x12TaskServiceRequest\x12\x0f\n\x07task_id\x18\x01 \x01(\t\x12\x0c\n\x04\x64\x61ta\x18\x02 \x01(\t\"D\n\x13TaskServiceResponse\x12\x0e\n\x06status\x18\x01 \x01(\t\x12\x0f\n\x07message\x18\x02 \x01(\t\x12\x0c\n\x04\x64\x61ta\x18\x03 \x01(\t2\xf0\x01\n\x0bTaskService\x12\x36\n\x07GetTask\x12\x13.TaskServiceRequest\x1a\x14.TaskServiceResponse\"\x00\x12\x38\n\tGetSpider\x12\x13.TaskServiceRequest\x1a\x14.TaskServiceResponse\"\x00\x12\x36\n\x07GetNode\x12\x13.TaskServiceRequest\x1a\x14.TaskServiceResponse\"\x00\x12\x37\n\x08SaveItem\x12\x13.TaskServiceRequest\x1a\x14.TaskServiceResponse\"\x00\x42\x10Z\x0e.;crawlab_grpcb\x06proto3'
)




_TASKSERVICEREQUEST = _descriptor.Descriptor(
  name='TaskServiceRequest',
  full_name='TaskServiceRequest',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='task_id', full_name='TaskServiceRequest.task_id', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='data', full_name='TaskServiceRequest.data', index=1,
      number=2, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=14,
  serialized_end=65,
)


_TASKSERVICERESPONSE = _descriptor.Descriptor(
  name='TaskServiceResponse',
  full_name='TaskServiceResponse',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='status', full_name='TaskServiceResponse.status', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='message', full_name='TaskServiceResponse.message', index=1,
      number=2, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='data', full_name='TaskServiceResponse.data', index=2,
      number=3, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=67,
  serialized_end=135,
)

DESCRIPTOR.message_types_by_name['TaskServiceRequest'] = _TASKSERVICEREQUEST
DESCRIPTOR.message_types_by_name['TaskServiceResponse'] = _TASKSERVICERESPONSE
_sym_db.RegisterFileDescriptor(DESCRIPTOR)

TaskServiceRequest = _reflection.GeneratedProtocolMessageType('TaskServiceRequest', (_message.Message,), {
  'DESCRIPTOR' : _TASKSERVICEREQUEST,
  '__module__' : 'task_pb2'
  # @@protoc_insertion_point(class_scope:TaskServiceRequest)
  })
_sym_db.RegisterMessage(TaskServiceRequest)

TaskServiceResponse = _reflection.GeneratedProtocolMessageType('TaskServiceResponse', (_message.Message,), {
  'DESCRIPTOR' : _TASKSERVICERESPONSE,
  '__module__' : 'task_pb2'
  # @@protoc_insertion_point(class_scope:TaskServiceResponse)
  })
_sym_db.RegisterMessage(TaskServiceResponse)


DESCRIPTOR._options = None

_TASKSERVICE = _descriptor.ServiceDescriptor(
  name='TaskService',
  full_name='TaskService',
  file=DESCRIPTOR,
  index=0,
  serialized_options=None,
  create_key=_descriptor._internal_create_key,
  serialized_start=138,
  serialized_end=378,
  methods=[
  _descriptor.MethodDescriptor(
    name='GetTask',
    full_name='TaskService.GetTask',
    index=0,
    containing_service=None,
    input_type=_TASKSERVICEREQUEST,
    output_type=_TASKSERVICERESPONSE,
    serialized_options=None,
    create_key=_descriptor._internal_create_key,
  ),
  _descriptor.MethodDescriptor(
    name='GetSpider',
    full_name='TaskService.GetSpider',
    index=1,
    containing_service=None,
    input_type=_TASKSERVICEREQUEST,
    output_type=_TASKSERVICERESPONSE,
    serialized_options=None,
    create_key=_descriptor._internal_create_key,
  ),
  _descriptor.MethodDescriptor(
    name='GetNode',
    full_name='TaskService.GetNode',
    index=2,
    containing_service=None,
    input_type=_TASKSERVICEREQUEST,
    output_type=_TASKSERVICERESPONSE,
    serialized_options=None,
    create_key=_descriptor._internal_create_key,
  ),
  _descriptor.MethodDescriptor(
    name='SaveItem',
    full_name='TaskService.SaveItem',
    index=3,
    containing_service=None,
    input_type=_TASKSERVICEREQUEST,
    output_type=_TASKSERVICERESPONSE,
    serialized_options=None,
    create_key=_descriptor._internal_create_key,
  ),
])
_sym_db.RegisterServiceDescriptor(_TASKSERVICE)

DESCRIPTOR.services_by_name['TaskService'] = _TASKSERVICE

# @@protoc_insertion_point(module_scope)