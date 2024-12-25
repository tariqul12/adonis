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
                <li class="breadcrumb-item active" aria-current="page">Create User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create User Form</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('user.index') }}">All
                        User</a>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('user.store') }}" enctype="multipart/form-data"
                        method="POST">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="row mb-4">
                            <label for="user_name" class="col-2 form-label">User Name</label>
                            <div class="col-10">
                                <input class="form-control" name="name" id="user_name" placeholder="User Name"
                                    type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="user_email" class="col-2 form-label">User Email</label>
                            <div class="col-10">
                                <input class="form-control" name="email" id="user_email" placeholder="User Email"
                                    type="email">
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="user_email" class="col-2 form-label">User Password</label>
                            <div class="col-10">
                                <input class="form-control" name="password" id="user_password" placeholder="User Password"
                                    type="password">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="user_confirm_password" class="col-2 form-label">User Confirm Password</label>
                            <div class="col-10">
                                <input class="form-control" name="confirm_password" id="user_confirm_password"
                                    placeholder="User Confirm Password" type="password">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="user_description" class="col-2 form-label">User Image</label>
                            <div class="col-10">
                                <input type="file" name="image" id="user_image" class="dropify">
                                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-2 form-label">Role Name</label>
                            <div class="col-10">
                                @foreach ($roles as $key => $item)
                                    <label for="route{{ $key }}"><input name="role" value="{{ $item->id }}"
                                            class="route-checkbox" id="route{{ $key }}"
                                            type="radio">{{ $item->name }}</label>
                                @endforeach

                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
