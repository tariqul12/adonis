@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Shipping Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Shipping</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Shipping</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Shipping Form</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('shipping.index') }}">All
                        Shipping</a>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('shipping.store') }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="shippingName" class="col-md-3 form-label">Shipping Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="title" id="shippingName" placeholder="Shipping Name"
                                    type="text">
                                <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="shippingCost" class="col-md-3 form-label">Shipping Cost</label>
                            <div class="col-md-9">
                                <input class="form-control" name="cost" id="shippingCost" placeholder="Shipping Cost"
                                    type="text">
                                <span class="text-danger">{{ $errors->has('cost') ? $errors->first('cost') : '' }}</span>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input name="status" type="radio" checked value="1">Published</label>
                                <label><input name="status" type="radio" value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Shipping</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
