@extends('layouts.master')
@section('style')
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
                <h2 class="fw-bolder">{{ @$properties->property_type }} {{ @$properties->property_for }} in
                    {{ @$properties->areaTwo->name }} {{ @$properties->areaOne->name }}</h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- breadcrumbs start -->
    <div class="breadcrumbs_main_div">
        <div class="inner_div">
            <div class="breadcrum_none" style="color: black;font-size: 13px;font-weight: bold ">
                <a style="" href="{{route('home')}}" title="Chhatt"> Chhatt </a> >
                <a title=""
                    href="{{ route('property.search', ['city' => $properties->areaOne->city_id]) }}">{{ $properties->areaOne->city->name }}
                </a> >
                <a title="" href="{{ route('property.search', ['area_type' => $properties->type,'city' => $properties->areaOne->city_id]) }}">
                    {{ @$properties->type }} </a> >
                <a title="" href="{{ route('property.search', ['property_type' => $properties->property_type,'city' => $properties->areaOne->city_id]) }}">
                    {{ @$properties->property_type }} </a> >
                <a title="" href="{{ route('property.search', ['property_for' => $properties->property_for,'city' => $properties->areaOne->city_id]) }}">
                    {{ @$properties->property_for }} </a> >
                <a title="" href="{{ route('property.search', ['search_areas' => 'area_one_id,'.$properties->areaOne->id ]) }}">
                    {{ $properties->areaOne->name }} </a> >
                <a title="" href="{{ route('property.search', ['search_areas' => 'area_two_id,'.$properties->areaTwo->id]) }}">
                    {{ $properties->areaTwo->name }} </a> >
                <a disabled> {{ @$properties->property_type }} {{ @$properties->property_for }} in
                    {{ @$properties->areaTwo->name }} {{ @$properties->areaOne->name }} </a>


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
                            <!-- ↑ The same as data-ratio="4/3"
                               or data-ratio="1.3333333333". -->
                            @foreach ($propertyimage as $item)

                                <a href=""><img
                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ @$item->name }}"
                                        width="130" height="96"></a>


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
                        <div>
                            <iframe
                                src="https://maps.google.com/?q={{ $properties->latitude }}LATITUDE-VALUE,{{ $properties->longitude }}"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                            {{ @$properties->areaTwo->name }}
                            {{ @$properties->areaOne->name }}
                        </h2>
                        <h2>
                            {{ @convert_rupee($properties->price) }}
                        </h2>
                        <p>
                            {{ @$properties->areaOne->name }}, {{ @$properties->areaOne->city->name }}
                        </p>
                    </div>
                    <br />
                    <!--  HIDDEN FOR MAP PAGE END  -->
                    <div class="contactContainer">
                        <h2>Contact Us</h2>
                        <Button class="showNumber">
                           {{@$properties->user->phone}}
                        </Button>
                        <hr />
                        <div class="innerContactform">
                            <form>
                                <input class="inpC" type="text" placeholder="Name" />
                                <br />
                                <input class="inpC mt-4" type="text" name="email" placeholder="Email" />
                                <br />
                                <textarea rows="5"></textarea>
                                <br />
                                <Button type="submit">
                                    <MdEmail class="text-white" style="font-size: 17px" />
                                    &nbsp;Submit
                                </Button>
                            </form>
                        </div>
                    </div>

                    <br />
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
                    <button class="themebtn2 px-3 py-1 ms-1">View all</button>
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
