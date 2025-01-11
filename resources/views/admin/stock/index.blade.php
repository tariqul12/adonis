@extends('admin.master')
@section('body')
@php
    use Carbon\Carbon;
@endphp
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Stock Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Stock</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Stock</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Stock Info</h3>
                    {{-- <a class="btn btn-info ms-auto" href="{{ route('product.create') }}">add
                        Product</a> --}}
                </div>
                <div class="card-body">
                    <p id="sessionMessage" class="text-muted">{{ session('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Product Name</th>
                                    <th class="wd-15p border-bottom-0 text-center">Last Updated Stock</th>
                                    <th class="wd-15p border-bottom-0">Stock</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ Str::limit($product->name, 50) }}</td>
                                        <td class="text-center">{{ Carbon::createFromFormat('Y-m-d H:i:s', $product->updated_at)->format('d M Y, h:i:s A') }}</td>
                                        <td>{{ $product->stock_amount }}</td>
                                        <td>
                                            @if ($product->stock_amount > 1)
                                                <span class="badge bg-success my-1">In Stock</span>
                                            @else
                                                <span class="badge bg-danger my-1">Out of Stock</span>
                                            @endif
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
