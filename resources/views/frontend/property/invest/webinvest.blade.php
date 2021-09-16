@extends('layouts.master')
@section('style')
    <title>Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com</title>
    <meta name="title" content="Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com">
    <meta name="description"
        content="Buy rent and sell your properties with Pakistan's best real estate portal at Chhatt.com. Find property dealers, developers and best property agents visit our website">
    <link rel="stylesheet" type="text/css" href="./styles/property/property.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">
    <style>
        .help-block {
            color: red
        }

    </style>

@endsection
@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Find the best Projects to Invest</h1>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <br>
    <br>

    <div class="secdivtxt m-4" style="align-self: center">
        <h3 class="fw-bold" style="font-size: 40px; text-align: center">Best Investment In Pakistan</h3>
        <p style="text-align: center">
            100% refundable, safe and secure investments
        </p>
        <p style="text-align: center">
            Our criteria to choose best investment projects
        </p>
    </div>
    <hr>
    <br>
    <br>
    <div class="container" style="text-align: start">
        <h1 class="fw-bold" style="font-size: 40px">
            Investment Products

        </h1>
        <div class="col-6">

            <div class="row">
                <div class="col-3">
                    <button style="background: white" onclick="show('Trading accounts: Property, Buy, Sell ')">

                        <div class="card card-1" style="border-radius: 30px" id="bkg1">
                            <h5 style="font-size: 30px; padding: 15px; margin-top: 5px" id="txt1">
                                IP1
                            </h5>

                        </div>
                    </button>


                </div>

                <div class="col-3">
                    <button style="background: white" onclick="show('Buy, Built, Sell')">

                        <div class="card card-1" style="border-radius: 30px" id="bkg2">
                            <h5 style="font-size: 30px; padding: 15px; margin-top: 5px" id="txt2">
                                IP2
                            </h5>

                        </div>
                    </button>

                </div>
                <div class="col-3">
                    <button style="background: white" onclick="show('IP1 + IP2')">

                        <div class="card card-1" style="border-radius: 30px" id="bkg3">
                            <h5 style="font-size: 30px; padding: 15px; margin-top: 5px; text-align: center" id="txt3">
                                GI
                            </h5>
                        </div>
                    </button>
                </div>


            </div>

            <br>
            <form action="{{ route('contact.form1') }}" method="POST" id="form"
                style="padding: 15px; margin-left: 20px; width: 750px;display: none; border-radius: 18px; outline: 10px; box-shadow: 12px 12px 20px #edf1f3ad, -12px -12px 20px rgba(221, 233, 233, 0.637); ">
                @csrf
                <div class="row">
                    <div class="col-6">


                        <h6 id="text" style="color: #333;">
                            We provide projects for you to invest

                        </h6>
                    </div>
                    <div class="col-6" style="">

                        <button style="background: white; margin-left: 300px" onclick="hide()" type="button">
                            <div class="card1 card-1" style="border-radius: 40px;display: none" id="cross1">
                                <h5 style="font-size: 25px; padding: 2px;  text-align: center">
                                    x
                                </h5>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="form-row" style="margin-bottom: 5px">
                    <div class="form-group col-md-4">
                        <div class="row" style="width: 700px;">

                            <div class="col-6">
                                <label for="name">Name</label>
                                <input style="border-radius: 10px" type="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name">
                                <input type="hidden" name='lead_from' value="invest">

                            </div>
                            <div class="col-6">
                                <label for="inputEmail4">Email</label>
                                <input style="border-radius: 10px" type="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                    placeholder="Email">

                            </div>
                        </div>

                    </div>

                </div>
                <div class="form-row" style="margin-bottom: 5px; width: 700px;">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number</label>
                        <input style="border-radius: 10px" type="number" class="form-control" id="phone" name="phone"
                            placeholder="Phone">

                    </div>


                </div>
                <div class="form-group" style="margin-bottom: 10px; width: 600px; ">
                    <h6>
                        <label for="description">Enter Comments</label>
                        <br>
                    </h6>

                    <div class="row" style="height: 150px; margin-left: 3px">


                        <textarea style="border-radius: 15px" name="description" placeholder="Enter Comments..."
                            id="description" class="@error('description') is-invalid @enderror form-control"
                            rows="5"></textarea>
                        <br>


                    </div>
                </div>
                <h6>
                    Call us now or share your details with us and we'll get back to you.
                </h6>
                <div class="row">
                    <div class="col-3">
                        <button style="margin: 10px; align-items: flex-end" type="submit" class="btn btn-success">Submit
                            Details</button>

                    </div>
                    <div class="col-9">
                        <button type="button" style="margin: 10px; align-items: flex-start" type="" class="btn btn-danger" id="num1" onclick="changenum()">View
                            Number</button>

                    </div>

                </div>

            </form>
            <br>
            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            @endif

            {{-- @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

        </div>

    </div>
    <hr>
    <div class="secdivtxt m-4" style="align-self: center">
        <h3 class="fw-bold" style="font-size: 40px; text-align: center">Find Real Estate Projects in Karachi</h3>
        <p style="text-align: center" class="fw-bold">
            Discover ongoing and completed projects on a single click
        </p>
        {{-- <p style="text-align: center">
            Our criteria to choose best investment projects
        </p> --}}
    </div>
    <meta hidden name="csrf-token" content="{{ csrf_token() }}" />
    <div class="agency-search">
        <div class="secdiv">
            <!-- ============================  SEARCH BOX START  ================================  -->
            <div class="searchdiv">
                <div class="leftSec">
                    <span>
                        <!-- <RiSearch2Line fontSize="26px" /> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </span>
                    <!-- search field start  -->
                    <div>
                        <input id="keyword" type="text" placeholder="Search area or project name" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="secdivtxt m-4" style="align-self: center">
        <h4 class="fw-bold" style="font-size: 40px; text-align: center">Projects</h4>

    </div> --}}
    {{-- <div class="mapCardContainer ">
        <div class="container-fluid">

            <div class="row px-2">
                <div class="col-12">

                    @include('layouts.featuredproject')
                </div>

            </div>
        </div>


    </div> --}}
    <h6 id="total" style="margin-right: 30px" class="text-end fw-bold">Showing {{ $projects->total() }} Results</h6>
    <div id="list">
        @include('layouts.investproject')

    </div>
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
                            <h5 style="text-align: start" class="___class_+?57___">
                                Popular Location For Houses
                                <hr>
                            </h5>
                        </div>


                    </div>

                    <br>
                    <div class="row " style=" text-align: center">
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
    <script>
        function show(text) {
            if (text == 'IP1') {

                $("#bkg1").css("background-color", "#007bff");
                $("#txt1").css("color", "white");
                $("#bkg3").css("background-color", "white");
                $("#txt3").css("color", "black");
                $("#bkg2").css("background-color", "white");
                $("#txt2").css("color", "black");

            }
            if (text == 'IP2') {
                $("#bkg2").css("background-color", "#007bff");
                $("#txt2").css("color", "white");
                $("#bkg1").css("background-color", "white");
                $("#txt1").css("color", "black");
                $("#bkg3").css("background-color", "white");
                $("#txt3").css("color", "black");

            }
            if (text == 'IP3') {
                $("#bkg3").css("background-color", "#007bff");
                $("#txt3").css("color", "white");
                $("#bkg2").css("background-color", "white");
                $("#txt2").css("color", "black");
                $("#bkg1").css("background-color", "white");
                $("#txt1").css("color", "black");

            }



            $('#cross1').show();
            $('#form').show();
            $('#text').html(text);


        }

        function hide() {
            $('#form').hide();
            $('#cross1').hide();
            $("#bkg3").css("background-color", "white");
            $("#txt3").css("color", "black");
            $("#bkg2").css("background-color", "white");
            $("#txt2").css("color", "black");
            $("#bkg1").css("background-color", "white");
            $("#txt1").css("color", "black");
            $("#num1").html('View Number');

            // $('#cross2').hide();
            // $('#cross3').hide();

        }
        $('#keyword').on('keyup', function() {
            var value = $(this).val();
            $('#list').addClass('animate__animated animate__fadeOut');

            console.log(value);
            ajaxSearch(value)
        });
        function ajaxSearch(value) {
        $.ajax({
            type: "POST",
            url: "invest/ajax",
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                keyword: value,
            },
            success: function(responese) {
                // console.log(responese.pagination)
                $('#list').removeClass('animate__animated animate__fadeOut');

                // console.log(responese.pagination)
                $('#list').html(responese.data);
                $('#list').addClass('animate__animated animate__fadeIn');
                $('#wow').html(responese.pagination);
                $('#total').html('Showing ' + responese.total + ' Results');
            },
        });
        }

        //   {{-- ajaxSearch --}}
        //   {{-- ajaxPagination --}}
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            value = $('#keyword').val();
            var href = $(this).attr('href');
            // var page = $(this).attr('href').split('page=')[1];
            $('#list').addClass('animate__animated animate__fadeOut');
            ajaxSearch(value)
        });
        function changenum() {
            $("#num1").html('03302244288')
        }

    </script>




    {!! JsValidator::formRequest('App\Http\Requests\InvestFormRequest') !!}


@endsection
