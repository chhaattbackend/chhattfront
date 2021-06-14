@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="./styles/home/home.css" />
    <link rel="stylesheet" type="text/css" href="./styles/property/property.css" />

@endsection

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

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <div id="bestProperty" class="propertylist">
        <div class="secdiv">
            <div class="secdivtxt">
                <h3 class="fw-bold">Best properties for you</h3>
            </div>
            <div class="sul">
                <ul>
                    <li title="All" class="active_bestProperties" id="allBtn">
                        <button onclick="getListdata('All')">All</button>
                    </li>
                    <li title="Residential" id="resBtn">
                        <button onclick="getListdata('Residential')" variant="contained">Residential</button>
                    </li>
                    <li title="Commercial" id="comBtn">
                        <button onclick="getListdata('Commercial')">Commercial</button>
                    </li>
                    <li title="Industrial" id="indBtn">
                        <button onclick="getListdata('Industrial')">Industrial</button>
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
                @php
                    function convert_rupee($amount)
                    {
                        $length = strlen($amount);
                        if ($length >= 6 && $length <= 7) {
                            return round($amount / 100000, 2) . ' Lacs';
                        } elseif ($length >= 8 && $length <= 9) {
                            return round($amount / 10000000, 2) . ' Cr.';
                        } elseif ($length >= 4 && $length <= 5) {
                            return round($amount / 1000, 2) . ' K';
                        } else {
                            return 0;
                        }
                    }
                @endphp

                <div class="row px-2">
                    @foreach ($properties as $item)
                        <div class="col-sm-4 col-lg-3 mb-4">


                            <!-- property card start -->
                            <div class="propertyCard p-2">
                                <a class="text-decoration-none position-relative" href="#">

                                    <div class="imageSection">
                                        @if ($item->images != null)
                                            <img class="slideImg"
                                                src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ $item->images[0]->name }}"
                                                alt="" />
                                        @else
                                            <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                                                alt="" class="slideImg">

                                        @endif
                                    </div>
                                    <div class="text-dark paraContainer">
                                        <div class="mt-1">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="lightColor">{{ optional($item)->type }}</h6>
                                                <h6 class="lightColor">{{ optional($item)->updated_at->diffForHumans() }}
                                                </h6>
                                            </div>
                                            <div class="mt-2">
                                                <strong class="mt-5">{{ $item->property_type }} {{ $item->property_for }}
                                                    in {{ $item->areaOne->name }} {{ $item->areaTwo->name }}</strong>
                                            </div>
                                            <h6 class="mt-2">
                                                <strong>
                                                    Rs: {{ convert_rupee($item->price) }}
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
                    @endforeach
                </div>

            </div>
            <hr style="background-color: black">


            @include('layouts.featuredproject')
        </div>
        <br><br><br>
        <div class="maindiv marginTop">
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
        </div>
        <div class="mapCardContainer">

            @include('layouts.agency')

        </div>

        <!--  PROPERTY CARD START  -->

    </div>



    @include('layouts.explorer')
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
