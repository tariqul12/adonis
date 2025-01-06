@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Product Info</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('product.create') }}">add
                        Product</a>
                </div>
                <div class="card-body">
                    <p id="sessionMessage" class="text-muted">{{ session('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Product Name</th>
                                    <th class="wd-15p border-bottom-0">Category</th>
                                    <th class="wd-20p border-bottom-0">Selling Price</th>
                                    {{-- <th class="wd-15p border-bottom-0">Image</th> --}}
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset($product->image) }}" alt="" height="50"
                                                width="50">
                                            {{ Str::limit($product->name, 20) }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->selling_price }}</td>
                                        {{-- <td></td> --}}
                                        <td>
                                            @if ($product->status == 1)
                                                <span class="badge bg-info my-1">Published</span>
                                            @else
                                                <span class="badge bg-danger my-1">Unpublished</span>
                                            @endif
                                            @if ($product->feature_status == 1)
                                                <span class="badge bg-info my-1">Featured</span>
                                            @else
                                                <span class="badge bg-danger my-1">Not Featured</span>
                                            @endif
                                            @if ($product->popular_status == 1)
                                                <span class="badge bg-info my-1">Popular</span>
                                            @else
                                                <span class="badge bg-danger my-1">Not Popular</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="post"
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
