@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Customer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Customer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Customer</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Customer Form</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('customer.index') }}">All
                        Customer</a>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('customer.update', ['id' => $customer->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="categoryName" class="col-md-3 form-label">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{ $customer->name }}" id="categoryName" placeholder="Customer Name"
                                    type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" name="email" id="email" value="{{ $customer->email }}" placeholder="Customer Email"
                                    type="email">
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Mobile</label>
                            <div class="col-md-9">
                                <input class="form-control" name="mobile" id="mobile" value="{{ $customer->mobile }}" placeholder="Customer Mobile"
                                    type="number">
                                <span
                                    class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Password</label>
                            <div class="col-md-9">
                                <input class="form-control" name="password" id="password" readonly value="{{ $customer->password }}" placeholder="Password"
                                    type="password">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Gender</label>
                            <div class="col-md-9">
                                <label><input name="gender" type="radio" {{ $customer->gender == 'male' ? 'checked' : '' }} value="male" />Male</label>
                                <label><input name="gender" type="radio" {{ $customer->gender == "female" ? 'checked' : '' }} value="female" />Female</label>
                                <label><input name="gender" type="radio" {{ $customer->gender == "other" ? 'checked' : '' }} value="other" />Other</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Blood Group</label>
                            <div class="col-md-9">
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == 'A+' ? 'checked' : '' }} value="A+" />A+</label>
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == "A-" ? 'checked' : '' }} value="A-" />A-</label>
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == "B+" ? 'checked' : '' }} value="B+" />B+</label>
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == "B-" ? 'checked' : '' }} value="B-" />B-</label>
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == "AB+" ? 'checked' : '' }} value="AB+" />AB+</label>
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == "AB-" ? 'checked' : '' }} value="AB-" />AB-</label>
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == "O+" ? 'checked' : '' }} value="O+" />O+</label> 
                                <label><input name="blood_group" type="radio" {{ $customer->blood_group == "O-" ? 'checked' : '' }} value="O-" />O-</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Date Of Birth</label>
                            <div class="col-md-9">
                                <input class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Date Of Birth"
                                    type="date">
                                <span
                                    class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="address" class="col-md-3 form-label">Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="address" id="address" placeholder="Customer Address">{{ $customer->address }}</textarea>
                                <span
                                    class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                            </div>
                        </div>
                       
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="dropify" data-height="200" name="image" id="image" type="file" />
                                <img src="{{ asset($customer->image) }}" alt="" height="200" width="200">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input name="status" type="radio" {{ $customer->status == 1 ? 'checked' : '' }} value="1" />Published</label>
                                <label><input name="status" type="radio" {{ $customer->status == 0 ? 'checked' : '' }} value="0" />Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update New Customer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
