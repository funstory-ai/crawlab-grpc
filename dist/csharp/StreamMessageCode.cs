// <auto-generated>
//     Generated by the protocol buffer compiler.  DO NOT EDIT!
//     source: entity/stream_message_code.proto
// </auto-generated>
#pragma warning disable 1591, 0612, 3021
#region Designer generated code

using pb = global::Google.Protobuf;
using pbc = global::Google.Protobuf.Collections;
using pbr = global::Google.Protobuf.Reflection;
using scg = global::System.Collections.Generic;
namespace Grpc {

  /// <summary>Holder for reflection information generated from entity/stream_message_code.proto</summary>
  public static partial class StreamMessageCodeReflection {

    #region Descriptor
    /// <summary>File descriptor for entity/stream_message_code.proto</summary>
    public static pbr::FileDescriptor Descriptor {
      get { return descriptor; }
    }
    private static pbr::FileDescriptor descriptor;

    static StreamMessageCodeReflection() {
      byte[] descriptorData = global::System.Convert.FromBase64String(
          string.Concat(
            "CiBlbnRpdHkvc3RyZWFtX21lc3NhZ2VfY29kZS5wcm90bxIEZ3JwYyodChFT",
            "dHJlYW1NZXNzYWdlQ29kZRIICgRQSU5HEABCCFoGLjtncnBjYgZwcm90bzM="));
      descriptor = pbr::FileDescriptor.FromGeneratedCode(descriptorData,
          new pbr::FileDescriptor[] { },
          new pbr::GeneratedClrTypeInfo(new[] {typeof(global::Grpc.StreamMessageCode), }, null, null));
    }
    #endregion

  }
  #region Enums
  public enum StreamMessageCode {
    [pbr::OriginalName("PING")] Ping = 0,
  }

  #endregion

}

#endregion Designer generated code
