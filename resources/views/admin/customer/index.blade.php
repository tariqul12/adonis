@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Customer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Customer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Customer</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Customer Info</h3>
                    {{-- <a class="btn btn-info ms-auto" href="{{ route('customer.create') }}">Add
                        Customer</a> --}}
                </div>
                <div class="card-body">
                    <p id="sessionMessage" class="text-muted">{{ session('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Customer Name</th>
                                    <th class="wd-15p border-bottom-0">Mobile</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-10p border-bottom-0">Address</th>
                                    <th class="wd-25p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> <img width="50" height="50" src="{{ asset($customer->image) }}" alt=""
                                                class="br-5">
                                             {{($customer->name) }}</td>
                                        <td> {{($customer->mobile ) }}</td>
                                        <td> {{($customer->email) }}</td>
                                        <td> {{($customer->address) }}</td>
                                        <td>
                                            @if ($customer->status == 1)
                                                <span class="badge bg-info my-1">Published</span>
                                            @else
                                                <span class="badge bg-danger my-1">Unpublished</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('customer.edit',$customer->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {{-- <form action="" method="post"
                                                class="d-inline-block">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure to delete this?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form> --}}
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
