@extends('layouts/layoutMaster')

@section('title', 'Chat Monitoring')



@section('page-style')
<style>
  .chat-history { height: 500px; overflow-y: auto; background-color: #f8f9fa; padding: 20px; border-radius: 8px; }
  .chat-message { margin-bottom: 15px; display: flex; flex-direction: column; }
  .chat-message.sender { align-items: flex-start; }
  .chat-message.receiver { align-items: flex-end; }
  .message-content { max-width: 70%; padding: 10px 15px; border-radius: 15px; font-size: 0.9rem; position: relative; }
  .sender .message-content { background-color: #fff; color: #333; border: 1px solid #dee2e6; border-bottom-left-radius: 2px; }
  .receiver .message-content { background-color: #7367f0; color: #fff; border-bottom-right-radius: 2px; }
  .chat-id { font-size: 0.75rem; font-weight: bold; margin-bottom: 4px; }
  .monitoring-banner { background-color: #fff3cd; color: #856404; padding: 10px; border-radius: 5px; border: 1px solid #ffeeba; margin-bottom: 20px; text-align: center; }
</style>
@endsection

@section('content')
<div class="monitoring-banner">
  <i class="ti tabler-eye me-2"></i>
  <strong>Monitoring Mode:</strong> You are viewing this conversation in Read-Only mode. Administrative actions are logged.
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card h-100">
      <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Active Sessions</h5>
      </div>
      <div class="card-body p-0">
        <div class="list-group list-group-flush">
          <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center p-3 active">
            <div class="avatar me-3">
              <span class="avatar-initial rounded-circle bg-label-primary">JD</span>
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="mb-1">Coach: John Doe</h6>
                <small>2 min ago</small>
              </div>
              <p class="mb-0 text-muted small">Chatting with: <strong>Customer Sarah</strong></p>
            </div>
          </a>

          <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center p-3">
            <div class="avatar me-3">
              <span class="avatar-initial rounded-circle bg-label-success">MA</span>
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="mb-1">Coach: Mike Adams</h6>
                <small>1 hour ago</small>
              </div>
              <p class="mb-0 text-muted small">Chatting with: <strong>Customer Alex</strong></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card">
      <div class="card-header border-bottom d-flex justify-content-between align-items-center">
        <div>
          <h5 class="mb-0">Session History</h5>
          <small class="text-muted">Monitoring Coach John Doe & Customer Sarah</small>
        </div>
      </div>
      
      <div class="card-body">
        <div class="chat-history">
          <div class="chat-message sender">
            <span class="chat-id text-primary">COACH: John Doe</span>
            <div class="message-content shadow-sm">
              Hello Sarah! How was your workout today? Did you follow the new meal plan?
            </div>
            <small class="text-muted mt-1">10:30 AM</small>
          </div>

          <div class="chat-message receiver">
            <span class="chat-id text-dark">CUSTOMER: Sarah</span>
            <div class="message-content shadow-sm">
              Hi John! Yes, it was great. I felt much more energetic during the cardio section.
            </div>
            <small class="text-muted mt-1">10:32 AM</small>
          </div>

          <div class="chat-message sender">
            <span class="chat-id text-primary">COACH: John Doe</span>
            <div class="message-content shadow-sm">
              That's fantastic news. Keep it up! Tomorrow we will increase the weight for squats.
            </div>
            <small class="text-muted mt-1">10:35 AM</small>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
@endsection