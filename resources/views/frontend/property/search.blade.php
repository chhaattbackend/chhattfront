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
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="property_type" id="">
                            <option selected disabled value="">Property Type </option>

                            @foreach ($propertytype as $item)
                            <option   value="{{ $item->id }}">{{ $item->name }}</option>


                            @endforeach

                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="area_type" id="">
                            <option selected disabled value="">Area Type </option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Industrial">Industrial</option>


                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="bed" id="">
                            <option selected disabled value="">Beds </option>

                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="bath" id="">
                            <option selected disabled value="">Bath </option>

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="+10">+10</option>

                        </select>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="min_price" id="">
                            <option selected disabled value="">Min Price </option>

                            <option value="500000">500,000</option>
                            <option value="1000000">1,000,000</option>
                            <option value="2000000">2,000,000</option>
                            <option value="3500000">3,500,000</option>
                            <option value="5000000">5,000,000</option>
                            <option value="6500000">6,500,000</option>
                            <option value="8000000">8,000,000</option>
                            <option value="10000000">10,000,000</option>
                            <option value="12500000">12,500,000</option>
                            <option value="15000000">15,000,000</option>
                            <option value="17500000">17,500,000</option>
                            <option value="20000000">20,000,000</option>
                            <option value="30000000">30,000,000</option>
                            <option value="40000000">40,000,000</option>
                            <option value="50000000">50,000,000</option>
                            <option value="75000000">75,000,000</option>
                            <option value="100000000">100,000,000</option>
                            <option value="250000000">250,000,000</option>
                            <option value="500000000">500,000,000</option>
                            <option value="1000000000">1,000,000,000</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="max_price" id="">
                            <option selected disabled value="">Max Price </option>

                            <option value="500000">500,000</option>
                            <option value="1000000">1,000,000</option>
                            <option value="2000000">2,000,000</option>
                            <option value="3500000">3,500,000</option>
                            <option value="5000000">5,000,000</option>
                            <option value="6500000">6,500,000</option>
                            <option value="8000000">8,000,000</option>
                            <option value="10000000">10,000,000</option>
                            <option value="12500000">12,500,000</option>
                            <option value="15000000">15,000,000</option>
                            <option value="17500000">17,500,000</option>
                            <option value="20000000">20,000,000</option>
                            <option value="30000000">30,000,000</option>
                            <option value="40000000">40,000,000</option>
                            <option value="50000000">50,000,000</option>
                            <option value="75000000">75,000,000</option>
                            <option value="100000000">100,000,000</option>
                            <option value="250000000">250,000,000</option>
                            <option value="500000000">500,000,000</option>
                            <option value="1000000000">1,000,000,000</option>
                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="area_min" id="">
                            <option selected disabled value="">Area Min </option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="1500">1500</option>
                            <option value="2000">2000</option>
                            <option value="2500">2500</option>
                            <option value="3000">3000</option>
                            <option value="3500">3500</option>
                            <option value="4000">4000</option>


                        </select>
                        <select class="py-2 w-100 px-2 mx-3 border-0" name="area_max" id="">
                             <option selected disabled value="">Area Max </option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="1500">1500</option>
                            <option value="2000">2000</option>
                            <option value="2500">2500</option>
                            <option value="3000">3000</option>
                            <option value="3500">3500</option>
                            <option value="4000">4000</option>
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
