@extends('layouts.master')

@section('style')
   
    <title>Pakistan Best Construction Materials & Services | Chhatt.com</title>
    <meta name="title" content="Pakistan Best Construction Materials & Services | Chhatt.com">
    <meta name="description" content="Looking for the best construction materials and services provider in Pakistan. Chhatt.com provides all types of construction and building materials visit our website">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/home.css') }}" />
@endsection

@section('headercontent')
    <div class="mn_div">
        <div class="backg">
            <div class="backg_sdiv">
                <h1>Search Your Desired Property</h1>
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
                            <!-- search field start  -->
                            <!-- search start -->
                            <div class="autoComplete_wrapper">
                                <input id="autoComplete" autocomplete="off" type="text" tabindex="1" />
                            </div>
                            <!-- city select start -->
                            {{-- <select id="citiesSelect" class="form-select" aria-label="Default select example"></select> --}}
                            <!-- city select end -->
                            <!-- search end -->
                            <!-- city lagana h -->
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
                                    <!-- <li>
                                                                                                                                                                                                                                                                                                    <button>Electric Motors</button>
                                                                                                                                                                                                                                                                                                </li> -->
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div title=" Wanted" class="wanted btn effect01">
                                                                                                                                                                                                                                                                                <span>WANTED</span>
                                                                                                                                                                                                                                                                            </div> -->
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
                    <h2 class="fw-bold">Construction Materials</h2>
                    <div class="d-flex">
                        <div class="ms-4">
                            <a href="{{ route('construction.bcatlist', ['acategory' => $bcategories[0]->category->slug]) }}"
                                class="themebtn2 px-3 py-1 ms-1">View all</a>
                        </div>
                    </div>
                </div>
                <!-- slider -->
                <div class="main_slide_div">
                    <div style="margin: auto;" class="slider">
                        @foreach ($bcategories as $item)
                            @unless($item->storeproduct->isEmpty())
                                <div>
                                    <li class="scroll-img-list  p-2 my-3">
                                        <div id="main_div_form">
                                            <div class="text-decoration-none position-relative">
                                                <button onclick="formSubmit()" class="imageSection">
                                                    <a
                                                        href="{{ route('construction.bcat', ['acategory' => $item->category->slug, 'bcategory' => $item->slug]) }}">
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
                                                            @foreach ($item->subcategories as $i => $subItem)
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
                                                <a href="{{ route('construction.bcat', ['acategory' => $item->category->slug, 'bcategory' => $item->slug]) }}"
                                                    class="text-decoration-none w-100 themebtn py-1 text-white">
                                                    <button class="w-100 themebtn py-1 text-white">
                                                        View more
                                                    </button>
                                                </a>
                                            </div>
                                        </div>

                                    </li>
                                </div>
                            @endunless
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
                                    href="{{ route('construction.singleproduct', ['store' => $item->store->slug, 'product' => $item->product->slug]) }}">
                                    <div class="imageSection">
                                        <img class="slideImg"
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                            alt="" />
                                    </div>
                                    <div class="text-dark paraContainer">
                                        <div class="mt-1">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="lightColor">
                                                    {{ $item->product->d_category->name ?? 'A Category' }}</h6>
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
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/autoComplete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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

        // == SEARCH AREA DROPDOWN START
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
                            "{{ route('construction.searchsuggestions') }}"
                        );
                        areas = await source.json();
                        // Post Loading placeholder text
                        document
                            .getElementById("autoComplete")
                            .setAttribute("placeholder", autoCompleteJS.placeHolder);
                        // Returns Fetched data
                        // console.log(areas);
                        return areas;
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
                    // console.log(data);
                    // Modify Results Item Style
                    item.style = "display: flex; justify-content: space-between;";
                    // Modify Results Item Content
                    item.innerHTML = `
     <span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
       ${data.match}
     </span>
     <span style="margin-left:15px;display:inline-block;width:160px;text-align:right;align-items: center; font-size: 13px; font-weight: 100; text-transform: uppercase; color: rgba(0,0,0,.2); text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
       ${data.value.from}
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

            var url = '{{ route('construction.search', 'searched=:key') }}';
            key = inpVal.value
            url = url.replace(':key', key);
            document.location.href = url;

            // if (areas) {
            //     const filteredArea = areas.data.filter((prev) => prev.name === inpVal.value)
            //     if (filteredArea.length) {} else {
            //         // console.log(inpVal.value)
            //     }
            // } else {
            //     // console.log("error")
            // }
        }
        // SUBMIT END
        // == SEARCH AREA DROPDOWN END\

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
