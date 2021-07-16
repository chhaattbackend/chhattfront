@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contruction/ccat1.css') }}" />

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

    {{-- @foreach ($bcategories as $item)
        @php
            $count = 0;
        @endphp

        <div id="serch_option_show" class="main_div_list">
            <div class="mainList1">

                <div id="main_List{{ $item->id }}" class="lst_div d-flex" style="height: 220px; overflow: hidden;">
                    <div class="litsdj col-md-2 pt-2 mt-4">
                        <div class="list1_div1 ">
                            <img class="rounded" src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/bcategories/{{ $item->image }}"
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
                    <div class="list row m-auto flex-wrap">
                        @foreach ($item->subcategories as $key => $subItem)
                            @php
                                $count++;
                            @endphp

                            <div class="lit1 col-md-3 p-0  mt-4">
                                <div class="list1_div1">
                                    <a href="{{ route('construction.productlist', ['id' => $subItem->id]) }}">

                                        <img class="rounded" src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $subItem->image }}"
                                            width="115px" height="115px" alt="" />
                                    </a>
                                </div>
                                <div class="list1_div2">
                                    <h6 class="ellipse">
                                        <br>
                                        {{ $subItem->name }}
                                    </h6>
                                    <p>({{ $subItem->subcategories->count() ?? 'no category' }})</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            @if ($count > 5)
                <button onclick="changewidth({{ $item->id }})" class="btns">
                    View More
                </button>
                <input hidden type="text" id="view_more{{ $item->id }}" value="true">
            @endif
        </div>
    @endforeach --}}


    @foreach ($bcategories as $item)

        @foreach ($item->subcategories as $item)
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

            @unless($showbcat == 0)
                <div id="serch_option_show" class="main_div_list">
                    <div class="mainList1">

                        <div id="main_List{{ $item->id }}" class="lst_div d-flex" style="height: 220px; overflow: hidden;">
                            <div class="litsdj col-md-2 pt-2 mt-4">
                                <div class="list1_div1">
                                    <img class="rounded"
                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $item->image }}"
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
                                            $count++;
                                        @endphp
                                        <div class="lit1 col-md-3 p-0  mt-4">
                                            <div class="list1_div1">
                                                <a href="{{ route('construction.productlist', ['dcategory' => $subItem->name , 'product' => $subItem->products[0]->name]) }}">

                                                    <img class="rounded"
                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $subItem->image }}"
                                                        width="115px" height="115px" alt="" />
                                                </a>
                                            </div>
                                            <div class="list1_div2">
                                                <h6 class="ellipse">
                                                    <br>
                                                    {{ $subItem->name }}
                                                </h6>
                                                <p>
                                                    @foreach ($subItem->products as $key => $p)
                                                        @if ($key == 0)
                                                            @php
                                                                $showcatsubcat = $p->storeproduct->count();
                                                            @endphp
                                                            ({{ $p->storeproduct->count() }})
                                                        @endif
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                    @endunless

                                @endforeach

                            </div>
                        </div>
                    </div>
                    @if ($count > 5)
                        <button onclick="changewidth({{ $item->id }})" class="btns">
                            View More
                        </button>
                        <input hidden type="text" id="view_more{{ $item->id }}" value="true">
                    @endif
                </div>
            @endunless
            @php
                $countsubcat = 0;
            @endphp

        @endforeach


    @endforeach




@endsection



@section('personalscripts')



    <script src="{{ asset('js/b_cat.js') }}">


    </script>
@endsection
