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
                <li class="breadcrumb-item active" aria-current="page">Manage Shipping</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Shipping Info</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('shipping.create') }}">Add
                        Shipping</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-20p border-bottom-0">Cost</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shippings as $shipping)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $shipping->title }}</td>
                                        <td>{{ $shipping->cost }}</td>
                                        <td>{{ $shipping->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('shipping.edit', ['id' => $shipping->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('shipping.destroy', ['id' => $shipping->id]) }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete this?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
