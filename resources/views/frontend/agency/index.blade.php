@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="./styles/home/home.css" />
    <link rel="stylesheet" type="text/css" href="./styles/agency/agency.css" />
@endsection

@section('headercontent')
    <div class="mn_div">
        <div class="backg">
            <div class="backg_sdiv">
                <h1>sammer</h1>
                <div class="main_bar">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div>
        <div class="agency-search">
            <div class="secdiv">
                <!-- ============================  SEARCH BOX START  ================================  -->
                <h3>Agencies Search</h3>
                <div class="searchdiv">
                    <div class="leftSec">
                        <span>
                            <!-- <RiSearch2Line fontSize="26px" /> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </span>
                        <!-- search field start  -->
                        <div>
                            <input type="text" placeholder="try Something 'Final'" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- agency search end -->

    <!-- AGENCIES START -->
    <!-- propertylist start -->
    <div id="bestProperty" class="propertylist mapCardContainer">
        <h6 class="text-end fw-bold">Showing 2206 Results</h6>
        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid px-0">
                <div class="row">
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
                                        </div>
                                        <div class="text-start mt-2">
                                            <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                        </div>
                                        <h6 class="text-start mt-2">
                                            <strong>
                                                Rs: 1.2 Cr.
                                            </strong>
                                        </h6>
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
                                        </div>
                                        <div class="text-start mt-2">
                                            <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                        </div>
                                        <h6 class="text-start mt-2">
                                            <strong>
                                                Rs: 1.2 Cr.
                                            </strong>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    
                </div>
                <br />
                <hr class="bg-dark" />
                <br />
            </div>

        </div>
        <!--  PROPERTY CARD START  -->
    </div>


@endsection
