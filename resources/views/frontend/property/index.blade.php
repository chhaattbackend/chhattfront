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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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


                <div id="list" class=" row px-2">
                    @include('frontend.property.list')
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


            // $.ajax({
            //     type: "get",
            //     url: "/property",
            //     dataType: 'JSON',
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     data: {
            //         type: type

            //     },
            //     success: function(responese) {
            //         // $('#tick').show();
            //         // setTimeout(function() {
            //         //     $('#tick').hide();
            //         // }, 3000);
            //         // alert("#visit_date".id)
            //         // alert(date)
            //         // console.log(responese.data);

            //         $('#list').html(responese.data);

            //         // $("#visit_date"+id).text(date);
            //         // $("#visit_date" + id).text('{{ date('D, d-m-Y', strtotime('responese.date')) }}');
            //         // // $("#visit_date" + id).color('green');
            //         // $("#visit_date2" + id).show();
            //         // $("#visit_date2" + id).text('{{ date('h:i A', strtotime('responese.date')) }}');






            //         // setTimeout(function(){ $("#tick").css("display", "block"); },2000);
            //     },
            // });

            axios.get('/property')
                .then(function(response) {
                    // handle success

                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                })
                .then(function() {
                    // always executed
                });
        }

    </script>

@endsection
