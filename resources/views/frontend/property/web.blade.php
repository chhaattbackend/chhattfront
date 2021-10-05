@extends('layouts.master')
@section('style')
    <title>Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com</title>
    <meta name="title" content="Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com">
    <meta name="description"
        content="Buy rent and sell your properties with Pakistan's best real estate portal at Chhatt.com. Find property dealers, developers and best property agents visit our website">
    <link rel="stylesheet" type="text/css" href="./styles/property/property.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">

@endsection

@section('headercontent')
    @if (\Session::has('alert'))
        <div class="alert alert-warning">
            <ul>
                <li>{!! \Session::get('alert') !!}</li>
            </ul>
        </div>
    @endif
    <div class="mn_div">
        <div class="backg ">
            <div class="backg_sdiv">
                <div class="main_bar p-3"
                    style="background: rgba(19, 18, 18, 0.753); border-radius: 10px;  outline: 2px; box-shadow: 12px 12px 20px #1b1c1d9a, -12px -12px 20px rgba(37, 39, 39, 0.712);   max-width: 950px !important; ">
                    <form id="form11" action="" class="frm">
                        <div class="row p-4 " style="margin-bottom: 1%; margin-left: 105px">


                            <div class="col-2">
                                <button type="button" class="btn btn-outline-primary btn-sm p-0 active" id="buy"
                                    style="line-height: 25px;  " onclick="dothis('For Sale')">Buy</button>
                            </div>
                            <div class="col-2 ">
                                <button type="button" class="btn btn-outline-primary btn-sm p-0" id="rent"
                                    style="line-height: 25px" onclick="dothis('For Rent')">Rent</button>

                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-primary btn-sm p-0" id="wanted"
                                    style="line-height: 25px" onclick="dothis('requirement')">Wanted</button>

                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-primary btn-sm p-0" id="project"
                                    style="line-height: 25px" onclick="dothis('project')">Project</button>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('invest') }}" class="btn btn-outline-primary btn-sm p-0" id="invest"
                                    style="line-height: 25px">Invest</a>

                            </div>

                            <input type="hidden" name="property_for" id="typesasasasas" value="For Sale">




                        </div>
                        <div class="searchdiv">
                            <span class="searchIcon" style="margin-right: 20px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                            <!-- search field start  -->
                            <!-- search start -->
                            <select id="citiesSelect" onchange="changecity()" class="form-select"
                                aria-label="Default select example">
                                @foreach ($city as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }} </option>
                                @endforeach
                            </select>
                            <div class="autoComplete_wrapper">
                                <input id="autoComplete" autocomplete="off" type="text" tabindex="1" />
                            </div>

                            <!-- city select start -->



                            <select style="width: 20ch;" name="area_type" id="type">

                                <option selected value="Residential">Residential </option>
                                {{-- <option value="Residential">Residential</option> --}}
                                <option value="Commercial">Commercial</option>
                                <option value="Industrial">Industrial</option>

                            </select>


                            <!-- city select end -->
                            <!-- search end -->
                            <!-- city lagana h -->
                            {{-- <meta hidden name="csrf-token" content="{{ csrf_token() }}" /> --}}
                            <button type="submit" onclick="changeFunc(event)">
                                Search
                            </button>
                        </div>

                        <div class="view_more_maq" style="margin-top: 9px" id="viewmore">
                            <input class="view_more_maq" style="padding-right: 6px; background: none" type="reset"
                                value="Reset" />
                            <span class="sspan" id="view_more">View More</span>
                        </div>
                        <div class="serch_bottom " id="serch_option_show" style="display: none">
                            {{-- <div class="d-flex flex-column"> --}}
                            <div class="d-flex flex-column" id="moreItems">
                                {{-- <div class="view_more_main">
                                        <input class="view_more_main" style="padding-right: 6px; background: none" type="reset"
                                            value="Reset" />
                                        <span class="sspan" id="view_more">View More</span>
                                    </div> --}}
                                <div class="d-flex justify-content-between" id="drop_show">
                                    <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Property Type</div>
                                        <select class="py-2 w-100 px-2  border-0" name="property_type" id="property_type">
                                            <option selected disabled value="">Property Type </option>
                                            @foreach ($p_type as $item)
                                                <option value="{{ $item->property_type }}">{{ $item->property_type }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>
                                    {{-- <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Area Type</div>
                                        <select class="py-2 w-100 px-2  border-0" name="area_type">
                                            <option selected disabled value="">Area Type </option>
                                            <option value="Residential">Residential</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Industrial">Industrial</option>
                                        </select>
                                    </div> --}}
                                    <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Beds</div>
                                        <select class="py-2 w-100 px-2  border-0" name="bed">
                                            <option selected disabled value="">Beds </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="+10">+10</option>
                                        </select>
                                    </div>
                                    <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Baths</div>
                                        <select class="py-2 w-100 px-2  border-0" name="bath">
                                            <option selected disabled value="">Bath </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="+10">+10</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-3" id="drop_showl">
                                    {{-- <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Property Type</div>
                                        <select class="py-2 w-100 px-2  border-0" name="property_type">
                                            <option selected disabled value="">Property Type </option>
                                            @foreach ($propertytype as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    {{-- <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Area Type</div>
                                        <select class="py-2 w-100 px-2  border-0" name="area_type">
                                            <option selected disabled value="">Area Type </option>
                                            <option value="Residential">Residential</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Industrial">Industrial</option>
                                        </select>
                                    </div> --}}
                                    {{-- <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Beds</div>
                                        <select class="py-2 w-100 px-2  border-0" name="bed">
                                            <option selected disabled value="">Beds </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="+10">+10</option>
                                        </select>
                                    </div> --}}
                                    {{-- <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Baths</div>
                                        <select class="py-2 w-100 px-2  border-0" name="bath">
                                            <option selected disabled value="">Bath </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="+10">+10</option>
                                        </select>
                                    </div> --}}
                                    <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Price Min</div>
                                        <select class="py-2 w-100 px-2  border-0" name="min_price">
                                            <option selected disabled value="">Min Price </option>
                                            <option value="500000">500,000</option>
                                            <option value="1000000">1,000,000</option>
                                            <option value="2000000">2,000,000</option>
                                            <option value="3500000">3,500,000</option>
                                            <option value="5000000">5,000,000</option>
                                            <option value="6500000">6,500,000</option>
                                            <option value="8000000">8,000,000</option>
                                            <option value="10000000">10,000,000</option>
                                            <option value="12500000">12,500,000</option>
                                            <option value="15000000">15,000,000</option>
                                            <option value="17500000">17,500,000</option>
                                            <option value="20000000">20,000,000</option>
                                            <option value="30000000">30,000,000</option>
                                            <option value="40000000">40,000,000</option>
                                            <option value="50000000">50,000,000</option>
                                            <option value="75000000">75,000,000</option>
                                            <option value="100000000">100,000,000</option>
                                            <option value="250000000">250,000,000</option>
                                            <option value="500000000">500,000,000</option>
                                            <option value="1000000000">1,000,000,000</option>
                                        </select>
                                    </div>
                                    <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Price Max</div>
                                        <select class="py-2 w-100 px-2  border-0" name="max_price">
                                            <option selected disabled value="">Max Price </option>
                                            <option value="500000">500,000</option>
                                            <option value="1000000">1,000,000</option>
                                            <option value="2000000">2,000,000</option>
                                            <option value="3500000">3,500,000</option>
                                            <option value="5000000">5,000,000</option>
                                            <option value="6500000">6,500,000</option>
                                            <option value="8000000">8,000,000</option>
                                            <option value="10000000">10,000,000</option>
                                            <option value="12500000">12,500,000</option>
                                            <option value="15000000">15,000,000</option>
                                            <option value="17500000">17,500,000</option>
                                            <option value="20000000">20,000,000</option>
                                            <option value="30000000">30,000,000</option>
                                            <option value="40000000">40,000,000</option>
                                            <option value="50000000">50,000,000</option>
                                            <option value="75000000">75,000,000</option>
                                            <option value="100000000">100,000,000</option>
                                            <option value="250000000">250,000,000</option>
                                            <option value="500000000">500,000,000</option>
                                            <option value="1000000000">1,000,000,000</option>
                                        </select>
                                    </div>
                                    <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Area Min</div>
                                        <select class="py-2 w-100 px-2  border-0" name="area_min">
                                            <option selected disabled value="">Area Min </option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            <option value="1500">1500</option>
                                            <option value="2000">2000</option>
                                            <option value="2500">2500</option>
                                            <option value="3000">3000</option>
                                            <option value="3500">3500</option>
                                            <option value="4000">4000</option>
                                        </select>
                                    </div>
                                    <div class="slct1 slct w-100 mx-3">
                                        <div class="pb-1">Area Max</div>
                                        <select class="py-2 w-100 px-2  border-0" name="area_max">
                                            <option selected disabled value="">Area Max </option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            <option value="1500">1500</option>
                                            <option value="2000">2000</option>
                                            <option value="2500">2500</option>
                                            <option value="3000">3000</option>
                                            <option value="3500">3500</option>
                                            <option value="4000">4000</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <meta hidden name="csrf-token" content="{{ csrf_token() }}" />

    <div id="bestProperty" class="propertylist">
        <div class="secdiv">
            <div class="secdivtxt">
                <h3 class="fw-bold">Fresh Properties</h3>

            </div>

            <div class="d-flex">
                <div class="ms-4" style="text-align: end">
                    <button id="viewall" onclick="viewall()" class="themebtn2 px-3 py-1 ms-1">View
                        all</button>
                </div>
            </div>
            {{-- <div class="sul">
                <ul>
                    <li title="All">
                        <button id="all" class="themebtnUnPressed active_bestProperties"
                            onclick="allProperties()">All</button>
                    </li>
                    <li title="Residential">
                        <button class="themebtnUnPressed" id="resBtn" onclick="residential()"
                            variant="contained">Residential</button>
                    </li>
                    <li title="Commercial">
                        <button id="comBtn" class="themebtnUnPressed" onclick="commercial()">Commercial</button>
                    </li>
                    <li title="Industrial">
                        <button id="indBtn" class="themebtnUnPressed" onclick="industrial()">Industrial</button>
                    </li>
                    {{-- <li title="View all" class="viewall">
                        <button>View all</button>
                    </li> --}}
            </ul>
        </div>

    </div>
    <br />
    <!--  property slider -->

    <!-- PROPERTY CARD START -->
    <div class="mapCardContainer">
        <div class="container-fluid">


            <div id="list" class="row px-2">
                @include('layouts.listwithimage')
            </div>







        </div>
    </div>
    <hr>

    <div class="mapCardContainer ">
        <div class="container-fluid">

            <div class="row px-2">

                @include('layouts.featuredproject')
            </div>
        </div>


    </div>

    <br>



    <br>
    <hr>



    <!--  PROPERTY CARD START  -->

    </div>
    {{-- <div class="visit_maindiv">
        <div class="innerDiv">
            <div class="secOne">
                <h2>Visit Our Construction Site</h2>
            </div>
            <div class="secTwo">
                Chhatt Media Pvt.ltd commonly known as chhatt.com is a powerful
                platform which aims at connecting the realtors, builders,
                developers, brokers with right kind of clientele for various types
                of properties from various mediums.
            </div>
            <div class="secThree">
                <!-- <Link to='/construction'> -->
                <button>Visit Now</button>
                <!-- </Link> -->
            </div>
        </div>
    </div> --}}
    <br>
    @include('layouts.explorer')

    <hr>
    <br>
    @include('layouts.agency')
    <br>
    <br>
    <div class="exp">

        <div class="container" style="padding: 2%">

            <h2
                style="text-align: center; font-weight: 600; color: #333; opacity: 0.8; margin-bottom: 2%;text-decoration: underline;">
                POPULAR LOCATIONS
            </h2>
            <div class="row ">
                <div style="margin-bottom: 2%; text-align: center">
                    <h4>
                        KARACHI
                        <hr>
                    </h4>

                </div>


                <div class="col-11" style="padding: 0">
                    <div class="row" style="text-align: center">
                        <div class="col-3 offset-1">
                            <h5 style="text-align: start" class="space-4">
                                Properties for Sale
                                <hr>
                            </h5>
                        </div>
                        <div class="col-3 offset-1">
                            <h5 style="text-align: start" class="space-4">
                                Properties for Rent
                                <hr>
                            </h5>
                        </div>
                        <div class="col-3 offset-1">
                            <h5 style="text-align: start"
                                class="">
                                Popular Location For Houses
                                <hr>
                            </h5>
                        </div>


                    </div>

                    <br>
                    <div class="
                                row " style=" text-align: center">
                                <div class="col-3 offset-1" style="text-align: start">
                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'House']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            House For Sale In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'Plot']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Plot For Sale In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'Shop']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Shop For Sale In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'Mezzanine']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Mezzanine For Sale In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'Lower Portion']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Lower Portion For Sale In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'Upper Portion']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Upper Portion For Sale In Karachi
                                        </p>
                                    </a>


                                </div>
                                <div class="col-3 offset-1" style="text-align: start">
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'House']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            House For Rent In Karachi
                                        </p>
                                    </a>

                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Shop']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Shop For Rent In Karachi
                                        </p>
                                    </a>

                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Flat']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Flat For Rent In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Mezzanine']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Mezzanine For Rent In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Lower Portion']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Lower Portion For Rent In Karachi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Upper Portion']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Upper Portion For Rent In Karachi
                                        </p>
                                    </a>




                                </div>
                                <div class="col-3 offset-1" style="text-align: start">

                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'House', 'area' => '6']) }}"
                                        class="text-decoration-none">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6; ">
                                            House For Sale In Dha
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Flat', 'area' => '6']) }}"
                                        class="text-decoration-none">

                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Flat For Rent In Dha
                                        </p>
                                    </a>

                                    <a href="{{ route('popular.property', ['property_for' => 'For Sale', 'type' => 'House', 'area' => '2']) }}"
                                        class="text-decoration-none txt_div">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            House For Sale In Bahria
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Flat', 'area' => '2']) }}"
                                        class="text-decoration-none txt_div">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Flat For Rent In Bahria
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'Flat', 'area' => '3']) }}"
                                        class="text-decoration-none txt_div">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">

                                            Flat For Rent In Korangi
                                        </p>
                                    </a>
                                    <a href="{{ route('popular.property', ['property_for' => 'For Rent', 'type' => 'House', 'area' => '3']) }}"
                                        class="text-decoration-none txt_div">
                                        <p class="txt"
                                            style="margin-bottom: 2ch; font-weight: 500; color: #333;opacity: 0.6">
                                            House For Rent In Korangi
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- <div class="row">
        <div class="col-sm-4">
                <div class="d-flex justify-content-center">
                ashdjasdh

            </div>
        </div>
        <div class="col-sm-4">
                <div class="d-flex justify-content-center">
                ashdjasdh

            </div>
        </div>
        <div class="col-sm-4">
                <div class="d-flex justify-content-center">
                ashdjasdh

            </div>
        </div>



    </div> --}}

        <script>
            const btn1 = document.getElementById("all");
            const btn2 = document.getElementById("resBtn");
            const btn3 = document.getElementById("comBtn");
            const btn4 = document.getElementById("indBtn");
            const allProperties = () => {
                getListdata('All');
                btn1.classList.add("active_bestProperties");
                btn2.classList.remove("active_bestProperties");
                btn3.classList.remove("active_bestProperties");
                btn4.classList.remove("active_bestProperties");
            };
            const residential = () => {
                getListdata("residential");
                btn2.classList.add("active_bestProperties");
                btn1.classList.remove("active_bestProperties");
                btn3.classList.remove("active_bestProperties");
                btn4.classList.remove("active_bestProperties");
            };
            const commercial = () => {
                getListdata("commercial");
                btn3.classList.add("active_bestProperties");
                btn1.classList.remove("active_bestProperties");
                btn2.classList.remove("active_bestProperties");
                btn4.classList.remove("active_bestProperties");
            };
            const industrial = () => {
                getListdata("industrial");
                btn4.classList.add("active_bestProperties");
                btn1.classList.remove("active_bestProperties");
                btn2.classList.remove("active_bestProperties");
                btn3.classList.remove("active_bestProperties");
            };
            var serch_option = document.getElementById("serch_option_show");
            var moreItems = document.getElementById("moreItems");
            var view = document.getElementById("view_more");
            var drop = document.getElementById("drop_show");
            var drop1 = document.getElementById("drop_showl");
            var view_more_bool = false
            view.addEventListener("click", () => {
                view_more_bool = !view_more_bool
                if (view_more_bool === true) {
                    moreItems.style.transition = "500ms 1000ms";
                    serch_option.style.height = "200px";

                    drop.style.opacity = "1";
                    drop.style.transition = "500ms 300ms";
                    drop1.style.opacity = "1";
                    drop1.style.transition = "500ms 300ms";
                    moreItems.style.display = "block";

                    view.innerText = "View Less";
                    serch_option.style.display = "block";
                } else if (view_more_bool === false) {
                    moreItems.style.transition = "0ms";
                    serch_option.style.height = "111px";
                    serch_option.style.display = "none";
                    drop.style.transition = "400ms";
                    drop.style.opacity = "0";
                    drop1.style.transition = "300ms";
                    drop1.style.opacity = "0";
                    moreItems.style.display = "none";
                    view.innerText = "View More";
                }
            });
            // view.addEventListener("click", () => {
            //     view_more_bool = !view_more_bool
            //     if (view_more_bool === true) {
            //         moreItems.style.transition = "500ms 1000ms";
            //         serch_option.style.height = "230px";
            //         drop.style.opacity = "1";
            //         drop.style.transition = "500ms 300ms";
            //         drop1.style.opacity = "1";
            //         drop1.style.transition = "500ms 300ms";
            //         moreItems.style.display = "block";
            //         view.innerText = "View Less"
            //     } else if (view_more_bool === false) {
            //         moreItems.style.transition = "0ms";
            //         serch_option.style.height = "111px";
            //         drop.style.transition = "400ms";
            //         drop.style.opacity = "0";
            //         drop1.style.transition = "300ms";
            //         drop1.style.opacity = "0";
            //         moreItems.style.display = "none";
            //         view.innerText = "View More"
            //     }
            // });

            function getListdata(type) {
                $('#list').addClass('animate__animated animate__fadeOut');
                $.ajax({
                    type: "get",
                    url: "/property",
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        type: type,
                        p: true
                    },
                    success: function(responese) {
                        $('#list').removeClass('animate__animated animate__fadeOut');
                        $('#list').html(responese.data);
                        $('#box-wrapper').removeClass('animate__animated animate__fadeOut');
                        $('#list').addClass('animate__animated animate__fadeIn');

                    },
                });

            }

            function viewall() {
                let url = "{{ route('more.property', ['property_for' => 'All']) }}";
                if ($("#typesasasasas").val() == "For Sale") {

                    url = "{{ route('more.property', ['property_for' => 'For Sale']) }}";
                }
                if ($("#typesasasasas").val() == "For Rent") {
                    url = "{{ route('more.property', ['property_for' => 'For Rent']) }}";

                }
                if ($("#typesasasasas").val() == "requirement") {
                    console.log('asdhnajksdh')
                    url = "{{ route('more.property', ['property_for' => 'requirement']) }}";

                }

                // url = url.replace(':id', id);
                document.location.href = url;


            }
        </script>
    @endsection
    @section('personalscripts')
        <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/autoComplete.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
                integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <!-- EXTERNAL LINKS END -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script>
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
                                    `https://uat.chhatt.com/api/allareas?city=${city}`
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
                    placeHolder: "Search Location",
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
            $('#type').change(function() {

                var type = $(this).val();

                console.log(type)
                $('#property_type').find('option').not(':first').remove();
                $.ajax({
                    url: 'ajax/' + type,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var len = 0;
                        console.log(response.p_type);
                        if (response.p_type != null) {
                            len = response.p_type.length;
                        }
                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                // var id = response.data[i].id;
                                // console.log('hhh')
                                // console.log(response.p_type[1].property_type)
                                var name = response.p_type[i].property_type;
                                var option = "<option value='" + name + "'>" + name + "</option>";
                                $("#property_type").append(option);
                            }
                        }

                    }
                })
            })

            function dothis(params) {
                // console.log(params)
                $("#typesasasasas").val(params);
                // console.log($("#typesasasasas").val())
                if ($("#typesasasasas").val() == "For Sale") {
                    var property_for = $("#typesasasasas").val();
                    $('#buy').addClass('active');
                    $('#rent').removeClass('active');
                    $('#wanted').removeClass('active');
                    $('#invest').removeClass('active');
                    $('#project').removeClass('active');
                    $('#type').show();
                    $('#viewmore').show();
                    $.ajax({
                        type: "GET",
                        url: 'ajax/' + property_for,
                        dataType: 'html',
                        data: {
                            property_for: 'For Sale',
                        },
                        success: function(responese) {
                            // console.log(responese.pagination)

                            $('#list').html(responese);

                            $('#list').removeClass('animate__animated animate__fadeOut');

                            // console.log(responese.pagination)
                            $('#list').html(responese.p_type);
                            $('#list').addClass('animate__animated animate__fadeIn');
                            $('#wow').html(responese.pagination);
                            $('#total').html('Showing ' + responese.total + ' Results');
                        },
                    });
                    if ($("#type").val() == '' || $("#type").val() == null) {

                        $("#type").val('Residential');



                    }
                }


                if ($("#typesasasasas").val() == "For Rent") {
                    var property_for = $("#typesasasasas").val();

                    $('#rent').addClass('active');
                    $('#buy').removeClass('active');
                    $('#wanted').removeClass('active');
                    $('#invest').removeClass('active');
                    $('#project').removeClass('active');
                    $('#type').show();
                    $('#viewmore').show();
                    $.ajax({
                        type: "GET",
                        url: 'ajax/' + property_for,
                        dataType: 'html',
                        data: {
                            property_for: 'For Rent',
                        },
                        success: function(responese) {
                            // console.log(responese.pagination)

                            $('#list').html(responese);

                            $('#list').removeClass('animate__animated animate__fadeOut');

                            // console.log(responese.pagination)
                            $('#list').html(responese.p_type);
                            $('#list').addClass('animate__animated animate__fadeIn');
                            $('#wow').html(responese.pagination);
                            $('#total').html('Showing ' + responese.total + ' Results');
                        },
                    });
                    if ($("#type").val() == '' || $("#type").val() == null) {

                        $("#type").val('Residential');



                    }
                }
                if ($("#typesasasasas").val() == "requirement") {
                    var inventory_type = $("#typesasasasas").val();


                    $('#typesasasasas').attr('name', 'inventory_type')
                    $('#wanted').addClass('active');
                    $('#rent').removeClass('active');
                    $('#buy').removeClass('active');
                    $('#invest').removeClass('active');
                    $('#project').removeClass('active');
                    $('#type').show();
                    $('#viewmore').show();
                    $.ajax({
                        type: "GET",
                        url: 'ajax/' + inventory_type,
                        dataType: 'html',
                        data: {
                            inventory_type: 'requirement',
                        },
                        success: function(responese) {
                            // console.log(responese.pagination)

                            $('#list').html(responese);

                            $('#list').removeClass('animate__animated animate__fadeOut');

                            // console.log(responese.pagination)
                            $('#list').html(responese.p_type);
                            $('#list').addClass('animate__animated animate__fadeIn');
                            $('#wow').html(responese.pagination);
                            $('#total').html('Showing ' + responese.total + ' Results');
                        },
                    });

                    if ($("#type").val() == '' || $("#type").val() == null) {

                        $("#type").val('Residential');



                    }
                }
                if ($("#typesasasasas").val() == "invest") {
                    $('#typesasasasas').attr('name', '')
                    $('#invest').addClass('active');
                    $('#rent').removeClass('active');
                    $('#buy').removeClass('active');
                    $('#wanted').removeClass('active');
                    $('#project').removeClass('active');
                }
                if ($("#typesasasasas").val() == "project") {
                    $('#typesasasasas').attr('name', 'projects')

                    $('#project').addClass('active');
                    $('#rent').removeClass('active');
                    $('#buy').removeClass('active');
                    $('#wanted').removeClass('active');
                    $('#invest').removeClass('active');
                    $('#type').hide();
                    // $('#type').prop("selected", false);

                    $('#type').val([]);


                    $('#viewmore').hide();
                }

            }


            // SUBMIT START
            function changeFunc(e) {
                e.preventDefault()

                const inpVal = document.getElementById("autoComplete");
                if (areas) {
                    const filteredArea = areas.data.filter((prev) => prev.name === inpVal.value)

                    if (filteredArea.length) {
                        // console.log(filteredArea[0].key)
                        var formData = $('#form11').serialize();
                        // console.log(formData);
                        var url = '{{ route('property.search', 'search_areas=:key:word:formdata') }}';
                        // console.log(filteredArea[0].key)
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
                        // console.log(formData);
                        if (formData == null) {
                            url = url.replace(':word', '&');
                        } else {
                            url = url.replace(':word', '');
                        }
                        url = url.replace(':formdata', '&' + formData);
                        // console.log(url)

                        document.location.href = url;
                    } else {
                        var bb = $("#autoComplete").val();
                        var url = '{{ route('description', 'search_areas=:id') }}';
                        url = url.replace(':id', bb);
                        // console.log(url);
                        document.location.href = url;
                    }
                } else {
                    // console.log("error")
                }
            }


            // SUBMIT END
            // == SEARCH AREA DROPDOWN END
        </script>

    @endsection
