@extends('layouts.mobile.master')

@section('style')
    <meta name="robots" content="noindex"/>
    <link rel="stylesheet" href="{{ asset('mobile/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/mobproductlist.css') }}">
@endsection


@section('content')
    <!-- MOBILE START -->

    <div id="mobile">
        <!-- category start -->
        <div class="category_main_div themeBtnBorder2">
            <div class="fdiv">
                <div class="top">
                    <h6 class="fw-bolder">Categories to explore</h6>
                </div>
                <div class="sdiv">
                    <ul>
                        @foreach ($dcategories as $item)

                            <li>
                                <div class="categoryThumbnail">
                                    <a
                                        href="{{ route('construction.productlist', ['dcategory' => $item->name, 'product' => $item->products[0]->id]) }}">
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $item->image }}"
                                            alt="">
                                    </a>
                                </div>
                                <p class="text-center lh-sm">{{ $item->name }}</p>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!-- category end -->


        <!-- SUPPLIES start -->
        {{-- <div class="indSupplies mt-4 themeBtnBorder2">
            <div class="fdiv">
                <div class="top">
                    <p class="mb-1">Populars</p>
                    <p class="mb-1">
                        View All
                    </p>
                </div>
                <div class="sdiv">
                    <ul class="main_ul">
                        @foreach ($dcategories as $item)
                            <li>
                                <div>
                                    <!-- card start -->
                                    <a href="" class="card_main_div text-decoration-none text-dark text-decoration-none">
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $item->image }}"
                                            class="propertyImg" alt="" />
                                        <h6 class="mb-0 fw-bold themeColor mt-1 font-weight-bold small"> Venus V4400
                                            Respirator
                                        </h6>
                                        <div class="small">981 Sellers available</div>
                                        <strong>165 Onwards</strong>
                                    </a>
                                    <!-- card end -->
                                </div>
                            </li>
                        @endforeach



                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- SUPPLIES end -->


        <div class="container-fluid mt-4">
            <div class="row">
                @foreach ($storeproducts as $item)
                    <div class="col-12 bg-white pt-4 pb-3 shadow-lg rounded-lg themeBtnBorder2">
                        <div class="row">
                            <div class="productCardM col-6">
                                <a href="{{ route('construction.singleproduct', ['store' => $item->store->name, 'storeproduct' => $item->id]) }}">
                                    <img class="w-100 rounded-lg border-1 border-light border-1"
                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-6 pl-0">
                                <h6 class="font-weight-bold">{{ $item->product->name }}</h6>
                                <div class="mb-0"><small class="mb-0"><i class="bi bi-patch-check-fill text-warning"></i>
                                        {{ $item->store->name }}
                                    </small></div>
                                {{-- <div class="mb-0"><small class="mb-0"><i class="bi bi-geo-alt-fill themeColor"></i> Focal
                                        Point,
                                        Ludhiana</small></div> --}}
                                <div class="mb-0"><small class="mb-0 font-weight-bold h6"><i
                                            class="bi bi-wallet2 text-info"></i>
                                        Rs {{ $item->product->price }}</small></div>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <button class="w-100 py-1 rounded-pill themeBtnBorder bg-transparent themeColor">Call
                                Now</button>
                            <button class="themeBtn shadow text-white w-100 py-1 rounded-pill ml-3">Get Best Price</button>
                        </div>
                        {{-- <p class="small text-center mt-2 text-dark font-weight-bold mb-0">10,947 Views • 3,928 Enquiries</p> --}}
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <!-- MOBILE END -->
@endsection


@section('personalscripts')

@endsection
