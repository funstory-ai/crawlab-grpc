// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: services/task_service.proto

package grpc;

public final class TaskServiceOuterClass {
  private TaskServiceOuterClass() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n\033services/task_service.proto\022\004grpc\032\024ent" +
      "ity/request.proto\032\025entity/response.proto" +
      "\032\033entity/stream_message.proto2u\n\013TaskSer" +
      "vice\0224\n\tSubscribe\022\023.grpc.StreamMessage\032\016" +
      ".grpc.Response\"\000(\001\0220\n\rGetDataSource\022\r.gr" +
      "pc.Request\032\016.grpc.Response\"\000B\010Z\006.;grpcb\006" +
      "proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          grpc.RequestOuterClass.getDescriptor(),
          grpc.ResponseOuterClass.getDescriptor(),
          grpc.StreamMessageOuterClass.getDescriptor(),
        });
    grpc.RequestOuterClass.getDescriptor();
    grpc.ResponseOuterClass.getDescriptor();
    grpc.StreamMessageOuterClass.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
