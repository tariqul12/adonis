@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Contact Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Contact</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Contact</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- DataTable -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Contact Info</h3>

                </div>
                <div class="card-body">
                    <p id="sessionMessage" class="text-muted">{{ session('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">email</th>
                                    <th class="wd-15p border-bottom-0">Mobile</th>
                                    <th class="wd-15p border-bottom-0">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contact->first_name . ' ' . $contact->last_name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->mobile }}</td>
                                        <td>{{ $contact->message }}</td>


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
