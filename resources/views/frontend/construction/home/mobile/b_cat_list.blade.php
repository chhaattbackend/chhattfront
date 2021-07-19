@extends('layouts.mobile.master')

@section('style')
    <meta name="robots" content="noindex"/>
    <link rel="stylesheet" href="{{ asset('mobile/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/ccatmob.css') }}">
@endsection


@section('content')
    <!-- MOBILE START -->

    @foreach ($bcategories as $item)
        @php
            $wow = 0;
        @endphp

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
                <div class="best_main_div">
                    @php
                        $wow++;
                    @endphp

                    @if ($wow < 2)
                        <h3>{{ $item->category->name }}</h3>
                    @endif


                    <div class="fdiv">
                        <div class="sdiv">
                            <ul>
                                <li>
                                    <div>
                                        <a href="{{ route('construction.mainproductlist', ['ccategory' => $item->name]) }}"
                                            class="property_card_main_div text-decoration-none">
                                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $item->image }}"
                                                class="propertyImg shadow-sm" alt="" />
                                            <div class="h5 mb-1 mt-1"> {{ $item->name }} </div>
                                            <b>
                                                ({{ $countsubcat }})
                                            </b>
                                        </a>
                                    </div>
                                </li>
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
                                        <li>
                                            <div>
                                                <a href="{{ route('construction.productlist', ['dcategory' => $subItem->name, 'product' => $subItem->products[0]->id]) }}"
                                                    class="property_card_main_div_sub text-decoration-none">
                                                    <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $subItem->image }}"
                                                        class="propertyImg shadow-sm" alt="" />
                                                    <div class="h6 mb-0 mt-1"> {{ $subItem->name }} </div>
                                                    <b>
                                                        ({{ $showcatsubcat }})
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
            @php
                $countsubcat = 0;
            @endphp

        @endforeach


    @endforeach
    <!-- MOBILE END -->
@endsection


@section('personalscripts')

@endsection
