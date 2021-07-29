@extends('layouts.master')

@section('style')
    @if ($which == 'ccategory')
        <title>{{ $anycategory->name }} - Best quality construction material available at Chhatt</title>
        <meta name="title" content="{{ $anycategory->name }} - Best quality construction material available at Chhatt">
        <meta name="description" content="{{ $anycategory->name }} and other construction materials are available at Chhatt. For further information and details you must contact our vendors.">
    @endif
    @if ($which == 'dcategory')
        <title>{{ $anycategory->name }} - Best quality construction material available at Chhatt</title>
        <meta name="title" content="{{ $anycategory->name }} - Best quality construction material available at Chhatt">
        <meta name="description" content="{{ $anycategory->name }} and other construction materials are available at Chhatt. For further information and details you must contact our vendors.">
    @endif
    @if ($which == 'brand')
        <title>Brands {{ $brand->name }} - Best quality construction material available at Chhatt</title>
        <meta name="title" content=" Brands {{ $brand->name }} - Best quality construction material available at Chhatt">
        <meta name="description" content=" Brand | {{ $brand->name }} and other construction materials are available at Chhatt. For further information and details you must contact our vendors.">
    @endif

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
                @if ($which == 'brand')
                    <h1>{{ $brand->name }}</h1>
                @else
                    <h1>{{ $anycategory->name }}</h1>
                @endif
            </div>
        </div>
    </div>
@endsection



