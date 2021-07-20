@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/ccat1.css') }}" />

@endsection


@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                    <h1 class="fw-bold">{{ $bcategories[0]->category->name }}</h1>
            </div>
        </div>
    </div>
@endsection



@section('content')
    @foreach ($bcategories as $item)
    @unless ($item->storeproduct->isNotEmpty())
    <div id="serch_option_show" class="main_div_list">
        <div class="mainList1">
            <div id="main_List{{$item->id}}" class="lst_div d-flex" style="height: 220px; overflow: hidden;">
                <div class="litsdj col-md-2 pt-2 mt-4">
                    <div class="list1_div1">
                        <a href="">
                            <img class="rounded"
                                src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/name"
                                width="115px" height="115px" alt="" />
                        </a>
                    </div>
                    <div class="list1_div2">
                        <h6>
                            <br>
                            name
                        </h6>
                        <p>(name)</p>

                    </div>
                </div>

                <div class="list row m-auto flex-wrap">

                    <div class="lit1 col-md-3 p-0  mt-4">
                        <div class="list1_div1">
                            <a href="">

                                <img class="rounded"
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/"
                                    width="115px" height="115px" alt="" />
                            </a>
                        </div>
                        <div class="list1_div2">
                            <h6 class="ellipse">
                                <br>
                                name
                            </h6>
                            <p>

                                (name)

                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        {{-- @if ($count > 5)
        <button onclick="changewidth({{ $item->id }})" class="btns">
            View More
        </button>
        <input hidden type="text" id="view_more{{ $item->id }}" value="true">
        @endif --}}
    </div>
    @endunless


    @endforeach


@endsection



@section('personalscripts')



    <script src="{{ asset('js/b_cat.js') }}">


    </script>
@endsection
