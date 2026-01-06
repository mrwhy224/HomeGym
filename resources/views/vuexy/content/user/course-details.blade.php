@extends('layouts/layoutMaster')

@section('title', $activity->package->name)

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/animate-css/animate.scss'
])
@endsection

@section('content')
<div class="row g-6">
  <div class="col-lg-8">
    <div class="card mb-6">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">{{ $activity->package->name }}</h3>
            <span class="badge {{ $activity->package->type == 'semi-private' ? 'bg-label-warning' : 'bg-label-primary' }}">
                {{ strtoupper($activity->package->type) }}
            </span>
        </div>

        <p class="mb-6">
            {{ $activity->package->description ?? 'Experience professional online training tailored to your goals.' }}
        </p>

        <hr class="my-6">

        <h5 class="mb-4">Your Instructor</h5>
        <div class="d-flex align-items-center mb-6">
          <div class="avatar avatar-xl me-4">
            <img src="{{ $activity->coach->avatar_url ?? asset('assets/img/avatars/1.png') }}" class="rounded-circle">
          </div>
          <div>
            <h6 class="mb-1">{{ $activity->coach->first_name }} {{ $activity->coach->last_name }}</h6>
            <p class="mb-0 text-muted small">Specialist in Corrective Exercises & Fitness</p>
          </div>
        </div>

        <hr class="my-6">

        <h5 class="mb-4">Course Curriculum ({{ count($activity->sessions) }} Sessions)</h5>
        <div class="accordion" id="curriculumAccordion">
            @foreach($activity->sessions->sortBy('start_at') as $index => $session)
            <div class="accordion-item border-bottom mb-2">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <div class="d-flex align-items-center">
                        <div class="badge bg-label-secondary rounded-pill me-3">{{ $index + 1 }}</div>
                        <div>
                            <span class="d-block fw-medium text-heading">Session {{ $index + 1 }}</span>
                            <small class="text-muted">
                                <i class="ti tabler-calendar me-1"></i> {{ $session->start_at->formatUser('l, M jS') }}
                            </small>
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="badge bg-label-info"><i class="ti tabler-clock me-1"></i> {{ $session->start_at->formatUser('H:i') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card mb-6 border-primary border-top-0 border-end-0 border-bottom-0 border-5 shadow-sm">
      <div class="card-body">
        <h4 class="mb-4 text-primary">{{ $activity->package->getPrice() }}</h4>

{{--        <div class="d-grid gap-3">--}}
{{--            @if($activity->is_full)--}}
{{--                <button class="btn btn-secondary" disabled>Fully Booked</button>--}}
{{--            @else--}}
{{--                <button class="btn btn-primary btn-lg">Enroll Now</button>--}}
{{--            @endif--}}
{{--            <p class="text-center small text-muted">Secure checkout via Wallet or Bank</p>--}}
{{--        </div>--}}

        <hr class="my-4">

        <h6 class="mb-3">This Course Includes:</h6>
        <ul class="list-unstyled">
          <li class="mb-3 d-flex align-items-center">
            <i class="ti tabler-users me-2 text-primary"></i>
            <span>Capacity: <strong>{{ $activity->capacity }} Persons</strong></span>
          </li>
          <li class="mb-3 d-flex align-items-center">
            <i class="ti tabler-calendar-time me-2 text-primary"></i>
            <span>Validity: <strong>{{ $activity->package->validity_days }} Days</strong></span>
          </li>
          <li class="mb-3 d-flex align-items-center">
            <i class="ti tabler-video me-2 text-primary"></i>
            <span>Platform: <strong>Online Video Call</strong></span>
          </li>
          <li class="mb-3 d-flex align-items-center">
            <i class="ti tabler-shield-check me-2 text-primary"></i>
            <span>Skill Level: <strong>All Levels</strong></span>
          </li>
        </ul>
      </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h6 class="mb-3">About Coach</h6>
            <p class="small text-muted mb-0">
                In Sep.fit94, we believe fitness is beyond appearance; it's where your muscles get stronger and your smiles get real.
            </p>
        </div>
    </div>
  </div>
</div>
@endsection
