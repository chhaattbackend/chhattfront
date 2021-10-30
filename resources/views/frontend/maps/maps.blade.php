@extends('layouts.master')
@section('style')
    <title>Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com</title>
    <meta name="title" content="Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com">
    <meta name="description"
        content="Buy rent and sell your properties with Pakistan's best real estate portal at Chhatt.com. Find property dealers, developers and best property agents visit our website">
    <link rel="stylesheet" type="text/css" href="./styles/property/property.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">
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
            transform: scale(1.5);
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


    <div class="exp">

        <div class="container" style="padding: 2%">


            <div class="row ">
                <div style="margin-bottom: 2%; text-align: center">
                    <h4>
                       Maps For KARACHI
                        <hr>
                    </h4>

                </div>


                <div class="col-12">
                    <div class="row" style="text-align: center">
                        @foreach ($a as $item)

                            <div class="col-4 text-center py-5">
                                {{-- <a href="{{route('')}}"> --}}
                                    <h5  class="space-4">
                                        {{ $item->name }}
                                        <hr>
                                    </h5>

                                {{-- </a> --}}
                                @foreach ($item->areatwos->slice(0,7) as $item1)
                                <div class="col-10 offset-1 text-center pt-3" style="text-align: start">
                                    <a href="" class="text-decoration-none " style="font-weight: 500; color: #333;opacity: 0.6;">
                                                {{@$item1->name}}

                                            </a>
                                        </div>

                                        @endforeach

                            </div>
                        @endforeach



                    </div>

                    <br>
                 
                </div>

            </div>

        </div>
    </div>



    {{-- @livewire('map.item') --}}


    {{-- <div>
        <meta hidden name="csrf-token" content="{{ csrf_token() }}" />
        <div class="agency-search m-3 p-2">
            <div class="secdiv">
                <!-- ============================  SEARCH BOX START  ================================  -->
                <h3>Search Maps</h3>
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
                            <input id="keyword" type="text" placeholder="Search Maps" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>
            New Society Maps
        </h2>
        <div class="mapCardContainer">
            <div class="container-fluid px-0">
        <h6 id="total" class="text-end fw-bold">Showing {{ $maps->total() }} Results</h6>

                <div id="list" class="row">
                    @include('frontend.maps.list')
                </div>
                <div id="wow" class="justify-content-center pagination">
                    {{ $maps->links() }}
                </div>
                <br />
                <hr class="bg-dark" />
                <br />
            </div>
        </div>
    </div>
    <script>
         $('#keyword').on('keyup', function() {
            var value = $(this).val();
            $('#list').addClass('animate__animated animate__fadeOut');

            // console.log(value);
            ajaxSearch(value)
        });

        function ajaxSearch(value, page) {
            $.ajax({
                type: "POST",
                url: "maps/ajax",
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    keyword: value,
                },
                success: function(responese) {
                    console.log(responese)
                    $('#list').removeClass('animate__animated animate__fadeOut');

                    // console.log(responese.pagination)
                    $('#list').html(responese.data);
                    $('#list').addClass('animate__animated animate__fadeIn');
                    $('#wow').html(responese.pagination);
                    $('#total').html('Showing ' + responese.total + ' Results');
                },
            });
        }
    </script> --}}



@endsection
