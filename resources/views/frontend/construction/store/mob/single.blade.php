@extends('layouts.mobile.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('mobile/index.css') }}">
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="{{ asset('styles/contruction/singlestoremob.css') }}">
@endsection

@section('content')
    <div id="mobile">

        <!-- COMPANY DETAILS START -->
        <div class="company_details shadow bg-white pb-2">
            <div class="container-fluid">
                <hr>
                <div class="row">
                    <div class="col-3">
                        <img class="w-100 border border-1 border-dark rounded-2"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                            alt="">
                    </div>
                    <div class="col-9 ps-0">
                        <h4 class="fw-bold mb-0">{{ $store->name }}</h4>
                        <div><i class="bi bi-geo-alt-fill text-secondary"></i>{{ $store->address }}
                        </div>
                        {{-- <p class="mb-1"><b>GST-</b>24AAGCC8070M1ZD</p> --}}
                    </div>
                </div>
                <hr class="my-1">
                <div class="d-flex mt-1">
                    <div><i class="bi bi-star-fill"></i> 3.5/5
                    </div>
                    <div class="ms-2"><i class="bi bi-patch-check-fill"></i>
                        Verified Exporter
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <button class="outlinedBtn w-100 py-1 rounded-pill"><i class="bi bi-telephone-fill me-1"></i>
                        Call Now</button>
                    <button class="filledBtn w-100 text-white py-1 rounded-pill ms-3 border-0"><i
                            class="bi bi-chat-right-text-fill me-1"></i>
                        Contact Seller</button>
                </div>
            </div>
        </div>
        <!-- COMPANY DETAILS END -->

        <!-- PRODUCT CARD START -->
        <div class="company_details mt-4 shadow-lg bg-white pb-3">
            <div class="d-flex">
                <button
                    class="w-100 py-2 border border-bottom-0 border-start-0 border-end-0 border-top border-dark fw-bold border-3 bg-transparent">Products</button>
                <button class="w-100 py-2">ABOUT US</button>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-2">

                        @foreach ($store->randomstoreproductswithpagination() as $item)

                            <div class="row py-3 rounded-3 shadow-sm">
                                <div class="col-4">
                                    <img class="w-100 border border-1 border-dark rounded-2"
                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                        alt="">
                                </div>
                                <div class="col-8 ps-0">
                                    <h6 class="fw-bold mb-0">{{ $item->product->name }}</h6>
                                    <h6 class="fw-bold mb-0">Rs {{ $item->product->price }}</h5>
                                        <div class="small"> {{ $item->product->description }}
                                        </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <button class="outlinedBtn w-100 py-1 rounded-pill"><i
                                            class="bi bi-telephone-fill me-1"></i>
                                        Call Now</button>
                                    <button class="filledBtn w-100 text-white py-1 rounded-pill ms-3 border-0"><i
                                            class="bi bi-chat-right-text-fill me-1"></i>
                                        Contact Seller</button>
                                </div>
                            </div>
                        @endforeach
                        <br>
                        <div class="d-flex justify-content-center">
                            <div>
                                {{ $store->randomstoreproductswithpagination()->links('pagination::simple-bootstrap-4') }}
                            </div>
                        </div>

                        <br>
                        <br>



                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT CARD END -->

        <!-- bestprperty start -->
        {{-- <div class="container-fluid bg-white">
            <div class="bg-white bestprperty_main_div">
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
        </div> --}}
        <!-- bestprperty end -->

        <!-- DETAILS START -->
        <div class="d-flex justify-content-center">
            <div></div>
        </div>
        <!-- DETAILS END -->

    </div>
@endsection