@section('content')
    <div class="main_div_list container-fluid">
        <!-- breadcrumbs start -->
        <div>
            <a href="{{ route('home') }}">Chhatt</a><span> ></span>

            @if ($which == 'ccategory' || $which == 'brand')
                <a
                    href="{{ route('construction.bcatlist', ['acategory' => $anycategory->category->category->slug]) }}">{{ $anycategory->category->category->name }}</a><span>></span>
                <a
                    href="{{ route('construction.bcat', ['acategory' => $anycategory->category->category->slug, 'bcategory' => $anycategory->category->slug]) }}">{{ $anycategory->category->name }}</a><span>
                    ></span>
                @if ($which == 'brand')
                    <a
                        href="{{ route('construction.ccatproductlist', ['acategory' => $anycategory->category->category->slug, 'bcategory' => $anycategory->category->slug, 'ccategory' => $anycategory->slug]) }}">{{ $anycategory->name }}</a><span>></span>
                    <a disabled>{{ $brand->name }}</a>
                @else
                    <a disabled>{{ $anycategory->name }}</a>
                @endif
            @endif

            @if ($which == 'dcategory')
                <a
                    href="{{ route('construction.bcatlist', ['acategory' => $anycategory->category->category->category->slug]) }}">{{ $anycategory->category->category->category->name }}</a><span>></span>
                <a
                    href="{{ route('construction.bcat', ['acategory' => $anycategory->category->category->category->slug, 'bcategory' => $anycategory->category->category->slug]) }}">{{ $anycategory->category->category->name }}</a><span>></span>
                <a
                    href="{{ route('construction.ccatproductlist', ['acategory' => $anycategory->category->category->category->slug, 'bcategory' => $anycategory->category->category->slug, 'ccategory' => $anycategory->category->slug]) }}">{{ $anycategory->category->name }}</a><span>
                    ></span>
                <a disabled>{{ $anycategory->name }}</a>
            @endif
        </div>
        <!-- breadcrumbs end -->
        <!-- heading start -->



        <div class="title_div">
            @if ($which == 'brand')
                <h1 class="title_div_1">{{ $brand->name }}
                    <span>({{ $brand->storeproduct->count() }} products available)
                    </span>
                </h1>
            @else

                <h1 class="title_div_1">{{ $anycategory->name }}
                    <span>({{ $anycategory->storeproduct->count() }} products available)
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
                    @unless($which != 'ccategory')
                        @foreach ($anycategory->category->subcategories as $item)
                            @unless($item->id == $anycategory->id)
                                @if ($item->storeproduct->isNotEmpty())
                                    <li class="p-1">
                                        <a href="{{ route('construction.ccatproductlist', ['acategory' => $item->category->category->slug, 'bcategory' => $item->category->slug, 'ccategory' => $item->slug]) }}"
                                            class="filtertag">
                                            {{ $item->name }}
                                        </a>
                                    </li>
                                @endif
                            @endunless
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
                    @endunless

                    @unless($which != 'dcategory')
                        @foreach ($anycategory->category->category->subcategories as $item)
                            @if ($item->storeproduct->isNotEmpty())
                                <li class="p-1">
                                    <a href="{{ route('construction.ccatproductlist', ['acategory' => $item->category->category->slug, 'bcategory' => $item->category->slug, 'ccategory' => $item->slug]) }}"
                                        class="filtertag">
                                        {{ $item->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        <hr>
                        @foreach ($anycategory->category->subcategories as $item)
                            @unless($item->id == $anycategory->id)
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
                    @endunless

                    @unless($which != 'brand')
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
                            @if ($item->storeproduct->isNotEmpty())
                                <li class="p-1">
                                    <a href="{{ route('construction.dcatproductlist', ['acategory' => $item->category->category->category->slug, 'bcategory' => $item->category->category->slug, 'ccategory' => $item->category->slug, 'dcategory' => $item->slug]) }}"
                                        class="filtertag">
                                        {{ $item->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endunless

                </ul>


                <h6 class="font-weight-bolder mt-3 mb-0 border p-2 bg-light text-dark" onclick="down('relatedbrand')">
                    Related Brands</h6>
                <ul id="relatedbrand" class="border p-2">

                    @unless($which != 'ccategory')
                        @foreach ($brands as $item)
                            @if ($item != null)
                                <li class="p-1">
                                    <a
                                        href="{{ route('construction.brandproductlist', ['acategory' => $anycategory->category->category->slug, 'bcategory' => $anycategory->category->slug, 'ccategory' => $anycategory->slug, 'brand' => $item->slug]) }}">
                                        {{ $item->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endunless

                    @unless($which != 'brand')
                        @foreach ($brands as $item)
                            @if ($item != null)
                                @if ($item->id != $brand->id)
                                    <li class="p-1">
                                        <a
                                            href="{{ route('construction.brandproductlist', ['acategory' => $anycategory->category->category->slug, 'bcategory' => $anycategory->category->slug, 'ccategory' => $anycategory->slug, 'brand' => $item->slug]) }}">
                                            {{ $item->name }}
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    @endunless

                    @unless($which != 'dcategory')
                        @foreach ($brands as $item)
                            @if ($item != null)
                                <li class="p-1">
                                    <a
                                        href="{{ route('construction.brandproductlist', ['acategory' => $anycategory->category->category->category->slug, 'bcategory' => $anycategory->category->category->slug, 'ccategory' => $anycategory->category->slug, 'brand' => $item->slug]) }}">
                                        {{ $item->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endunless

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
            <!-- left div end -->
            <!-- right div start -->
            <div class="main_div_content_2 ms-3 ">
                <h5 class="font-weight-bolder mt-3">Popular {{ $anycategory->name }} Category</h5>
                <!-- card start -->
                <!-- slider -->
                <div class="main_slide_div">
                    <div class="card_div slide">
                        @if ($which == 'ccategory' || $which == 'brand')
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
                        @else
                            @foreach ($anycategory->category->subcategories as $item)
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
                                        {{-- <div class="rs">{{ $item->name }}</div>
                                     <div class="brand">hamza developer</div> --}}
                                    </div>
                                @endif
                            @endforeach
                        @endif

                    </div>
                </div>


                <!-- slider -->
                <!-- card end -->
                <!-- product card detail start -->
                @if ($which == 'brand')
                    @livewire('storeproducts.brands',['brand'=>$brand])
                @else
                    @livewire('storeproducts.anycategory',['anycategory'=>$anycategory])
                @endif
                <!-- product card detail end -->

            </div>
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
