@extends('layouts.master')
@section('style')
    <title>Pakistan Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com</title>
    <meta name="title" content="Pakistan Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com">
    <meta name="description"
        content="Chhatt.com: The best property real estate and construction material providers in Pakistan. Buy, sell and rent properties, shops and commercial plots at best prices">
    <link rel="stylesheet" type="text/css" href="./styles/home/home.css" />
    <!-- EXTERNAL LINKS START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- EXTERNAL LINKS END -->
@endsection

@section('headercontent')
    <div class="mn_div">
        <div class="backg">
            <div class="backg_sdiv">
                <h1>Find the Best Properties and Construction Material</h1>
                <div class="main_bar">
                    <form onSubmit="" class="searchdiv">
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
                        <select id="citiesSelect" onchange="changecity()" class="form-select"
                            aria-label="Default select example">
                            @foreach ($city as $item)
                                <option value="{{ $item->name }}">{{ $item->name }} </option>
                            @endforeach
                        </select>
                        <!-- city select end -->
                        <!-- search end -->
                        <!-- city lagana h -->
                        <button type="submit" onclick="changeFunc(event)">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('personalscripts')

    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/autoComplete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
    <!-- EXTERNAL LINKS END -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.responsive').slick({
            dots: false,
            infinite: false,
            arrows: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        var city = $('#citiesSelect').children("option:selected").val();
        search('karachi');
        // function citiesData() {
        // CITIES START
        //     axios.get('https://uat.chhatt.com/api/cities').then((prev) =>
        //         $.each(prev.data, function(key, value) {
        //             console,log()
        //             $("#citiesSelect").append(`
    //         <option value="${value.id}">${value.name}</option>`);
        //         })
        //     )
        // }
        // CITIES END
        // == SEARCH AREA DROPDOWN START
        var areas;
        var city;

        function changecity() {
            // var city = $('#citiesSelect').children("option:selected").val();
            city = $('#citiesSelect').children("option:selected").val();
            // console.log(city);
            // areas = "";
            search(city);
        }

        function search() {
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
                                `http://uat.chhatt.com/api/allareas?city=${city}`
                            );
                            areas = await source.json();
                            // Post Loading placeholder text
                            document
                                .getElementById("autoComplete")
                                .setAttribute("placeholder", autoCompleteJS.placeHolder);
                            // Returns Fetched data
                            // console.log(areas.data)
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
                    // noResults: true,
                    maxResults: 100,
                    // tabSelect: true
                },
                resultItem: {
                    element: (item, data) => {
                        // console.log(data.match)
                        // Modify Results Item Style
                        item.style = "display: flex; justify-content: space-between;";
                        // Modify Results Item Content
                        item.innerHTML =
                            `<span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
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
        }
        // SUBMIT START
        function changeFunc(e) {
            e.preventDefault()
            const inpVal = document.getElementById("autoComplete");
            if (areas) {
                const filteredArea = areas.data.filter((prev) => prev.name === inpVal.value)
                if (filteredArea.length) {
                    // console.log(filteredArea[0].key)
                    var url = '{{ route('property.search', 'search_areas=:key') }}';
                    array = filteredArea[0].key.split(",");
                    area = array[0];
                    if (area == "area_one_id") {
                        area = 'a1';
                    }
                    if (area == "area_two_id") {
                        area = 'a2';
                    }
                    if (area == "area_three_id") {
                        area = 'a3';
                    }
                    key = area + ',' + array[1];
                    // console.log(key)
                    url = url.replace(':key', key);

                    document.location.href = url;
                } else {
                    // console.log(inpVal.value)
                }
            } else {
                // console.log("error")
            }
        }
        // SUBMIT END
        // == SEARCH AREA DROPDOWN END
    </script>
@endsection

@section('content')
    <meta hidden name="csrf-token" content="{{ csrf_token() }}" />
    <section class="products">
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                <symbol id="disc" viewBox="0 0 451.846 451.847">
                    <path
                        d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744 L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284 c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                    </path>
                </symbol>
            </svg>
            <div class="product-sec-wrapper">
                <h2><a class="hCathd" href="">Properties And Agency</a></h2>
                <div class="minht cBFlex" id="1">
                    <div class="product-banner  pbnr7">
                        <div class="banner-content">
                            <ul>
                                <li>
                                    <a href=""> Real Estate Properties
                                    </a>
                                </li>
                                <li><a href="">Agencies</a></li>
                                <li><a href="">Realtors</a></li>
                            </ul>
                            <a href="" class="view-all">View
                                All</a>
                        </div>
                    </div>
                    <div class="row cBW100">
                        <div class="col-md-4 col-sm-6 bdr1">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <a href=""><img data-original="" alt="Face Mask"
                                            src="https://images.unsplash.com/photo-1555636222-cae831e670b3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1056&q=80"
                                            title="Face Mask"></a>
                                </div>
                                <div class="product-meta">
                                    <h3><a href="{{ route('property.search', ['area_type' => 'Residential']) }}">Residential Properties</a></h3>
                                    <p><a href="{{ route('property.search', ['property_type' => 'House' , 'area_type' => 'Residential']) }}">House for Sale
                                        </a></p>
                                    <p><a href="{{ route('property.search', ['property_type' => 'Flat', 'area_type' => 'Residential']) }}">Flat for Sale</a></p>
                                    <p><a href="{{ route('property.search', ['property_type' => 'Plot', 'area_type' => 'Residential']) }}">Plot for Sale</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 bdr1">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <a href=""><img
                                            data-original="https://5.imimg.com/data5/GA/AX/PV/SELLER-134485/oxygen-125x125.jpg"
                                            src="https://5.imimg.com/data5/GA/AX/PV/SELLER-134485/oxygen-125x125.jpg"
                                            alt="Medical Mask" title="Medical Mask"></a>
                                </div>
                                <div class="product-meta">
                                    <h3><a href="{{ route('property.search', [ 'area_type' => 'Commercial']) }}">Commercial Properties</a></h3>
                                    <p><a href="{{ route('property.search', [ 'area_type' => 'Commercial','property_type' => 'House']) }}">House for Sale
                                        </a></p>
                                    <p><a href="{{ route('property.search', ['property_type' => 'Flat', 'area_type' => 'Commercial']) }}">Flat for Sale</a></p>
                                    <p><a href="{{ route('property.search', ['property_type' => 'Plot', 'area_type' => 'Commercial']) }}">Plot for Sale</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 bdr1">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <a href=""><img data-original="https://hm.imimg.com/imhome_gifs/cvid03.png"
                                            src="https://hm.imimg.com/imhome_gifs/cvid03.png" alt="Surgical Gloves"
                                            title="Surgical Gloves"></a>
                                </div>
                                <div class="product-meta">
                                    <h3><a href="{{ route('property.search', [ 'area_type' => 'Industrial']) }}">Industrial Properties</a></h3>
                                    <p><a href="{{ route('property.search', ['property_type' => 'Warehouse', 'area_type' => 'Industrial']) }}">Warehouse for Sale
                                        </a></p>

                                    <p><a href="{{ route('property.search', ['property_type' => 'Plot', 'area_type' => 'Industrial']) }}">Plot for Sale</a></p>
                                    <p><a href="{{ route('property.search', ['property_type' => 'Factory', 'area_type' => 'Industrial']) }}">Factory for Sale</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 bdr1">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <a href=""><img
                                            data-original="https://5.imimg.com/data5/JJ/IV/XY/SELLER-6410244/medical-scrubs-125x125.jpg"
                                            src="https://5.imimg.com/data5/JJ/IV/XY/SELLER-6410244/medical-scrubs-125x125.jpg"
                                            alt="Medical Clothing" title="Medical Clothing"></a>
                                </div>
                                <div class="product-meta">
                                    <h3><a href="{{ route('agency') }}">Real Estate Agencies
                                        </a>
                                    </h3>
                                    <p> <a href="{{ route('agency') }}">Residential Properties agencies</a>
                                    </p>
                                    <p><a href="{{ route('agency') }}">Commercial Properties agencies</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 bdr1">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <a href=""> <img
                                            data-original="https://5.imimg.com/data5/FR/RK/MY-9882376/disposable-surgical-cap-125x125.jpg"
                                            src="https://5.imimg.com/data5/FR/RK/MY-9882376/disposable-surgical-cap-125x125.jpg"
                                            alt="Surgical Caps" title="Surgical Caps"></a>
                                </div>
                                <div class="product-meta">
                                    <h3><a href=""> Area Speciality Realtors</a>
                                    </h3>
                                    <p><a href=""> Dha</a>
                                    </p>
                                    <p><a href="">Clifton</a>
                                    </p>
                                    <p><a href="">Nazimabad</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 bdr1">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <a href=" "> <img
                                            data-original="https://5.imimg.com/data5/SI/XQ/MB/GLADMIN-73621/coronavirus-ppe-kit-125x125.png "
                                            src="https://5.imimg.com/data5/SI/XQ/MB/GLADMIN-73621/coronavirus-ppe-kit-125x125.png "
                                            alt="Personal Protective Equipment" title="Personal Protective Equipment"></a>
                                </div>
                                <div class="product-meta">
                                    <h3><a href=" ">Property Specialist
                                        </a></h3>
                                    <p><a href="">Bungalow Specialist</a></p>
                                    <p><a href=""> Commercial Specialist </a>
                                    </p>
                                    <p> <a href=""> Plot Specialist</a></p>
                                    <p><a href=""> General Specialist</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pageContainer">
        <div class="container-fluid">
            <!-- TW CARDS START -->
            {{-- <div class="twoCards mt-5 text-center">
                <h2 class="fw-bolder">Find the Business in town</h2>
                <div class="mt-5 d-flex justify-content-center">
                    <div>
                        <div class="card1">
                            <a href="{{ route('agency') }}">
                                <img src="assets/propertyhigh.webp" alt="propertyhigh">
                            </a>
                        </div>
                        <a class="mt-5 text-decoration-none text-dark">
                            <h4 class="mt-2 fw-bold">Realtor</h4>
                        </a>
                    </div>
                    <div>
                        <div class="card2 ms-4">
                            <a href="{{ route('property') }}">
                                <img src="assets/realtorhigh.webp" alt="propertyhigh">
                            </a>
                        </div>
                        <a class="text-decoration-none text-dark">
                            <h4 class="mt-2 fw-bold">Property</h4>
                        </a>
                    </div>
                </div>
            </div> --}}
            <!-- TW CARDS END -->
            <br>
            <hr>
            <br>
            <!-- BEST PROPERTY START -->
            <div>
                <div class="d-flex justify-content-between">
                    <h2 class="fw-bold">Best properties for you</h2>
                    <div class="d-flex">
                        <div>
                            <button onclick="allProperties()" class="themebtnUnPressed active_bestProperties px-3 py-1"
                                id="allBtn">All</button>
                            <button onclick="residential()" class="themebtnUnPressed px-3 py-1 ms-1"
                                id="resBtn">Residential</button>
                            <button onclick="commercial()" class="themebtnUnPressed px-3 py-1 ms-1"
                                id="comBtn">Commercial</button>
                            <button onclick="industrial()" class="themebtnUnPressed px-3 py-1 ms-1"
                                id="indBtn">Industrial</button>
                        </div>
                        <div class="ms-4">

                            <a href="{{ route('allproperties', ['all' => 'All']) }}" id="propertyChange">

                                <button class="themebtn2 px-3 py-1 ms-1" type="submit">
                                    View All
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="position-relative mt-5">
                    <div class="sliderBtnLeft text-right m-auto">
                        <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
                    </div>
                    <!--image allary list-->
                    <ul id="box-wrapper" class="boxWrapper ps-0">
                        @include('frontend.home.list')
                    </ul>
                    <div class="sliderBtnRight col-1 m-auto">
                        <i class="scroll-right bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
            </div>
            <!-- BEST PROPERTY END -->
        </div>
    </div>

    @include('layouts.explorer')
    <br>
    @include('layouts.textcontent')
    @include('layouts.twocard')
    <script>
        function getListdata(type) {
            $('#box-wrapper').addClass('animate__animated animate__fadeOut');
            $.ajax({
                type: "get",
                url: "/",
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    type: type
                },
                success: function(responese) {
                    $('#box-wrapper').removeClass('animate__animated animate__fadeOut');
                    $('#box-wrapper').html(responese.data);
                    $('#box-wrapper').addClass('animate__animated animate__fadeIn');
                },
            });
        }
        // FOR INNER PAGE NAVIGATION START
        const btn1 = document.getElementById("allBtn");
        const btn2 = document.getElementById("resBtn");
        const btn3 = document.getElementById("comBtn");
        const btn4 = document.getElementById("indBtn");
        const allProperties = () => {
            getListdata('All');
            // var change=document.getElementById("mouz")
            $("#propertyChange").attr('href', '{{ route('allproperties', ['all' => 'All']) }}');
            btn1.classList.add("active_bestProperties");
            btn2.classList.remove("active_bestProperties");
            btn3.classList.remove("active_bestProperties");
            btn4.classList.remove("active_bestProperties");
        };
        const residential = () => {
            getListdata("residential");
            $("#propertyChange").attr('href', '{{ route('allproperties', ['all' => 'Residential']) }}');
            btn2.classList.add("active_bestProperties");
            btn1.classList.remove("active_bestProperties");
            btn3.classList.remove("active_bestProperties");
            btn4.classList.remove("active_bestProperties");
        };
        const commercial = () => {
            getListdata("commercial");
            $("#propertyChange").attr('href', '{{ route('allproperties', ['all' => 'Commercial']) }}');
            btn3.classList.add("active_bestProperties");
            btn1.classList.remove("active_bestProperties");
            btn2.classList.remove("active_bestProperties");
            btn4.classList.remove("active_bestProperties");
        };
        const industrial = () => {
            getListdata("industrial");
            $("#propertyChange").attr('href', '{{ route('allproperties', ['all' => 'Industrial']) }}');
            btn4.classList.add("active_bestProperties");
            btn1.classList.remove("active_bestProperties");
            btn2.classList.remove("active_bestProperties");
            btn3.classList.remove("active_bestProperties");
        };
    </script>
@endsection
