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
                <li class="breadcrumb-item active" aria-current="page">Manage Slider</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Slider Info</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('slider.create') }}">Add
                        Slider</a>
                </div>
                <div class="card-body">
                    <p id="sessionMessage" class="text-muted">{{ session('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL</th>
                                    <th class="wd-15p border-bottom-0">Products</th>
                                    <th class="wd-15p border-bottom-0">Banner Type</th>
                                    {{-- <th class="wd-20p border-bottom-0">Sub Title</th> --}}
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $slider->product->name }}</td>
                                        <td>
                                            @if ($slider->banner_type == 0)
                                                <span class="badge bg-primary-gradient my-1">Main
                                                    Slider</span>
                                            @elseif ($slider->banner_type == 1)
                                                <span class="badge bg-secondary-gradient my-1">Slider
                                                    Side</span>
                                            @elseif ($slider->banner_type == 2)
                                                <span class="badge bg-success-gradient my-1">Popular
                                                    Title</span>
                                            @elseif ($slider->banner_type == 3)
                                                <span class="badge bg-info-gradient my-1">Feature
                                                    Products</span>
                                            @elseif ($slider->banner_type == 4)
                                                <span class="badge bg-dark-gradient my-1">Page
                                                    Title</span>
                                            @elseif ($slider->banner_type == 5)
                                                <span class="badge bg-light-gradient my-1">Footer
                                                    Banner</span>
                                            @endif
                                        </td>
                                        {{-- <td>{{ $slider->sub_title }}</td> --}}
                                        <td><img src="{{ asset($slider->image) }}" alt="" height="50"></td>
                                        <td>
                                            @if ($slider->status == 0)
                                                <span class="badge rounded-pill bg-danger-gradient my-1">Unpublished</span>
                                            @else
                                                <span class="badge rounded-pill bg-secondary-gradient my-1">Published</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('slider.edit', $slider->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('slider.destroy', $slider->id) }}" method="post"
                                                class="d-inline-block">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure to delete this?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End DataTable -->
@endsection
