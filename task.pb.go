// Code generated by protoc-gen-go. DO NOT EDIT.
// versions:
// 	protoc-gen-go v1.28.0
// 	protoc        v3.19.1
// source: models/task.proto

package grpc

import (
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

type Task struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	XId        string `protobuf:"bytes,1,opt,name=_id,json=Id,proto3" json:"_id,omitempty"`
	SpiderId   string `protobuf:"bytes,2,opt,name=spider_id,json=spiderId,proto3" json:"spider_id,omitempty"`
	Status     string `protobuf:"bytes,5,opt,name=status,proto3" json:"status,omitempty"`
	NodeId     string `protobuf:"bytes,6,opt,name=node_id,json=nodeId,proto3" json:"node_id,omitempty"`
	Cmd        string `protobuf:"bytes,8,opt,name=cmd,proto3" json:"cmd,omitempty"`
	Param      string `protobuf:"bytes,9,opt,name=param,proto3" json:"param,omitempty"`
	Error      string `protobuf:"bytes,10,opt,name=error,proto3" json:"error,omitempty"`
	Pid        int32  `protobuf:"varint,16,opt,name=pid,proto3" json:"pid,omitempty"`
	RunType    string `protobuf:"bytes,17,opt,name=run_type,json=runType,proto3" json:"run_type,omitempty"`
	ScheduleId string `protobuf:"bytes,18,opt,name=schedule_id,json=scheduleId,proto3" json:"schedule_id,omitempty"`
	Type       string `protobuf:"bytes,19,opt,name=type,proto3" json:"type,omitempty"`
}

func (x *Task) Reset() {
	*x = Task{}
	if protoimpl.UnsafeEnabled {
		mi := &file_models_task_proto_msgTypes[0]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *Task) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*Task) ProtoMessage() {}

