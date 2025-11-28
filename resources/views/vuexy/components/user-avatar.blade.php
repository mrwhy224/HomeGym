@if($user)
	@php
		$avatarUrl = $user->getFirstMediaUrl('avatar');
	@endphp

	@if($avatarUrl)
		<img src="{{ $avatarUrl }}" alt="{{ $user->first_name }}" class="rounded-circle">
	@else
		<span class="avatar-initial rounded-circle bg-label-{{ $user->avatar_color ?? 'primary' }}">
                {{ $user->initials ?? substr($user->first_name, 0, 2) }}
            </span>
	@endif
@else
	<span class="avatar-initial rounded-circle bg-label-secondary">
            <i class="ti ti-user"></i> </span>
@endif
