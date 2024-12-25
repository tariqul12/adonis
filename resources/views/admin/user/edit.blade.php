@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-10 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit User Form</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('user.index') }}">All
                        User</a>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('user.update', ['id' => $user->id]) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label for="userName" class="col-md-2 form-label">User name</label>
                            <div class="col-md-10">
                                <input class="form-control" name="name" value="{{ $user->name }}" id="userName"
                                    placeholder="Role Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="user_email" class="col-md-2 form-label">User Email</label>
                            <div class="col-md-10">
                                <input class="form-control" name="email" id="user_email" value="{{ $user->email }}"
                                    placeholder="User Email" type="email">
                            </div>
                        </div>
                        {{-- <div class="row mb-4">
                            <label for="user_password" class="col-md-2 form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" name="password" id="user_password" value="{{ $user->password }}"
                                    placeholder="User password" type="password">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="roleDescription" class="col-md-2 form-label">Confurm Password</label>
                            <div class="col-md-10">
                                <input class="form-control" name="password" id="user_confirm_password"
                                    value="{{ $user->confirm_password }}" placeholder="confrim password" type="password">
                            </div>
                        </div> --}}
                        <div class="row mb-4">
                            <label for="user_description" class="col-2 form-label">User Image</label>
                            <div class="col-10">
                                <input type="file" name="image" id="user_image" class="dropify">
                                <img class="mt-4" src="{{ asset($user->profile_photo_path) }}" alt=""
                                    height="50">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update User Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
