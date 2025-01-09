@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Newslatter Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Newslatter</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Newslatter</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Newslatter Info</h3>

                </div>
                <div class="card-body">
                    <p id="sessionMessage" class="text-muted">{{ session('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">email</th>
                                    <th class="wd-15p border-bottom-0">Mobile</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news_latters as $newslatter)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $newslatter->email }}</td>
                                        <td>{{ $newslatter->mobile }}</td>
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
