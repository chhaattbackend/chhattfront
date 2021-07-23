@extends('layouts.mobile.master')

@section('style')
    <meta name="robots" content="noindex"/>
    <link rel="stylesheet" href="{{ asset('mobile/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/ccatmob.css') }}">
@endsection


@section('content')
    <!-- MOBILE START -->

    @foreach ($bcategories as $bcat)
        <div class="best_main_div">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $bcat->name }}</h2>
                </div>
                <hr>
            </div>
        </div>
        @foreach ($bcat->subcategories as $ccat)
            @unless($ccat->storeproduct->isEmpty())
                <div class="best_main_div" style="margin-top: 0px">
                    <div class="fdiv">
                        <div class="sdiv">
                            <ul style="padding-left: 0rem;">
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
                                @foreach ($ccat->subcategories as $dcat)
                                    @unless($dcat->storeproduct->isEmpty())
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
                                    @endunless
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endunless
        @endforeach
    @endforeach
    <br><br>
    <!-- MOBILE END -->
@endsection
@section('personalscripts')

@endsection
