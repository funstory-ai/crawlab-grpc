// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: services/worker_node_service.proto

package grpc;

public final class WorkerNodeServiceOuterClass {
  private WorkerNodeServiceOuterClass() {}
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
      "\n\"services/worker_node_service.proto\022\004gr" +
      "pc\032\024entity/request.proto\032\025entity/respons" +
      "e.proto2<\n\021WorkerNodeService\022\'\n\004Ping\022\r.g" +
      "rpc.Request\032\016.grpc.Response\"\000B\010Z\006.;grpcb" +
      "\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          grpc.RequestOuterClass.getDescriptor(),
          grpc.ResponseOuterClass.getDescriptor(),
        });
    grpc.RequestOuterClass.getDescriptor();
    grpc.ResponseOuterClass.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}