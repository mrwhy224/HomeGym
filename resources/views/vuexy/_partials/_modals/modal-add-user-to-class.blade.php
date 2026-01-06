<div class="modal fade" id="addUserModal{{ $activity->id }}" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content p-3 p-md-5">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<div class="text-center mb-4">
					<h3 class="mb-2">Add Student</h3>
					<p class="text-muted">Enroll user to {{ $activity->package->name }}</p>
				</div>
				<form action="{{ route('admin.api.book', ['activity'=>$activity->id]) }}" method="POST" class="row g-3 enroll-user-form" data-activity-id="{{ $activity->id }}">
					@csrf
					<div class="col-12">
						<label class="form-label">Select User</label>
						<select name="user_id" class="select2-ajax form-select" required></select>
					</div>
					<div class="col-12 text-center mt-4">
						<button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
						<button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
