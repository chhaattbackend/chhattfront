@extends('layouts.master')
@section('style')
    <title>Beautiful {{ @$properties->size }} {{ @$properties->size_type }} {{ @$properties->property_type }} {{ @$properties->property_for }} In {{ @$properties->areaOne->name }} {{ @$properties->areaTwo->name }} {{ $properties->areaOne->city->name }} | Chhatt.com</title>
    <meta name="title" content="Beautiful {{ @$properties->size }} {{ @$properties->size_type }} {{ @$properties->property_type }}{{ @$properties->property_for }} In {{ @$properties->areaOne->name }} {{ @$properties->areaTwo->name }} {{ $properties->areaOne->city->name }} | Chhatt.com">
    <meta name="description"
        content="Find the {{ @$properties->size }} {{ @$properties->size_type }} {{ @$properties->property_type }} {{ @$properties->property_for }} In {{ @$properties->areaOne->name }} {{ @$properties->areaTwo->name }} {{ $properties->areaOne->city->name }}. Chhatt.com provides you luxury apartments, flats and properties at best prices.">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/property/single.css') }}" />
    <!-- EXTERNAL LINKS START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- image gallery start -->
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Fotorama from CDNJS, 19 KB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <!-- image gallery end -->
    <!-- EXTERNAL LINKS END -->
