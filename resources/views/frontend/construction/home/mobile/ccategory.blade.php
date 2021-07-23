@extends('layouts.mobile.master')

@section('style')
    <meta name="robots" content="noindex"/>
    <link rel="stylesheet" href="{{ asset('mobile/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/ccatmob.css') }}">
@endsection


@section('content')
    <!-- MOBILE START -->
    <!-- FEATURED PROJECTS start -->
    <div class="best_main_div">
        <div class="fdiv">
            <h3>{{ $ccategories[0]->category->name }}</h3>
        </div>
    </div>
    @foreach ($ccategories as $ccat)
        @php
            $count = 0;
        @endphp
        @if ($ccat->storeproduct->isNotEmpty())
            <div class="best_main_div" style="margin-top: 0px">
                <div class="fdiv">
                    <div class="sdiv">
                        <ul>
                            <li>
                                <div>
                                    <a href="{{ route('construction.ccatproductlist', ['acategory' => $ccat->category->category->slug, 'bcategory' => $ccat->category->slug, 'ccategory' => $ccat->slug]) }}"
                                        class="property_card_main_div text-decoration-none">
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $ccat->image }}"
                                            class="propertyImg shadow-sm" alt="" />
                                        <div class="h5 mb-1 mt-1"> {{ $ccat->name }} </div>
                                        <b>
                                            ({{ $ccat->storeproduct->count() }})
                                        </b>
                                    </a>
                                </div>
                            </li>
                            @foreach ($ccat->subcategories as $key => $dcat)
                                @if ($dcat->storeproduct->isNotEmpty())
                                    <li>
                                        <div>
                                            <a href="{{ route('construction.dcatproductlist', ['acategory' => $dcat->category->category->category->slug, 'bcategory' => $dcat->category->category->slug, 'ccategory' => $dcat->category->slug, 'dcategory' => $dcat->slug]) }}"
                                                class="property_card_main_div_sub text-decoration-none">
                                                <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $dcat->image }}"
                                                    class="propertyImg shadow-sm" alt="" />
                                                <div class="h6 mb-0 mt-1"> {{ $dcat->name }} </div>
                                                <b>
                                                    ({{ $dcat->storeproduct->count() }})
                                                </b>
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        @endif


    @endforeach
    <br>
    <br>
    <br>


    <!-- FEATURED PROJECTS end -->

    <!-- FEATURED PROJECTS start -->

    <!-- FEATURED PROJECTS end -->
    <!-- MOBILE END -->
@endsection


@section('personalscripts')

@endsection
