# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

require 'google/protobuf'

Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("task.proto", :syntax => :proto3) do
    add_message "TaskServiceRequest" do
      optional :task_id, :string, 1
      optional :data, :string, 2
    end
    add_message "TaskServiceResponse" do
      optional :status, :string, 1
      optional :message, :string, 2
      optional :data, :string, 3
    end
  end
end

TaskServiceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("TaskServiceRequest").msgclass
TaskServiceResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("TaskServiceResponse").msgclass