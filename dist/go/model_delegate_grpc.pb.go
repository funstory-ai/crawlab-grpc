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

// ModelDelegateClient is the client API for ModelDelegate service.
//
// For semantics around ctx use and closing/ending streaming RPCs, please refer to https://pkg.go.dev/google.golang.org/grpc/?tab=doc#ClientConn.NewStream.
type ModelDelegateClient interface {
	Do(ctx context.Context, in *Request, opts ...grpc.CallOption) (*Response, error)
}

type modelDelegateClient struct {
	cc grpc.ClientConnInterface
}

func NewModelDelegateClient(cc grpc.ClientConnInterface) ModelDelegateClient {
	return &modelDelegateClient{cc}
}

func (c *modelDelegateClient) Do(ctx context.Context, in *Request, opts ...grpc.CallOption) (*Response, error) {
	out := new(Response)
	err := c.cc.Invoke(ctx, "/grpc.ModelDelegate/Do", in, out, opts...)
	if err != nil {
		return nil, err
	}
	return out, nil
}

// ModelDelegateServer is the server API for ModelDelegate service.
// All implementations must embed UnimplementedModelDelegateServer
// for forward compatibility
type ModelDelegateServer interface {
	Do(context.Context, *Request) (*Response, error)
	mustEmbedUnimplementedModelDelegateServer()
}

// UnimplementedModelDelegateServer must be embedded to have forward compatible implementations.
type UnimplementedModelDelegateServer struct {
}

func (UnimplementedModelDelegateServer) Do(context.Context, *Request) (*Response, error) {
	return nil, status.Errorf(codes.Unimplemented, "method Do not implemented")
}
func (UnimplementedModelDelegateServer) mustEmbedUnimplementedModelDelegateServer() {}

// UnsafeModelDelegateServer may be embedded to opt out of forward compatibility for this service.
// Use of this interface is not recommended, as added methods to ModelDelegateServer will
// result in compilation errors.
type UnsafeModelDelegateServer interface {
	mustEmbedUnimplementedModelDelegateServer()
}

func RegisterModelDelegateServer(s grpc.ServiceRegistrar, srv ModelDelegateServer) {
	s.RegisterService(&_ModelDelegate_serviceDesc, srv)
}

func _ModelDelegate_Do_Handler(srv interface{}, ctx context.Context, dec func(interface{}) error, interceptor grpc.UnaryServerInterceptor) (interface{}, error) {
	in := new(Request)
	if err := dec(in); err != nil {
		return nil, err
	}
	if interceptor == nil {
		return srv.(ModelDelegateServer).Do(ctx, in)
	}
	info := &grpc.UnaryServerInfo{
		Server:     srv,
		FullMethod: "/grpc.ModelDelegate/Do",
	}
	handler := func(ctx context.Context, req interface{}) (interface{}, error) {
		return srv.(ModelDelegateServer).Do(ctx, req.(*Request))
	}
	return interceptor(ctx, in, info, handler)
}

var _ModelDelegate_serviceDesc = grpc.ServiceDesc{
	ServiceName: "grpc.ModelDelegate",
	HandlerType: (*ModelDelegateServer)(nil),
	Methods: []grpc.MethodDesc{
		{
			MethodName: "Do",
			Handler:    _ModelDelegate_Do_Handler,
		},
	},
	Streams:  []grpc.StreamDesc{},
	Metadata: "services/model_delegate.proto",
}
