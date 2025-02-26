// Code generated by protoc-gen-go. DO NOT EDIT.
// versions:
// 	protoc-gen-go v1.25.0
// 	protoc        v3.14.0
// source: entity/stream_message_code.proto

package grpc

import (
	proto "github.com/golang/protobuf/proto"
	protoreflect "google.golang.org/protobuf/reflect/protoreflect"
	protoimpl "google.golang.org/protobuf/runtime/protoimpl"
	reflect "reflect"
	sync "sync"
)

const (
	// Verify that this generated code is sufficiently up-to-date.
	_ = protoimpl.EnforceVersion(20 - protoimpl.MinVersion)
	// Verify that runtime/protoimpl is sufficiently up-to-date.
	_ = protoimpl.EnforceVersion(protoimpl.MaxVersion - 20)
)

// This is a compile-time assertion that a sufficiently up-to-date version
// of the legacy proto package is being used.
const _ = proto.ProtoPackageIsVersion4

type StreamMessageCode int32

const (
	// ping worker nodes to check their health
	StreamMessageCode_PING StreamMessageCode = 0
	// ask worker node(s) to run task with given id
	StreamMessageCode_RUN_TASK StreamMessageCode = 1
	// ask worker node(s) to cancel task with given id
	StreamMessageCode_CANCEL_TASK StreamMessageCode = 2
	// insert data
	StreamMessageCode_INSERT_DATA StreamMessageCode = 3
	// insert logs
	StreamMessageCode_INSERT_LOGS StreamMessageCode = 4
	// send event
	StreamMessageCode_SEND_EVENT StreamMessageCode = 5
	// install plugin
	StreamMessageCode_INSTALL_PLUGIN StreamMessageCode = 6
	// uninstall plugin
	StreamMessageCode_UNINSTALL_PLUGIN StreamMessageCode = 7
	// start plugin
	StreamMessageCode_START_PLUGIN StreamMessageCode = 8
	// stop plugin
	StreamMessageCode_STOP_PLUGIN StreamMessageCode = 9
	// connect
	StreamMessageCode_CONNECT StreamMessageCode = 10
	// disconnect
	StreamMessageCode_DISCONNECT StreamMessageCode = 11
	// send
	StreamMessageCode_SEND StreamMessageCode = 12
)

// Enum value maps for StreamMessageCode.
var (
	StreamMessageCode_name = map[int32]string{
		0:  "PING",
		1:  "RUN_TASK",
		2:  "CANCEL_TASK",
		3:  "INSERT_DATA",
		4:  "INSERT_LOGS",
		5:  "SEND_EVENT",
		6:  "INSTALL_PLUGIN",
		7:  "UNINSTALL_PLUGIN",
		8:  "START_PLUGIN",
		9:  "STOP_PLUGIN",
		10: "CONNECT",
		11: "DISCONNECT",
		12: "SEND",
	}
	StreamMessageCode_value = map[string]int32{
		"PING":             0,
		"RUN_TASK":         1,
		"CANCEL_TASK":      2,
		"INSERT_DATA":      3,
		"INSERT_LOGS":      4,
		"SEND_EVENT":       5,
		"INSTALL_PLUGIN":   6,
		"UNINSTALL_PLUGIN": 7,
		"START_PLUGIN":     8,
		"STOP_PLUGIN":      9,
		"CONNECT":          10,
		"DISCONNECT":       11,
		"SEND":             12,
	}
)

func (x StreamMessageCode) Enum() *StreamMessageCode {
	p := new(StreamMessageCode)
	*p = x
	return p
}

func (x StreamMessageCode) String() string {
	return protoimpl.X.EnumStringOf(x.Descriptor(), protoreflect.EnumNumber(x))
}

func (StreamMessageCode) Descriptor() protoreflect.EnumDescriptor {
	return file_entity_stream_message_code_proto_enumTypes[0].Descriptor()
}

func (StreamMessageCode) Type() protoreflect.EnumType {
	return &file_entity_stream_message_code_proto_enumTypes[0]
}

func (x StreamMessageCode) Number() protoreflect.EnumNumber {
	return protoreflect.EnumNumber(x)
}

// Deprecated: Use StreamMessageCode.Descriptor instead.
func (StreamMessageCode) EnumDescriptor() ([]byte, []int) {
	return file_entity_stream_message_code_proto_rawDescGZIP(), []int{0}
}

var File_entity_stream_message_code_proto protoreflect.FileDescriptor

