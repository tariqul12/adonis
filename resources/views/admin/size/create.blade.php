@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Size Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Size</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Size</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Size Form</h3>

                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('size.store') }}" method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="sizeName" class="col-md-3 form-label">Size Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" id="sizeName" placeholder="Size Name"
                                    type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="sizeCode" class="col-md-3 form-label">Size Code</label>
                            <div class="col-md-9">
                                <input class="form-control" name="code" id="sizeCode" placeholder="Size Code"
                                    type="text">
                                <span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input name="status" type="radio" checked value="1">Published</label>
                                <label><input name="status" type="radio" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="d-flex">

                            <button class="btn btn-primary" type="submit">Create New Size</button>
                            <a href="{{ route('size.index') }}" class="btn btn-light ms-auto">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
