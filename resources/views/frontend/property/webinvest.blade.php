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
                <div class="col-4">
                    <button style="background: white" onclick="show('IP1')">

                        <div class="card card-1" style="border-radius: 40px">
                            <h5 style="font-size: 40px; padding: 18px; margin-top: 5px">
                                IP1
                            </h5>

                        </div>
                    </button>


                </div>

                <div class="col-4">
                    <button style="background: white" onclick="show('IP2')">

                        <div class="card card-1" style="border-radius: 40px">
                            <h5 style="font-size: 40px; padding: 18px; margin-top: 5px" id="h5">
                                IP2
                            </h5>

                        </div>
                    </button>

                </div>
                <div class="col-4">
                    <button style="background: white" onclick="show2()">

                        <div class="card card-1" style="border-radius: 40px">
                            <h5 style="font-size: 40px; padding: 18px; margin-top: 5px; text-align: center">
                                GI
                            </h5>
                        </div>
                    </button>

                </div>


            </div>
            <br>
            <form
                id="form" style="padding: 15px; margin-left: 20px; width: 750px;display: none; border-radius: 18px; outline: 10px; box-shadow: 12px 12px 20px #edf1f3ad, -12px -12px 20px rgba(221, 233, 233, 0.637); ">
                <p id="text">
                    We provide projects for you to invest

                </p>
                <div class="form-row" style="margin-bottom: 5px">
                    <div class="form-group col-md-4">
                        <div class="row" style="width: 700px;">

                            <div class="col-6" >
                                <label for="name">Name</label>
                                <input style="border-radius: 10px" type="name" class="form-control" id="name" placeholder="Name">

                            </div>
                            <div class="col-6">
                                <label for="inputEmail4">Email</label>
                                <input style="border-radius: 10px" type="email" class="form-control" id="inputEmail4" placeholder="Email">

                            </div>
                        </div>

                    </div>

                </div>




                <div class="form-row" style="margin-bottom: 5px; width: 700px;">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number</label>
                        <input style="border-radius: 10px" type="number" class="form-control" id="phone" placeholder="Phone">

                    </div>


                </div>
                <div class="form-group" style="margin-bottom: 10px; width: 600px; ">
                    <h6>
                        <label for="description">Enter Comments</label>
                        <br>
                    </h6>

                    <div class="row" style="height: 150px; margin-left: 3px">


                        <textarea required  style="border-radius: 15px" name="description" placeholder="Enter Comments..." id="description"
                            class="@error('description') is-invalid @enderror form-control" rows="5"></textarea>
                            <br>


                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <button style="margin: 10px; align-items: flex-end" type="submit" class="btn btn-success">Submit Details</button>

                    </div>
                    <div class="col-9">
                        <button style="margin: 10px; align-items: flex-start" type="" class="btn btn-danger">View Number</button>

                    </div>

                </div>

            </form>

        </div>

    </div>
    <script>
        function show(text) {



            $('#form').toggle();
            $('#text').html(text)


        }


    </script>






@endsection
