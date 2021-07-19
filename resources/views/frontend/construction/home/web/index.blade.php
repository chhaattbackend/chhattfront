@extends('layouts.master')

@section('style')
    <meta name="robots" content="noindex"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/home.css') }}" />
@endsection

@section('headercontent')

    <div class="mn_div">
        <div class="backg">
            <div class="backg_sdiv">
                <h1>Search Your Desired Construction Material</h1>
                <div class="main_bar">
                    <form onSubmit="" class="frm">
                        <div class="searchdiv">
                            <span class="searchIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>

                            <div class="autoComplete_wrapper">
                                <input id="autoComplete" type="text" tabindex="1" />
                            </div>
                            <select id="citiesSelect" class="form-select" aria-label="Default select example"></select>

                            <button type="submit" onclick="changeFunc(event)">
                                Search
                            </button>
                        </div>
                        <div class="secategories">
                            <div class="secategories_first_div">
                                <div class="explore">
                                    Explore our categories
                                </div>
                                <!-- <div class="viewmore">View More</div> -->
                            </div>
                            <div class="secategories_sec_div">
                                <ul class="sul">
                                    <li>
                                        <button style="background-color:#007bff; color: #ffffff;">
                                            All
                                        </button>
                                    </li>
                                    <li>
                                        <button>Pumping</button>
                                    </li>
                                    <li>
                                        <button>Plastic,rubber</button>
                                    </li>
                                    <li>
                                        <button>Industrial</button>
                                    </li>
                                    <li>
                                        <button>Drilling Bits</button>
                                    </li>
                                    <li>
                                        <button>Wire Mesh</button>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="scroll">
                <div class="txtScroll">Scroll</div>
                <div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    @include('functions.convert_rupee')

    <br />
    <br />
    <!-- BEST PROPERTY START -->
    <div class="pageContainer">
        <div class="container-fluid">
            <div>
                <div class="d-flex justify-content-between">
                    <h2 class="fw-bold">Industrial Supplies</h2>
                    <div class="d-flex">
                        <div class="ms-4">
                            <a href="{{ route('construction.bcatlist') }}" class="themebtn2 px-3 py-1 ms-1">View all</a>
                        </div>
                    </div>
                </div>
                <!-- slider -->
                <div class="main_slide_div">
                    <div style="margin: auto;" class="slider">
                        @foreach ($bcategories as $item)
                            @php
                                $id = str_replace(str_split('\\/:*?"<>|() '), '-', strtolower($item->name));
                                $id = str_replace(',', '_', $id);
                            @endphp

                            <div>
                                <li class="scroll-img-list  p-2 my-3">
                                    <form id="main_div_form" action="{{ route('construction.bcat', ['id' => $id]) }}"
                                        method="post">
                                        @csrf
                                        <div class="text-decoration-none position-relative">
                                            <button onclick="formSubmit()" class="imageSection">
                                                <a href="{{ route('construction.bcat', ['id' => $id]) }}">
                                                    <img class="slideImg"
                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/bcategories/{{ $item->image }}"
                                                        alt="" />
                                                </a>
                                            </button>
                                            <div class="text-dark paraContainer">
                                                <div class="mt-1">
                                                    <div class="mt-2 elipse">
                                                        <strong class="mt-5">{{ $item->name }}</strong>
                                                    </div>
                                                    <ul style="list-style-type: disc; ">
                                                        @php
                                                            $i = 0;
                                                        @endphp
                                                        @foreach ($item->subcategories as $subItem)
                                                            @php
                                                                $i++;
                                                            @endphp
                                                            @if ($i < 6)
                                                                <li style="list-style-position: inside;">
                                                                    {{ $subItem->name }}
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-viewmore d-flex justify-content-between mt-3">
                                            <a href="{{ route('construction.bcat', ['id' => $id]) }}"
                                                class="text-decoration-none w-100 themebtn py-1 text-white">
                                                <button class="w-100 themebtn py-1 text-white" onclick="formSubmit()">
                                                    View more
                                                </button>
                                            </a>
                                        </div>
                                    </form>

                                </li>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- slider -->

            </div>
            <br />
            <hr />
        </div>
    </div>
    <!-- BEST PROPERTY END -->
    <!-- BEST PROPERTY START -->
    <br />
    <br />
    <div class="pageContainer">
        <div class="container-fluid">
            <div>
                <div class="d-flex justify-content-between">
                    <h2 class="fw-bold">New Products</h2>
                    <div class="d-flex">
                        <div class="ms-4">
                            <button class="themebtn2 px-3 py-1 ms-1">View all</button>
                        </div>
                    </div>
                </div>

            </div>
            <br />
        </div>
    </div>
    <!-- BEST PROPERTY END -->
    <!-- PROPERTY CARD START -->
    <div class="mapCardContainer newProduct">
        <div class="container-fluid">
            <div class="row px-2">
                @foreach ($store as $item)

                    @foreach ($item->randomproduct(1) as $key => $item)

                        <div class="col-sm-4 col-lg-3 mb-4">
                            <div class="propertyCard p-2">
                                <a class="text-decoration-none position-relative"
                                    href="{{ route('construction.singleproduct', ['store' => $item->store->name, 'storeproduct' => $item->id]) }}">
                                    <div class="imageSection">
                                        <img class="slideImg"
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                            alt="" />
                                    </div>
                                    <div class="text-dark paraContainer">
                                        <div class="mt-1">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="lightColor">{{ $item->store->name ?? 'A Category' }}</h6>
                                                <h6 class="lightColor">{{ $item->store->name ?? 'B Category' }}</h6>
                                            </div>
                                            <div class="mt-2 ellipse">
                                                <strong class="mt-5">{{ $item->product->name }}</strong>
                                            </div>
                                            <h6 class="mt-2">
                                                <strong>
                                                    Rs: {{ $item->store_price }}
                                                </strong>
                                            </h6>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <button class="w-100 themebtn py-1 text-white">View more</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- property card end -->
                        </div>

                    @endforeach


                @endforeach


                {{-- @foreach ($products as $item)



                    <p>{{ $item->store->name }}</p>
                    <p>{{ $item->product_id }}</p>
                    <p>{{ $item->store_price }}</p>
                    <p>{{ $item->qty }}</p>
                    <p>{{ $item->status }}</p>
                    <p>{{ $item->unit_id }}</p>

                    <div class="col-sm-4 col-lg-3 mb-4">

                        <div class="propertyCard p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer">
                                    <div class="mt-1">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="lightColor">{{ $item->store->name ?? 'A Category' }}</h6>
                                            <h6 class="lightColor">{{ $item->store->name ?? 'B Category' }}</h6>
                                        </div>
                                        <div class="mt-2">
                                            <strong class="mt-5">{{ $item->product->name }}</strong>
                                        </div>
                                        <h6 class="mt-2">
                                            <strong>
                                                Rs: {{ $item->store_price }}
                                            </strong>
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <button class="w-100 themebtn py-1 text-white">View more</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach --}}

            </div>
        </div>
        <!--  PROPERTY CARD START  -->
        <!-- BEST PROPERTY START -->
        <br />
        <!-- <br /> -->

        <!-- BEST PROPERTY END -->
        <!-- visit construction start -->
        <br />
        <br />

        <!-- visit construction end -->
    @endsection

    @section('personalscripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
                integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            function formSubmit() {
                $('#main_div_form').submit();
            }
        </script>


        <!-- EXTERNAL LINKS END -->
        <script>
            // slick slider start
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

            var areas;
            const autoCompleteJS = new autoComplete({
                data: {
                    src: async () => {
                        try {
                            // Loading placeholder text
                            document
                                .getElementById("autoComplete")
                                .setAttribute("placeholder", "Loading...");
                            // Fetch External Data Source
                            const source = await fetch(
                                "https://uat.chhatt.com/api/allareas?city=karachi"
                            );
                            areas = await source.json();
                            // Post Loading placeholder text
                            document
                                .getElementById("autoComplete")
                                .setAttribute("placeholder", autoCompleteJS.placeHolder);
                            // Returns Fetched data
                            return areas.data;
                        } catch (error) {
                            return error;
                        }
                    },
                    keys: ["name"],
                    cache: true,
                    filter: (list) => {
                        // Filter duplicates
                        // incase of multiple data keys usage
                        const filteredResults = Array.from(
                            new Set(list.map((value) => value.match))
                        ).map((food) => {
                            return list.find((value) => value.match === food);
                        });
                        return filteredResults;
                    }
                },
                placeHolder: "Try Something 'Final'",
                resultsList: {
                    element: (list, data) => {
                        const info = document.createElement("p");
                        if (data.results.length > 0) {
                            info.innerHTML = `Displaying <strong>${data.matches.length}</strong> results`;
                        } else {
                            info.innerHTML =
                                `Found <strong>${data.matches.length}</strong> matching results for <strong>"${data.query}"</strong>`;
                        }
                        list.prepend(info);
                    },
                    noResults: true,
                    maxResults: 10000,
                    tabSelect: true
                },
                resultItem: {
                    element: (item, data) => {
                        // Modify Results Item Style
                        item.style = "display: flex; justify-content: space-between;";
                        // Modify Results Item Content
                        item.innerHTML = `
     <span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
       ${data.match}
     </span>
     <span style="margin-left:15px;display:inline-block;width:160px;text-align:right;align-items: center; font-size: 13px; font-weight: 100; text-transform: uppercase; color: rgba(0,0,0,.2); text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
       ${data.value.parent}
     </span>`;
                    },
                    highlight: true
                },
                events: {
                    input: {
                        selection: (e) => {
                            const selection = e.detail.selection.value;
                            autoCompleteJS.input.value = selection.name;
                        },
                        focus: () => {
                            if (autoCompleteJS.input.value.length) autoCompleteJS.start();
                        }
                    }
                }
            });
            // SUBMIT START
            function changeFunc(e) {
                e.preventDefault()
                const inpVal = document.getElementById("autoComplete");
                if (areas) {
                    const filteredArea = areas.data.filter((prev) => prev.name === inpVal.value)
                    if (filteredArea.length) {
                        // console.log(filteredArea[0].key)
                    } else {
                        // console.log(inpVal.value)
                    }
                } else {
                    // console.log("error")
                }
            }
            // SUBMIT END
            // == SEARCH AREA DROPDOWN END

            // PROPERTY CAROUSEL START
            var scrolled = 0;
            $(".scroll-left").on("click", function() {
                scrolled = scrolled - 300;
                $("#box-wrapper").animate({
                    scrollLeft: scrolled,
                });
            });
            $(".scroll-right").on("click", function() {
                scrolled = scrolled + 300;
                $("#box-wrapper").animate({
                    scrollLeft: scrolled,
                });
            });
            // PROPERTY CAROUSEL END

            // == EXPLORE CAROUSEL START
            var scrolled = 0;
            $(".scroll-leftExplore").on("click", function() {
                scrolled = scrolled - 300;
                $("#box-wrapperExplore").animate({
                    scrollLeft: scrolled,
                });
            });
            $(".scroll-rightExplore").on("click", function() {
                scrolled = scrolled + 300;
                $("#box-wrapperExplore").animate({
                    scrollLeft: scrolled,
                });
            });
            // slick slider end
        </script>

    @endsection
