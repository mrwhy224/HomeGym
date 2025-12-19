@extends('layouts/layoutMaster')

@section('title', 'Support Ticket Center')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('page-style')
<style>
  /* Container & Layout */
  .ticket-app-container { height: calc(100vh - 12rem); display: flex; background: #fff; border: 1px solid #dbdade; border-radius: 0.75rem; overflow: hidden; }
  
  /* Sidebar Styling */
  .ticket-sidebar { width: 340px; border-right: 1px solid #dbdade; display: flex; flex-direction: column; background-color: #fff; }
  .ticket-sidebar-header { padding: 1.25rem; border-bottom: 1px solid #dbdade; }
  .ticket-list { flex-grow: 1; overflow-y: auto; }
  .ticket-item { border-bottom: 1px solid #f1f0f2; transition: all 0.2s; border-left: 3px solid transparent; cursor: pointer; }
  .ticket-item:hover { background-color: #f8f7fa; }
  .ticket-item.active { background-color: rgba(115, 103, 240, 0.08); border-left-color: #7367f0; }

  /* Chat Area */
  .ticket-main { flex-grow: 1; display: flex; flex-direction: column; background-color: #f8f7fa; }
  .ticket-header { padding: 1rem 1.5rem; background: #fff; border-bottom: 1px solid #dbdade; display: flex; align-items: center; justify-content: space-between; }
  
  /* Chat History & Bubbles */
  .chat-body { flex-grow: 1; padding: 2rem; overflow-y: auto; display: flex; flex-direction: column; }
  .message-wrapper { margin-bottom: 1.5rem; display: flex; flex-direction: column; max-width: 70%; }
  
  .message-wrapper.user { align-self: flex-start; }
  .message-wrapper.admin { align-self: flex-end; }

  .message-header { display: flex; align-items: center; gap: 8px; margin-bottom: 6px; font-size: 0.8125rem; }
  .message-wrapper.admin .message-header { flex-direction: row-reverse; }

  .message-content { padding: 0.9rem 1.2rem; border-radius: 0.6rem; font-size: 0.9375rem; line-height: 1.5; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
  .user .message-content { background: #fff; color: #5d596c; border: 1px solid #dbdade; border-top-left-radius: 0; }
  .admin .message-content { background: #7367f0; color: #fff; border-top-right-radius: 0; }

  .message-footer { margin-top: 6px; font-size: 0.75rem; color: #a1a1a1; }
  .local-time-badge { background: rgba(115, 103, 240, 0.1); color: #7367f0; padding: 1px 6px; border-radius: 4px; font-weight: 600; margin-left: 4px; }
  .admin .local-time-badge { background: rgba(255, 255, 255, 0.2); color: #fff; }

  /* Footer / Reply Area */
  .ticket-footer { background: #fff; padding: 1.25rem; border-top: 1px solid #dbdade; }
  .reply-box { background: #f8f7fa; border: 1px solid #dbdade; border-radius: 0.5rem; padding: 0.5rem; }
  .reply-box textarea { background: transparent; border: 0; resize: none; width: 100%; padding: 0.5rem; font-size: 0.9375rem; }
  .reply-box textarea:focus { outline: none; }
</style>
@endsection

@section('content')

<div class="ticket-app-container shadow-sm">
  <aside class="ticket-sidebar">
    <div class="ticket-sidebar-header">
      <div class="input-group input-group-merge border-none bg-lighter rounded">
        <span class="input-group-text bg-transparent border-0"><i class="ti tabler-search"></i></span>
        <input type="text" class="form-control bg-transparent border-0" placeholder="Search ticket or user...">
      </div>
    </div>
    <div class="ticket-list">
      <div class="ticket-item p-4 active">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="badge bg-label-danger badge-sm">Critical</span>
          <small class="text-muted">#TK-4412</small>
        </div>
        <h6 class="mb-1 fw-bold">Payment gateway timeout error</h6>
        <div class="d-flex align-items-center justify-content-between">
          <small class="text-primary fw-medium">Julianne Moore (Customer)</small>
          <small class="text-muted">2m ago</small>
        </div>
      </div>
      <div class="ticket-item p-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="badge bg-label-info badge-sm">Normal</span>
          <small class="text-muted">#TK-4415</small>
        </div>
        <h6 class="mb-1 fw-bold">Missing workout history logs</h6>
        <div class="d-flex align-items-center justify-content-between">
          <small class="text-body fw-medium">Coach: Steve Rogers</small>
          <small class="text-muted">1h ago</small>
        </div>
      </div>
    </div>
  </aside>

  <main class="ticket-main">
    <header class="ticket-header shadow-xs">
      <div class="d-flex align-items-center">
        <div class="avatar avatar-md me-3">
          <span class="avatar-initial rounded-circle bg-label-primary">JM</span>
        </div>
        <div>
          <h5 class="mb-0 fw-bold">Julianne Moore</h5>
          <div class="d-flex align-items-center gap-2 mt-1">
            <span class="badge bg-label-info badge-sm">Customer Profile</span>
            <span class="text-muted small"><i class="ti tabler-world-latitude icon-14px me-1"></i> America/New_York (UTC-5)</span>
          </div>
        </div>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-icon btn-label-secondary rounded-pill btn-sm"><i class="ti tabler-phone"></i></button>
        <button class="btn btn-label-danger btn-sm px-4">Close Ticket</button>
      </div>
    </header>

    
    <div class="chat-body" id="ticketChatBody">
      <div class="message-wrapper user">
        <div class="message-header">
          <span class="fw-bold text-heading">Julianne Moore</span>
          <span class="text-muted">Customer</span>
        </div>
        <div class="message-content">
          Hello support team. My transaction for the "Premium Coaching Pack" was debited from my account but the status in the dashboard still says "Payment Pending". Could you help me verify this?
        </div>
        <div class="message-footer">
          System Time: 09:12 PM <span class="local-time-badge">Local Time: 04:12 PM</span>
        </div>
      </div>

      <div class="message-wrapper admin text-end">
        <div class="message-header">
          <span class="fw-bold text-indigo">Staff Support</span>
        </div>
        <div class="message-content">
          Hi Julianne! I'm checking our payment logs right now. It seems the bank confirmed the transaction but our gateway didn't receive the webhook. I will manually activate your pack now.
        </div>
        <div class="message-footer">
          System Time: 09:15 PM <span class="local-time-badge">Local Time: 04:15 PM</span>
        </div>
      </div>

      <div class="message-wrapper user">
        <div class="message-header">
          <span class="fw-bold text-heading">Julianne Moore</span>
        </div>
        <div class="message-content">
          Thank you so much! I really appreciate the quick response. I see it active now.
        </div>
        <div class="message-footer">
          System Time: 09:18 PM <span class="local-time-badge">Local Time: 04:18 PM</span>
        </div>
      </div>
    </div>

    <footer class="ticket-footer">
      <div class="reply-box">
        <textarea rows="3" placeholder="Write your response to Julianne Moore..."></textarea>
        <div class="d-flex justify-content-between align-items-center border-top pt-2 px-2 mt-1">
          <div class="d-flex gap-1">
            <button class="btn btn-icon btn-text-secondary btn-sm rounded-pill"><i class="ti tabler-paperclip"></i></button>
            <button class="btn btn-icon btn-text-secondary btn-sm rounded-pill"><i class="ti tabler-mood-smile"></i></button>
            <div class="vr mx-2"></div>
            <small class="text-muted d-flex align-items-center">
              <i class="ti tabler-clock-up me-1"></i> User current time: <span class="fw-bold text-primary ms-1">04:20 PM</span>
            </small>
          </div>
          <button class="btn btn-primary px-5 shadow-none"><i class="ti tabler-send me-1"></i> Send Reply</button>
        </div>
      </div>
    </footer>
  </main>
</div>
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js',
  'resources/assets/vendor/libs/select2/select2.js'
])
@endsection

@section('page-script')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const chatBody = document.getElementById('ticketChatBody');
    chatBody.scrollTop = chatBody.scrollHeight;
  });
</script>
@endsection