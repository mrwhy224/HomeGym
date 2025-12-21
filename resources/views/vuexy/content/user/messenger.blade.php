@extends('layouts/layoutMaster')

@section('title', 'Coach Communication - Messenger')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.scss'
])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/app-chat.scss'])
<style>
  /* استایل اختصاصی برای افکت Blur و پیام Coming Soon */
  .chat-blur-container {
    position: relative;
    overflow: hidden;
    border-radius: 0.5rem;
  }

  .chat-blur-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(8px); /* شدت تاری */
    background: rgba(255, 255, 255, 0.1);
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .coming-soon-card {
    background: rgba(255, 255, 255, 0.9);
    padding: 2rem 3rem;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    text-align: center;
    border: 1px solid rgba(115, 103, 240, 0.2);
    animation: fadeInUp 0.6s ease-out;
  }

  /* هماهنگی با تم دارک */
  [data-bs-theme="dark"] .coming-soon-card {
    background: rgba(15, 20, 30, 0.85);
    border-color: rgba(255, 255, 255, 0.1);
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>
@endsection

@section('content')
<div class="app-chat card chat-blur-container">
  
  <div class="chat-blur-overlay">
      <div class="coming-soon-card">
          <div class="avatar avatar-xl bg-label-primary mx-auto mb-4">
              <i class="ti tabler-message-2-code icon-48px"></i>
          </div>
          <h3 class="mb-2">Messenger is Coming Soon! 🚀</h3>
          <p class="text-muted mb-4">We are working hard to bring you a direct connection <br> with our professional coaches.</p>
      </div>
  </div>

  <div class="row g-0">
    <div class="col app-chat-sidebar border-end" id="app-chat-sidebar">
      <div class="chat-sidebar-header border-bottom p-4">
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 ps-1">
            <input type="text" class="form-control" placeholder="Search Coach...">
          </div>
        </div>
      </div>
      <div class="chat-sidebar-list-item h-100 py-4">
        <ul class="list-unstyled mb-0 mt-2">
          <li class="chat-contact-list-item p-4 mb-1">
              <div class="d-flex align-items-center">
                  <div class="avatar avatar-online"><img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle"></div>
                  <div class="ms-3"><h6 class="mb-0">Coach Alex</h6><small class="text-muted">Available</small></div>
              </div>
          </li>
          <li class="chat-contact-list-item p-4">
              <div class="d-flex align-items-center">
                  <div class="avatar"><img src="{{ asset('assets/img/avatars/2.png') }}" class="rounded-circle"></div>
                  <div class="ms-3"><h6 class="mb-0">Coach Sarah</h6><small class="text-muted">Last seen 2h ago</small></div>
              </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="col app-chat-history">
      <div class="chat-history-header border-bottom p-4">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-online me-3"><img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle"></div>
            <div><h6 class="mb-0">Coach Alex</h6><small class="text-muted">Bodybuilding Specialist</small></div>
          </div>
        </div>
      </div>
      <div class="chat-history-body p-4" style="height: 400px; background: #f8f7fa;">
          <div class="chat-message mb-4">
              <div class="d-flex overflow-hidden">
                  <div class="chat-message-wrapper flex-grow-1 text-end">
                      <div class="chat-message-text bg-primary text-white p-3 rounded mb-2 d-inline-block">Hello Coach! I started my diet today.</div>
                  </div>
              </div>
          </div>
          <div class="chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                  <div class="chat-message-wrapper flex-grow-1">
                      <div class="chat-message-text bg-white p-3 rounded mb-2 d-inline-block shadow-sm">Great! Let's track your progress.</div>
                  </div>
              </div>
          </div>
      </div>
      <div class="chat-history-footer border-top p-4">
        <form class="form-send-message d-flex justify-content-between align-items-center">
          <input class="form-control message-input border-0 me-4 shadow-none" placeholder="Type your message here...">
          <button class="btn btn-primary"><i class="ti tabler-send"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection