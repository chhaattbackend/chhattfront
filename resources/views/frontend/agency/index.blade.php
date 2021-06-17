@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="./styles/home/home.css" />
    <link rel="stylesheet" type="text/css" href="./styles/agency/agency.css" />
@endsection

@section('headercontent')
    <div class="mn_div">
        <div class="backg">
            <div class="backg_sdiv">
                <h1>Find the Best Real Estate Agencies</h1>
                <div class="main_bar">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />


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
                            <input id="keyword" type="text" placeholder="try Something 'Final'" />
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
        <h6 id="total" class="text-end fw-bold">Showing {{ $agencies->total() }} Results</h6>
        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid px-0">
                <div id="list" class="row">
                    @include('frontend.agency.list')

                </div>
                <div id="wow" class="justify-content-center pagination">
                    {{ $agencies->links() }}
                </div>
                <br />
                <hr class="bg-dark" />
                <br />
            </div>

        </div>
        <!--  PROPERTY CARD START  -->
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
                url: "agency/ajax" + "?page=" + page,
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    keyword: value,
                },
                success: function(responese) {


                    // console.log(responese.pagination)
                    $('#list').removeClass('animate__animated animate__fadeOut');

                    // console.log(responese.pagination)

                    $('#list').html(responese.data);
                    $('#list').addClass('animate__animated animate__fadeIn');
                    $('#wow').html(responese.pagination);
                    $('#total').html('Showing ' + responese.total + ' Results');
                },
            });
        }
        //   {{-- ajaxSearch --}}

        //   {{-- ajaxPagination --}}
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            value = $('#keyword').val();
            var href = $(this).attr('href');
            var page = $(this).attr('href').split('page=')[1];
            $('#list').addClass('animate__animated animate__fadeOut');

            // console.log(href);
            ajaxSearch(value, page)
        });

    </script>


@endsection