@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/singlestore.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1>{{ $store->name }}</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <!-- HEADER START -->
    <div class="single_construction">
        <div class="container-fluid">
            <div class="row">
                <h3 class="mb-0 fw-bold">{{ $store->name }}</h3>
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 18 18">
                                    <g data-name="Group 2198" transform="translate(-172 -287)">
                                        <circle data-name="Ellipse 103" cx="9" cy="9" r="9" transform="translate(173 287)"
                                            fill="#777"></circle>
                                        <path data-name="Path 1044"
                                            d="M5.71,1.679a3.286,3.286,0,0,0-4.728,0A3.762,3.762,0,0,0,.714,6.407L3.39,10.243,6.067,6.407A4.036,4.036,0,0,0,5.71,1.679ZM3.39,5.158a1.071,1.071,0,0,1,0-2.141A.984.984,0,0,1,4.461,4.087,1.085,1.085,0,0,1,3.39,5.158Zm0,0"
                                            transform="translate(178.59 291.182)" fill="#fff"></path>
                                    </g>
                                </svg>
                                <p class="ms-1 mb-0">{{ $store->address }} &nbsp; | &nbsp;</p>
                            </div>
                            <div>
                                GST
                                <strong>
                                    08DSRPR1578A1ZC
                                </strong>
                                &nbsp; | &nbsp;
                            </div>
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 17.542 17.774">
                                    <g data-name="Group 2129" transform="translate(-1298.5 -235.5)">
                                        <circle cx="8.271" cy="8.271" r="8.271" fill="none" stroke="#0f9347"
                                            data-name="Ellipse 81" transform="translate(1299 237)"></circle>
                                        <path d="M0 0h16.542v2.789H0z" fill="#0f9347" data-name="Rectangle 624"
                                            transform="translate(1299 251.485)"></path>
                                        <path
                                            d="M4380.563 5908.823l-1.076 1.076-4.009 4.011-2.033-2.032-.276-.278-.545.547-.544.545 3.4 3.4 6.176-6.177zm0 0"
                                            fill="#0f9347" data-name="Path 939" transform="translate(-3069.595 -5666.796)">
                                        </path>
                                    </g>
                                </svg>
                                <p class="ms-2 mb-0">
                                    <strong>
                                        Verified
                                    </strong>
                                    Supplier
                                </p>
                                &nbsp; | &nbsp;
                            </div>
                            <div class="d-flex align-items-center">
                                <svg height="18px" width="20px" fill="#777" viewBox="0 0 20 20">
                                    <path
                                        d="M10,20A10,10,0,1,1,20,10,10.011,10.011,0,0,1,10,20ZM5.6,14.243c.164,0,.344.007.64.022l.07,0c.314,0,.414-.12.655-.411l.067-.081a.711.711,0,0,0-.038-.277,1.516,1.516,0,0,1-.061-.582l.945.094-.944-.094V8.559H5.05a1.158,1.158,0,0,0-.761.4.885.885,0,0,0-.28.622c.015.233.007,1.009,0,1.761s-.015,1.528,0,1.761c.028.438.529,1.165,1.014,1.165H5.05C5.287,14.251,5.437,14.243,5.6,14.243Zm2.278-1.234v.557l.006,0a1.421,1.421,0,0,0,.8.208c.067,0,.163,0,.272,0,.6,0,1.834-.035,2.829-.064.689-.02,1.279-.036,1.475-.036a.674.674,0,0,0,.774-.582,1.126,1.126,0,0,0-.209-.7c.006,0,.551-.169.685-.524a1.406,1.406,0,0,0-.148-.9.937.937,0,0,0,.625-.727.933.933,0,0,0-.476-.845.917.917,0,0,0,.476-.96.976.976,0,0,0-.774-.815H10.824a3.682,3.682,0,0,0,.208-2.765A1.149,1.149,0,0,0,9.942,4a1.549,1.549,0,0,0-.665.164V5.881L8.064,8.859l-.185.118Z">
                                    </path>
                                </svg>
                                <p class="ms-2 mb-0">
                                    <strong>4.0 </strong>/ 5
                                </p>
                            </div>
                            <div class="ms-2">
                                <i class="bi bi-star-fill filledStar"></i><i class="bi bi-star-fill filledStar"></i><i
                                    class="bi bi-star-fill filledStar"></i><i class="bi bi-star-fill filledStar"></i>
                                <i class="bi bi-star-fill unFilledStar"></i>
                            </div>
                        </div>
                        <div>
                            <button class="px-3 py-2 rounded-1 border border-1 border-dark bg-transparent"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 21 20.984">
                                    <g data-name="Group 1674" transform="translate(-1106 -345)">
                                        <path
                                            d="M15.971 58.013a1.471 1.471 0 0 0-2.224 0c-.52.516-1.04 1.031-1.551 1.556a.306.306 0 0 1-.428.079c-.336-.184-.695-.332-1.018-.533a16.132 16.132 0 0 1-3.889-3.54 9.214 9.214 0 0 1-1.394-2.233.32.32 0 0 1 .079-.411c.52-.5 1.027-1.018 1.538-1.534a1.477 1.477 0 0 0 0-2.277c-.406-.411-.813-.813-1.219-1.224s-.835-.843-1.259-1.259a1.481 1.481 0 0 0-2.224 0c-.524.516-1.027 1.044-1.56 1.551a2.532 2.532 0 0 0-.8 1.709 7.239 7.239 0 0 0 .558 3.121 18.933 18.933 0 0 0 3.36 5.6A20.8 20.8 0 0 0 10.828 64a9.96 9.96 0 0 0 3.815 1.11 2.8 2.8 0 0 0 2.4-.913c.446-.5.948-.953 1.42-1.429a1.487 1.487 0 0 0 .009-2.264q-1.247-1.248-2.501-2.491z"
                                            fill="#000" data-name="Path 253" transform="translate(1105.994 300.863)">
                                        </path>
                                        <path
                                            d="M242.591 102.214l1.613-.275A7.238 7.238 0 0 0 238.081 96l-.227 1.621a5.594 5.594 0 0 1 4.737 4.593z"
                                            fill="#000" data-name="Path 254" transform="translate(878.541 253.195)">
                                        </path>
                                        <path
                                            d="M249.8 3.4a11.89 11.89 0 0 0-6.819-3.4l-.227 1.621a10.375 10.375 0 0 1 8.779 8.508l1.613-.275A11.977 11.977 0 0 0 249.8 3.4z"
                                            fill="#000" data-name="Path 255" transform="translate(873.854 345)">
                                        </path>
                                    </g>
                                </svg> View Mobile Number</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <div class="d-flex justify-content-between">
                        <div class="w-100">
                            <button class="py-1 px-3 rounded-1 activeNav">Home</button>
                            <button class="py-1 px-3 rounded-1">Our Products</button>
                            <button class="py-1 px-3 rounded-1">About Us</button>
                            <button class="py-1 px-3 rounded-1">Contact Us</button>
                        </div>
                        <div style="width: 21%;">
                            {{-- <button class="px-3 py-2 rounded-1 activeNav"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 21 20.984">
                                    <g data-name="Group 1674" transform="translate(-1106 -345)">
                                        <path
                                            d="M15.971 58.013a1.471 1.471 0 0 0-2.224 0c-.52.516-1.04 1.031-1.551 1.556a.306.306 0 0 1-.428.079c-.336-.184-.695-.332-1.018-.533a16.132 16.132 0 0 1-3.889-3.54 9.214 9.214 0 0 1-1.394-2.233.32.32 0 0 1 .079-.411c.52-.5 1.027-1.018 1.538-1.534a1.477 1.477 0 0 0 0-2.277c-.406-.411-.813-.813-1.219-1.224s-.835-.843-1.259-1.259a1.481 1.481 0 0 0-2.224 0c-.524.516-1.027 1.044-1.56 1.551a2.532 2.532 0 0 0-.8 1.709 7.239 7.239 0 0 0 .558 3.121 18.933 18.933 0 0 0 3.36 5.6A20.8 20.8 0 0 0 10.828 64a9.96 9.96 0 0 0 3.815 1.11 2.8 2.8 0 0 0 2.4-.913c.446-.5.948-.953 1.42-1.429a1.487 1.487 0 0 0 .009-2.264q-1.247-1.248-2.501-2.491z"
                                            fill="#fff" data-name="Path 253" transform="translate(1105.994 300.863)">
                                        </path>
                                        <path
                                            d="M242.591 102.214l1.613-.275A7.238 7.238 0 0 0 238.081 96l-.227 1.621a5.594 5.594 0 0 1 4.737 4.593z"
                                            fill="#fff" data-name="Path 254" transform="translate(878.541 253.195)">
                                        </path>
                                        <path
                                            d="M249.8 3.4a11.89 11.89 0 0 0-6.819-3.4l-.227 1.621a10.375 10.375 0 0 1 8.779 8.508l1.613-.275A11.977 11.977 0 0 0 249.8 3.4z"
                                            fill="#fff" data-name="Path 255" transform="translate(873.854 345)">
                                        </path>
                                    </g>
                                </svg> View Mobile Number</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HEADER END -->


    <!-- BEST PROPERTY START -->
    <div class="pageContainer mt-4">
        <div class="container-fluid">
            <div>
                <div class="d-flex justify-content-between">
                    <h2 class="fw-bold">Deal In Cateogry</h2>
                    <div class="d-flex">
                        <div class="ms-4">
                            <button class="themebtn2 px-3 py-1 ms-1">View all</button>
                        </div>
                    </div>
                </div>
                <!-- slider -->
                <div class="main_slide_div">
                    <div style="margin: auto;" class="slider">
                        @foreach ($d_categories as $item)

                            <div>
                                <li class="scroll-img-list p-2 my-3">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $item->image }}"
                                                alt="" />
                                        </div>
                                        <div class="botom_div">
                                            <div class="mt-1">
                                                <div class="mt-0 text-center">
                                                    <div class="text-white text-center pt-2 p-3">{{ $item->name }}</div>
                                                    <div class="pb-2">
                                                        <a href="" class="d-inline-block opcty1 text-center">Get
                                                            Best
                                                            Quote</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </div>

                        @endforeach

                    </div>
                </div>
                <!-- slider -->
            </div>
            <br />
            <hr />
            <div class="about mt-5">
                <h3 class="text-center">About Us</h3>
                <span class="d-block" style="width: 40px; margin: auto; height: 3px; background-color: #007bff;">
                </span>
                <p class="text-center">
                    Thea-Tex Healthcare (India) Private Limited is a family owned boutique manufacturer and exporter
                    of medical, hygiene and industrial nonwoven disposable products, with a core focus on surgical
                    masks and particulate respirators, adhering to European (EN), US (ASTM) and Indian (IS)
                    standards. Our products are marketed under the registered Filtra brand, or under OEM/Private
                    Label agreements with the client.
                </p>
                <a href="" class="text-center d-block text-decoration-none">+ Read More</a>
            </div>
            <div class="iconss row flex-wrap mt-5 ms-2 me-2">
                <div class="border d-flex align-items-center col-md-3 pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
                <div class="border d-flex align-items-center col-md-3  pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
                <div class="border d-flex align-items-center col-md-3  pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
                <div class="border d-flex align-items-center col-md-3  pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
                <div class="border d-flex align-items-center col-md-3 pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
                <div class="border d-flex align-items-center col-md-3 pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
                <div class="border d-flex align-items-center col-md-3 pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
                <div class="border d-flex align-items-center col-md-3 pt-2 pb-2">
                    <div style="border-radius: 100px;border: 1px solid transparent;">
                        <img style="border-radius: 100px;border: 1px solid transparent;"
                            src="./assets/images/agentImgPlaceholder.jpg" width="80px" height="80px" />
                    </div>
                    <div class="ms-2">
                        <p class="m-0" style="font-size: 13px;">Nature of Business</p>
                        <p class="m-0" style="font-size: 14px;">Exporter and Manufacturer</p>
                    </div>
                </div>
            </div>
            <div class="products mt-5">
                <h3 class="text-center">Our Products</h3>
                <span class="d-block" style="width: 40px; margin: auto; height: 3px; background-color: #007bff;">
                </span>
                <div class="p-2 product_div row flex-wrap justify-content-center text-center justify-content-between">
                    @foreach ($store->randomproduct(9) as $key => $item)
                        {{-- @dd($item) --}}
                        <div class="mt-4 col-md-2 p-2 border" style="width: 300px;">

                            <a href="{{ route('construction.singleproduct', ['store' => $item->store->name, 'storeproduct' => $item->id]) }}"
                                class="d-inline-block  text-decoration-none"
                                style="width: 250px; font-size: 17px; color: #007bff; font-weight: bolder;">
                                <img width="100%" height="200px"
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}" />
                                {{ $item->product->name }}

                            </a>
                            {{-- <a href="" class="d-inline-block  text-decoration-none"
                                        style="width: 250px; font-size: 17px; color: gray; ">
                                        {{ $item->product->price }}

                                        </a>
                                        <a href="" class="d-inline-block  text-decoration-none"
                                            style="width: 250px; font-size: 17px; color: gray; ">
                                            No response for the inquiry from sdmabgmk
                                        </a>
                                        <a href="" class="d-inline-block  text-decoration-none"
                                            style="width: 250px; font-size: 17px; color: gray; ">
                                            No response for the inquiry from sdmabgmk
                                        </a>
                                        <a href="" class="d-inline-block mt-2 text-decoration-none"
                                            style="width: 250px; font-size: 15px; color: #007bff;font-weight: bold; ">
                                            View Details >
                                    </a> --}}
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="ideos mt-5">
                <h3 class="text-center">Our Videos</h3>
                <span class="d-block" style="width: 40px; margin: auto; height: 3px; background-color: #007bff;">
                </span>
                <div class="videoss border m-auto mt-5">
                    <iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/QznO3ftsAy8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="ideos mt-5 mb-5">
                <h3 class="text-center">Reviews & Rating</h3>
                <span class="d-block" style="width: 40px; margin: auto; height: 3px; background-color: #007bff;">
                </span>
                <div class="d-flex flex-wrap justify-content-around mt-5">
                    <!-- first start -->
                    <div>
                        <div class="FM_s">
                            <div class="FM_str FM_c7 FM_mb15"><span class="FM_bo" style="font-size: 40px;">3.4</span><span
                                    class="FM_f18">/5</span><span class="FM_sRt FM_pr FM_ds1"><span
                                        class="FM_flsRt FM_pa Slr_Rt" style="width: 68%;">★★★★★</span><span
                                        class="FM_emsRt">★★★★★</span></span>
                            </div>
                            <p class="FM_f18 FM_c13">Reviewed by 30 Users</p>
                        </div>
                    </div>
                    <!-- first end -->
                    <!-- sec start -->
                    <div class="FM_rvw FM_f16 FM_c2">
                        <p class="FM_ds7 FM_ds5 FM_mb10"><span class="FM_pbarS ">5 star</span><span
                                class="FM_pbarC FM_br5 FM_pr"><span class="FM_pbarL FM_br5 FM_pbarGrn FM_pa" name="Response"
                                    style="width: 50%;"></span></span><span class="">13</span></p>
                        <p class="FM_ds7 FM_ds5 FM_mb10"><span class="FM_pbarS ">5 star</span><span
                                class="FM_pbarC FM_br5 FM_pr"><span class="FM_pbarL FM_br5 FM_pbarGrn FM_pa" name="Response"
                                    style="width: 50%;"></span></span><span class="">13</span></p>
                        <p class="FM_ds7 FM_ds5 FM_mb10"><span class="FM_pbarS ">5 star</span><span
                                class="FM_pbarC FM_br5 FM_pr"><span class="FM_pbarL FM_br5 FM_pbarGrn FM_pa" name="Response"
                                    style="width: 50%;"></span></span><span class="">13</span></p>
                    </div>
                    <!-- sec end -->
                    <!-- th start -->
                    <div class="FM_rvw FM_us fasC">
                        <p class="FM_f17 FM_C0 FM_bo FM_txc FM_m15 FM_ds5 FM_ds7 FM_ds13"><svg data-name="Layer 21"
                                height="24" id="Layer_21" viewBox="0 0 24 24" width="24" fill="#72ad44">
                                <rect height="10" width="3" x="2" y="10"></rect>
                                <path
                                    d="M19,9H14V4a1,1,0,0,0-1-1H12L7.66473,8.37579A3.00021,3.00021,0,0,0,7,10.259V18a2,2,0,0,0,2,2h6.43481a2.99991,2.99991,0,0,0,2.69037-1.67273L21,12.5V11A2,2,0,0,0,19,9Z">
                                </path>
                            </svg> User Satisfaction</p>
                        <p class="FM_ds7 FM_ds5 FM_mb10"><span class="FM_pbarS ">Response</span><span
                                class="FM_pbarC FM_br5 FM_pr"><span class="FM_pbarL FM_br5 FM_pbarGrn FM_pa" name="Response"
                                    style="width: 50%;"></span></span><span class="">50%</span></p>
                        <p class="FM_ds7 FM_ds5 FM_mb10"><span class="FM_pbarS ">Quality</span><span
                                class="FM_pbarC FM_br5 FM_pr"><span class="FM_pbarL FM_br5 FM_pbarGrn FM_pa" name="Quality"
                                    style="width: 50%;"></span></span><span class="">50%</span></p>
                    </div>
                    <!-- th end -->
                </div>
            </div>
            <!-- email message start -->
            <div class="border w-75 m-auto p-3">
                <h3 class="text-center">Leave a Message, we will call you back!</h3>
                <div class="form-group m-auto mt-5">
                    <input class="form-field" type="email" placeholder="Email">
                    <span>@gmail.com</span>
                </div>
                <div class="form-group m-auto mt-5">
                    <input class="form-field" type="email" placeholder="Name">
                    <!-- <span>@gmai</span> -->
                </div>
                <div class="form-group m-auto mt-5">
                    <textarea class="form-field" style="height: 200px;" type="email"
                        placeholder="Requirement Your Details"></textarea>

                    <!-- <span>@gmai</span> -->
                </div>
            </div>
            <!-- email message end -->

            <!-- get in touch start -->
            <div class="mt-4">
                <h3 class="activeNav py-2 px-3 fw-bold">Get in touch with us</h3>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 p-3">
                            <h3>Our Company</h3>
                            <div class="d-flex flex-column">
                                <a class="text-decoration-none text-dark" href="">Our Company</a>
                                <a class="text-decoration-none text-dark" href="">Our Products</a>
                                <a class="text-decoration-none text-dark" href="">Contact Us</a>
                                <a class="text-decoration-none text-dark" href="">Sitemap</a>
                                <a class="text-decoration-none text-dark" href="">Download Brochure</a>
                            </div>
                        </div>
                        <div class="col-6 p-3">
                            <h3>Reach Us</h3>
                            <div class="d-flex align-items-center"><i class="bi bi-geo-alt-fill me-2 h4"></i>
                                <h5>

                                    {{ $store->name }}
                                </h5>
                            </div>
                            {{-- <div class="small">Manpura, Chittaurgarh, Chittorgarh-312001, Rajasthan, India</div> --}}
                            <div class="small">{{ $store->address }}</div>
                            <button class="bg-transparent mt-2"><a href="">
                                    <i class="bi bi-arrow-return-right"></i> Get
                                    Directions
                                </a>
                            </button>
                            {{-- <div class="mt-3"><i class="bi bi-person-circle me-2 h4 mb-0"></i>Sanjay Kumar Rao
                                (Sanjay)
                            </div> --}}
                            <div class="mt-3"><i class="bi bi-person-circle me-2 h4 mb-0"></i>{{ $store->user->name }}
                            </div>
                            <div class="d-flex mt-3">
                                <div>
                                    <i class="bi bi-telephone-outbound-fill"></i>
                                </div>
                                <div class="ms-2">
                                    <div>
                                        View Mobile Number
                                    </div>
                                    <div class="small">70% Call Response Rate</div>
                                </div>
                            </div>
                            <button class="mt-3 bg-transparent py-1 px-3 border border-2 border-dark rounded-3"><i
                                    class="bi bi-envelope-fill me-1"></i> Send
                                Email</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- get in touch end -->
        </div>
        <!-- flui -->
    </div>
    <!-- BEST PROPERTY END -->
@endsection

@section('personalscripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            responsive: [{
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
            ]
        });
        // slick sl
    </script>
@endsection
