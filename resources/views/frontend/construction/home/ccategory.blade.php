@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/ccat.css') }}" />
@endsection


@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                @if ($ccategories->isEmpty())
                    <h1>Error</h1>
                @else
                    <h1>{{ $ccategories[0]->category->name }}</h1>

                @endif
            </div>
        </div>
    </div>
@endsection



@section('content')
    <div id="websitec">
        {{-- <h2 class="centr">
            Food Flavours, Colours, Additives and Preservatives
        </h2> --}}
        <div id="serch_option_show" class="main_divcons">
            <h5>Food Colors</h5>
            <div id="mainList">


                <div class="list row m-auto">

                    @foreach ($ccategories as $item)

                        <div class="list1 col-md-3  mt-4">
                            <div class="list1_div1">
                                <img src="" width="115px" height="115px" alt="" />
                            </div>
                            <div class="list1_div2">
                                <h6>
                                    {{ $item->name }}<br /> Color
                                </h6>
                                <p>{{ $item->category->id }}</p>
                            </div>
                        </div>


                    @endforeach



                </div>
            </div>
            <button id="view_more" class="btns">
                View More
            </button>
        </div>

    </div>

@endsection



@section('personalscripts')
    <script>
        // var mobile = document.getElementById("mobile");
        var website = document.getElementById("website");
        var serch_option = document.getElementById("mainList");
        var view = document.getElementById("view_more");
        var view_more_bool = false
        view.addEventListener("click", () => {
            view_more_bool = !view_more_bool
            if (view_more_bool === true) {
                serch_option.style.height = "300px";
            } else if (view_more_bool === false) {
                serch_option.style.height = "150px";
            }
        });
    </script>
@endsection
