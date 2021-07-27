@extends('layouts.mobile.master')

@section('style')
    <title>{{ $storeproduct->product->name }} - Contact for more information at {{ $storeproduct->store->name }} | Chhatt</title>
    <meta name="title"
        content="{{ $storeproduct->product->name }} - Contact for more information at {{ $storeproduct->store->name }} | Chhatt">
    <meta name="description"
        content="{{ $storeproduct->product->name }}and other construction materials are available at Chhatt. For further information and details you must contact at our vendors {{ $storeproduct->store->name }}">
    <link rel="stylesheet" href="{{ asset('mobile/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/singleproductmob.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('personalscripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            responsive: [{
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true
                    }
                },
            ]
        });
    </script>
@endsection
@section('content')
    <div id="mobile">
        <!-- header start -->


        <div class="slider mt-3" style="max-height: 250px;">
            <div class="divs">
                <img width="100%" style="max-height: 250px;"
                    src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $storeproduct->product->image }}" />
            </div>

        </div>
        <!-- slider end -->
        <!-- company card start -->
        <div class="ccard">
            <h5 class="font-weight-bold" style="font-size: 18px;">{{ $storeproduct->product->name }}</h5>
            <b class="text-primary">Rs {{ $storeproduct->product->price }}</b>
            <p>By: {{ $storeproduct->store->name }}, Karachi</p>
            <div class="text-center ">
                <a href="tel:+{{ $storeproduct->store->phone }}">
                    <button type="button" class="btn btn-success w-50 me-2">Call Now</button>
                </a>
                {{-- <button type="button" class="btn btn-primary w-50">Get Best Price</button> --}}
            </div>
        </div>
        <!-- company card end -->


        <!-- Product Description start -->
        <div class="shadow-lg px-3 border-bottom border-top border-dark border-1">
            <div>
                <h5 class="fw-bold pt-3">

                    Product Description
                    <hr>
                </h5>
            </div>
            {{-- <li class="col-6 fw-bold">

                    Brand
                </li>
                <li class="col-6">
                    JISI
                </li> --}}
            @foreach ($storeproduct->product->attributes as $item)
                <div class="row">

                    <div class="col-6">{{ $item->attribute->name }}</div>
                    <div class="col-6">{{ $item->desc }}</div>
                </div>
                <hr class="my-1 text-secondary">
            @endforeach
            <br>
            <div class="text-center pb-3">
                <button class="btn bg-transparent text-blue">View more</button>
            </div>
        </div>
        <!-- Product Description end -->

        <!-- COMPANY INFORMATION STARt -->
        <div class="shadow-lg px-3 mt-4 border-bottom border-top border-dark border-1">
            <div>
                <h5 class="fw-bold pt-3">

                    Company Information
                    <hr>
                </h5>
            </div>
            <div class="companyDetails d-flex justify-content-between">
                <img class="thumbnail"
                    src="https://images.unsplash.com/photo-1625108388118-c9f1b13d33b4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                    alt="">
                <div class="px-3">
                    <h6 class="mb-0 small">{{ $storeproduct->store->name }}</h6>
                    <p>{{ $storeproduct->store->address }}</p>
                    {{-- <div>Seller type: [Exports to Pakistan]</div> --}}
                </div>
                <div>
                    {{-- umair --}}
                    <a href="tel:+{{ $storeproduct->store->phone }}">
                        <span class="phoneIconM">
                            <i class="bi bi-telephone-outbound-fill">
                            </i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="text-center pt-3 pb-3">
                <a href="{{ route('construction.singlestore', ['store' => $storeproduct->store->slug]) }}">
                    <button class="btn bg-transparent text-blue">View more</button>
                </a>
            </div>
        </div>
        <!-- COMPANY INFORMATION end -->

        <br><br><br><br>
        <!-- bestprperty start -->
        {{-- @foreach ($storeproduct->getrelatedproduct(8) as $item)
            <div class="bestprperty_main_div">
                <div class="fdiv">
                    <div class="top">
                        <p>Relative Properties</p>
                        <p>
                            View All
                        </p>
                    </div>
                    <div class="sdiv">
                        <ul>
                            <li>
                                <div>
                                    <!-- card start -->
                                    <a href="" class="card_main_div text-decoration-none">
                                        <img src="./assets/images/welcomeCenter.webp" class="propertyImg" alt="" />
                                        <p class="mb-0"> area_type </p>
                                        <b>
                                            property_type
                                        </b>
                                        <p>
                                            <b>Rs : short_price</b>
                                        </p>
                                    </a>
                                    <!-- card end -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- bestprperty end -->
        @endforeach --}}
    </div>
@endsection
