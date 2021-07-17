@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/ccat1.css') }}" />
@endsection


@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                @if ($ccategories->isEmpty())
                    <h1>No Item</h1>
                @else
                    <h1>{{ $ccategories[0]->category->name }}</h1>
                @endif
            </div>
        </div>
    </div>
@endsection



@section('content')

    @php
    $count = 0;
    $showbcat = 0;
    @endphp

    @foreach ($ccategories as $item)
        @php
            $count = 0;
            $showbcat = 0;
            $showcatsubcat = 0;
            $countsubcat = 0;
        @endphp
        @foreach ($item->subcategories as $key => $subItem)
            @foreach ($subItem->products as $key => $p)
                @if ($key == 0)
                    @php
                        $showbcat = $p->storeproduct->count();
                        if ($showbcat != null) {
                            $countsubcat++;
                        }
                    @endphp
                @endif
            @endforeach
        @endforeach

        <div id="serch_option_show" class="main_div_list">
            <div class="mainList1">

                <div id="main_List{{ $item->id }}" class="lst_div d-flex" style="height: 220px; overflow: hidden;">
                    <div class="litsdj col-md-2 pt-2 mt-4">
                        <div class="list1_div1">
                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $item->image }}"
                                width="115px" height="115px" alt="" />
                        </div>
                        <div class="list1_div2">
                            <h6>
                                <br>
                                {{ $item->name }}
                            </h6>
                            <p>({{ $countsubcat }})</p>
                        </div>
                    </div>
                    <div class="list row m-auto flex-wrap">
                        @foreach ($item->subcategories as $key => $subItem)
                            @php
                                $showcatsubcat = 0;
                            @endphp
                            @foreach ($subItem->products as $key => $p)
                                @if ($key == 0)
                                    @php
                                        $showcatsubcat = $p->storeproduct->count();
                                    @endphp
                                @endif
                            @endforeach
                            @unless($showcatsubcat == 0)
                                @php
                                    $countsubcat = 0;
                                @endphp
                                <div class="lit1 col-md-3 p-0  mt-4">
                                    <div class="list1_div1">
                                        <a href="{{ route('construction.productlist', ['dcategory' => $subItem->name , 'product' => $subItem->products[0]->id]) }}">

                                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $subItem->image }}"
                                                width="115px" height="115px" alt="" />
                                        </a>
                                    </div>
                                    <div class="list1_div2">
                                        <h6 class="ellipse">
                                            <br>
                                            {{ $subItem->name }}
                                        </h6>
                                        <p>({{$showcatsubcat}})</p>
                                    </div>
                                </div>
                            @endunless


                        @endforeach


                    </div>
                </div>
            </div>
            @if ($count > 4)
                <button onclick="changewidth({{ $item->id }})" class="btns">
                    View More
                </button>
                <input hidden type="text" id="view_more{{ $item->id }}" value="true">
            @endif
        </div>
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
