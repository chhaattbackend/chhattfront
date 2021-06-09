@extends('layouts.master')

@section('headercontent')
    <div class="mn_div">
        <div class="backg">
            <div class="backg_sdiv">
                <h1>Search Your Desire Property</h1>
                <div class="main_bar">

                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <br>
    <hr>
    <br>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <div id="bestProperty" class="propertylist">
        <div class="secdiv">
            <div class="secdivtxt">
                <h3 class="fw-bold">Best properties for you</h3>
            </div>
            <div class="sul">
                <ul>
                    <li title="All" class="active_bestProperties" id="allBtn">
                        <button>All</button>
                    </li>
                    <li title="Residential" id="resBtn">
                        <button variant="contained">Residential</button>
                    </li>
                    <li title="Commercial" id="comBtn">
                        <button>Commercial</button>
                    </li>
                    <li title="Industrial" id="indBtn">
                        <button>Industrial</button>
                    </li>
                    <li title="View all" class="viewall">
                        <button>View all</button>
                    </li>
                </ul>
            </div>
        </div>
        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid">
                <div class="row px-2">
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer">
                                    <div class="mt-1">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="lightColor">Residential</h6>
                                            <h6 class="lightColor">an hour ago</h6>
                                        </div>
                                        <div class="mt-2">
                                            <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                        </div>
                                        <h6 class="mt-2">
                                            <strong>
                                                Rs: 1.2 Cr.
                                            </strong>
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <button class="w-100 themebtn py-1 text-white">View more</button>
                                        <button class="w-100 ms-3">Contact Us</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer">
                                    <div class="mt-1">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="lightColor">Residential</h6>
                                            <h6 class="lightColor">an hour ago</h6>
                                        </div>
                                        <div class="mt-2">
                                            <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                        </div>
                                        <h6 class="mt-2">
                                            <strong>
                                                Rs: 1.2 Cr.
                                            </strong>
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <button class="w-100 themebtn py-1 text-white">View more</button>
                                        <button class="w-100 ms-3">Contact Us</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer">
                                    <div class="mt-1">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="lightColor">Residential</h6>
                                            <h6 class="lightColor">an hour ago</h6>
                                        </div>
                                        <div class="mt-2">
                                            <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                        </div>
                                        <h6 class="mt-2">
                                            <strong>
                                                Rs: 1.2 Cr.
                                            </strong>
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <button class="w-100 themebtn py-1 text-white">View more</button>
                                        <button class="w-100 ms-3">Contact Us</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer">
                                    <div class="mt-1">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="lightColor">Residential</h6>
                                            <h6 class="lightColor">an hour ago</h6>
                                        </div>
                                        <div class="mt-2">
                                            <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                        </div>
                                        <h6 class="mt-2">
                                            <strong>
                                                Rs: 1.2 Cr.
                                            </strong>
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <button class="w-100 themebtn py-1 text-white">View more</button>
                                        <button class="w-100 ms-3">Contact Us</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                </div>
            </div>
        </div>
        <!--  PROPERTY CARD START  -->
    </div>
    @include('layouts.agency')
    @include('layouts.explorer')
    @include('layouts.featuredproject')
    <script>
        function getListdata(type) {
            console.log(type);
            if (type === 'All') {

            }

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
