@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="./styles/home/home.css" />
@endsection

@section('headercontent')
    <div class="mn_div">
          <div class="backg">
            <div class="backg_sdiv">
              <h1>hello</h1>
              <div class="main_bar">

              </div>
            </div>
          </div>
        </div>
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <div class="pageContainer">

        <div class="container-fluid">
            <!-- TW CARDS START -->
            <div class="twoCards mt-5 text-center">
                <h2 class="fw-bolder">Find the Business in town</h2>
                <div class="mt-5 d-flex justify-content-center">
                    <div>
                        <div class="card1">
                            <a href="#">
                                <img src="assets/propertyhigh.webp" alt="propertyhigh">
                            </a>
                            <a href="">
                            </a>
                        </div>
                        <a class="mt-5 text-decoration-none text-dark" href="">
                            <h4 class="mt-2 fw-bold">Realtor</h4>
                        </a>
                    </div>
                    <div>
                        <div class="card2 ms-4">
                            <a href="#">
                                <img src="assets/realtorhigh.webp" alt="propertyhigh">
                            </a>
                            <a href="">
                            </a>
                        </div>
                        <a class="text-decoration-none text-dark" href="">
                            <h4 class="mt-2 fw-bold">Property</h4>
                        </a>
                    </div>
                </div>
            </div>
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
                            <button onclick="getListdata('All')" class="themebtn text-white px-3 py-1">All</button>
                            <button onclick="getListdata('Residential')" class="themebtnUnPressed px-3 py-1 ms-1">Residential</button>
                            <button onclick="getListdata('Commercial')" class="themebtnUnPressed px-3 py-1 ms-1">Commercial</button>
                            <button onclick="getListdata('Industrial')" class="themebtnUnPressed px-3 py-1 ms-1">Industrial</button>
                        </div>
                        <div class="ms-4">
                            <button class="themebtn2 px-3 py-1 ms-1">View all</button>
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

            // console.log(type);
            // if(type==='All'){

            // }

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

        function ajax() {

        }

    </script>

@endsection
