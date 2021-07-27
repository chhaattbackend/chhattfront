@extends('layouts.master')

@section('style')
    <title>{{ $heading }} - Best quality construction material available at Chhatt</title>
    <meta name="title" content="{{ $heading }} - Best quality construction material available at Chhatt">
    <meta name="description"
        content="{{ $heading }} and other construction materials are available at Chhatt. For further information and details you must contact our vendors.">

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/productlist.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1>{{ $heading }}</h1>
            </div>
        </div>
    </div>
@endsection



@section('content')
    <div class="main_div_list container-fluid">
        <!-- breadcrumbs start -->
        <div>
            <a href="{{ route('home') }}">Chhatt</a><span> ></span>

            <a
                href="{{ route('construction.bcatlist', ['acategory' => $products[0]->a_category->slug]) }}">{{ $products[0]->a_category->name }}</a><span>></span>
            <a
                href="{{ route('construction.bcat', ['acategory' => $products[0]->a_category->slug, 'bcategory' => $products[0]->b_category->slug]) }}">{{ $products[0]->b_category->name }}</a><span>
                ></span>
            <a
                href="{{ route('construction.ccatproductlist', ['acategory' => $products[0]->a_category->slug, 'bcategory' => $products[0]->b_category->slug, 'ccategory' => $products[0]->c_category->slug]) }}">{{ $products[0]->c_category->name }}</a>
            @if ($products->count() == 1)
                <span>></span>
                <a
                    href="{{ route('construction.dcatproductlist', ['acategory' => $products[0]->a_category->slug, 'bcategory' => $products[0]->b_category->slug, 'ccategory' => $products[0]->c_category->slug, 'dcategory' => $products[0]->d_category->slug]) }}">{{ $products[0]->d_category->name }}</a><span>></span>
                <a disabled>{{ $heading }}</a>
            @endif

        </div>
        <!-- breadcrumbs end -->
        <!-- heading start -->



        <div class="title_div">
            @if ($products->count() == 1)
                <h1 class="title_div_1">{{ $products[0]->name }}
                    <span>({{ $products[0]->storeproduct->count() }} products available)
                    </span>
                </h1>
            @else
                @php
                    $spcount = 0;
                @endphp
                @foreach ($products as $key => $value)
                    @if ($value->storeproduct->isNotEmpty())
                        @php
                            $spcount = $spcount + $value->storeproduct->count();
                        @endphp
                    @endif
                @endforeach
                <h1 class="title_div_1">{{ $heading }}
                    <span>({{ $spcount }} products available)
                    </span>
                </h1>
            @endif
            <div>
                <span class="title_div_1_sp1">View by : </span>
                <span class="title_div_1_sp2"> Product </span>
                <span class="title_div_1_sp3"></span>
                <span class="title_div_1_sp4">Supplier</span>
            </div>
        </div>




        <!-- heading end -->
        <!-- location start -->
        {{-- <div class="search_bar_div_1 p-2 d-flex align-items-center">
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
        </div> --}}
        <!-- location end -->
        <!-- content start -->
        <div class="main_div_content d-flex">
            <!-- left div start -->
            <div class="main_div_content_1 ">
                {{-- <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark">Filter Results</h6>
                <ul class="border">
                    <li class=" p-2">
                        <input type="checkbox"/> <span class="d-inline-block ml-2">Video</span>
                    </li>
                </ul> --}}




                <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark" onclick="down('relatedcat')">Related
                    Category</h6>
                <ul id="relatedcat" class="border p-2">
                    @foreach ($anycategory->category->subcategories as $item)
                        @if ($item->storeproduct->isNotEmpty())
                            <li class="p-1">
                                <a href="{{ route('construction.ccatproductlist', ['acategory' => $item->category->category->slug, 'bcategory' => $item->category->slug, 'ccategory' => $item->slug]) }}"
                                    class="filtertag">
                                    {{ $item->name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                    @foreach ($anycategory->subcategories as $item)
                        @unless($item->category->id == $anycategory->id)
                            @if ($item->storeproduct->isNotEmpty())
                                <li class="p-1">
                                    <a href="{{ route('construction.dcatproductlist', ['acategory' => $item->category->category->category->slug, 'bcategory' => $item->category->category->slug, 'ccategory' => $item->category->slug, 'dcategory' => $item->slug]) }}"
                                        class="filtertag">
                                        {{ $item->name }}
                                    </a>
                                </li>
                            @endif
                        @endunless
                    @endforeach

                </ul>


                <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark" onclick="down('relatedbrand')">
                    Related Brands</h6>
                <ul id="relatedbrand" class="border p-2">
                    @foreach ($brands as $item)
                        @if ($item != null)
                            <li class="p-1">
                                <a
                                    href="{{ route('construction.brandproductlist', ['acategory' => $products[0]->a_category->slug, 'bcategory' => $products[0]->b_category->slug, 'ccategory' => $products[0]->c_category->slug, 'brand' => $item->slug]) }}">
                                    {{ $item->name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>



                {{-- <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark">Filter Results</h6>
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
                </ul> --}}
            </div>
            <div class="main_div_content_2 ms-3 ">
                <h5 class="font-weight-bolder mt-3">Popular {{ $anycategory->name }} Category</h5>
                <!-- card start -->
                <!-- slider -->
                <div class="main_slide_div">
                    <div class="card_div slide">
                        @foreach ($anycategory->subcategories as $item)
                            @if ($item->storeproduct->isNotEmpty())
                                <div class="card p-2 m-1">
                                    <div class="img_div">
                                        <img
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $item->image }}" />
                                        <a href="{{ route('construction.dcatproductlist', ['acategory' => $item->category->category->category->slug, 'bcategory' => $item->category->category->slug, 'ccategory' => $item->category->slug, 'dcategory' => $item->slug]) }}"
                                            class="pt-2 ellipse" style="width: 130px;display: inline-block;">
                                            {{ $item->name }}
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>


                <!-- slider -->
                <!-- card end -->
                <!-- product card detail start -->
                @foreach ($storeproducts as $item)
                    <div class="product_detail_card_div_main_div p-2 m-2">
                        <a class="text-decoration-none text-dark" href="">

                            <div class="product_detail_card_div d-flex">
                                <a class="text-decoration-none "
                                    href="{{ route('construction.singleproduct', ['store' => $item->store->slug, 'product' => $item->product->slug]) }}">
                                    <div class="frst_div">
                                        <img
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}" />
                                    </div>
                                </a>
                                <div class="ml-3 sec_div">
                                    <h5 class="font-weight-bold">{{ $item->product->name }}</h5>
                                    <span class="d-inline-block mr-3">RS {{ $item->store_price }} </span>
                                    <span class="d-inline-block mr-3"> </span>
                                    <a href=""> Get Export Price</a>
                                    <ul class="mb-0 me-3">
                                        <li><strong>Brand</strong>:<span>
                                                {{ @$item->product->brand->name }}</span>
                                        </li>
                                        {{ $item->product->description }}
                                        <li><a href="name">read
                                                more...</a></li>
                                    </ul>
                                </div>
                                <div class="th_div">
                                    <h5 class="font-weight-light m-0">{{ $item->store->name }}</h5>
                                    <span>{{ @$item->store->areaOne->name }}
                                        {{ @$item->store->areaTwo->name }}
                                        {{ @$item->store->areaThree->name }} </span> <br>
                                    <span>{{ @$item->store->areaOne->city->name }}</span>
                                    {{-- <div class="mt-2">
                                    <span class="ls-img d-inline-block"></span>
                                    <span class="d-inline-block ind">Industry Leader</span>
                                    <span class="ls-img1 d-inline-block ml-4"></span>
                                    <span class="d-inline-block ind">Industry Leader</span>
                                </div>
                                <div class="mt-1">
                                    <span class="ls-img2 d-inline-block"></span>
                                    <span class="d-inline-block ind">Industry Leader</span>
                                </div> --}}
                                    {{-- <div class="mr-auto mt-4 text-center curs">
                                    <img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNC43NSIgaGVpZ2h0PSIxNC41MTMiIHZpZXdCb3g9IjAgMCAxNC43NSAxNC41MTMiPjxkZWZzPjxzdHlsZT4uYXtmaWxsOiMwNjgwNzY7fTwvc3R5bGU+PC9kZWZzPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05MDguMjkxIC0zNjUuMTk1KSI+PHBhdGggY2xhc3M9ImEiIGQ9Ik05MTcuOSwzNzkuNzA4YTIuMjE3LDIuMjE3LDAsMCwwLDEuMzQ1LS40MTJjLjU1Mi0uMzk0LDEuMDgzLS44MjEsMS42LTEuMjYyYS44MjkuODI5LDAsMCwwLS4wMTYtMS4xMzRjLS41NzMtLjU5LTEuMTUzLTEuMTc0LTEuNzQ5LTEuNzQxYTEuMTA4LDEuMTA4LDAsMCwwLTEuNDA2LS4wNDVjLS4zMjQuMjI3LS42NTcuNDQ1LS45NTguN2EuNzY5Ljc2OSwwLDAsMS0uOTMxLjA4OSwzLjM1MSwzLjM1MSwwLDAsMS0uNzYtLjVjLS44NzUtLjgzMS0xLjczMi0xLjY4LTIuNTgzLTIuNTM2YTIuMzc1LDIuMzc1LDAsMCwxLS4zNjktLjU1NS45MTguOTE4LDAsMCwxLC4wOS0xLjFjLjI0Mi0uMy40Ni0uNjE5LjY4NS0uOTMzYTEuMDg2LDEuMDg2LDAsMCwwLS4xLTEuNDQxcS0uOC0uODE0LTEuNjE5LTEuNjEzYS44NzguODc4LDAsMCwwLTEuMzYuMDQzYy0uMzYxLjQxLS43LjgzOS0xLjAyNiwxLjI4YTIuMjUxLDIuMjUxLDAsMCwwLS4zLDIuMTkxLDkuOTc0LDkuOTc0LDAsMCwwLDEuODE1LDMuMDc2LDI2LjA0NywyNi4wNDcsMCwwLDAsNS4yMTUsNC45MTNBNC45NDUsNC45NDUsMCwwLDAsOTE3LjksMzc5LjcwOFoiLz48cGF0aCBjbGFzcz0iYSIgZD0iTTkxNi4wNzksMzY4LjhhNC4xMTksNC4xMTksMCwwLDEsMy4zNTYsMy4zNTUuNDI5LjQyOSwwLDAsMCwuNDI2LjM1OS40NDguNDQ4LDAsMCwwLC4wNzMtLjAwNy40MzMuNDMzLDAsMCwwLC4zNTYtLjUsNC45ODMsNC45ODMsMCwwLDAtNC4wNi00LjA2LjQzNC40MzQsMCwwLDAtLjUuMzUyLjQyOC40MjgsMCwwLDAsLjM0OS41Wm0wLDAiLz48cGF0aCBjbGFzcz0iYSIgZD0iTTkyMy4wMzQsMzcxLjg4N2E4LjIsOC4yLDAsMCwwLTYuNjg2LTYuNjg2LjQzMi40MzIsMCwwLDAtLjE0MS44NTIsNy4zMzEsNy4zMzEsMCwwLDEsNS45NzUsNS45NzUuNDMuNDMsMCwwLDAsLjQyNi4zNTkuNjIuNjIsMCwwLDAsLjA3NC0uMDA3LjQyNC40MjQsMCwwLDAsLjM1Mi0uNDkzWm0wLDAiLz48L2c+PC9zdmc+" />
                                    <span style="color: #068076; font-size: 14px;" class="font-weight-bold">
                                        View Mobile Number
                                    </span>
                                    </div> --}}
                                    <div class="border text-center btns_contact mt-3 curs">
                                        <a class="text-white text-decoration-none" href="tel:{{ $item->store->phone }}">
                                            <h6 class="m-0 font-weight-bold">Contact Supplier</h6>
                                            <p class="m-0">Request a Quote</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        {{-- <p>{{ $storeproducts[0]->getrelatedcategory($storeproducts[0]->product->c_category->id,$storeproducts[0]->product->id) }}</p> --}}
                        <div class="botom_div_main  d-flex mt-3 flex-wrap justify-content-start pr-3">
                            @php
                                $spcount = 0;
                            @endphp
                            @foreach ($item->getrelatedproduct(3) as $suggesteditem)
                                @unless($suggesteditem->isstoreproduct($item->store_id) == null)
                                    @php
                                        $spcount++;
                                    @endphp
                                    @if ($spcount < 4)

                                        <div class="d-flex div1 mr-2">
                                            <div>
                                                <a href="">
                                                    <img width="80px" height="72px" style=" object-fit: contain;"
                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $suggesteditem->image }}" />
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="m-0 txt">{{ $suggesteditem->name }}</p>
                                                <p class="m-0 txt1">RS {{ $suggesteditem->price }}</p>
                                                <a class="anc" href="">Get Quote</a>
                                            </div>
                                        </div>
                                    @endif

                                @endunless
                            @endforeach
                        </div>

                    </div>
                @endforeach
                <div class="d-flex justify-content-center">

                    {{ $storeproducts->links('pagination::simple-bootstrap-4') }}
                </div>
                <!-- product card detail end -->

            </div>
            <!-- left div end -->
            <!-- right div start -->

            <!-- right div end -->
        </div>
        <!-- content end -->
    </div>
@endsection

@section('personalscripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // slick slider start
        $('.slide').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
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

        function down(id) {
            var x = document.getElementById(id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        // slick slider end
    </script>
@endsection