@endsection
@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h2 class="fw-bolder">Beautiful {{ @$properties->size }} {{ @$properties->size_type }}
                    {{ @$properties->property_type }} {{ @$properties->property_for }} in
                    {{ @$properties->areaOne->name }} {{ @$properties->areaTwo->name }} </h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- breadcrumbs start -->
    <div class="breadcrumbs_main_div">
        <div class="inner_div">
            <div class="breadcrum_none" style="color: black;font-size: 13px;font-weight: bold ">
                <a style="" href="{{ route('home') }}" title="Chhatt"> Chhatt </a> >
                <a title=""
                    href="{{ route('property.search', ['city' => $properties->areaOne->city->name]) }}">{{ $properties->areaOne->city->name }}
                </a> >
                <a title=""
                    href="{{ route('property.search', ['area_type' => $properties->type, 'city' => $properties->areaOne->city->name]) }}">
                    {{ @$properties->type }} </a> >
                <a title=""
                    href="{{ route('property.search', ['property_type' => $properties->property_type, 'city' => $properties->areaOne->city->name]) }}">
                    {{ @$properties->property_type }} </a> >
                <a title=""
                    href="{{ route('property.search', ['property_for' => $properties->property_for, 'city' => $properties->areaOne->city->name]) }}">
                    {{ @$properties->property_for }} </a> >
                <a title="" href="{{ route('property.search', ['search_areas' => 'a1-' . $properties->areaOne->id]) }}">
                    {{ $properties->areaOne->name }} </a> >

                <a title="" href="{{ route('property.search', ['search_areas' => 'a2-' . $properties->areaTwo->id]) }}">
                    {{ $properties->areaTwo->name }} </a> >
                <a disabled> {{ @$properties->property_type }} {{ @$properties->property_for }} in
                    {{ @$properties->areaOne->name }} {{ @$properties->areaTwo->name }} </a>


                &nbsp;
            </div>
            <div class="share_div">

                <!--  <button>
                                                                                                                    <MdFavoriteBorder /> Favorite
                                                                                                                  </button>  -->
                <!--  <button>Print</button>  -->
            </div>
        </div>
        <hr />
    </div>
    <!-- breadcrumbs end -->
    <!-- image gallery start -->
    <div class="container-fluid">
        <div class="image_gallery_maindiv row mx-auto">
            <div class="col-8">
                <div class="slider">
                    <div class="mapImage">
                        {{-- <h3> Hello world </h3> --}}
                        <!-- Add images to <div class="fotorama"></div> -->
                        <div class="fotorama mt-5" data-nav="thumbs" data-width="100%" data-allowfullscreen="true">
                            <!-- ↑ The same as data-ratio="4/3"  or data-ratio="1.3333333333". -->
                            {{-- @dd($propertyimage) --}}
                            @foreach ($propertyimage as $item)

                                <a href="">
                                    <img src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ $item->name }}"
                                        width="130" height="96">
                                </a>
                            @endforeach
                        </div>
                        <!-- Add images to <div class="fotorama"></div> -->
                    </div>

                    <!-- OVERVIEW START -->
                    <div class="overViewContainer">
                        <h3>Overview</h3>
                        <div class="overviewItems">
                            <div>
                                <h5>Type</h5>
                                <h4>
                                    {{ @$properties->property_type }}
                                </h4>
                            </div>
                            <span></span>
                            <div>
                                <h5>Price</h5>
                                <h4>
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
                                    {{ convert_rupee(@$properties->price) }} </h4>
                            </div>
                            <span></span>
                            <div>
                                <h5>Area</h5>
                                <h4>
                                    {{ @$properties->size }} {{ @$properties->size_type }}
                                </h4>
                            </div>
                            <span></span>
                            <div>
                                <h5>Purpose</h5>
                                <h4>
                                    {{ @$properties->property_for }}
                                </h4>
                            </div>
                            <span></span>
                            <div>
                                <h5>Bedroom(s)</h5>
                                <h4>
                                    {{ @$properties->bed }}
                                </h4>
                            </div>
                            <span></span>
                            <div>
                                <h5>Bath(s)</h5>
                                <h4>
                                    {{ @$properties->bath }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- OVERVIEW END -->
                    <!-- DESCRIPTION START -->
                    <div class="descriptionContainer">
                        <h3> Description </h3>
                        <p>{{ @$properties->size }} {{ @$properties->size_type }} {{ @$properties->property_type }}
                            {{ @$properties->property_for }} for {{ convert_rupee(@$properties->price) }} in
                            {{ @$properties->areaOne->name }},{{ @$properties->areaOne->city->name }} </p>
                    </div>
                    <!-- DESCRIPTION END -->

                    <!-- MAP START -->
                    <div class="mapContainer">
                        <h3> Google Map </h3>
                        <style>
                            #map {
                                height: 400px;
                                /* The height is 400 pixels */
                                width: 100%;
                                /* The width is the width of the web page */
                            }

                        </style>
                        <div>
                            <input hidden id="latitude" type="text" name="" value="{{ $properties->latitude }}">
                            <input hidden id="longitude" type="text" name="" value="{{ $properties->longitude }}">
                            <div id="map"></div>
                        </div>
                    </div>
                    <!-- MAP END -->
                </div>
            </div>


            <!-- {/* HIDDEN FOR MAP PAGE START */} -->

            <!--  HIDDEN FOR MAP PAGE END  -->
            <div class="col-4">
                <div class="formContainer">
                    <!--  HIDDEN FOR MAP PAGE START  -->
                    <div class='saleTagContainer'>
                        <h2>
                            {{ @$properties->property_type }} {{ @$properties->property_for }} in
                            {{ @$properties->areaOne->name }}
                        </h2>
                        <h2>
                            PKR {{ @convert_rupee($properties->price) }}
                        </h2>
                        <p>
                            {{ @$properties->address }}
                        </p>
                    </div>
                    <br />
                    <!--  HIDDEN FOR MAP PAGE END  -->
                    <div class="contactContainer">
                        <h2>Contact Us</h2>
                        <div class="Style_contactUser__3SauW">
                            {{-- {{ $properties->user }} --}}
                            @if ($properties->user->thumbnail != null)
                                <div style="text-align: center">
                                    <img width="60px" height="60px" style="border-radius: 50px"
                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $properties->user->thumbnail !!}"
                                        alt="{{ $properties->user->name }}">
                                    <h5 class="pt-2 pb-1">{!! $properties->user->name !!} </h5>
                                </div>

                            @else
                                <div style="text-align: center">
                                    <img width="60px" height="60px" style="border-radius: 50px"
                                        src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"
                                        alt="M Akhlaq Khan">
                                    <h5 class="pt-2 pb-1">{!! $properties->user->name !!} </h5>
                                </div>
                            @endif

                        </div>

                        <input hidden type="text" id="numberrrr" value="{{ @$properties->user->phone }}">
                        <Button class="showNumber ripple" onclick="chnagenumb()">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                class="text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                style="font-size: 14px;">
                                <path
                                    d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z">
                                </path>
                            </svg> <span id="changethis">Call Now</span>
                        </Button>
                        <hr />
                        <div class="innerContactform">
                            <form action="{{ route('contact.form') }}" method="POST">
                                @csrf
                                <input type="hidden" name='agent_id' value="{!! $properties->user->agent->id !!}">
                                <input type="hidden" name='lead_from' value="property">
                                <input class="inpC @error('name') is-invalid @enderror" type="text" name="name"
                                    placeholder="Name" required />
                                <br />
                                <input class="inpC mt-4 @error('email') is-invalid @enderror" type="email" name="email"
                                    placeholder="Email" required />
                                <br />
                                <div class="phone_inp">
                                    <input class="inpC mt-4" type="number" name="phone" placeholder="Phone" />
                                    <div class="flag d-flex">
                                      <img src="https://cdn.britannica.com/46/3346-004-D3BDE016/flag-symbolism-Pakistan-design-Islamic.jpg"
                                        alt="">
                                      <h6>+92</h6>
                                    </div>
                                  </div>
                                <textarea required name="description" class="@error('description') is-invalid @enderror"
                                    rows="5">I saw your ad on Chhatt.com (چھت).&#013;I am interested in your property {!! $properties->id !!} Please do give reference of Chhatt.com to the Realtor/Property Owner</textarea>
                                <br />

                                <Button type="submit" style="background: #4391f7;border-radius: 4px">
                                    <MdEmail class="text-white" style="font-size: 17px" />
                                    &nbsp;Submit
                                </Button>
                            </form>
                        </div>
                    </div>

                    <br />
                    @error('description')
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
                    @enderror
                    <!--  <LoginForm />  -->
                </div>
            </div>
        </div>
    </div>
    <!-- BEST PROPERTY START -->
    <div class="relatedProperties">
        <br />
        <hr />
        <div class="d-flex justify-content-between">
            <h2 class="fw-bold">Related Properties</h2>
            <div class="d-flex">

                <div class="ms-4">

                    <a href="{{ route('property.search', ['city' => $properties->areaOne->city->name,'area_type' => $properties->type]) }}">
                    <button class="themebtn2 px-3 py-1 ms-1" type="submit">

                        View all</button>
                    </a>
                </div>

            </div>
        </div>
        <div class="position-relative mt-2">
            <div class="sliderBtnLeft text-right m-auto">
                <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
            </div>
            <!--image allary list-->
            <ul id="box-wrapper" class="boxWrapper ps-0 py-4">
                <!--apply loop on this li-->
                @include('frontend.property.relatedlist')

            </ul>
            <div class="sliderBtnRight col-1 m-auto">
                <i class="scroll-right bi bi-arrow-right-circle-fill"></i>
            </div>
        </div>
    </div>
    <!-- BEST PROPERTY END -->
    <!-- EXTERNAL LINKS START -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="assets/js/index.js"></script>
    <!-- EXTERNAL LINKS END -->

@endsection


@section('personalscripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAdMS03mAk6qDSf4HUmZmcjvSkiSN7jIU&callback=initMap&libraries=&v=weekly"
        async>
    </script>
    <script>
        $(document).ready(function() {
            var lat = $('#latitude').val();
            var lng = $('#longitude').val();
            var a = parseFloat(lat);
            var b = parseFloat(lng);
            // console.log(a)
            mappp(a, b);

        });


        function mappp(latitude, longitude) {
            // console.log(latitude)
            // console.log(longitude)

            const uluru = {
                lat: latitude,
                lng: longitude
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }

        function chnagenumb() {

            var number = $('#numberrrr').val();
            $('#changethis').html(number)
        }
    </script>
@endsection
