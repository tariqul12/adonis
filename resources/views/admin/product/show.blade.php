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
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->


    <!-- ROW-1 OPEN -->
    <div class="row">
        <!-- COL-OPEN -->
        <div class="col-lg-12 col-md-12">
            <div class="card productdesc">
                <div class="card-body">
                    <div class="row mb-5">
                        <div class=" col-xl-6 col-lg-12 col-md-12">
                            <div class="row h-100">
                                <div class="col-xl-2">
                                    <div class="clearfix carousel-slider h-100">
                                        <div class="carousel slide h-100" data-bs-interval="t" id="thumbcarousel">
                                            <div class="carousel-inner h-100">
                                                <ul class="carousel-item active d-flex h-100">
                                                    <li class="thumb my-2 active" data-bs-slide-to="0"
                                                        data-bs-target="#Slider">
                                                        <img alt="img" src="{{ asset($product->image) }}">
                                                    </li>
                                                    @foreach ($product->productImages as $key => $image)
                                                        <li class="thumb my-2 {{ $key == 0 ? 'active' : '' }}"
                                                            data-bs-slide-to="{{ $key }}" data-bs-target="#Slider">
                                                            <img alt="img" src="{{ asset($image->image) }}">
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-10">
                                    <div class="product-carousel h-100">
                                        <div class="carousel slide h-100" data-bs-ride="false" id="Slider">
                                            <div class="carousel-inner h-100">
                                                <div class="carousel-item">
                                                    <img alt="img" class="img-fluid w-100 d-block"
                                                        src="{{ asset($product->image) }}">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img alt="img" class="img-fluid w-100 d-block"
                                                        src="{{ asset($product->image) }}">
                                                </div>
                                                <div class="carousel-item ">
                                                    <img alt="img" class="img-fluid w-100 d-block"
                                                        src="{{ asset($product->image) }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img alt="img" class="img-fluid w-100 d-block"
                                                        src="{{ asset($product->image) }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img alt="img" class="img-fluid w-100 d-block"
                                                        src="{{ asset($product->image) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12">

                            <h3 class="mb-2 mt-xl-0 mt-4">{{ $product->name }}</h3>
                            <p class="mb-0 text-18 mt-5">Code: </p>
                            <p class="mb-1">
                                <span class="text-dark text-22"> {{ $product->code }}</span>

                            </p>
                            <p class="mb-0 text-18 mt-5">Salling Price:</p>
                            <p class="mb-1">
                                <span class="text-dark text-22"> TK:{{ $product->selling_price }}</span>


                            </p>
                            <p class="mb-0 text-18 mt-5">Regular Price: </p>
                            <p class="mb-1">
                                <span class="text-dark text-22"> TK:{{ $product->regular_price }}</span>

                            </p>
                            <div class="mt-5">
                                <div class="row">
                                    <label for="">Stock:</label>
                                    <div class="col-md-3">
                                        <input type="number" readonly class="form-control" value="{{ $product->stock_amount }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="row">
                                    <p>{{ $product->short_description }}</p>
                                </div>
                            </div>
                            <p class="mb-0 text-18 mt-5">Hit Count: </p>
                            <p class="mb-1">
                                <span class="text-dark text-22">{{ $product->hit_count }}</span>

                            </p>
                            <p class="mb-0 text-18 mt-5">Sales Count: </p>
                            <p class="mb-1">
                                <span class="text-dark text-22">{{ $product->sales_count }}</span>

                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="mt-4 mb-4">
                                <h3>{{ $product->name }}</h3>
                            </div>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading border-bottom-0">
                                    <div class="tabs-menu">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li>
                                                <a class="active me-2 my-sm-0 my-1 text-body" data-bs-toggle="tab"
                                                    href="#tab1">Specifications</a>
                                            </li>
                                            {{-- <li>
                                                <a class="me-2 my-sm-0 my-1 text-body" data-bs-toggle="tab"
                                                    href="#tab2">Dimensions</a>
                                            </li> --}}
                                            <li>
                                                <a class="text-body my-sm-0 my-1" data-bs-toggle="tab"
                                                    href="#tab3">Reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h4 class="mb-5 mt-3">General</h4>
                                            <ul class="list-unstyled mb-0">
                                                <li class="row">
                                                    <div class="col-sm-3 text-muted">
                                                        Brand
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $product->brand->name }}
                                                    </div>
                                                </li>
                                                <li class=" row">
                                                    <div class="col-sm-3 text-muted">
                                                        Category
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $product->category->name }}
                                                    </div>
                                                </li>
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Sub Category
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ @$product->subCategory->name }}
                                                    </div>
                                                </li>
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Date
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $product->created_at->format('F j, Y g:i A') }}
                                                    </div>
                                                </li>
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Size
                                                    </div>
                                                    <div class="col-sm-3">
                                                        @foreach ($product->productSizes as $key => $size)
                                                            {{ $size->size->name }}{{ !$loop->last ? ',' : '' }}
                                                        @endforeach
                                                    </div>
                                                </li>
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Color
                                                    </div>
                                                    <div class="col-sm-3">
                                                        @foreach ($product->ProductColors as $key => $color)
                                                            {{ $color->color->name }}{{ !$loop->last ? ',' : '' }}
                                                        @endforeach
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <div class="tab-pane" id="tab2">
                                            <ul class="list-unstyled mb-0">
                                                <li class="row">
                                                    <div class="col-sm-3 text-muted">
                                                        Width
                                                    </div>
                                                    <div class="col-sm-3">
                                                        7.3 inch
                                                    </div>
                                                </li>
                                                <li class=" row">
                                                    <div class="col-sm-3 text-muted">
                                                        Height
                                                    </div>
                                                    <div class="col-sm-3">
                                                        15 inch
                                                    </div>
                                                </li>
                                                <li class=" row">
                                                    <div class="col-sm-3 text-muted">
                                                        Weight
                                                    </div>
                                                    <div class="col-sm-3">
                                                        50.5gm
                                                    </div>
                                                </li>
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Depth
                                                    </div>
                                                    <div class="col-sm-3">
                                                        6.1 inch
                                                    </div>
                                                </li>
                                                <li class="p-b-20 row">
                                                    <div class="col-sm-3 text-muted">
                                                        Other Dimensions
                                                    </div>
                                                    <div class="col-sm-3">
                                                        17.5 * 13.5 * 24CM
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="tab-pane" id="tab3">
                                            <ul class="comment-section-main">
                                                <li>
                                                    <div class="media mb-5 cnsl">
                                                        <div class=" me-3">
                                                            <a href="#"><img alt="64x64"
                                                                    class="media-object rounded-circle thumb-sm"
                                                                    src="{{ asset('/') }}admin/assets/images/users/5.jpg"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="name-time-container d-flex">
                                                                <h5 class="mt-0 mb-0 me-2">David Neilson</h5><svg
                                                                    class="mx-2 me-1" viewbox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.999939,6.5c-0.276123,0-0.5,0.223877-0.5,0.5v4.6914062l-2.7059937,1.3623047c-0.168457,0.0848999-0.2747803,0.2573853-0.2749634,0.4460449C8.5187988,13.7758789,8.7424927,13.9998169,9.0185547,14c0.078064,0.0003662,0.1550903-0.0180664,0.2245483-0.0537109l2.9814453-1.5C12.3933105,12.3615112,12.4998169,12.1888428,12.499939,12V7C12.499939,6.723877,12.276123,6.5,11.999939,6.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                    </path>
                                                                </svg> <span class="time-main text-muted">2h ago</span>
                                                            </div>
                                                            <div class="text-warning mb-0">
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="comment-main-action d-flex">
                                                                <p class="font-13 text-muted mb-0 comment-main">Weh du dann
                                                                    die vom von und ergötzt denkst sanken..</p>
                                                            </div><a href="#"><span
                                                                    class="badge btn-custom rounded-pill">Reply</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media mb-5">
                                                        <div class=" me-3">
                                                            <a href="#"><img alt="64x64"
                                                                    class="media-object rounded-circle thumb-sm"
                                                                    src="{{ asset('/') }}admin/assets/images/users/5.jpg"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="name-time-container d-flex">
                                                                <h5 class="mt-0 mb-0 me-2">Nikki Taylor</h5><svg
                                                                    class="mx-2 me-1" viewbox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.999939,6.5c-0.276123,0-0.5,0.223877-0.5,0.5v4.6914062l-2.7059937,1.3623047c-0.168457,0.0848999-0.2747803,0.2573853-0.2749634,0.4460449C8.5187988,13.7758789,8.7424927,13.9998169,9.0185547,14c0.078064,0.0003662,0.1550903-0.0180664,0.2245483-0.0537109l2.9814453-1.5C12.3933105,12.3615112,12.4998169,12.1888428,12.499939,12V7C12.499939,6.723877,12.276123,6.5,11.999939,6.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                    </path>
                                                                </svg> <span class="time-main text-muted">1h ago</span>
                                                            </div>
                                                            <div class="text-warning mb-0">
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="comment-main-action d-flex">
                                                                <p class="font-13 text-muted mb-0 comment-main"><span
                                                                        class="text-teritary">@David Neilson</span> De tout
                                                                    plus o amer coups un eau. Confiture impassibles un de
                                                                    bords fumant poissons.</p>
                                                            </div><a href="javascript:void(0)"><span
                                                                    class="badge btn-custom rounded-pill">Reply</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media mb-5">
                                                        <div class=" me-3">
                                                            <a href="#"><img alt="64x64"
                                                                    class="media-object rounded-circle thumb-sm"
                                                                    src="{{ asset('/') }}admin/assets/images/users/5.jpg"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="name-time-container d-flex">
                                                                <h5 class="mt-0 mb-0 me-2">Halsey Glenn</h5><svg
                                                                    class="mx-2 me-1" viewbox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.999939,6.5c-0.276123,0-0.5,0.223877-0.5,0.5v4.6914062l-2.7059937,1.3623047c-0.168457,0.0848999-0.2747803,0.2573853-0.2749634,0.4460449C8.5187988,13.7758789,8.7424927,13.9998169,9.0185547,14c0.078064,0.0003662,0.1550903-0.0180664,0.2245483-0.0537109l2.9814453-1.5C12.3933105,12.3615112,12.4998169,12.1888428,12.499939,12V7C12.499939,6.723877,12.276123,6.5,11.999939,6.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                    </path>
                                                                </svg> <span class="time-main text-muted">30min ago</span>
                                                            </div>
                                                            <div class="text-warning mb-0">
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="comment-main-action d-flex">
                                                                <p class="font-13 text-muted mb-0 comment-main"><span
                                                                        class="text-teritary">@Nikki Taylor</span>
                                                                    Condemned reverie shun friends yet he domestic bade, the
                                                                    aye longed fondly.</p>
                                                            </div><a href="javascript:void(0)"><span
                                                                    class="badge btn-custom rounded-pill">Reply</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-0">
                                                    <div class="media mb-0">
                                                        <div class=" me-3">
                                                            <a href="#"><img alt="64x64"
                                                                    class="media-object rounded-circle thumb-sm"
                                                                    src="{{ asset('/') }}admin/assets/images/users/15.jpg"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="name-time-container d-flex">
                                                                <h5 class="mt-0 mb-0 me-2">Jon Fincher</h5><svg
                                                                    class="mx-2 me-1" viewbox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.999939,6.5c-0.276123,0-0.5,0.223877-0.5,0.5v4.6914062l-2.7059937,1.3623047c-0.168457,0.0848999-0.2747803,0.2573853-0.2749634,0.4460449C8.5187988,13.7758789,8.7424927,13.9998169,9.0185547,14c0.078064,0.0003662,0.1550903-0.0180664,0.2245483-0.0537109l2.9814453-1.5C12.3933105,12.3615112,12.4998169,12.1888428,12.499939,12V7C12.499939,6.723877,12.276123,6.5,11.999939,6.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                    </path>
                                                                </svg> <span class="time-main text-muted">3h ago</span>
                                                            </div>
                                                            <div class="text-warning mb-0">
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="comment-main-action d-flex">
                                                                <p class="font-13 text-muted mb-0 comment-main">Labore
                                                                    tempor vero stet tempor et dolores ipsum.</p>
                                                            </div><a href="javascript:void(0)"><span
                                                                    class="badge btn-custom rounded-pill">Reply</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3 mt-2">Description</h5>
                            <p>{!! $product->long_description !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- COL-END -->

    </div>
@endsection
