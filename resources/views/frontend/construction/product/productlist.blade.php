@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/productlist.css') }}" />
@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1>ASAS</h1>
            </div>
        </div>
    </div>
@endsection



@section('content')
<div class="main_div_productlist container-fluid">
        <!-- breadcrumbs start -->
        <div>
            <a>IndiaMART</a><span> ></span>
            <a>IndiaMART</a><span> ></span>
            <a>IndiaMART</a><span> ></span>
            <a>IndiaMART</a>
        </div>
        <!-- breadcrumbs end -->
        <!-- heading start -->
        <div class="title_div">
            <h1 class="title_div_1">N95 KN95 FFP2 Respirator Mask <span>(24108 products available) </span> </h1>
            <div>
                <span class="title_div_1_sp1">View by : </span>
                <span class="title_div_1_sp2"> Product </span>
                <span class="title_div_1_sp3"></span>
                <span class="title_div_1_sp4">Supplier</span>
            </div>
        </div>
        <!-- heading end -->
        <!-- location start -->
        <div class="search_bar_div_1 p-2 d-flex align-items-center">
            <div class="border-right border-dark d-inline-block pr-2">Location</div>
            <ul class="d-flex align-items-center m-0 p-0 pl-3">
                <li class="mr-4">All India</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li class="mr-4">Delhi</li>
                <li>Delhi</li>
            </ul>
        </div>
        <!-- location end -->
        <!-- content start -->
        <div class="main_div_content d-flex">
            <!-- left div start -->
            <div class="main_div_content_1 ">
                <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark">Filter Results</h6>
                <ul class="border">
                    <li class=" p-2">
                        <input type="checkbox" /><span class="d-inline-block ml-2">Video</span>
                    </li>
                </ul>
                <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark">Filter Results</h6>
                <ul class="border p-2">
                    <li class="p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                </ul>
                <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark">Filter Results</h6>
                <ul class="border p-2">
                    <li class="p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                </ul>
                <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark">Filter Results</h6>
                <ul class="border p-2">
                    <li class="p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                    <li class=" p-1">
                        Video
                    </li>
                </ul>
            </div>
            <!-- left div end -->
            <!-- right div start -->
            <div class="main_div_content_2 ml-3 border">
                <h5 class="font-weight-bolder mt-3">Popular N95 Mask Products</h5>
                <!-- card start -->
                <div class="card_div d-flex ">
                        {{-- @dd($ccategory) --}}

                    @foreach ($ccategories as $item)
                    <div class="card p-2 mr-2">
                        <div class="img_div">
                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $item->image }}" />
                            <a href="" class="pt-2">
                                {{ $item->name }}
                            </a>
                        </div>
                        {{-- <div class="rs">Rs 10</div> --}}
                        {{-- <div class="brand">hamza developer</div> --}}
                    </div>
                    @endforeach

                </div>
                <!-- card end -->
                <!-- product card detail start -->
                @foreach ($ccategory->products as $item )

                <div class="product_detail_card_div_main_div p-2 mt-2">
                    <div class="product_detail_card_div  d-flex">
                        <div class="frst_div">
                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->image }}" />
                        </div>
                        <div class="ml-3 sec_div">
                            <h5 class="font-weight-bold">{{$item->name}}</h5>
                            <span class="d-inline-block mr-3">RS {{$item->price}} </span>
                            <a href=""> Get Export Price</a>
                            <ul class="mb-0">
                                {{-- <li><span>Brand:</span><span>Dr. Fresh</span></li>
                                <li><span>Brand:</span><span>Dr. Fresh</span></li>
                                <li><span>Brand:</span><span>Dr. Fresh</span></li>
                                <li><span>Brand:</span><span>Dr. Fresh</span></li>
                                <li><span>Brand:</span><span>Dr. Fresh</span></li>
                                <li><span>Brand:</span><span>Dr. Fresh</span></li> --}}
                                {{$item->description}}
                                <li><a href="">read more...</a></li>
                            </ul>
                        </div>
                        <div class="th_div">
                            <h5 class="font-weight-light m-0">Machine World</h5>
                            <span>China Town, </span>
                            <span>Kolkata</span>
                            <div class="mt-2">
                                <span class="ls-img d-inline-block"></span>
                                <span class="d-inline-block ind">Industry Leader</span>
                                <span class="ls-img1 d-inline-block ml-4"></span>
                                <span class="d-inline-block ind">Industry Leader</span>
                            </div>
                            <div class="mt-1">
                                <span class="ls-img2 d-inline-block"></span>
                                <span class="d-inline-block ind">Industry Leader</span>
                            </div>
                            <div class="mr-auto mt-4 text-center curs">
                                <img
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNC43NSIgaGVpZ2h0PSIxNC41MTMiIHZpZXdCb3g9IjAgMCAxNC43NSAxNC41MTMiPjxkZWZzPjxzdHlsZT4uYXtmaWxsOiMwNjgwNzY7fTwvc3R5bGU+PC9kZWZzPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05MDguMjkxIC0zNjUuMTk1KSI+PHBhdGggY2xhc3M9ImEiIGQ9Ik05MTcuOSwzNzkuNzA4YTIuMjE3LDIuMjE3LDAsMCwwLDEuMzQ1LS40MTJjLjU1Mi0uMzk0LDEuMDgzLS44MjEsMS42LTEuMjYyYS44MjkuODI5LDAsMCwwLS4wMTYtMS4xMzRjLS41NzMtLjU5LTEuMTUzLTEuMTc0LTEuNzQ5LTEuNzQxYTEuMTA4LDEuMTA4LDAsMCwwLTEuNDA2LS4wNDVjLS4zMjQuMjI3LS42NTcuNDQ1LS45NTguN2EuNzY5Ljc2OSwwLDAsMS0uOTMxLjA4OSwzLjM1MSwzLjM1MSwwLDAsMS0uNzYtLjVjLS44NzUtLjgzMS0xLjczMi0xLjY4LTIuNTgzLTIuNTM2YTIuMzc1LDIuMzc1LDAsMCwxLS4zNjktLjU1NS45MTguOTE4LDAsMCwxLC4wOS0xLjFjLjI0Mi0uMy40Ni0uNjE5LjY4NS0uOTMzYTEuMDg2LDEuMDg2LDAsMCwwLS4xLTEuNDQxcS0uOC0uODE0LTEuNjE5LTEuNjEzYS44NzguODc4LDAsMCwwLTEuMzYuMDQzYy0uMzYxLjQxLS43LjgzOS0xLjAyNiwxLjI4YTIuMjUxLDIuMjUxLDAsMCwwLS4zLDIuMTkxLDkuOTc0LDkuOTc0LDAsMCwwLDEuODE1LDMuMDc2LDI2LjA0NywyNi4wNDcsMCwwLDAsNS4yMTUsNC45MTNBNC45NDUsNC45NDUsMCwwLDAsOTE3LjksMzc5LjcwOFoiLz48cGF0aCBjbGFzcz0iYSIgZD0iTTkxNi4wNzksMzY4LjhhNC4xMTksNC4xMTksMCwwLDEsMy4zNTYsMy4zNTUuNDI5LjQyOSwwLDAsMCwuNDI2LjM1OS40NDguNDQ4LDAsMCwwLC4wNzMtLjAwNy40MzMuNDMzLDAsMCwwLC4zNTYtLjUsNC45ODMsNC45ODMsMCwwLDAtNC4wNi00LjA2LjQzNC40MzQsMCwwLDAtLjUuMzUyLjQyOC40MjgsMCwwLDAsLjM0OS41Wm0wLDAiLz48cGF0aCBjbGFzcz0iYSIgZD0iTTkyMy4wMzQsMzcxLjg4N2E4LjIsOC4yLDAsMCwwLTYuNjg2LTYuNjg2LjQzMi40MzIsMCwwLDAtLjE0MS44NTIsNy4zMzEsNy4zMzEsMCwwLDEsNS45NzUsNS45NzUuNDMuNDMsMCwwLDAsLjQyNi4zNTkuNjIuNjIsMCwwLDAsLjA3NC0uMDA3LjQyNC40MjQsMCwwLDAsLjM1Mi0uNDkzWm0wLDAiLz48L2c+PC9zdmc+" />
                                <span style="color: #068076; font-size: 14px;" class="font-weight-bold">
                                    View Mobile Number
                                </span>
                            </div>
                            <div class="border text-center btns_contact mt-3 curs">
                                <h6 class="m-0 font-weight-bold">Contact Supplier</h6>
                                <p class="m-0">Request a Quote</p>
                            </div>
                        </div>
                    </div>
                    <div class="botom_div_main  d-flex mt-3 flex-wrap justify-content-around">
                        <div class="d-flex div1 mr-2">
                            <div>
                                <img width="80px" height="72px" src="./assets/images/AboutUs.webp" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <p class="m-0 txt">Fresh Breathe Reusable Tricolour N95 Mask</p>
                                <p class="m-0 txt1">RS 5</p>
                                <a class="anc" href="">Get Quote</a>
                            </div>
                        </div>
                        <div class="d-flex div1 mr-2">
                            <div>
                                <img width="80px" height="72px" src="./assets/images/AboutUs.webp" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <p class="m-0 txt">Fresh Breathe Reusable Tricolour N95 Mask</p>
                                <p class="m-0 txt1">RS 5</p>
                                <a class="anc" href="">Get Quote</a>
                            </div>
                        </div>
                        <div class="d-flex div1 div3">
                            <div>
                                <img width="80px" height="72px" src="./assets/images/AboutUs.webp" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <p class="m-0 txt">Fresh Breathe Reusable Tricolour N95 Mask</p>
                                <p class="m-0 txt1">RS 5</p>
                                <a class="anc" href="">Get Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- product card detail end -->

            </div>
            <!-- right div end -->
        </div>
        <!-- content end -->
    </div>
@endsection

@section('personalscripts')

@endsection

