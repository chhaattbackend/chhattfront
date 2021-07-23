@extends('layouts.mobile.master')

@section('style')
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="{{ asset('mobile/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/mobproductlist.css') }}">
@endsection


@section('content')
    <!-- MOBILE START -->

    <div id="mobile">
        <!-- category start -->

        <div class="indSupplies mb-4">
            <div class="fdiv">
                <div class="top justify-content-center">
                    <p>Categories to explore</p>

                </div>
                <div class="sdiv">
                    <ul class="main_ul" style="padding-left: 0px">

                        @unless($which != 'ccategory')
                            @foreach ($anycategory->category->subcategories as $ccat)
                                @unless($ccat->id == $anycategory->id)
                                    @if ($ccat->storeproduct->isNotEmpty())
                                        <li>
                                            <div>
                                                <!-- card start -->
                                                <a href="{{ route('construction.ccatproductlist', ['acategory' => $ccat->category->category->slug, 'bcategory' => $ccat->category->slug, 'ccategory' => $ccat->slug]) }}"
                                                    class="card_main_div text-decoration-none text-dark text-decoration-none">
                                                    <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $ccat->image }}"
                                                        class="propertyImg" alt="">
                                                    <h6 class="text-center mb-0 mt-2 fw-bold">{{ $ccat->name }}
                                                    </h6>
                                                </a>
                                                <!-- card end -->
                                            </div>
                                        </li>
                                    @endif
                                @endunless
                            @endforeach
                            <hr style="border-left: 6px solid rgb(21, 22, 21); height: 100px;">
                            @foreach ($anycategory->subcategories as $dcat)
                                @unless($dcat->category->id == $anycategory->id)
                                    @if ($dcat->storeproduct->isNotEmpty())
                                        <li>
                                            <div>
                                                <!-- card start -->
                                                <a href="{{ route('construction.dcatproductlist', ['acategory' => $dcat->category->category->category->slug, 'bcategory' => $dcat->category->category->slug, 'ccategory' => $dcat->category->slug, 'dcategory' => $dcat->slug]) }}"
                                                    class="card_main_div text-decoration-none text-dark text-decoration-none">
                                                    <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $dcat->image }}"
                                                        class="propertyImg" alt="">
                                                    <h6 class="text-center mb-0 mt-2 fw-bold">{{ $dcat->name }}
                                                    </h6>
                                                </a>
                                                <!-- card end -->
                                            </div>
                                        </li>
                                    @endif
                                @endunless
                            @endforeach
                        @endunless

                        @unless($which != 'dcategory')
                            @foreach ($anycategory->category->category->subcategories as $ccat)
                                @if ($ccat->storeproduct->isNotEmpty())
                                    <li>
                                        <div>
                                            <!-- card start -->
                                            <a href="{{ route('construction.ccatproductlist', ['acategory' => $ccat->category->category->slug, 'bcategory' => $ccat->category->slug, 'ccategory' => $ccat->slug]) }}"
                                                class="card_main_div text-decoration-none text-dark text-decoration-none">
                                                <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $ccat->image }}"
                                                    class="propertyImg" alt="">
                                                <h6 class="text-center mb-0 mt-2 fw-bold">{{ $ccat->name }}
                                                </h6>
                                            </a>
                                            <!-- card end -->
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                            <hr style="border-left: 6px solid rgb(21, 22, 21); height: 100px;">
                            @foreach ($anycategory->category->subcategories as $dcat)
                                @unless($dcat->id == $anycategory->id)
                                    @if ($dcat->storeproduct->isNotEmpty())
                                        <li>
                                            <div>
                                                <a href="{{ route('construction.dcatproductlist', ['acategory' => $dcat->category->category->category->slug, 'bcategory' => $dcat->category->category->slug, 'ccategory' => $dcat->category->slug, 'dcategory' => $dcat->slug]) }}"
                                                    class="card_main_div text-decoration-none text-dark text-decoration-none">
                                                    <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $dcat->image }}"
                                                        class="propertyImg" alt="">
                                                    <h6 class="text-center mb-0 mt-2 fw-bold">{{ $dcat->name }}
                                                    </h6>
                                                </a>
                                            </div>
                                        </li>
                                    @endif
                                @endunless
                            @endforeach
                        @endunless

                        @unless($which != 'brand')
                            @foreach ($anycategory->category->subcategories as $ccat)
                                @if ($ccat->storeproduct->isNotEmpty())
                                    <li>
                                        <div>
                                            <a href="{{ route('construction.ccatproductlist', ['acategory' => $ccat->category->category->slug, 'bcategory' => $ccat->category->slug, 'ccategory' => $ccat->slug]) }}"
                                                class="card_main_div text-decoration-none text-dark text-decoration-none">
                                                <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $ccat->image }}"
                                                    class="propertyImg" alt="">
                                                <h6 class="text-center mb-0 mt-2 fw-bold">{{ $ccat->name }}
                                                </h6>
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                            <hr style="border-left: 6px solid rgb(21, 22, 21); height: 100px; margin-right: 8px">
                            @foreach ($anycategory->subcategories as $dcat)
                                @if ($dcat->storeproduct->isNotEmpty())
                                    <li>
                                        <div>
                                            <a href="{{ route('construction.dcatproductlist', ['acategory' => $dcat->category->category->category->slug, 'bcategory' => $dcat->category->category->slug, 'ccategory' => $dcat->category->slug, 'dcategory' => $dcat->slug]) }}"
                                                class="card_main_div text-decoration-none text-dark text-decoration-none">
                                                <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $dcat->image }}"
                                                    class="propertyImg" alt="">
                                                <h6 class="text-center mb-0 mt-2 fw-bold">{{ $dcat->name }}
                                                </h6>
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        @endunless

                    </ul>
                </div>
            </div>
        </div>





        <!-- category end -->


        <!-- SUPPLIES start -->
        {{-- <div class="indSupplies mt-4 themeBtnBorder2">
            <div class="fdiv">
                <div class="top">
                    <p class="mb-1">Populars</p>
                    <p class="mb-1">
                        View All
                    </p>
                </div>
                <div class="sdiv">
                    <ul class="main_ul">
                        @foreach ($dcategories as $item)
                            <li>
                                <div>
                                    <!-- card start -->
                                    <a href="" class="card_main_div text-decoration-none text-dark text-decoration-none">
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/dcategories/{{ $item->image }}"
                                            class="propertyImg" alt="" />
                                        <h6 class="mb-0 fw-bold themeColor mt-1 font-weight-bold small"> Venus V4400
                                            Respirator
                                        </h6>
                                        <div class="small">981 Sellers available</div>
                                        <strong>165 Onwards</strong>
                                    </a>
                                    <!-- card end -->
                                </div>
                            </li>
                        @endforeach



                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- SUPPLIES end -->
        {{-- @unless($which != 'ccategory')
        @foreach ($anycategory->category->subcategories as $item)
            @unless($item->id == $anycategory->id)
                @if ($item->storeproduct->isNotEmpty())
                    <li>
                        <div class="categoryThumbnail">
                            <a href="{{ route('construction.ccatproductlist', ['acategory' => $item->category->category->slug, 'bcategory' => $item->category->slug, 'ccategory' => $item->slug]) }}"
                                class="filtertag">
                                {{ $item->name }}
                            </a>
                        </div>
                        <p class="text-center lh-sm">{{ $item->name }}</p>
                    </li>
                @endif
            @endunless
        @endforeach
        @foreach ($anycategory->subcategories as $item)
            @unless($item->category->id == $anycategory->id)
                @if ($item->storeproduct->isNotEmpty())
                    <li>
                        <div class="categoryThumbnail">
                            <a href="{{ route('construction.dcatproductlist', ['acategory' => $item->category->category->category->slug, 'bcategory' => $item->category->category->slug, 'ccategory' => $item->category->slug, 'dcategory' => $item->slug]) }}"
                                class="filtertag">
                                {{ $item->name }}
                            </a>
                        </div>
                        <p class="text-center lh-sm">{{ $item->name }}</p>

                    </li>
                @endif
            @endunless
        @endforeach
        @endunless --}}


        <div class="container-fluid mt-4">
            <div class="row">

                @if ($which == 'brand')
                    @php
                        if ($brand->storeproductwithpagination()->total() < 9) {
                            $before = $brand->storeproductwithpagination()->total();
                            $before /= 2;
                            $before = round($before);
                            $before -= 1;
                        } else {
                            $before = 10 / 2;
                            $before = round($before);
                        }
                    @endphp

                    @foreach ($brand->storeproductwithpagination() as $key => $item)
                        @if ($key == $before)
                            <div class="indSupplies mb-4">
                                <div class="fdiv">
                                    <div class="top justify-content-center">
                                        <p>Related Brands</p>
                                    </div>
                                    <div class="sdiv">
                                        <ul class="main_ul" style="padding-left: 0px">
                                            @foreach ($brands as $abrand)
                                                @if ($abrand != null)
                                                    @if ($abrand->id != $brand->id)
                                                        <li>
                                                            <div>
                                                                <!-- card start -->
                                                                <a style="margin: 12%;"
                                                                    href="{{ route('construction.brandproductlist', ['acategory' => $anycategory->category->category->slug, 'bcategory' => $anycategory->category->slug, 'ccategory' => $anycategory->slug, 'brand' => $abrand->slug]) }}"
                                                                    class="card_main_div text-decoration-none text-dark text-decoration-none pl-5">
                                                                    <img style="height: 50px; width: 50px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $abrand->image }}"
                                                                        class="propertyImg " alt="">
                                                                    <h6 class="fw-bold fs-6">{{ $abrand->name }}
                                                                    </h6>
                                                                </a>
                                                                <!-- card end -->
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-12 bg-white pt-4 pb-3 shadow-lg rounded-lg themeBtnBorder2">
                            <div class="row">
                                <div class="productCardM col-6">
                                    <a
                                        href="{{ route('construction.singleproduct', ['store' => $item->store->slug, 'product' => $item->product->slug]) }}">
                                        <img class="w-100 rounded-lg border-1 border-light border-1"
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-6 pl-0">
                                    <h6 class="font-weight-bold">{{ $item->product->name }}</h6>
                                    <div class="mb-0"><small class="mb-0"><i
                                                class="bi bi-patch-check-fill text-warning"></i>
                                            {{ $item->store->name }}
                                        </small></div>
                                    <div class="mb-0"><small class="mb-0"><i class="bi bi-geo-alt-fill themeColor"></i>
                                            Focal
                                            Point,
                                            Ludhiana</small></div>
                                    <div class="mb-0"><small class="mb-0 font-weight-bold h6"><i
                                                class="bi bi-wallet2 text-info"></i>
                                            Rs {{ $item->product->price }}</small></div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <button class="w-100 py-1 rounded-pill themeBtnBorder bg-transparent themeColor">Call
                                    Now</button>
                                <button class="themeBtn shadow text-white w-100 py-1 rounded-pill ml-3">Get Best
                                    Price</button>
                            </div>
                            <p class="small text-center mt-2 text-dark font-weight-bold mb-0">10,947 Views • 3,928 Enquiries
                            </p>
                        </div>
                    @endforeach

                    <div style="z-index:0" class="text-center">
                        {{ $brand->storeproductwithpagination()->links() }}
                    </div>

                @else


                    @php
                        if ($anycategory->storeproductwithpagination()->total() < 9) {
                            $before = $anycategory->storeproductwithpagination()->total();
                            $before /= 2;
                            $before = round($before);
                            $before -= 1;
                        } else {
                            $before = 10 / 2;
                            $before = round($before);
                        }
                    @endphp

                    @foreach ($anycategory->storeproductwithpagination() as $key => $item)
                        @if ($key == $before)
                            <div class="indSupplies mb-4">
                                <div class="fdiv">
                                    <div class="top justify-content-center">
                                        <p>Related Brands</p>
                                    </div>
                                    <div class="sdiv">
                                        <ul class="main_ul" style="padding-left: 0px">
                                            @unless($which != 'ccategory')
                                                {{-- @dd($anycategory->category->category->slug) --}}
                                                @foreach ($brands as $abrand)
                                                    @if ($abrand != null)
                                                        <li>
                                                            <div>
                                                                <!-- card start -->
                                                                <a style="margin: 12%;"
                                                                    href="{{ route('construction.brandproductlist', ['acategory' => $anycategory->category->category->slug, 'bcategory' => $anycategory->category->slug, 'ccategory' => $anycategory->slug, 'brand' => $abrand->slug]) }}"
                                                                    class="card_main_div text-decoration-none text-dark text-decoration-none pl-5">
                                                                    <img style="height: 50px; width: 50px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $abrand->image }}"
                                                                        class="propertyImg " alt="">
                                                                    <h6 class="fw-bold fs-6">{{ $abrand->name }}
                                                                    </h6>
                                                                </a>
                                                                <!-- card end -->
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endunless

                                            @unless($which != 'dcategory')
                                                @foreach ($brands as $abrand)
                                                    @if ($abrand != null)
                                                        <li>
                                                            <div>
                                                                <!-- card start -->
                                                                <a style="margin: 12%;"
                                                                    href="{{ route('construction.brandproductlist', ['acategory' => $anycategory->category->category->category->slug, 'bcategory' => $anycategory->category->category->slug, 'ccategory' => $anycategory->category->slug, 'brand' => $abrand->slug]) }}"
                                                                    class="card_main_div text-decoration-none text-dark text-decoration-none pl-5">
                                                                    <img style="height: 50px; width: 50px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/ccategories/{{ $abrand->image }}"
                                                                        class="propertyImg " alt="">
                                                                    <h6 class="fw-bold fs-6">{{ $abrand->name }}
                                                                    </h6>
                                                                </a>
                                                                <!-- card end -->
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endunless


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-12 bg-white pt-4 pb-3 shadow-lg rounded-lg themeBtnBorder2">
                            <div class="row">
                                <div class="productCardM col-6">
                                    <a
                                        href="{{ route('construction.singleproduct', ['store' => $item->store->slug, 'product' => $item->product->slug]) }}">
                                        <img class="w-100 rounded-lg border-1 border-light border-1"
                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-6 pl-0">
                                    <h6 class="font-weight-bold">{{ $item->product->name }}</h6>
                                    <div class="mb-0"><small class="mb-0"><i
                                                class="bi bi-patch-check-fill text-warning"></i>
                                            {{ $item->store->name }}
                                        </small></div>
                                    <div class="mb-0"><small class="mb-0"><i class="bi bi-geo-alt-fill themeColor"></i>
                                            Focal
                                            Point,
                                            Ludhiana</small></div>
                                    <div class="mb-0"><small class="mb-0 font-weight-bold h6"><i
                                                class="bi bi-wallet2 text-info"></i>
                                            Rs {{ $item->product->price }}</small></div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <button class="w-100 py-1 rounded-pill themeBtnBorder bg-transparent themeColor">Call
                                    Now</button>
                                <button class="themeBtn shadow text-white w-100 py-1 rounded-pill ml-3">Get Best
                                    Price</button>
                            </div>
                            <p class="small text-center mt-2 text-dark font-weight-bold mb-0">10,947 Views • 3,928 Enquiries
                            </p>
                        </div>
                    @endforeach
                    <div style="z-index:0" class="text-center">
                        {{ $anycategory->storeproductwithpagination()->links() }}
                    </div>
                @endif

                <br><br>
                <br><br>
                <br>
            </div>
        </div>

    </div>

    <!-- MOBILE END -->
@endsection


@section('personalscripts')

@endsection
