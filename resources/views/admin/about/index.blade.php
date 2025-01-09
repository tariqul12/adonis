@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">About Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <form action="{{ isset($about) ? route('about.update', $about->id) : route('about.store') }}" method="POST"
        class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-12 shadow">
                <div class="card shadow rounded-0">

                    <div class="border-bottom py-5">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="fw-bold ms-3">Add About Form</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">About Title</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ isset($about) ? $about->title : '' }}" name="title"
                                    placeholder="About Title" type="text" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="Code" class="col-md-3 form-label">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="summernote" name="description" placeholder="Description">{{ isset($about) ? $about->description : '' }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="imgInp" class="col-md-3 form-label">About Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="dropify" data-height="200" />
                                <img width="120" class="my-1" src="{{ asset(isset($about) ? $about->image : '') }}"
                                    id="" alt="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary rounded-0 w-100" type="submit">Update About</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
