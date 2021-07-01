@extends('layouts.mobile.master')

@section('style')

    <link rel="stylesheet" href="{{ asset('styles/contruction/homemob.css') }}">
@endsection


@section('content')
    <!-- MOBILE START -->
    <div id="mobile">
        <div class="p-3 bg-white">
            <a href="constructionSearch.html">
                <button class="searchBtn py-2 w-100 text-white rounded-2"><i class="me-2 bi bi-search"></i>Search</button>
            </a>
        </div>
        <!-- SUPPLIES start -->
        <div class="indSupplies">
            <div class="fdiv">
                <div class="top">
                    <p>Industrial Supplies</p>
                    <p>
                        View All
                    </p>
                </div>
                <div class="sdiv">
                    <ul class="main_ul">
                        <li>
                            <div>
                                <!-- card start -->
                                <a href="" class="card_main_div text-decoration-none text-dark text-decoration-none">
                                    <img src="./assets/images/welcomeCenter.webp" class="propertyImg" alt="" />
                                    <p class="mb-0 fw-bold text-black"> Cement </p>
                                    <ol class="list-group">
                                        <li class="small mb-0">lorem1</li>
                                        <li class="small mb-0">lorem2</li>
                                        <li class="small mb-0">lorem3</li>
                                    </ol>
                                </a>
                                <!-- card end -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- SUPPLIES end -->

        <!-- NEW PRODUCTS start -->
        <div class="indSupplies mt-4">
            <div class="fdiv">
                <div class="top">
                    <p>Industrial Supplies</p>
                    <p>
                        View All
                    </p>
                </div>
                <div class="sdiv">
                    <ul class="main_ul">
                        <li>
                            <div>
                                <!-- card start -->
                                <a href="" class="card_main_div text-decoration-none text-dark text-decoration-none">
                                    <img src="./assets/images/welcomeCenter.webp" class="propertyImg" alt="" />
                                    <p class="mb-0 fw-bold text-black"> New Product </p>
                                    <div class="list-group">
                                        <h6 class="fw-bold mb-0">Amreli Xtreme Steel</h6>
                                        <h6 class="fw-bold">Rs: 1.38 Lacs</h6>
                                    </div>
                                </a>
                                <!-- card end -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- NEW PRODUCTS end -->

    </div>
    <!-- MOBILE END -->
@endsection


@section('personalscripts')

@endsection