var file_entity_stream_message_code_proto_rawDesc = []byte{
	0x0a, 0x20, 0x65, 0x6e, 0x74, 0x69, 0x74, 0x79, 0x2f, 0x73, 0x74, 0x72, 0x65, 0x61, 0x6d, 0x5f,
	0x6d, 0x65, 0x73, 0x73, 0x61, 0x67, 0x65, 0x5f, 0x63, 0x6f, 0x64, 0x65, 0x2e, 0x70, 0x72, 0x6f,
	0x74, 0x6f, 0x12, 0x04, 0x67, 0x72, 0x70, 0x63, 0x2a, 0xe2, 0x01, 0x0a, 0x11, 0x53, 0x74, 0x72,
	0x65, 0x61, 0x6d, 0x4d, 0x65, 0x73, 0x73, 0x61, 0x67, 0x65, 0x43, 0x6f, 0x64, 0x65, 0x12, 0x08,
	0x0a, 0x04, 0x50, 0x49, 0x4e, 0x47, 0x10, 0x00, 0x12, 0x0c, 0x0a, 0x08, 0x52, 0x55, 0x4e, 0x5f,
	0x54, 0x41, 0x53, 0x4b, 0x10, 0x01, 0x12, 0x0f, 0x0a, 0x0b, 0x43, 0x41, 0x4e, 0x43, 0x45, 0x4c,
	0x5f, 0x54, 0x41, 0x53, 0x4b, 0x10, 0x02, 0x12, 0x0f, 0x0a, 0x0b, 0x49, 0x4e, 0x53, 0x45, 0x52,
	0x54, 0x5f, 0x44, 0x41, 0x54, 0x41, 0x10, 0x03, 0x12, 0x0f, 0x0a, 0x0b, 0x49, 0x4e, 0x53, 0x45,
	0x52, 0x54, 0x5f, 0x4c, 0x4f, 0x47, 0x53, 0x10, 0x04, 0x12, 0x0e, 0x0a, 0x0a, 0x53, 0x45, 0x4e,
	0x44, 0x5f, 0x45, 0x56, 0x45, 0x4e, 0x54, 0x10, 0x05, 0x12, 0x12, 0x0a, 0x0e, 0x49, 0x4e, 0x53,
	0x54, 0x41, 0x4c, 0x4c, 0x5f, 0x50, 0x4c, 0x55, 0x47, 0x49, 0x4e, 0x10, 0x06, 0x12, 0x14, 0x0a,
	0x10, 0x55, 0x4e, 0x49, 0x4e, 0x53, 0x54, 0x41, 0x4c, 0x4c, 0x5f, 0x50, 0x4c, 0x55, 0x47, 0x49,
	0x4e, 0x10, 0x07, 0x12, 0x10, 0x0a, 0x0c, 0x53, 0x54, 0x41, 0x52, 0x54, 0x5f, 0x50, 0x4c, 0x55,
	0x47, 0x49, 0x4e, 0x10, 0x08, 0x12, 0x0f, 0x0a, 0x0b, 0x53, 0x54, 0x4f, 0x50, 0x5f, 0x50, 0x4c,
	0x55, 0x47, 0x49, 0x4e, 0x10, 0x09, 0x12, 0x0b, 0x0a, 0x07, 0x43, 0x4f, 0x4e, 0x4e, 0x45, 0x43,
	0x54, 0x10, 0x0a, 0x12, 0x0e, 0x0a, 0x0a, 0x44, 0x49, 0x53, 0x43, 0x4f, 0x4e, 0x4e, 0x45, 0x43,
	0x54, 0x10, 0x0b, 0x12, 0x08, 0x0a, 0x04, 0x53, 0x45, 0x4e, 0x44, 0x10, 0x0c, 0x42, 0x08, 0x5a,
	0x06, 0x2e, 0x3b, 0x67, 0x72, 0x70, 0x63, 0x62, 0x06, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x33,
}

var (
	file_entity_stream_message_code_proto_rawDescOnce sync.Once
	file_entity_stream_message_code_proto_rawDescData = file_entity_stream_message_code_proto_rawDesc
)

func file_entity_stream_message_code_proto_rawDescGZIP() []byte {
	file_entity_stream_message_code_proto_rawDescOnce.Do(func() {
		file_entity_stream_message_code_proto_rawDescData = protoimpl.X.CompressGZIP(file_entity_stream_message_code_proto_rawDescData)
	})
	return file_entity_stream_message_code_proto_rawDescData
}

var file_entity_stream_message_code_proto_enumTypes = make([]protoimpl.EnumInfo, 1)
var file_entity_stream_message_code_proto_goTypes = []interface{}{
	(StreamMessageCode)(0), // 0: grpc.StreamMessageCode
}
var file_entity_stream_message_code_proto_depIdxs = []int32{
	0, // [0:0] is the sub-list for method output_type
	0, // [0:0] is the sub-list for method input_type
	0, // [0:0] is the sub-list for extension type_name
	0, // [0:0] is the sub-list for extension extendee
	0, // [0:0] is the sub-list for field type_name
}

func init() { file_entity_stream_message_code_proto_init() }
func file_entity_stream_message_code_proto_init() {
	if File_entity_stream_message_code_proto != nil {
		return
	}
	type x struct{}
	out := protoimpl.TypeBuilder{
		File: protoimpl.DescBuilder{
			GoPackagePath: reflect.TypeOf(x{}).PkgPath(),
			RawDescriptor: file_entity_stream_message_code_proto_rawDesc,
			NumEnums:      1,
			NumMessages:   0,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_entity_stream_message_code_proto_goTypes,
		DependencyIndexes: file_entity_stream_message_code_proto_depIdxs,
		EnumInfos:         file_entity_stream_message_code_proto_enumTypes,
	}.Build()
	File_entity_stream_message_code_proto = out.File
	file_entity_stream_message_code_proto_rawDesc = nil
	file_entity_stream_message_code_proto_goTypes = nil
	file_entity_stream_message_code_proto_depIdxs = nil
}
