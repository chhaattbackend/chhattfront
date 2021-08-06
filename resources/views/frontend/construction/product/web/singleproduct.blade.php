@extends('layouts.master')

@section('style')
    <title>{{ $storeproduct->product->name }} - {{ $storeproduct->store->name }} - The best quality construction material available at Chhatt</title>
    <meta name="title" content="{{ $storeproduct->product->name }} - {{ $storeproduct->store->name }} - The best quality construction material available at Chhatt">
    <meta name="description" content="{{ $storeproduct->product->name }} and other construction materials are available at Chhatt. Forfurther information and details you must contact our vendors.">

    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/contruction/singleproduct.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1>{{ $storeproduct->product->name }} </h1>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="single_construction">
        <div class="container-fluid">
            {{-- <small>
                lorem &nbsp; > &nbsp; lorem &nbsp; > &nbsp; lorem &nbsp; > &nbsp; lorem
            </small> --}}
            <div class="row py-2 rounded shadow">
                <div class="col-4">
                    <div class="galleryContainer">
                        <!-- Add images to <div class="fotorama"></div> -->
                        <div class="fotorama" data-nav="thumbs" data-width="100%" data-allowfullscreen="true">
                            <!-- ↑ The same as data-ratio="4/3" or data-ratio="1.3333333333". -->
                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ @$storeproduct->product->image }}"
                                width="130" height="96">

                            {{-- <img src="https://images.unsplash.com/photo-1593642634315-48f5414c3ad9?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                width="130" height="96"> --}}



                        </div>
                        <!-- Add images to <div class="fotorama"></div> -->
                    </div>
                </div>
                <div class="col-8 py-2">
                    <div class="row">
                        <div class="col-8">
                            {{-- <h4>{{ $storeproduct->product->name }}</h4> --}}
                            <h6 class="pt-2 fw-bold text-decoration-underline">Get Latest Price</h6>
                            <div class="row mt-2">
                                @foreach ($storeproduct->product->attributes as $item)
                                    <div class="col-6">{{ $item->attribute->name }}</div>
                                    <div class="col-6">{{ $item->desc }}</div>
                                    <hr class="my-1 text-secondary">
                                @endforeach

                            </div>
                            <div>
                                <h6>View Complete Details</h6>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    {{-- <button
                                        class="d-flex justify-content-center align-items-center bg-transparent border border-1 border-dark  rounded-3 flex-column px-4 py-1">
                                        <span class="fw-bold">
                                            Contact Seller
                                        </span>
                                        <small style="font-size: 0.6rem;">Ask for best deal</small>
                                    </button> --}}
                                    <button
                                        class="d-flex justify-content-center align-items-center flex-column px-4 py-1 ms-3 rounded-3 bg-warning">

                                        <a href="tel:{{ $storeproduct->store->phone }}">

                                            <span class="fw-bold"> Get Latest Price
                                            </span>
                                        </a>
                                        <small style="font-size: 0.6rem;">Request a quote</small>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="agencyCard">
                                <div class="imagesContainer position-relative">
                                    <img class="bgIMg" src="{{ asset('assets/chhattLogo.png') }}" alt="">
                                    <img class="profileImg"
                                        src="https://images.unsplash.com/photo-1624314086699-6ee739bd29e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                        alt="">
                                </div>
                                <h6 class="mt-5 mb-0 text-center fw-bold">{{ $storeproduct->store->name }}</h6>
                                <div class="text-center">
                                    <small>Exports to Pakistan</small>
                                </div>
                                <div class="text-center">
                                    <small><i class="bi bi-geo-alt-fill"></i>{{ $storeproduct->store->address }}
                                    </small>
                                </div>
                                <div class="text-center mb-2"><span class="fw-bold">4</span>/5
                                    <i class="bi bi-star-fill filledStar"></i><i class="bi bi-star-fill filledStar"></i><i
                                        class="bi bi-star-fill filledStar"></i><i class="bi bi-star-fill filledStar"></i>
                                    <i class="bi bi-star-fill unFilledStar"></i> (176)
                                </div>
                                <div class="px-2">
                                    <a
                                        href="{{ route('construction.singlestore', ['store' => $storeproduct->store->slug]) }}">

                                        <button class="w-100 py-2 rounded bg-transparent border border-1 border-dark"> View
                                            Store</button>
                                    </a>
                                </div>
                                <br>
                                {{-- <div class="text-center">
                                    <small>67% Response Rate</small>
                                </div> --}}
                                {{-- <div class="row px-2 mt-1">
                                    <div class="col-6 d-flex align-items-center"><i
                                            class="lstic spfirst mr3 pdinb pd_flsh"></i>
                                        <small class="smallFont mb-0 ms-1">
                                            Leading Supplier
                                        </small>
                                    </div>
                                    <div class="col-6 d-flex align-items-center pe-0">
                                        <i class="tic spfirst mr3 pdinb pd_flsh"></i> <small class="smallFont mb-0 ms-1">
                                            TrustSEAL Verified
                                        </small>
                                    </div>
                                    <div class="col-6 d-flex align-items-center mt-1">
                                        <i class="vfExp spfirst mr3 pdinb pd_flsh"></i>
                                        <small class="smallFont mb-0 ms-1">
                                            Verified Exporter
                                        </small>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="d-flex align-items-centers">
                        <h5 class="ms-3 me-3">Explore similar products</h5> |
                        <h5 class="d-flex align-items-center ms-3"><a
                                href="{{ route('construction.singlestore', ['store' => $storeproduct->store->slug]) }}">View
                                all products in {{ @$storeproduct->store->name }}</a> <i
                                class="bi bi-chevron-right h5 mb-0"></i></h5>
                    </div>

                    <div class="mapCardContainer mt-4">
                        <div class="container-fluid px-0">
                            <div class="row px-2">

                                @foreach ($storeproduct->getrelatedproduct(1) as $item)

                                    @unless($item->isstoreproduct($storeproduct->store_id) == null)
                                        <div class="col-sm-4 col-lg-3 mb-4">
                                            <!-- property card start -->
                                            <div class="propertyCard p-2">


                                                <div class="imageSection"><a class="text-decoration-none position-relative"
                                                        href="{{ route('construction.singleproduct', ['store' => $storeproduct->store->slug, 'product' => $item->slug]) }}">
                                                        <img class="slideImg"
                                                            src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->image }}"
                                                            alt="" />
                                                </div>
                                                <div class="text-dark paraContainer">
                                                    <div class="mt-1">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="lightColor">{!! $storeproduct->store->name !!}</h6>
                                                            <h6 class="lightColor">{!! @$item->c_category->name !!} </h6>
                                                        </div>
                                                        <div class="mt-2">
                                                            <strong class="mt-5">{{ $item->name }}</strong>
                                                        </div>
                                                        <h6 class="mt-2">
                                                            <strong>
                                                                Rs. {{ $item->price }}
                                                            </strong>
                                                        </h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <button class="w-100 themebtn py-1 text-white">View
                                                            more</button>
                                                        <button class="w-100 ms-3">Contact Us</button>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                            <!-- property card end -->
                                        </div>
                                    @endunless
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 ps-0 mt-5 position-relative">
                    <div class="row">
                        <div class="col-8">
                            <div class="ms-2 w-100 border-bottom border-dark">
                                <button
                                    class="bg-transparent px-3 h4 mb-0 pb-2 border-bottom border-danger border-2">Product
                                    Details</button>
                                <button class="bg-transparent ms-5 px-3 h4 mb-0 pb-2">Company Details</button>
                            </div>

                            <div class="row mt-4 px-4">
                                <h5 class="mb-2">Product Specification</h5>
                                @foreach ($storeproduct->product->attributes as $item)
                                    <div class="col-6">{{ $item->attribute->name }}</div>
                                    <div class="col-6">{{ $item->desc }}</div>
                                    <hr class="my-1 text-secondary">
                                @endforeach
                            </div>

                            <div class="ms-3 mt-4">
                                <h5>Product Description</h5>
                                <p>{{ $storeproduct->product->description }}</p>
                            </div>

                            {{-- <div class="ms-3 mt-3 p-4 bg-light d-flex justify-content-between">
                                <div>
                                    <h6 class="mb-0">Interested in this product?</h6>
                                    <h6 class="fw-bold">Get Latest Price from the seller</h6>
                                </div>
                                <div>
                                    <button class="border-0 bg-warning px-3 py-2 rounded-pill text-white">Contact
                                        Seller</button>
                                </div>
                            </div> --}}

                            {{-- <div class="ms-3 mt-4">
                                <h5>About the Company</h5>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <h6 class="text-second  ary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-secondary mb-0">Year of Establishment</h6>
                                        <h6>2011</h6>
                                    </div>

                                    <p class="mt-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius qui nostrum,
                                        sint
                                        unde odit, illum voluptates nulla laborum in dolores molestias quod, magnam
                                        quos! Fugiat quas fuga praesentium tempora doloribus iusto aliquid voluptate
                                        excepturi quo sunt tempore necessitatibus, debitis quam blanditiis veniam
                                        aspernatur molestiae suscipit, nostrum nobis. Eius quidem dolores, modi sed
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-4 position-sticky">
                            <!-- CONTACT FORM START -->
                            <div class="contactContainer position-sticky">
                                <h2>Contact Us</h2>
                                {{-- <input hidden type="text" id="numberrrr" value="{{ @$storeproduct->store->phone }}"> --}}
                                <a href="tel:+{{ $storeproduct->store->phone }}">
                                    <Button class="showNumber ripple">
                                        Call Now
                                    </Button>
                                </a>
                                    {{-- <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                class="text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                style="font-size: 14px;">
                                <path
                                    d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z">
                                </path>
                            </svg> <span id="changethis">Call Now</span> --}}
                                <hr />

                                <div class="innerContactform">
                                    <form onsubmit="submitFunc()"
                                        action="{{ route('contact.form', ['storeproduct_id' => $storeproduct->id]) }}"
                                        method="POST">
                                        @csrf
                                        <input class="inpC" type="text" placeholder="Name" name="name" />
                                        <input type="hidden" name='lead_from' value="construction">
                                        {{-- <input type="hidden" name='phone' value="{{$storeproduct->store->phone}}"> --}}
                                        {{-- <input type="hidden" name='storeproduct_id' value="{{$storeproduct->id}}"> --}}
                                        <br />
                                        <input class="inpC mt-4" type="text" name="email" placeholder="Email" />
                                        <br />
                                       <div class="phone_inp">
                                             <input class="inpC mt-4" type="number" name="phone" placeholder="Phone" />
                                             <div class="flag d-flex">
                                                     <img src="https://cdn.britannica.com/46/3346-004-D3BDE016/flag-symbolism-Pakistan-design-Islamic.jpg"
                                                         alt="">
                                                    <h6>+92</h6>
                                                     </div>
                                             </div>
                                        <textarea rows="5" name="description" placeholder="Description"></textarea>
                                        <br />
                                        <Button type="submit">
                                            <MdEmail class="text-white" style="font-size: 17px" />
                                            &nbsp;Submit
                                        </Button>

                                    </form>

                                </div>

                            </div>
                            <br>
                            @if (Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                             @endif

                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- CONTACT FORM END -->
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row rounded shadow mt-5 py-3">
                <div class="d-flex ms-2">
                    <h5>Featured Recommendations</h5>
                    <div class="ms-2"><small>View All <i class="bi bi-chevron-right h6 mb-0"></i></small></div>
                </div>

                <div class="mapCardContainer mt-2">
                    <div class="container-fluid px-0">
                        <div class="row px-2">
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}


            {{-- <div class="row rounded shadow mt-5 py-3">
                <div class="d-flex ms-2">
                    <h5>Browse related categories</h5>
                    <div class="ms-2"><small>View All <i class="bi bi-chevron-right h6 mb-0"></i></small></div>
                </div>

                <div class="mapCardContainer mt-2">
                    <div class="container-fluid px-0">
                        <div class="row px-2">
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                            <div class="col-sm-4 col-lg-3 mb-4">
                                <!-- property card start -->
                                <div class="propertyCard p-2">
                                    <a class="text-decoration-none position-relative" href="#">
                                        <div class="imageSection">
                                            <img class="slideImg"
                                                src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-dark paraContainer">
                                            <div class="mt-1">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="lightColor">Residential</h6>
                                                    <h6 class="lightColor">an hour ago</h6>
                                                </div>
                                                <div class="mt-2">
                                                    <strong class="mt-5">Flat For Sale in DHA Phase 6</strong>
                                                </div>
                                                <h6 class="mt-2">
                                                    <strong>
                                                        Rs: 1.2 Cr.
                                                    </strong>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="w-100 themebtn py-1 text-white">View more</button>
                                                <button class="w-100 ms-3">Contact Us</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- property card end -->
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>
@endsection


@section('personalscripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $('.slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            responsive: [{
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true
                    }
                },
            ]
        });

        function submitFunc(e) {
            e.preventDefault()
            console.log("e")
            console.log(e)
        }
        function chnagenumb() {

var number = $('#numberrrr').val();
$('#changethis').html(number)
}
    </script>
@endsection
