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
                <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Slider Form</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('slider.index') }}">All
                        Slider</a>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('slider.update', $slider->id) }}"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')

                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Product</label>
                            <div class="col-md-9">
                                <select name="product_id" class=" form-control" id="">
                                    <option value="">select One</option>
                                    @foreach ($products as $item)
                                        <option value="{{ $item->id }}" @selected($item->id == $slider->product_id)>{{ $item->name }}
                                        </option>
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
                                    <option value="0" {{ $slider->banner_type == 0 ? 'selected' : '' }}>Main Slider
                                    </option>
                                    <option value="1" {{ $slider->banner_type == 1 ? 'selected' : '' }}>Slider Side
                                    </option>
                                    <option value="2" {{ $slider->banner_type == 2 ? 'selected' : '' }}>Popular Title
                                    </option>
                                    <option value="3" {{ $slider->banner_type == 3 ? 'selected' : '' }}>Feature
                                        Products</option>
                                    <option value="4" {{ $slider->banner_type == 4 ? 'selected' : '' }}>Page Title
                                    </option>
                                    <option value="5" {{ $slider->banner_type == 5 ? 'selected' : '' }}>Footer Banner
                                    </option>
                                </select>
                                <span
                                    class="text-danger">{{ $errors->has('banner_type') ? $errors->first('banner_type') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4" id="bannerTitleRow"
                            style="display: {{ $slider->banner_type == 0 ? 'flex' : 'none' }}">
                            <label for="brandDescription" class="col-md-3 form-label">Slider Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $slider->title }}" name="title"
                                    id="brandDescription" placeholder="Slider Title">
                            </div>
                        </div>
                        <div class="row mb-4" id="bannerSubTitleRow"
                            style="display: {{ $slider->banner_type == 0 || $slider->banner_type == 1 ? 'flex' : 'none' }}">
                            <label for="brandDescription" class="col-md-3 form-label">Slider Sub Title</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="sub_title" id="brandDescription" placeholder="Slider Title">{{ $slider->sub_title }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Slider Image</label>
                            <div class="col-md-9">
                                <input class="dropify" data-height="200" name="image" id="image" type="file">
                                <img src="{{ asset($slider->image) }}" alt="" height="100">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input name="status" type="radio" {{ $slider->status == 1 ? 'checked' : '' }}
                                        value="1">Published</label>
                                <label><input name="status" type="radio" {{ $slider->status == 0 ? 'checked' : '' }}
                                        value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Slider Info</button>
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
