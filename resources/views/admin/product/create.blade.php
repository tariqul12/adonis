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
                <li class="breadcrumb-item active" aria-current="page">Create Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Product Form</h3>
                    <a class="btn btn-info ms-auto" href="{{ route('product.index') }}">All
                        Product</a>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('product.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="" class=" form-label">Category Name</label>
                                    <div class="">
                                        <select class="form-control" name="category_id"
                                            onchange="getSubCategoryByCategory(this.value)">
                                            <option value="">-- Select Category Name --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <span
                                            class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="" class=" form-label">Sub Category Name</label>
                                    <div class="">
                                        <select class="form-control" name="sub_category_id" id="subCategory">
                                            <option value="">-- Select Sub Category Name --</option>
                                            @foreach ($sub_categories as $sub_category)
                                                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                            @endforeach
                                        </select>
                                        <span
                                            class="text-danger">{{ $errors->has('sub_category_id') ? $errors->first('sub_category_id') : '' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label class=" form-label">Brand Name</label>
                                    <div class="">
                                        <select class="form-control" name="brand_id">
                                            <option value="">-- Select Brand Name --</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        <span
                                            class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="row mb-4">
                                    <label class=" form-label">Unit Name</label>
                                    <div class="">
                                        <select class="form-control" name="unit_id">
                                            <option value="">-- Select Unit Name --</option>
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                        <span
                                            class="text-danger">{{ $errors->has('unit_id') ? $errors->first('unit_id') : '' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="subcategoryName" class=" form-label">Product Name</label>
                                    <div class="">
                                        <input class="form-control" name="name" id="subcategoryName"
                                            placeholder="Product Name" type="text">
                                        <span
                                            class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="row mb-4">
                                    <label for="productCode" class=" form-label">Product Code <span class="text-info"
                                            id="genarateCode" style="cursor: pointer;">Generate Code</span></label>
                                    <div>
                                        <input class="form-control" name="code" id="productCode"
                                            placeholder="Product Code" type="text" readonly>
                                        <span
                                            class="text-danger">{{ $errors->has('code') ? $errors->first('code') : '' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <div class="form-group">
                                        <label class="form-label">Size</label>
                                        <select multiple name="size_id[]"
                                            class="form-control select2-show-search form-select"
                                            data-placeholder="Choose one">
                                            <option label="Choose one"></option>
                                            @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <div class="form-group">
                                        <label class="form-label">Color</label>
                                        <select multiple name="color_id[]"
                                            class="form-control select2-show-search form-select"
                                            data-placeholder="Choose one">
                                            <option label="Choose one"></option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="description" class=" form-label">Short Description</label>
                                    <div class="">
                                        <textarea class="form-control" name="short_description" id="description" rows="10"
                                            placeholder="Short Description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="stock_amount" class=" form-label">Stock Qty</label>
                                    <div class="">
                                        <input class="form-control" name="stock_amount" placeholder="Stock Amount"
                                            id="stock_amount" type="number" />
                                        <span
                                            class="text-danger">{{ $errors->has('stock_amount') ? $errors->first('stock_amount') : '' }}</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="summernote" class=" form-label">Long Description</label>
                                    <div class="">
                                        <textarea class="form-control" name="long_description" id="summernote" placeholder="long Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label class=" form-label">Product Price</label>
                                    <div class="">
                                        <input class="form-control" name="regular_price" placeholder="regular price"
                                            type="number" />
                                    </div>
                                    <span
                                        class="text-danger">{{ $errors->has('regular_price') ? $errors->first('regular_price') : '' }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label class=" form-label">Selling Price</label>
                                    <div class="">
                                        <input class="form-control" name="selling_price" placeholder="selling price"
                                            type="number" />
                                    </div>
                                    <span
                                        class="text-danger">{{ $errors->has('selling_price') ? $errors->first('selling_price') : '' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="meta_title" class=" form-label">Meta title</label>
                                    <div class="">
                                        <input class="form-control" name="meta_title" id="meta_title"
                                            placeholder="Short Description" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="meta_description" class=" form-label">Meta description</label>
                                    <div class="">
                                        <textarea class="form-control" name="meta_description" id="meta_description" placeholder="Short Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="image" class=" form-label">Product Image</label>
                                    <div class="">
                                        <input class="dropify" data-height="200" name="image" id="image"
                                            type="file" />
                                        <span
                                            class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="otherimage" class=" form-label">Product Other Image</label>
                                    <div class="">
                                        <input class="dropify" data-height="200" name="other_image[]" multiple
                                            id="otherimage" type="file" />
                                        <span class="text-danger">
                                            {{-- Error if no image is uploaded --}}
                                            @if ($errors->has('other_image'))
                                                {{ $errors->first('other_image') }}
                                            @endif

                                            {{-- Errors for each uploaded file --}}
                                            @foreach ($errors->get('other_image.*') as $message)
                                                {{ $message[0] }}<br>
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row mb-4">
                                    <label class=" form-label">Publication Status</label>
                                    <div class="">
                                        <label><input name="status" type="radio" checked
                                                value="1">Published</label>
                                        <label><input name="status" type="radio" value="0">Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row mb-4">
                                    <label class=" form-label">Popular Status</label>
                                    <div class="">
                                        <label><input name="popular_status" type="radio" value="1">Yes</label>
                                        <label><input name="popular_status" type="radio" checked
                                                value="0">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row mb-4">
                                    <label class=" form-label">Feature Status</label>
                                    <div class="">
                                        <label><input name="feature_status" type="radio" value="1">Yes</label>
                                        <label><input name="feature_status" type="radio" checked
                                                value="0">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- FORM ELEMENTS JS -->
    <script src="{{ asset('/') }}admin/assets/js/formelementadvnced.js"></script>
    <script>
        // Function to generate a random code
        function generateRandomCode() {
            // Example: Generate a random alphanumeric code with 8 characters
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let code = '';
            for (let i = 0; i < 8; i++) {
                code += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return code;
        }

        // Add event listener to the "Generate Code" span
        document.getElementById('genarateCode').addEventListener('click', function() {
            // Generate a code and set it as the value of the input field
            const code = generateRandomCode();
            document.getElementById('productCode').value = code;
        });
    </script>
@endpush
