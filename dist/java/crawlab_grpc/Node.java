// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: node.proto

package crawlab_grpc;

public final class Node {
  private Node() {}
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
      "\n\nnode.proto\022\014crawlab_grpc\032\ncode.proto\032\016" +
      "response.proto2J\n\013NodeService\022;\n\010Registe" +
      "r\022\025.crawlab_grpc.Request\032\026.crawlab_grpc." +
      "Response\"\000B\020Z\016.;crawlab_grpcb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          Code.getDescriptor(),
          crawlab_grpc.ResponseOuterClass.getDescriptor(),
        });
    Code.getDescriptor();
    crawlab_grpc.ResponseOuterClass.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
