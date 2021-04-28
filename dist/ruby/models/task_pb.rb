# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/task.proto

require 'google/protobuf'

Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("models/task.proto", :syntax => :proto3) do
    add_message "grpc.Task" do
      optional :_id, :string, 1
      optional :spider_id, :string, 2
      optional :start_ts, :string, 3
      optional :finish_ts, :string, 4
      optional :status, :string, 5
      optional :node_id, :string, 6
      optional :cmd, :string, 8
      optional :param, :string, 9
      optional :error, :string, 10
      optional :result_count, :int32, 11
      optional :error_log_count, :int32, 12
      optional :wait_duration, :int32, 13
      optional :runtime_duration, :int32, 14
      optional :total_duration, :int32, 15
      optional :pid, :int32, 16
      optional :run_type, :string, 17
      optional :schedule_id, :string, 18
      optional :type, :string, 19
      optional :user_id, :string, 20
      optional :create_ts, :string, 21
      optional :update_ts, :string, 22
    end
  end
end

module Grpc
  Task = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("grpc.Task").msgclass
end
