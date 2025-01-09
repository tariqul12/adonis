@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Frequent Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Frequent</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row justify-content-center">
        <div class="col-lg-8 shadow">
            <div class="card shadow">
                <div class="border-bottom py-5">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="fw-bold text-end">Edit Frequent Form</h3>
                        </div>
                        <div class="col-5 text-end me-1">
                            <a href="{{ route('frequent.index') }}" class="btn btn-primary rounded-0">All Frequent</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-primary fw-bold fs-5">{{ session('message') }}</p>
                    <form action="{{ route('frequent.update', $frequent->id) }}" method="POST"
                        enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="row mb-4">
                            <label for="question" class="col-md-3 form-label">Frequent question</label>
                            <div class="col-md-9">
                                <input class="form-control" id="question" value="{{ $frequent->question }}" name="question"
                                    placeholder="Frequent question" type="text" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="answare" class="col-md-3 form-label">Frequent answare</label>
                            <div class="col-md-9">
                                <input class="form-control" id="answare" value="{{ $frequent->answer }}" name="answer"
                                    placeholder="Frequent answer" type="text" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary rounded-0" type="submit">Update Frequent</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
