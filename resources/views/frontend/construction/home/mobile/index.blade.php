@extends('layouts.mobile.master')

@section('style')

    <link rel="stylesheet" href="{{ asset('styles/contruction/homemob.css') }}">
@endsection


@section('content')
    <!-- MOBILE START -->
    <div id="mobile">
        <div class="p-3 bg-white">
            <a href="constructionSearch.html">
                <button class="searchBtn py-2 w-100 text-white rounded-2"><i class="me-2 bi bi-search"></i>Search</button>
            </a>
        </div>
        <!-- SUPPLIES start -->
        <div class="indSupplies">
            <div class="fdiv">
                <div class="top">
                    <p>Construction Materials</p>
                    <p>
                        <a href="{{ route('construction.bcatlist', ['acategory' => $bcategories[0]->category->slug]) }}"
                            class="text-decoration-none t">
                            View All
                        </a>
                    </p>
                </div>
                <div class="sdiv">
                    <ul class="main_ul" style="padding-left: 0rem">
                        @foreach ($bcategories as $item)
                            @unless($item->storeproduct->isEmpty())

                                <li>
                                    <div>
                                        <!-- card start -->
                                        <a href="{{ route('construction.bcat', ['acategory'=>$item->category->slug,'bcategory' => $item->slug]) }}"
                                            class="card_main_div text-decoration-none text-dark text-decoration-none">
                                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/bcategories/{{ $item->image }}"
                                                class="propertyImg" alt="" />
                                            <p class="mb-0 fw-bold text-black">{{ $item->name }}</p>
                                            <ol class="list-group">
                                                @foreach ($item->subcategories as $i => $subItem)
                                                    @if ($i < 6)
                                                        <li class="small mb-0">{{ $subItem->name }}</li>
                                                    @endif
                                                @endforeach
                                            </ol>
                                        </a>
                                        <!-- card end -->
                                    </div>
                                </li>
                            @endunless
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!-- SUPPLIES end -->

        <!-- NEW PRODUCTS start -->
        <div class="indSupplies mt-4">
            <div class="fdiv">
                <div class="top">
                    <p>New Product</p>
                    <p>
                        View All
                    </p>
                </div>
                <div class="sdiv">
                    <ul class="main_ul" style="padding-left: 0rem;">
                        @foreach ($store as $item)
                            @foreach ($item->randomproduct(1) as $key => $item)
                                <li>
                                    <div>
                                        <!-- card start -->
                                        <a href="{{ route('construction.singleproduct', ['store' => $item->store->slug, 'product' => $item->product->slug]) }}"
                                            class="card_main_div text-decoration-none text-dark text-decoration-none">
                                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                                class="propertyImg" alt="" />
                                            <p class="mb-0 fw-bold text-black"> {{ $item->store->name }} </p>
                                            <div class="list-group">
                                                <h6 class="fw-bold mb-0">{{ $item->product->name }}</h6>
                                                <h6 class="fw-bold">Rs: {{ $item->product->price }}</h6>
                                            </div>
                                        </a>
                                        <!-- card end -->
                                    </div>
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- NEW PRODUCTS end -->

    </div>
    <!-- MOBILE END -->
@endsection


@section('personalscripts')

@endsection
