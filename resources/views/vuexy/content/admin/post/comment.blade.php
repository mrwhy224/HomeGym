@extends('layouts/layoutMaster')

@section('title', 'Comments Management')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-12">
      <div class="card text-center p-10">
        <div class="card-body">
          <div class="misc-wrapper">
            <div class="mb-6">
               <div class="avatar avatar-xl mx-auto bg-label-info rounded-circle" style="width: 100px; height: 100px;">
                  <i class="ti tabler-messages-off icon-48px mt-4"></i>
               </div>
            </div>
            <h3 class="mb-2 mx-2">Comments Module Coming Soon! 💬</h3>
            <p class="mb-6 mx-2">We are currently building an advanced moderation system to help you manage and reply to user feedback effectively.</p>
            

            <a href="{{route('dashboard')}}" class="btn btn-primary">Back to Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection