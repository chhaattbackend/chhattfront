@extends('layouts.mobile.master')
@section('style')
    <title>Find Out Best Properties in {{ @$inputcity_name }}, Pakistan | Chhatt.com</title>
    <meta name="title" content="Find Out Best Properties in {{ @$inputcity_name }}, Pakistan | Chhatt.com">
    <meta name="description"
        content="Browse the best properties in {{ @$inputcity_name }}, Pakistan. Find the latest apartments, plots, houses and commercial properties at leading property portal Chhatt.com.">
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/properties.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/index.css') }}" />
    <style>
        .help-block {
            color: red
        }
    </style>
    {{-- <style>
        li.page-item {
            display: none;
        }

        .page-item:first-child,
        .page-item:nth-child(2),
        .page-item:nth-last-child(2),
        .page-item:last-child,
        .page-item.active,
        .page-item.disabled {
            display: block;
        }
        }

    </style> --}}
@endsection
@section('content')
    <div class="secdivtxt m-4" style="align-self: center">
        <h5 class="fw-bold" style="font-size: 30px; text-align: center">Best Investment In Pakistan</h5>
        <p style="text-align: center">
            100% refundable, safe and secure investments
            Our criteria to choose best investment projects
        </p>

    </div>
    <hr>
    <h4 class="fw-bold" style="margin-left: 67px; font-size: 25px;margin-bottom: 10px">
        Investment Products
    </h4>
    <div class="row justify-content-center" style="margin-right: 30px">
        <div class="col-3">
            <button style="background: white; border: white" onclick="show('IP1')">

                <div class="card card-1" style="border-radius: 25px; width: 70px;" id="bkg1">
                    <h5 style="font-size: 25px; padding: 15px; margin-top: 5px" id="txt1">
                        IP1
                    </h5>

                </div>
            </button>


        </div>

        <div class="col-3">
            <button style="background: white; border: white" onclick="show('IP2')">

                <div class="card card-1" style="border-radius: 25px; width: 70px;" id="bkg2">
                    <h5 style="font-size: 25px; padding: 15px; margin-top: 5px" id="txt2">
                        IP2
                    </h5>

                </div>
            </button>

        </div>
        <div class="col-3">
            <button style="background: white; border: white" onclick="show('IP3')">

                <div class="card card-1" style="border-radius: 25px; width: 70px;" id="bkg3">
                    <h5 style="font-size: 25px; padding: 15px; margin-top: 5px; text-align: center" id="txt3">
                        GI
                    </h5>
                </div>
            </button>
        </div>
    </div>
    <form action="{{ route('contact.form1') }}" method="POST" class="p-3 m-3  " id="form"
        style="border-radius: 18px; display: none; outline: 10px; box-shadow: 12px 12px 20px #edf1f3ad, -12px -12px 20px rgba(221, 233, 233, 0.637); ">
        @csrf
        <div class="row">
            <div class="col-9">

                <p id="text">
                    We provide projects for you to invest

                </p>
            </div>
            <div class="col-3" style="">

                <button type="button" style="background: white; border: white; margin-left: 20px;" onclick="hide()">
                    <div class="card1 card-1" style="border-radius: 40px; display: none" id="cross1">
                        <h5 style="font-size: 25px; padding: 2px;  text-align: center">
                            x
                        </h5>
                    </div>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="name">Name</label>
                <input style="border-radius: 10px" type="text" class="form-control @error('name') is-invalid @enderror"
                    id="name" placeholder="Name" name="name" >
                <input type="hidden" name='lead_from' value="invest">
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <label for="inputEmail4">Email</label>
                <input style="border-radius: 10px" type="email"  name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="Email" >
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <label for="phone">Phone Number</label>
                <input style="border-radius: 10px" type="number" name="phone" class="form-control  @error('phone') is-invalid @enderror" id="phone" placeholder="Phone"
                    >

            </div>

        </div>
        <div class="row w-auto">
            <h6>
                <label for="description">Enter Comments</label>
                <br>
            </h6>

            <div class="row">
                <div class="col-12 mb-2">
                    <textarea  style="border-radius: 15px" name="description" placeholder="Enter Comments..."
                        id="description" class="@error('description') is-invalid @enderror form-control"
                        rows="4"></textarea>
                </div>
            </div>
        </div>
        <h6>
            Call us now or share your details with us and we'll get back to you.
        </h6>
        <br>
        <div class="row m-auto">
            <div class="col-6">
                <button type="submit" class="btn btn-success m-auto">Submit
                    Details</button>

            </div>
            <div class="col-6">
                <button type="" class="btn btn-danger m-auto">View
                    Number</button>

            </div>

        </div>

    </form>

    @if (Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
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
    <br>
    <br>
    <br>
    <br>
    <br>

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

            // $('#cross2').hide();
            // $('#cross3').hide();

        }
    </script>


{!! JsValidator::formRequest('App\Http\Requests\InvestFormRequest') !!}
@endsection
