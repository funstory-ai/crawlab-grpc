// Code generated by protoc-gen-go-grpc. DO NOT EDIT.

package grpc

import (
	context "context"
	grpc "google.golang.org/grpc"
	codes "google.golang.org/grpc/codes"
	status "google.golang.org/grpc/status"
)

// This is a compile-time assertion to ensure that this generated file
// is compatible with the grpc package it is being compiled against.
const _ = grpc.SupportPackageIsVersion7

// MessageServiceClient is the client API for MessageService service.
//
// For semantics around ctx use and closing/ending streaming RPCs, please refer to https://pkg.go.dev/google.golang.org/grpc/?tab=doc#ClientConn.NewStream.
type MessageServiceClient interface {
	Connect(ctx context.Context, opts ...grpc.CallOption) (MessageService_ConnectClient, error)
}

type messageServiceClient struct {
	cc grpc.ClientConnInterface
}

func NewMessageServiceClient(cc grpc.ClientConnInterface) MessageServiceClient {
	return &messageServiceClient{cc}
}

func (c *messageServiceClient) Connect(ctx context.Context, opts ...grpc.CallOption) (MessageService_ConnectClient, error) {
	stream, err := c.cc.NewStream(ctx, &_MessageService_serviceDesc.Streams[0], "/grpc.MessageService/Connect", opts...)
	if err != nil {
		return nil, err
	}
	x := &messageServiceConnectClient{stream}
	return x, nil
}

type MessageService_ConnectClient interface {
	Send(*StreamMessage) error
	Recv() (*StreamMessage, error)
	grpc.ClientStream
}

type messageServiceConnectClient struct {
	grpc.ClientStream
}

func (x *messageServiceConnectClient) Send(m *StreamMessage) error {
	return x.ClientStream.SendMsg(m)
}

func (x *messageServiceConnectClient) Recv() (*StreamMessage, error) {
	m := new(StreamMessage)
	if err := x.ClientStream.RecvMsg(m); err != nil {
		return nil, err
	}
	return m, nil
}

// MessageServiceServer is the server API for MessageService service.
// All implementations must embed UnimplementedMessageServiceServer
// for forward compatibility
type MessageServiceServer interface {
	Connect(MessageService_ConnectServer) error
	mustEmbedUnimplementedMessageServiceServer()
}

// UnimplementedMessageServiceServer must be embedded to have forward compatible implementations.
type UnimplementedMessageServiceServer struct {
}

func (UnimplementedMessageServiceServer) Connect(MessageService_ConnectServer) error {
	return status.Errorf(codes.Unimplemented, "method Connect not implemented")
}
func (UnimplementedMessageServiceServer) mustEmbedUnimplementedMessageServiceServer() {}

// UnsafeMessageServiceServer may be embedded to opt out of forward compatibility for this service.
// Use of this interface is not recommended, as added methods to MessageServiceServer will
// result in compilation errors.
type UnsafeMessageServiceServer interface {
	mustEmbedUnimplementedMessageServiceServer()
}

func RegisterMessageServiceServer(s grpc.ServiceRegistrar, srv MessageServiceServer) {
	s.RegisterService(&_MessageService_serviceDesc, srv)
}

func _MessageService_Connect_Handler(srv interface{}, stream grpc.ServerStream) error {
	return srv.(MessageServiceServer).Connect(&messageServiceConnectServer{stream})
}

type MessageService_ConnectServer interface {
	Send(*StreamMessage) error
	Recv() (*StreamMessage, error)
	grpc.ServerStream
}

type messageServiceConnectServer struct {
	grpc.ServerStream
}

func (x *messageServiceConnectServer) Send(m *StreamMessage) error {
	return x.ServerStream.SendMsg(m)
}

func (x *messageServiceConnectServer) Recv() (*StreamMessage, error) {
	m := new(StreamMessage)
	if err := x.ServerStream.RecvMsg(m); err != nil {
		return nil, err
	}
	return m, nil
}

var _MessageService_serviceDesc = grpc.ServiceDesc{
	ServiceName: "grpc.MessageService",
	HandlerType: (*MessageServiceServer)(nil),
	Methods:     []grpc.MethodDesc{},
	Streams: []grpc.StreamDesc{
		{
			StreamName:    "Connect",
			Handler:       _MessageService_Connect_Handler,
			ServerStreams: true,
			ClientStreams: true,
		},
	},
	Metadata: "services/message_service.proto",
}