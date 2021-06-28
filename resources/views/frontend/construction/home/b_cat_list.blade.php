@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/ccat.css') }}" />
@endsection


@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                @if ($bcategories->isEmpty())
                    <h1>Error</h1>
                @else
                    <h1 class="fw-bold">{{ $bcategories[0]->category->name }}</h1>

                @endif
            </div>
        </div>
    </div>
@endsection



@section('content')
    @php
    $count = 0;
    @endphp

    @foreach ($bcategories as $item)
        @php
            $count = 0;
        @endphp

        <div id="serch_option_show" class="main_div_list">
            <div class="mainList1">

                <div class="lst_div d-flex" id="mainList1">
                    <div class="litsdj col-md-2 pt-2 mt-4">
                        <div class="list1_div1">
                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/bcategories/{{ $item->image }}"
                                width="115px" height="115px" alt="" />
                        </div>
                        <div class="list1_div2">
                            <h6>
                                <br>
                                {{ $item->name }}
                            </h6>
                            <p>({{ $item->subcategories->count() }})</p>
                        </div>
                    </div>
                    @foreach ($item->subcategories as $key => $subItem)
                        @php
                            $count++;
                        @endphp
                        <div class="list row m-auto flex-wrap">

                            <div class="lit1 col-md-2 p-0 mt-4">
                                <div class="list1_div1">
                                    <a href="{{ route('construction.productlist', ['id' => $subItem->id ]) }}">
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $subItem->image }}"
                                            width="115px" height="115px" alt="" />
                                    </a>
                                </div>
                                <div class="list1_div2">
                                    <h6>
                                        {{ $subItem->name }}
                                    </h6>
                                    <p>({{ $subItem->subcategories->count() ?? 'no category' }})</p>
                                </div>
                            </div>


                        </div>
                    @endforeach
                </div>
            </div>
            @if ($count > 4)
                <button id="view_more{{ $count }}" class="btns">
                    View More
                </button>
            @endif
        </div>
    @endforeach




@endsection



@section('personalscripts')
    <script>
        var serch_option1 = document.getElementById("mainList1");
        var view1 = document.getElementById("view_more1");
        var view_more_bool1 = false
        view1.addEventListener("click", () => {
            view_more_bool1 = !view_more_bool1
            if (view_more_bool1 === true) {
                serch_option1.style.transition = "300ms";
                serch_option1.style.height = "auto";
            } else if (view_more_bool1 === false) {
                serch_option1.style.transition = "300ms";
                serch_option1.style.height = "250px";
            }
        });
    </script>
@endsection