func (x *Task) ProtoReflect() protoreflect.Message {
	mi := &file_models_task_proto_msgTypes[0]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use Task.ProtoReflect.Descriptor instead.
func (*Task) Descriptor() ([]byte, []int) {
	return file_models_task_proto_rawDescGZIP(), []int{0}
}

func (x *Task) GetXId() string {
	if x != nil {
		return x.XId
	}
	return ""
}

func (x *Task) GetSpiderId() string {
	if x != nil {
		return x.SpiderId
	}
	return ""
}

func (x *Task) GetStatus() string {
	if x != nil {
		return x.Status
	}
	return ""
}

func (x *Task) GetNodeId() string {
	if x != nil {
		return x.NodeId
	}
	return ""
}

func (x *Task) GetCmd() string {
	if x != nil {
		return x.Cmd
	}
	return ""
}

func (x *Task) GetParam() string {
	if x != nil {
		return x.Param
	}
	return ""
}

func (x *Task) GetError() string {
	if x != nil {
		return x.Error
	}
	return ""
}

func (x *Task) GetPid() int32 {
	if x != nil {
		return x.Pid
	}
	return 0
}

func (x *Task) GetRunType() string {
	if x != nil {
		return x.RunType
	}
	return ""
}

func (x *Task) GetScheduleId() string {
	if x != nil {
		return x.ScheduleId
	}
	return ""
}

func (x *Task) GetType() string {
	if x != nil {
		return x.Type
	}
	return ""
}

var File_models_task_proto protoreflect.FileDescriptor

var file_models_task_proto_rawDesc = []byte{
	0x0a, 0x11, 0x6d, 0x6f, 0x64, 0x65, 0x6c, 0x73, 0x2f, 0x74, 0x61, 0x73, 0x6b, 0x2e, 0x70, 0x72,
	0x6f, 0x74, 0x6f, 0x12, 0x04, 0x67, 0x72, 0x70, 0x63, 0x22, 0x85, 0x02, 0x0a, 0x04, 0x54, 0x61,
	0x73, 0x6b, 0x12, 0x0f, 0x0a, 0x03, 0x5f, 0x69, 0x64, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x52,
	0x02, 0x49, 0x64, 0x12, 0x1b, 0x0a, 0x09, 0x73, 0x70, 0x69, 0x64, 0x65, 0x72, 0x5f, 0x69, 0x64,
	0x18, 0x02, 0x20, 0x01, 0x28, 0x09, 0x52, 0x08, 0x73, 0x70, 0x69, 0x64, 0x65, 0x72, 0x49, 0x64,
	0x12, 0x16, 0x0a, 0x06, 0x73, 0x74, 0x61, 0x74, 0x75, 0x73, 0x18, 0x05, 0x20, 0x01, 0x28, 0x09,
	0x52, 0x06, 0x73, 0x74, 0x61, 0x74, 0x75, 0x73, 0x12, 0x17, 0x0a, 0x07, 0x6e, 0x6f, 0x64, 0x65,
	0x5f, 0x69, 0x64, 0x18, 0x06, 0x20, 0x01, 0x28, 0x09, 0x52, 0x06, 0x6e, 0x6f, 0x64, 0x65, 0x49,
	0x64, 0x12, 0x10, 0x0a, 0x03, 0x63, 0x6d, 0x64, 0x18, 0x08, 0x20, 0x01, 0x28, 0x09, 0x52, 0x03,
	0x63, 0x6d, 0x64, 0x12, 0x14, 0x0a, 0x05, 0x70, 0x61, 0x72, 0x61, 0x6d, 0x18, 0x09, 0x20, 0x01,
	0x28, 0x09, 0x52, 0x05, 0x70, 0x61, 0x72, 0x61, 0x6d, 0x12, 0x14, 0x0a, 0x05, 0x65, 0x72, 0x72,
	0x6f, 0x72, 0x18, 0x0a, 0x20, 0x01, 0x28, 0x09, 0x52, 0x05, 0x65, 0x72, 0x72, 0x6f, 0x72, 0x12,
	0x10, 0x0a, 0x03, 0x70, 0x69, 0x64, 0x18, 0x10, 0x20, 0x01, 0x28, 0x05, 0x52, 0x03, 0x70, 0x69,
	0x64, 0x12, 0x19, 0x0a, 0x08, 0x72, 0x75, 0x6e, 0x5f, 0x74, 0x79, 0x70, 0x65, 0x18, 0x11, 0x20,
	0x01, 0x28, 0x09, 0x52, 0x07, 0x72, 0x75, 0x6e, 0x54, 0x79, 0x70, 0x65, 0x12, 0x1f, 0x0a, 0x0b,
	0x73, 0x63, 0x68, 0x65, 0x64, 0x75, 0x6c, 0x65, 0x5f, 0x69, 0x64, 0x18, 0x12, 0x20, 0x01, 0x28,
	0x09, 0x52, 0x0a, 0x73, 0x63, 0x68, 0x65, 0x64, 0x75, 0x6c, 0x65, 0x49, 0x64, 0x12, 0x12, 0x0a,
	0x04, 0x74, 0x79, 0x70, 0x65, 0x18, 0x13, 0x20, 0x01, 0x28, 0x09, 0x52, 0x04, 0x74, 0x79, 0x70,
	0x65, 0x42, 0x08, 0x5a, 0x06, 0x2e, 0x3b, 0x67, 0x72, 0x70, 0x63, 0x62, 0x06, 0x70, 0x72, 0x6f,
	0x74, 0x6f, 0x33,
}

var (
	file_models_task_proto_rawDescOnce sync.Once
	file_models_task_proto_rawDescData = file_models_task_proto_rawDesc
)

func file_models_task_proto_rawDescGZIP() []byte {
	file_models_task_proto_rawDescOnce.Do(func() {
		file_models_task_proto_rawDescData = protoimpl.X.CompressGZIP(file_models_task_proto_rawDescData)
	})
	return file_models_task_proto_rawDescData
}

var file_models_task_proto_msgTypes = make([]protoimpl.MessageInfo, 1)
var file_models_task_proto_goTypes = []interface{}{
	(*Task)(nil), // 0: grpc.Task
}
var file_models_task_proto_depIdxs = []int32{
	0, // [0:0] is the sub-list for method output_type
	0, // [0:0] is the sub-list for method input_type
	0, // [0:0] is the sub-list for extension type_name
	0, // [0:0] is the sub-list for extension extendee
	0, // [0:0] is the sub-list for field type_name
}

func init() { file_models_task_proto_init() }
func file_models_task_proto_init() {
	if File_models_task_proto != nil {
		return
	}
	if !protoimpl.UnsafeEnabled {
		file_models_task_proto_msgTypes[0].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*Task); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
	}
	type x struct{}
	out := protoimpl.TypeBuilder{
		File: protoimpl.DescBuilder{
			GoPackagePath: reflect.TypeOf(x{}).PkgPath(),
			RawDescriptor: file_models_task_proto_rawDesc,
			NumEnums:      0,
			NumMessages:   1,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_models_task_proto_goTypes,
		DependencyIndexes: file_models_task_proto_depIdxs,
		MessageInfos:      file_models_task_proto_msgTypes,
	}.Build()
	File_models_task_proto = out.File
	file_models_task_proto_rawDesc = nil
	file_models_task_proto_goTypes = nil
	file_models_task_proto_depIdxs = nil
}
