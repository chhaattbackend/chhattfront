@extends('layouts.master')

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
            // console.log(e);

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
                    // $('#tick').show();
                    // setTimeout(function() {
                    //     $('#tick').hide();
                    // }, 3000);
                    // alert("#visit_date".id)
                    // alert(date)
                    // console.log(responese.data);

                    $('#box-wrapper').html(responese.data);

                    // $("#visit_date"+id).text(date);
                    // $("#visit_date" + id).text('{{ date('D, d-m-Y', strtotime('responese.date')) }}');
                    // // $("#visit_date" + id).color('green');
                    // $("#visit_date2" + id).show();
                    // $("#visit_date2" + id).text('{{ date('h:i A', strtotime('responese.date')) }}');




                    // setTimeout(function(){ $("#tick").css("display", "block"); },2000);
                },
            });
        }

        function ajax() {

        }

    </script>

@endsection
