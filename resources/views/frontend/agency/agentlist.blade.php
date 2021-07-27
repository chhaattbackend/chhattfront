@extends('layouts.master')

@section('style')
    <title>Realtors | Chhatt.com</title>
    <meta name="title" content="Karachi Estate Agents">

    <meta name="description"
        content="Get in touch with the best real estate agents in Karachi. And Choose yourbest properties like houses, flats, villas and commercial properties at Chhatt.com">

<link rel="stylesheet" href="{{ asset('styles/agency/agentlist.css') }}">
@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Find the Best Realtors</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="bestProperty" class="propertylist mapCardContainer mt-4">
        <h6 class="text-end fw-bold">Showing {{$members->total()}} Results</h6>
        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid px-0">

                <div class="row">
                    @foreach ($members as $item)
                    @if ($item->user != null)

                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">

                                    <img class="slideImg"

                                        @if  (@$item->user->thumbnail == null)
                                        src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"

                                        @else

                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $item->user->thumbnail !!}"
                                        @endif
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">{{$item->user->name}}</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">{{$item->agency->name}}</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    @endif

                    @endforeach

                    <div class="d-flex justify-content-center">

                        {{$members->links('pagination::simple-bootstrap-4')}}
                    </div>


                    <!-- property card end -->
                </div>
            </div>
        </div>
    </div>
@endsection

