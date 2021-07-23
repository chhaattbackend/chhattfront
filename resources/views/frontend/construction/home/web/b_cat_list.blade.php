@extends('layouts.master')

@section('style')
    <meta name="robots" content="noindex"/>
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
    @foreach ($bcategories as $bcat)
        <div id="serch_option_show" class="main_div_list" style="margin-top: 40px;">
            <div class="mainList1">
                <h1>{{ $bcat->name }}</h1>
                <hr>
            </div>
        </div>
        @foreach ($bcat->subcategories as $ccat)
            @unless($ccat->storeproduct->isEmpty())
                @php
                    $count = 0;
                @endphp
                <div id="serch_option_show" class="main_div_list" style="margin-top: 0px; !important">
                    <div class="mainList1">
                        <div id="main_List{{ $ccat->id }}" class="lst_div d-flex" style="height: 220px; overflow: hidden;">
                            <div class="litsdj col-md-2 pt-2 mt-4">
                                <div class="list1_div1">
                                    <a
                                        href="{{ route('construction.ccatproductlist', ['acategory' => $ccat->category->category->slug, 'bcategory' => $ccat->category->slug, 'ccategory' => $ccat->slug]) }}">
                                        <img class="rounded"
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $ccat->image }}"
                                            width="115px" height="115px" alt="" />
                                    </a>
                                </div>
                                <div class="list1_div2">
                                    <h6>
                                        <br>
                                        {{ $ccat->name }}
                                    </h6>
                                    <p>({{ $ccat->storeproduct->count() }})</p>
                                </div>
                            </div>

                            <div class="list row m-auto flex-wrap">
                                @foreach ($ccat->subcategories as $dcat)
                                    @unless($dcat->storeproduct->isEmpty())
                                        @php
                                            $count++;
                                        @endphp
                                        <div class="lit1 col-md-3 p-0  mt-4">
                                            <div class="list1_div1">
                                                <a
                                                    href="{{ route('construction.dcatproductlist', ['acategory' => $dcat->category->category->category->slug, 'bcategory' => $dcat->category->category->slug, 'ccategory' => $dcat->category->slug, 'dcategory' => $dcat->slug]) }}">
                                                    <img class="rounded"
                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $dcat->image }}"
                                                        width="115px" height="115px" alt="" />
                                                </a>
                                            </div>
                                            <div class="list1_div2">
                                                <h6 class="ellipse">
                                                    <br>
                                                    {{ $dcat->name }}
                                                </h6>
                                                <p>
                                                    ({{ $dcat->storeproduct->count() }})
                                                </p>
                                            </div>
                                        </div>
                                    @endunless
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @if ($count > 5)
                        <button onclick="changewidth({{ $ccat->id }})" class="btns">
                            View More
                        </button>
                        <input hidden type="text" id="view_more{{ $ccat->id }}" value="true">
                    @endif
                </div>
            @endunless
        @endforeach
    @endforeach


@endsection



@section('personalscripts')



    <script src="{{ asset('js/b_cat.js') }}">


    </script>
@endsection
