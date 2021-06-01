# Generated by the gRPC Python protocol compiler plugin. DO NOT EDIT!
"""Client and server classes corresponding to protobuf-defined services."""
import grpc

from entity import request_pb2 as entity_dot_request__pb2
from entity import response_pb2 as entity_dot_response__pb2
from entity import stream_message_pb2 as entity_dot_stream__message__pb2


class TaskServiceStub(object):
    """Missing associated documentation comment in .proto file."""

    def __init__(self, channel):
        """Constructor.

        Args:
            channel: A grpc.Channel.
        """
        self.GetTaskInfo = channel.unary_unary(
                '/grpc.TaskService/GetTaskInfo',
                request_serializer=entity_dot_request__pb2.Request.SerializeToString,
                response_deserializer=entity_dot_response__pb2.Response.FromString,
                )
        self.SaveItem = channel.unary_unary(
                '/grpc.TaskService/SaveItem',
                request_serializer=entity_dot_request__pb2.Request.SerializeToString,
                response_deserializer=entity_dot_response__pb2.Response.FromString,
                )
        self.SaveItems = channel.unary_unary(
                '/grpc.TaskService/SaveItems',
                request_serializer=entity_dot_request__pb2.Request.SerializeToString,
                response_deserializer=entity_dot_response__pb2.Response.FromString,
                )
        self.FetchTask = channel.unary_unary(
                '/grpc.TaskService/FetchTask',
                request_serializer=entity_dot_request__pb2.Request.SerializeToString,
                response_deserializer=entity_dot_response__pb2.Response.FromString,
                )
        self.Subscribe = channel.stream_unary(
                '/grpc.TaskService/Subscribe',
                request_serializer=entity_dot_stream__message__pb2.StreamMessage.SerializeToString,
                response_deserializer=entity_dot_response__pb2.Response.FromString,
                )


class TaskServiceServicer(object):
    """Missing associated documentation comment in .proto file."""

    def GetTaskInfo(self, request, context):
        """Missing associated documentation comment in .proto file."""
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def SaveItem(self, request, context):
        """Missing associated documentation comment in .proto file."""
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def SaveItems(self, request, context):
        """Missing associated documentation comment in .proto file."""
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def FetchTask(self, request, context):
        """Missing associated documentation comment in .proto file."""
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')

    def Subscribe(self, request_iterator, context):
        """Missing associated documentation comment in .proto file."""
        context.set_code(grpc.StatusCode.UNIMPLEMENTED)
        context.set_details('Method not implemented!')
        raise NotImplementedError('Method not implemented!')


def add_TaskServiceServicer_to_server(servicer, server):
    rpc_method_handlers = {
            'GetTaskInfo': grpc.unary_unary_rpc_method_handler(
                    servicer.GetTaskInfo,
                    request_deserializer=entity_dot_request__pb2.Request.FromString,
                    response_serializer=entity_dot_response__pb2.Response.SerializeToString,
            ),
            'SaveItem': grpc.unary_unary_rpc_method_handler(
                    servicer.SaveItem,
                    request_deserializer=entity_dot_request__pb2.Request.FromString,
                    response_serializer=entity_dot_response__pb2.Response.SerializeToString,
            ),
            'SaveItems': grpc.unary_unary_rpc_method_handler(
                    servicer.SaveItems,
                    request_deserializer=entity_dot_request__pb2.Request.FromString,
                    response_serializer=entity_dot_response__pb2.Response.SerializeToString,
            ),
            'FetchTask': grpc.unary_unary_rpc_method_handler(
                    servicer.FetchTask,
                    request_deserializer=entity_dot_request__pb2.Request.FromString,
                    response_serializer=entity_dot_response__pb2.Response.SerializeToString,
            ),
            'Subscribe': grpc.stream_unary_rpc_method_handler(
                    servicer.Subscribe,
                    request_deserializer=entity_dot_stream__message__pb2.StreamMessage.FromString,
                    response_serializer=entity_dot_response__pb2.Response.SerializeToString,
            ),
    }
    generic_handler = grpc.method_handlers_generic_handler(
            'grpc.TaskService', rpc_method_handlers)
    server.add_generic_rpc_handlers((generic_handler,))


 # This class is part of an EXPERIMENTAL API.
class TaskService(object):
    """Missing associated documentation comment in .proto file."""

    @staticmethod
    def GetTaskInfo(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/grpc.TaskService/GetTaskInfo',
            entity_dot_request__pb2.Request.SerializeToString,
            entity_dot_response__pb2.Response.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def SaveItem(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/grpc.TaskService/SaveItem',
            entity_dot_request__pb2.Request.SerializeToString,
            entity_dot_response__pb2.Response.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def SaveItems(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/grpc.TaskService/SaveItems',
            entity_dot_request__pb2.Request.SerializeToString,
            entity_dot_response__pb2.Response.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def FetchTask(request,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.unary_unary(request, target, '/grpc.TaskService/FetchTask',
            entity_dot_request__pb2.Request.SerializeToString,
            entity_dot_response__pb2.Response.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)

    @staticmethod
    def Subscribe(request_iterator,
            target,
            options=(),
            channel_credentials=None,
            call_credentials=None,
            insecure=False,
            compression=None,
            wait_for_ready=None,
            timeout=None,
            metadata=None):
        return grpc.experimental.stream_unary(request_iterator, target, '/grpc.TaskService/Subscribe',
            entity_dot_stream__message__pb2.StreamMessage.SerializeToString,
            entity_dot_response__pb2.Response.FromString,
            options, channel_credentials,
            insecure, call_credentials, compression, wait_for_ready, timeout, metadata)