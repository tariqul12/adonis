@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Unit Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Unit</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Update Unit Form</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('unit.index') }}">All
                        Unit</a>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('unit.update', $unit->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mb-4">
                            <label for="unitName" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{ $unit->name }}" id="unitName"
                                    placeholder="Unit Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="unitCode" class="col-md-3 form-label">Unit Code</label>
                            <div class="col-md-9">
                                <input class="form-control" name="code" value="{{ $unit->code }}" id="unitCode"
                                    placeholder="Unit Code" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input name="status" type="radio" {{ $unit->status == 1 ? 'checked' : '' }}
                                        value="1">Published</label>
                                <label><input name="status" type="radio" {{ $unit->status == 0 ? 'checked' : '' }}
                                        value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Unit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
