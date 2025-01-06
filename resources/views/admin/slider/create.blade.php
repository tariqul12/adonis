@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Slider Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Slider</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Slider</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Banner Form</h3>

                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('slider.store') }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Product</label>
                            <div class="col-md-9">
                                <select name="product_id" class=" form-control" id="">
                                    <option value="">Select One Product</option>
                                    @foreach ($products as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <span
                                    class="text-danger">{{ $errors->has('product_id') ? $errors->first('product_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Banner Type</label>
                            <div class="col-md-9">
                                <select name="banner_type" class=" form-control" id="sliderType">
                                    <option value="">Select One Type</option>
                                    <option value="0">Main Slider</option>
                                    <option value="1">Slider Side</option>
                                    <option value="2">Popular Title</option>
                                    <option value="3">Feature Products</option>
                                    <option value="4">Page Title</option>
                                    <option value="5">Footer Banner</option>
                                </select>
                                <span
                                    class="text-danger">{{ $errors->has('banner_type') ? $errors->first('banner_type') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4" id="bannerTitleRow">
                            <label for="" class="col-md-3 form-label">Banner Title</label>
                            <div class="col-md-9">
                                <input class="form-control" name="title" id="bannerTitleRow" type="text"
                                    placeholder="Slider Title">
                                <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4" id="bannerSubTitleRow">
                            <label for="" class="col-md-3 form-label">Banner Sub Title</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="sub_title" id="" placeholder="Slider Sub Title"></textarea>
                                <span
                                    class="text-danger">{{ $errors->has('sub_title') ? $errors->first('sub_title') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Banner Image</label>
                            <div class="col-md-9">
                                <input class="dropify" data-height="200" name="image" id="image" type="file">
                                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
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
                            <button class="btn btn-primary" type="submit">Create New Banner</button>
                            <a href="{{ route('slider.index') }}" class="btn btn-light ms-auto">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('sliderType').addEventListener('change', function() {
            const bannerTitleRow = document.getElementById('bannerTitleRow');
            const bannerSubTitleRow = document.getElementById('bannerSubTitleRow');

            // If "Page Header" (value 4) is selected, hide both fields
            if (this.value == '4' || this.value == '3' || this.value == '2' || this.value == '5') {
                bannerTitleRow.style.display = 'none';
                bannerSubTitleRow.style.display = 'none';
            } else {
                bannerTitleRow.style.display = 'flex'; // Show the Banner Title field
                bannerSubTitleRow.style.display = 'flex'; // Show the Banner Sub Title field
            }
        });
    </script>
@endpush
