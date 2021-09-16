@extends('layouts.master')
@section('style')
    <title>Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com</title>
    <meta name="title" content="Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com">
    <meta name="description"
        content="Buy rent and sell your properties with Pakistan's best real estate portal at Chhatt.com. Find property dealers, developers and best property agents visit our website">
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
    <style>
        .help-block {
            color: red
        }
        .zoom {
            /* padding: 20px; */
            /* background-color: rgba(57, 65, 57, 0.151); */
            transition: transform .2s;
            /* Animation */
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(2.0);
            /* (150% zoom)*/
        }

    </style>

@endsection
@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Maps</h1>
            </div>
        </div>
    </div>
@endsection
@section('content')


<div class="mapImage">
    {{-- <h3> Hello world </h3> --}}
    <!-- Add images to <div class="fotorama"></div> -->
    <div class="fotorama mt-5" data-nav="thumbs" data-width="80%" data-allowfullscreen="true" style="margin-left: 18%">
        <!-- ↑ The same as data-ratio="4/3"  or data-ratio="1.3333333333". -->
        {{-- @dd($propertyimage) --}}


            <a href="">
                <img src="https://chhatt.s3.ap-south-1.amazonaws.com/maps/{{ $maps->image }}"
                    width="130" height="96">
            </a>

    </div>
    <!-- Add images to <div class="fotorama"></div> -->
</div>

@endsection
