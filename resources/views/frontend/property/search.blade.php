@extends('layouts.master')


@section('style')
    <link rel="stylesheet" type="text/css" href="./styles/home/home.css" />
    <link rel="stylesheet" type="text/css" href="./styles/property/properties.css" />
@endsection

@section('headercontent')
    <div class="mn_div">
          <div class="backg">
            <div class="backg_sdiv">
              <h1>Find the best properties from top locations</h1>
              <div class="main_bar">

              </div>
            </div>
          </div>
        </div>
@endsection




@section('content')

    <!-- agency search start -->
    <div>
        <div class="agency-search">
            <div class="secdiv">
                <!-- ============================  SEARCH BOX START  ================================  -->
                {{-- <h3>Agencies Search</h3> --}}
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
                <div class="d-flex flex-column mt-4">
                    <div class="d-flex justify-content-between">
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="" id="">
                            <option value="">Karachi</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- agency search end -->

    <!-- AGENCIES START -->
    <!-- propertylist start -->
    <div id="bestProperty" class="propertylist mapCardContainer">
        <h6 class="text-end fw-bold">Showing {{ $properties->total() }} Results</h6>
        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid px-0">
                <div class="row">
                   @include('frontend.property.list')
                </div>

                <div class="d-flex justify-content-center">
                  {{ $properties->links() }}
                </div>

                <br />
                <hr class="bg-dark" />
                <br />
            </div>



        </div>
        <!--  PROPERTY CARD START  -->
    </div>

@endsection
