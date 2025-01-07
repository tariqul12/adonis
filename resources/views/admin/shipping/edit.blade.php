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
                <li class="breadcrumb-item active" aria-current="page">Edit Shipping</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Shipping Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('shipping.update', ['id' => $shipping->id]) }}"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="shippingName" class="col-md-3 form-label">Shipping Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="title" value="{{ $shipping->title }}" id="shippingName"
                                    placeholder="Shipping Title" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="shippingCost" class="col-md-3 form-label">Shipping Cost</label>
                            <div class="col-md-9">
                                <input class="form-control" name="cost" value="{{ $shipping->cost }}" id="shippingCost"
                                    placeholder="Shipping Cost" type="number">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input name="status" type="radio" {{ $shipping->status == 1 ? 'checked' : '' }}
                                        value="1">Published</label>
                                <label><input name="status" type="radio" {{ $shipping->status == 0 ? 'checked' : '' }}
                                        value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Shipping Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
