@extends('layouts.mobile.master2')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/single.css') }}" />
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
@endsection


@section('content')
    @include('functions.convert_rupee')
    <!-- MOBILE START -->
    <!-- SHARE BTNS START -->
    <div class="shareBtns">
        <button>
            <i class="fas fa-share"></i>
            Share
        </button>
        <button class="ms-3">
            <i class="far fa-heart"></i> Favorite
        </button>
        <button class="ms-3">
            <i class="fas fa-print"></i> Print
        </button>
    </div>
    <!-- SHARE BTNS END -->

    <div class="mapImage">
        <!-- Add images to <div class="fotorama"></div> -->
        <div class="fotorama" data-nav="thumbs" data-width="100%" data-allowfullscreen="true">
            <!-- ↑ The same as data-ratio="4/3"
                                                     or data-ratio="1.3333333333". -->
            @foreach ($propertyimage as $item)

                <a href=""><img src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ @$item->name }}" width="130"
                        height="96"></a>


            @endforeach
        </div>
        <!-- Add images to <div class="fotorama"></div> -->
    </div>

    <div class="addressMobile">
        <h3> {{ @$properties->property_type }} {{ @$properties->property_for }}
        </h3>
        <p> {{ @$properties->areaTwo->name }} {{ @$properties->areaOne->name }} </p>
    </div>

    <h1 class="priceTagMobile">PKR {{ convert_rupee(@$properties->price) }}</h1>

    <div class="overViewContainerMobile">
        <h3>Overview</h3>
        <div class="overviewItems">
            <div class="upperContent">
                <div>
                    <h5>Type</h5>
                    <h4> {{ @$properties->property_type }} </h4>
                </div><span></span>
                <div class="middle">
                    <h5>Price</h5>
                    <h4>{{ convert_rupee(@$properties->price) }} </h4>
                </div><span></span>
                <div>
                    <h5>Purpose</h5>
                    <h4> {{ @$properties->property_for }} </h4>
                </div>
            </div>
            <div class="lowerContent">
                <div>
                    <h5>Area</h5>
                    <h4>{{ @$properties->size }} {{ @$properties->size_type }}</h4>
                </div><span></span>
            </div>
        </div>
    </div>

    <div class="descriptionContainerMob">
        <h1>Description</h1>
        <div>{{ @$properties->size }} {{ @$properties->size_type }} {{ @$properties->property_type }}
            {{ @$properties->property_for }} for {{ convert_rupee(@$properties->price) }} in
            {{ @$properties->areaOne->name }},{{ @$properties->areaOne->city->name }}</div>
    </div>


    <div class="descriptionContainerMob">
        <h1>Google Map</h1>
        <div><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462116.6683976706!2d66.87527738393177!3d25.193559924293428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1624009661477!5m2!1sen!2s"
                width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>

    <div class="contactContainer">
        <h2>Contact Us</h2>
        <Button class="showNumber">
            {{ @$properties->user->phone }}

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

    <!-- bestprperty start -->
    <div class="bestprperty_main_div">
        <div class="fdiv">
            <div class="top">
                <p>Relative Properties</p>
                <p>
                    View All
                </p>
            </div>
            <div class="sdiv">
                <ul>
                    @foreach ($property as $item)
                        <li>
                            <div>

                                <a href="" class="card_main_div text-decoration-none">
                                    @if (!$item->images->isEmpty())
                                        <img class="propertyImg"
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ $item->images[0]->name }}"
                                            alt="" />
                                    @else
                                        <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                                            alt="" class="propertyImg">

                                    @endif
                                    <p class="mb-0"> {{ $item->type }} </p>
                                    <b>
                                        {{ $item->property_for }}in {{ optional($item->areaThree)->name }},
                                        {{ optional($item->areaTwo)->name }},
                                        {{ optional($item->areaOne)->name }}
                                    </b>
                                    <p>
                                        <b>
                                            @if ($item->price == null)
                                                <span style="background: red;" class="badge badge-pill badge-danger">On
                                                    Request</span>
                                            @else
                                                Rs: {{ convert_rupee($item->price) }}
                                            @endif
                                        </b>
                                    </p>
                                </a>


                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- bestprperty end -->

    <br>
    <br>
    <br>

    <div class="CEContainer"><a href="tel:923313829135"><span><svg stroke="currentColor" fill="currentColor"
                    stroke-width="0" viewBox="0 0 512 512" font-size="1.2rem" height="1em" width="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M426.666 330.667a250.385 250.385 0 0 1-75.729-11.729c-7.469-2.136-16-1.073-21.332 5.333l-46.939 46.928c-60.802-30.928-109.864-80-140.802-140.803l46.939-46.927c5.332-5.333 7.462-13.864 5.332-21.333-8.537-24.531-12.802-50.136-12.802-76.803C181.333 73.604 171.734 64 160 64H85.333C73.599 64 64 73.604 64 85.333 64 285.864 226.136 448 426.666 448c11.73 0 21.334-9.604 21.334-21.333V352c0-11.729-9.604-21.333-21.334-21.333z">
                    </path>
                </svg></span>&nbsp; Call Now</a></div>



    <!-- MOBILE END -->

@endsection
