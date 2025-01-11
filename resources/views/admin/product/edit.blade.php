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
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                    <form class="form-horizontal" action="{{ route('product.update', $product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="" class=" form-label">Category Name</label>
                                    <div class="">
                                        <select class="form-control" name="category_id"
                                            onchange="getSubCategoryByCategory(this.value)">
                                            <option value="">-- Select Category Name --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @selected($product->category_id == $category->id)>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
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
                                                <option value="{{ $sub_category->id }}" @selected($product->sub_category_id == $sub_category->id)>
                                                    {{ $sub_category->name }}</option>
                                            @endforeach
                                        </select>
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
                                                <option value="{{ $brand->id }}" @selected($product->brand_id == $brand->id)>
                                                    {{ $brand->name }}
                                                </option>
                                            @endforeach
                                        </select>
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
                                                <option value="{{ $unit->id }}" @selected($product->unit_id == $unit->id)>
                                                    {{ $unit->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="productName" class=" form-label">Product Name</label>
                                    <div class="">
                                        <input class="form-control" name="name" value="{{ $product->name }}"
                                            id="productName" placeholder="Product Name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="row mb-4">
                                    <label for="productCode" class=" form-label">Product Code</label>
                                    <div class="">
                                        <input class="form-control" name="code" id="productCode"
                                            value="{{ $product->code }}" placeholder="Product Code" type="text">
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
                                            @foreach ($sizes as $availableSize)
                                                <option value="{{ $availableSize->id }}"
                                                    @foreach ($product->productSizes as $productSize) @if ($productSize->size->id == $availableSize->id) selected @endif @endforeach>
                                                    {{ $availableSize->name }}
                                                </option>
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
                                            @foreach ($colors as $availableColor)
                                                <option value="{{ $availableColor->id }}"
                                                    @foreach ($product->ProductColors as $productColor)@if ($productColor->color->id == $availableColor->id) selected @endif @endforeach>
                                                    {{ $availableColor->name }}
                                                </option>
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
                                        <textarea class="form-control" name="short_description" id="description" placeholder="Short Description">{{ $product->short_description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="stock_amount" class=" form-label">Stock Qty</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="stock_amount"
                                            value="{{ $product->stock_amount }}" placeholder="Stock Amount"
                                            id="image" type="number" />
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="summernote" class=" form-label">Long Description</label>
                                    <div class="">
                                        <textarea class="form-control" name="long_description" id="summernote" value="{{ $product->name }}"
                                            placeholder="long Description">{{ $product->long_description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label class=" form-label">Product Price</label>
                                    <div class="">
                                        <input class="form-control" value="{{ $product->regular_price }}"
                                            name="regular_price" placeholder="regular price" type="number" />
                                    </div>
                                    <span
                                        class="text-danger">{{ $errors->has('regular_price') ? $errors->first('regular_price') : '' }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label class=" form-label">Selling Price</label>
                                    <div class="">
                                        <input class="form-control" value="{{ $product->selling_price }}"
                                            name="selling_price" placeholder="selling price" type="number" />
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
                                        <input class="form-control" value="{{ $product->meta_title }}" name="meta_title"
                                            id="meta_title" placeholder="Short Description" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="meta_description" class=" form-label">Meta description</label>
                                    <div class="">
                                        <textarea class="form-control" name="meta_description" id="meta_description" placeholder="Short Description">{{ $product->meta_description }}</textarea>
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
                                        <img src="{{ asset($product->image) }}" alt="" width="200"
                                            height="200" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4">
                                    <label for="otherimage" class=" form-label">Product Other Image</label>
                                    <div class="">
                                        <input class="dropify" data-height="200" name="other_image[]" multiple
                                            id="otherimage" type="file" />
                                        @foreach ($product->productImages as $productImage)
                                            <img src="{{ asset($productImage->image) }}" alt="" height="200"
                                                width="200" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="row mb-4">
                                    <label class=" form-label">Publication Status</label>
                                    <div class="">
                                        <label><input name="status" type="radio"
                                                {{ $product->status == 1 ? 'checked' : '' }}
                                                value="1">Published</label>
                                        <label><input name="status" type="radio"
                                                {{ $product->status == 0 ? 'checked' : '' }}
                                                value="0">Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row mb-4">
                                    <label class=" form-label">Popular Status</label>
                                    <div class="">
                                        <label><input name="popular_status" type="radio"
                                                {{ $product->popular_status == 1 ? 'checked' : '' }}
                                                value="1">Yes</label>
                                        <label><input name="popular_status" type="radio"
                                                {{ $product->popular_status == 0 ? 'checked' : '' }}
                                                value="0">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row mb-4">
                                    <label class=" form-label">Feature Status</label>
                                    <div class="">
                                        <label><input name="feature_status" type="radio"
                                                {{ $product->feature_status == 1 ? 'checked' : '' }}
                                                value="1">Yes</label>
                                        <label><input name="feature_status" type="radio"
                                                {{ $product->feature_status == 0 ? 'checked' : '' }}
                                                value="0">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Product Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
