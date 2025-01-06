@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All User Info</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('user.create') }}">Add
                        User</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0">Email</th>
                                    {{-- <th class="wd-15p border-bottom-0">Role</th> --}}
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        {{-- <td>{{ $item->email }}</td> --}}
                                        <td>
                                            <img src="{{ asset($item->profile_photo_path) }}" alt="" height="50">
                                        </td>
                                        <td>
                                            <a href="{{ route('user.edit', ['id' => $item->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('user.destroy', ['id' => $item->id]) }}"
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
