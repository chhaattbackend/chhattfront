@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/ccat1.css') }}" />
@endsection


@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                {{-- @if ($ccategories == null)
                    <h1>No Item</h1>
                @else
                    <h1>{{ $ccategories[0]->category->name }}</h1>
                @endif --}}
            </div>
        </div>
    </div>
@endsection



@section('content')
    @foreach ($ccategories as $key => $ccat)
        @if ($ccat->storeproduct->isNotEmpty())
            <div id="serch_option_show" class="main_div_list">
                <div class="mainList1">
                    <div id="main_List" class="lst_div d-flex" style="height: 220px; overflow: hidden;">
                        <div class="litsdj col-md-2 pt-2 mt-4">
                            <div class="list1_div1">
                                <a href="">
                                    <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $ccat->image }}"
                                        width="115px" height="115px" alt="" />
                                </a>
                            </div>
                            <div class="list1_div2">
                                <h6>
                                    <br>
                                    {{ $ccat->name }}
                                </h6>
                                <p>(1)</p>
                            </div>
                        </div>

                        <div class="list row m-auto flex-wrap">
                            @foreach ($ccat->subcategories as $dcat)
                                @if ($dcat->storeproduct->isNotEmpty())
                                    <div class="lit1 col-md-3 p-0  mt-4">
                                        <div class="list1_div1">
                                            <a href="">
                                                <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $dcat->image }}"
                                                    width="115px" height="115px" alt="" />
                                            </a>
                                        </div>
                                        <div class="list1_div2">
                                            <h6 class="ellipse">
                                                <br>
                                               {{$dcat->name}}
                                            </h6>
                                            <p>({{ $dcat->storeproduct->count() }})</p>
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        </div>
                    </div>
                </div>
                {{-- @if ($count > 4)
            <button onclick="changewidth({{ $item->id }})" class="btns">
                View More
            </button>
            <input hidden type="text" id="view_more{{ $item->id }}" value="true">
             @endif --}}
            </div>
        @endif


    @endforeach
@endsection


@section('personalscripts')
    <script>
        function changewidth(id) {

            var serch_option1 = document.getElementById("main_List" + id);
            // console.log(serch_option1)

            var view1 = document.getElementById("view_more" + id);
            // console.log(view1)

            if (view1.value == 'true') {
                serch_option1.style.transition = "300ms";
                serch_option1.style.height = "auto";
                view1.value = 'false';


            } else if (view1.value == 'false') {
                // console.log('false')
                view1.value = 'true';

                serch_option1.style.transition = "300ms";
                serch_option1.style.height = "220px";
            }
            // console.log(id)

        }
    </script>
@endsection
