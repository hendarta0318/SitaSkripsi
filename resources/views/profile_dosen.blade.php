@extends('app_adminkit_dosen')

@section('content-profile_dosen')
<div class="d-flex justify-content-center align-items-center">
    <div class="mt-5 row" style="width: 500px; height: 400px;">
        <div class="col-md-12">
            <div class="card" style="border: 2px solid #007bff;">
                <div class="card-header bg-primary">
                    <h5 class="card-title mb-0 d-flex justify-content-center align-items-center text-dark">Profile Details</h5>
                </div>
                <div class="card-body text-center">
                    <!-- <img src="img/avatars/avatar-4.jpg" alt="{{ $user->nama }}" class="img-fluid rounded-circle mb-2" width="128" height="128" /> -->
                    <p class="text-muted mb-0 d-flex justify-content-center align-items-center">Nama</p>
                    <h5 class="h4 mb-3 text-dark">{{ $user->name }}</h5>
                    <p class="text-muted mb-0 d-flex justify-content-center align-items-center">Email</p>
                    <div class="h4 mb-3 text-dark">{{ $user->email }}</div>
                    <p class="text-muted mb-0 d-flex justify-content-center align-items-center">Role</p>
                    <div class="h4 mb-3 text-dark">{{ $user->role }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
