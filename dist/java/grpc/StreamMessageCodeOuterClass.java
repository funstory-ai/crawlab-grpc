// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: entity/stream_message_code.proto

package grpc;

public final class StreamMessageCodeOuterClass {
  private StreamMessageCodeOuterClass() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  /**
   * Protobuf enum {@code grpc.StreamMessageCode}
   */
  public enum StreamMessageCode
      implements com.google.protobuf.ProtocolMessageEnum {
    /**
     * <code>PING = 0;</code>
     */
    PING(0),
    UNRECOGNIZED(-1),
    ;

    /**
     * <code>PING = 0;</code>
     */
    public static final int PING_VALUE = 0;


    public final int getNumber() {
      if (this == UNRECOGNIZED) {
        throw new java.lang.IllegalArgumentException(
            "Can't get the number of an unknown enum value.");
      }
      return value;
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     * @deprecated Use {@link #forNumber(int)} instead.
     */
    @java.lang.Deprecated
    public static StreamMessageCode valueOf(int value) {
      return forNumber(value);
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     */
    public static StreamMessageCode forNumber(int value) {
      switch (value) {
        case 0: return PING;
        default: return null;
      }
    }

    public static com.google.protobuf.Internal.EnumLiteMap<StreamMessageCode>
        internalGetValueMap() {
      return internalValueMap;
    }
    private static final com.google.protobuf.Internal.EnumLiteMap<
        StreamMessageCode> internalValueMap =
          new com.google.protobuf.Internal.EnumLiteMap<StreamMessageCode>() {
            public StreamMessageCode findValueByNumber(int number) {
              return StreamMessageCode.forNumber(number);
            }
          };

    public final com.google.protobuf.Descriptors.EnumValueDescriptor
        getValueDescriptor() {
      if (this == UNRECOGNIZED) {
        throw new java.lang.IllegalStateException(
            "Can't get the descriptor of an unrecognized enum value.");
      }
      return getDescriptor().getValues().get(ordinal());
    }
    public final com.google.protobuf.Descriptors.EnumDescriptor
        getDescriptorForType() {
      return getDescriptor();
    }
    public static final com.google.protobuf.Descriptors.EnumDescriptor
        getDescriptor() {
      return grpc.StreamMessageCodeOuterClass.getDescriptor().getEnumTypes().get(0);
    }

    private static final StreamMessageCode[] VALUES = values();

    public static StreamMessageCode valueOf(
        com.google.protobuf.Descriptors.EnumValueDescriptor desc) {
      if (desc.getType() != getDescriptor()) {
        throw new java.lang.IllegalArgumentException(
          "EnumValueDescriptor is not for this type.");
      }
      if (desc.getIndex() == -1) {
        return UNRECOGNIZED;
      }
      return VALUES[desc.getIndex()];
    }

    private final int value;

    private StreamMessageCode(int value) {
      this.value = value;
    }

    // @@protoc_insertion_point(enum_scope:grpc.StreamMessageCode)
  }


  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n entity/stream_message_code.proto\022\004grpc" +
      "*\035\n\021StreamMessageCode\022\010\n\004PING\020\000B\010Z\006.;grp" +
      "cb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
        });
  }

  // @@protoc_insertion_point(outer_class_scope)
}