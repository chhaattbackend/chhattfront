@extends('layouts.mobile.master',['search'=>1])

@section('style')
    <title>Pakistan Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com</title>
    <meta name="title" content="Pakistan Best Property Real Estate - Buy Sell and Build Properties | Chhatt.com">
    <meta name="description"
        content="Chhatt.com: The best property real estate and construction material providers in Pakistan. Buy, sell and rent properties, shops and commercial plots at best prices">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/home/customhome.css') }}" />
    <link rel="stylesheet" type="text/css" href="./mobile/home.css" />
@endsection



@section('content')
    @include('functions.convert_rupee')



    <div class="indSupplies mb-4 mt-4">
        <div class="fdiv">
            <div class="top">
                <p>Construction Material</p>
                <p>
                    <a href="{{ route('construction.home') }}" class="text-decoration-none">
                        View All
                    </a>
                </p>
            </div>
            <div class="sdiv">
                <ul class="topCat main_ul" style="padding-left: 0rem">
                    @foreach (array_slice($bcategories, 0, 9) as $key => $bcat)
                        <li class="shadow-sm">
                            <div>
                                <!-- card start -->
                                <a class=" text-dark text-decoration-none"
                                    href="{{ route('construction.bcat', ['acategory' => $bcat->category->slug, 'bcategory' => $bcat->slug]) }}">
                                    <h4 class="fw-bold">{{ $bcat->name }}</h4>
                                </a>
                                <hr class="mt-0">
                                <div class="d-flex">
                                    <div>
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/bcategories/{{ $bcat->image }}"
                                            class="propertyImg shadow-sm" alt="">
                                    </div>
                                    <div class="ms-2">
                                        @foreach ($bcat->subcategories->slice(0, 3) as $ccat)
                                            <div class="d-flex align-items-center">

                                                <a href="{{ route('construction.ccatproductlist', ['acategory' => $ccat->category->category->slug, 'bcategory' => $ccat->category->slug, 'ccategory' => $ccat->slug]) }}"
                                                    class="text-decoration-none text-dark">
                                                    <p class="mb-0 pt-0"> {{ $ccat->name }}
                                                    </p>
                                                </a>
                                                <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- card end -->
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>
    </div>

    <div class="indSupplies mb-4 mt-4">
        <div class="fdiv">
            <div class="top">
                <p>Property & Agency</p>
                <p>
                    <a href="{{ route('property') }}" class="text-decoration-none">
                        View All
                    </a>
                </p>
            </div>
            <div class="sdiv">
                <ul class="topCat main_ul" style="padding-left: 0rem">
                    <li class="shadow-sm">
                        <div>
                            <!-- card start -->
                            <a class=" text-dark text-decoration-none" href="">
                                <h4 class="fw-bold">Residential Properties</h4>
                            </a>
                            <hr class="mt-0">
                            <div class="d-flex">
                                <div>
                                    <img src="https://images.unsplash.com/photo-1555636222-cae831e670b3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1056&q=80"
                                        class="propertyImg shadow-sm" alt="">
                                </div>
                                <div class="ms-2">
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> House for Sale </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Flat for Sale </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Plot for Sale </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </li>

                    <li class="shadow-sm">
                        <div>
                            <!-- card start -->
                            <a class=" text-dark text-decoration-none" href="">
                                <h4 class="fw-bold">Commercial Properties</h4>
                            </a>
                            <hr class="mt-0">
                            <div class="d-flex">
                                <div>
                                    <img src="https://images.unsplash.com/photo-1597047084897-51e81819a499?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80g"
                                        class="propertyImg shadow-sm" alt="">
                                </div>
                                <div class="ms-2">
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> House for Sale </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Flat for Sale </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Plot for Sale </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </li>

                    <li class="shadow-sm">
                        <div>
                            <!-- card start -->
                            <a class=" text-dark text-decoration-none" href="">
                                <h4 class="fw-bold">Industrial Properties</h4>
                            </a>
                            <hr class="mt-0">
                            <div class="d-flex">
                                <div>
                                    <img src="https://images.unsplash.com/photo-1626470159480-427d823d3671?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1025&q=80"
                                        class="propertyImg shadow-sm" alt="">
                                </div>
                                <div class="ms-2">
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Warehouse for Sale </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Plot for Sale </p>

                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Factory for Sale </p>

                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </li>

                    <li class="shadow-sm">
                        <div>
                            <!-- card start -->
                            <a class=" text-dark text-decoration-none" href="">
                                <h4 class="fw-bold">Real Estate Agencies</h4>
                            </a>
                            <hr class="mt-0">
                            <div class="d-flex">
                                <div>
                                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                        class="propertyImg shadow-sm" alt="">
                                </div>
                                <div class="ms-2">
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Residential Properties agencies </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Commercial Properties agencies </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </li>

                    <li class="shadow-sm">
                        <div>
                            <!-- card start -->
                            <a class=" text-dark text-decoration-none" href="">
                                <h4 class="fw-bold">Realtor by Area</h4>
                            </a>
                            <hr class="mt-0">
                            <div class="d-flex">
                                <div>
                                    <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                        class="propertyImg shadow-sm" alt="">
                                </div>
                                <div class="ms-2">
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> DHA </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Clifton </p>

                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Nazimabad</p>

                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </li>

                    <li class="shadow-sm">
                        <div>
                            <!-- card start -->
                            <a class=" text-dark text-decoration-none" href="">
                                <h4 class="fw-bold">Realtor by Speciality</h4>
                            </a>
                            <hr class="mt-0">
                            <div class="d-flex">
                                <div>
                                    <img src="https://images.unsplash.com/photo-1514779324364-8400d49e81de?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=627&q=80"
                                        class="propertyImg shadow-sm" alt="">
                                </div>
                                <div class="ms-2">
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('agent.special',['name'=>'Bungalow Specialist'])}}" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Bungalow Specialist </p>
                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('agent.special',['name'=>'Residential Specialist'])}}" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> Residential Specialist </p>

                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('agent.special',['name'=>'General Specialist'])}}" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> General Specialist </p>

                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div>
                                    {{-- <div class="d-flex align-items-center">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="mb-0 pt-0"> General Specialist </p>

                                        </a>
                                        <i class="ms-2 bi bi-caret-right-square-fill"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </li>

                </ul>
            </div>
        </div>
    </div>

    {{-- <div class="indSupplies mb-4">
        <div class="fdiv">
            <div class="top">
                <p>Categories to explore</p>
                <p>
                    <a href="{{ route('construction.home') }}">
                        View All
                    </a>
                </p>
            </div>
            <div class="sdiv">
                <ul class="main_ul" style="padding-left: 0px">
                    @foreach (array_slice($bcategories, 0, 9) as $key => $bcat)

                        <li>
                            <div>
                                <!-- card start -->
                                <a href="{{ route('construction.bcat', ['acategory' => $bcat->category->slug, 'bcategory' => $bcat->slug]) }}"
                                    class="card_main_div text-decoration-none text-dark text-decoration-none">
                                    <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid rgb(170, 170, 170);"
                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/bcategories/{{ $bcat->image }}"
                                        class="propertyImg" alt="" />
                                    <h6 class="text-center mb-0 mt-2 fw-bold">{{ $bcat->name }}</h6>
                                </a>
                                <!-- card end -->
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div> --}}

    <div class="category_main_div">

        <div class="fdiv">


            <div class="top">
                <p>Categories</p>
            </div>
            <div class="sdiv">
                <ul>
                    <a style="text-decoration: inherit; color: black" href="{{ route('agency') }}">

                        <li onClick="historyPush">
                            <div>
                                <svg id="Layer_1_1_" height="35" fill="#007bff" viewBox="0 0 64 64" width="35"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m54.165 29.714c-.826-.693-2.009-.739-2.882-.11l-.979.706c-.179-.435-.49-.812-.906-1.078-.76-.485-1.711-.496-2.484-.023-.404.248-.72.606-.875.96l-2.223 3.983c-.297-.216-.689-.266-1.029-.097l-5.455 2.721-8.532-11.376c-.122-.163-.291-.285-.483-.349l-3.859-1.286c.946-.312 1.777-.925 2.345-1.777.77-1.151.967-2.623.528-3.938l-.274-.824c-.086-.259-.13-.527-.13-.798v-7.466c2.361-2.296 2.954-5.603 2.986-5.798.049-.29-.033-.586-.224-.811-.19-.224-.469-.353-.763-.353h-10.989c-.838-.006-8.297-.016-10.979 2.637-.675.668-1.032 1.485-1.032 2.363 0 6.111 2.938 14.018 3.063 14.352.147.39.521.648.937.648.011 0 .022 0 .033-.001.281-.009.53-.143.708-.344l1.347 1.796-6.259 1.58c-.402.102-.7.442-.748.855l-3 26c-.033.283.057.566.247.779.189.213.461.335.746.335v3c0 1.654 1.346 3 3 3h3v3h2v-7h2.926c.553 0 1-.447 1-1v-5h6.074v5c0 .553.447 1 1 1h2v7h2v-7h.926c.553 0 1-.447 1-1v-15.6l7.37 7.31c.282.282.708.366 1.077.218l11.783-4.731c.299-.12.521-.377.598-.689.036-.148.036-.299.005-.444 1.551-.775 3.602-2.089 4.552-3.215l2.359-2.793c.404-.479.599-1.085.546-1.709s-.345-1.19-.823-1.594zm-29.007-11.856.275.825c.244.732.134 1.553-.295 2.194-.467.704-1.251 1.123-2.096 1.123h-9.616l-1.969-2.625 2.216-7.387c1.597-.039 5.495-.217 9.449-1.008.664-.133 1.26-.344 1.804-.606v6.054c0 .486.078.967.232 1.43zm-6.292 14.026-.94 1.88-.94-1.88.94-3.761zm-10.94-24.884c0-.218.046-.552.438-.94 1.72-1.701 7.155-2.061 9.366-2.061.067 0 .134 0 .195.001h9.698c-.543 1.62-1.899 4.421-4.895 5.02-4.837.967-9.753.98-9.802.98-.441 0-.831.29-.958.713l-2.089 6.964c-.854-2.82-1.953-7.139-1.953-10.677zm1.074 50h-3c-.552 0-1-.448-1-1v-3h3v1c0 .553.447 1 1 1zm3.926-4h-2.926v-16h-2v14h-3.878l2.792-24.199 6.012-1.518zm2-6v-23h1.97l-1.939 7.758c-.059.231-.031.476.075.689l2 4c.169.339.515.553.894.553s.725-.214.895-.553l2-4c.106-.214.134-.458.075-.689l-1.94-7.758h2.044v23zm21.311-3.173-8.607-8.537c-.287-.284-.717-.367-1.089-.213-.372.155-.615.52-.615.923v17h-2.926v-27.612l4.388 1.462 8.124 10.833-.104.053.893 1.789 6.681-3.332 3.137 3.667zm17.907-11.063-2.359 2.794c-.754.892-2.813 2.218-4.249 2.883l-2.314-2.705 2.602-4.669c.028-.063.075-.117.134-.153.16-.099.296-.039.364.004.067.043.177.144.156.33l-.097.852c-.045.393.146.775.488.976s.77.179 1.09-.052l2.494-1.797c.127-.093.303-.085.422.016l1.229 1.039c.095.079.116.18.12.232.005.052 0 .155-.08.25z" />
                                    <path d="m17 56h2v6h-2z" />
                                    <path
                                        d="m61.316 15.052-5.316-1.772v-1.28h1c.434 0 .817-.279.951-.69.134-.412-.013-.863-.363-1.118l-2.588-1.882v-5.31c0-.553-.447-1-1-1h-4c-.553 0-1 .447-1 1v.945l-2.412-1.754c-.35-.256-.826-.256-1.176 0l-11 8c-.351.255-.497.706-.363 1.118s.517.691.951.691h1v12h-3v2h4 18 6c.553 0 1-.447 1-1v-9c0-.431-.275-.812-.684-.948zm-15.316-10.816 3.412 2.481c.304.222.706.251 1.042.083.335-.17.546-.515.546-.891v-1.909h2v4.818c0 .32.153.62.412.809l.513.373h-15.85zm2 19.764h-4v-6h4zm2 0v-7c0-.553-.447-1-1-1h-6c-.553 0-1 .447-1 1v7h-4v-12h16v12zm10 0h-4v-8.613l4 1.334z" />
                                </svg>
                            </div>
                            <p>Realtor</p>
                        </li>
                    </a>

                    <a style="text-decoration: inherit; color: black" href="{{ route('property') }}">
                        <li onClick="historyPush">


                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="35" fill="#007bff" viewBox="0 0 512 512"
                                    width="35">
                                    <g id="Outline">
                                        <path
                                            d="m320 288v-104a8 8 0 0 0 -10.353-7.646l-104 32a8 8 0 0 0 -5.647 7.646v80h16v-74.091l88-27.077v29.168h-32v16h32v16h-56v16h56v16z" />
                                        <path
                                            d="m136 104h88v80h16v-88a8 8 0 0 0 -8-8h-8v-24a8 8 0 0 0 -8-8h-8v-24a8 8 0 0 0 -8-8h-40a8 8 0 0 0 -8 8v24h-8a8 8 0 0 0 -8 8v24h-8a8 8 0 0 0 -8 8v96h16zm32-64h24v16h-24zm-16 32h56v16h-56z" />
                                        <path
                                            d="m288 83.352 96 34.286v74.362h16v-80a8 8 0 0 0 -5.31-7.534l-18.69-6.675v-42.362a8 8 0 0 0 -5.31-7.534l-18.69-6.676v-17.219h-16v11.505l-13.31-4.753a8 8 0 0 0 -10.69 7.534v36.648l-29.31-10.468a8 8 0 0 0 -10.69 7.534v96h16zm40-33.714 32 11.428v31.011l-32-11.429z" />
                                        <path
                                            d="m480 480v-264a8 8 0 0 0 -8-8h-8v-16h-16v16h-16v-16h-16v16h-56a8 8 0 0 0 -8 8v72h16v-64h96v24h-72v16h72v16h-32v16h32v16h-32v16h32v16h-32v16h32v16h-40v16h40v16h-40v16h40v16h-40v16h40v24h-64v-120h8a8 8 0 0 0 8-8v-48a8 8 0 0 0 -8.884-7.951l-144 16a8 8 0 0 0 -7.116 7.951v32a8 8 0 0 0 8 8h8v120h-40v-160a8 8 0 0 0 -8-8h-40v-8a24.039 24.039 0 0 0 -16-22.624v-17.376h-16v17.376a24.039 24.039 0 0 0 -16 22.624v8h-8a8 8 0 0 0 -8 8v160h-72v-24h48v-16h-48v-16h40v-16h-40v-16h40v-16h-40v-16h48v-16h-48v-16h40v-16h-40v-16h64v-16h-64v-16h72v-16h-72v-24h104v24h16v-32a8 8 0 0 0 -8-8h-56v-16h-16v16h-16v-32h-16v32h-16a8 8 0 0 0 -8 8v264h-16v16h480v-16zm-208-152.84 128-14.222v31.062h-128zm16 32.84h96v120h-96zm-136-56a8 8 0 0 1 16 0v8h-16zm-16 24h80v152h-80z" />
                                        <path d="m312 376h16v16h-16z" />
                                        <path d="m160 120h16v16h-16z" />
                                        <path d="m152 176h16v16h-16z" />
                                        <path d="m192 152h16v16h-16z" />
                                        <path d="m344 376h16v16h-16z" />
                                        <path d="m312 408h16v16h-16z" />
                                        <path d="m344 408h16v16h-16z" />
                                        <path d="m312 440h16v16h-16z" />
                                        <path d="m344 440h16v16h-16z" />
                                        <path d="m152 352h16v104h-16z" />
                                        <path d="m184 352h16v104h-16z" />
                                        <path d="m304 120h16v16h-16z" />
                                        <path d="m352 136h16v16h-16z" />
                                        <path d="m336 176h16v16h-16z" />
                                    </g>
                                </svg>
                            </div>
                            <p>Property</p>
                        </li>
                    </a>

                    <a style="text-decoration: inherit; color: black" href="{{ route('construction.home') }}">
                        <li>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" id="Layer_5"
                                    enable-background="new 0 0 64 64" height="35" viewBox="0 0 64 64" width="35">
                                    <g>
                                        <path
                                            d="m59.477 47 3.451-8.628-1.857-.743-3.748 9.371h-.323v-12h-2v-16h-4v-4h-2v4h-2v-6h-2v6h-2v-4h-2v4h-4v12h-4v5.129c-2.357-2.894-5.574-5.002-9.225-5.968l-.454-1.361c1.458-.403 2.656-1.434 3.255-2.8h.424c2.206 0 4-1.794 4-4v-5c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2h-.174c-.957-5.76-5.883-10-11.826-10s-10.869 4.24-11.826 10h-.174c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v5c0 2.206 1.794 4 4 4h.424c.6 1.366 1.797 2.398 3.255 2.8l-.454 1.361c-7.815 2.061-13.225 9.047-13.225 17.181v.658c0 4.264 2.444 7.961 6 9.786v5.214h30v-8h3.101c.465 2.279 2.484 4 4.899 4s4.434-1.721 4.899-4h5.019c4.015 0 7.409-2.875 8.069-6.835l.194-1.165zm-12.477 0v-10h8v10zm-8-26h14v14h-6v-4h-8zm6 12v14h-10v-14zm-12 6.676v7.324h-.323l-3.749-9.372-1.857.743 3.452 8.629h-3.703l.194 1.165c.265 1.59.976 3.001 1.986 4.125v8.71h-5v-2c1.654 0 3-1.346 3-3s-1.346-3-3-3v-20.673c3.813 1.212 7.038 3.828 9 7.349zm-11.721-10.676.617 1.852-2.896 4.345-2.897-4.345.618-1.852zm.721 10.149-1.762-2.203 1.762-2.643zm-6 0v-4.846l1.762 2.643zm0 3.201 3-3.75 3 3.75v8.826c-.314-.111-.649-.176-1-.176h-1.171c-.801 0-1.555.312-2.122.879l-1.026 1.026-.681-.152zm2 12.064 1.121-1.121c.189-.189.441-.293.708-.293h1.171c.551 0 1 .449 1 1v1h2c.551 0 1 .449 1 1s-.449 1-1 1h-6zm4 4.586v2h-6v-2zm5-35v-4c1.103 0 2 .897 2 2s-.897 2-2 2zm2-5.444c-.591-.344-1.268-.556-2-.556v-1h2zm-.204-7.556h-6.796v-7.542c3.435 1.065 6.07 3.914 6.796 7.542zm-8.796-7.95v7.95h-2v-7.95c.329-.032.662-.05 1-.05s.671.018 1 .05zm-4 .408v7.542h-6.796c.726-3.628 3.361-6.477 6.796-7.542zm-9.001 9.542h.001 24v2h-24zm4.001 4v1c-.732 0-1.409.212-2 .556v-1.556zm-2 5c0-1.103.897-2 2-2v4c-1.103 0-2-.897-2-2zm4 2v-7h12v7c0 1.654-1.346 3-3 3h-6c-1.654 0-3-1.346-3-3zm-10 24v-.658c0-6.96 4.464-12.968 11-15.029v19.997l-1.085-.241c-2.305-.513-3.915-2.52-3.915-4.882v-4.187h-2v4.187c0 3.306 2.254 6.116 5.481 6.833l3.519.782v2.198h-4c-4.962 0-9-4.038-9-9zm6 10.574c.955.271 1.959.426 3 .426h2v2h-5zm22 2.426v-7.086c1.183.68 2.55 1.068 4 1.083v6.003zm14-4c-1.654 0-3-1.346-3-3 0-.551.449-1 1-1h4c.551 0 1 .449 1 1 0 1.654-1.346 3-3 3zm9.917-4h-5.102c-.414-1.161-1.514-2-2.816-2h-4c-1.302 0-2.402.839-2.816 2h-5.102c-2.624 0-4.896-1.625-5.785-4h31.404c-.887 2.375-3.158 4-5.783 4z" />
                                        <path d="m49 23h2v2h-2z" />
                                        <path d="m45 23h2v2h-2z" />
                                        <path d="m41 23h2v2h-2z" />
                                        <path d="m49 27h2v2h-2z" />
                                        <path d="m41 27h2v2h-2z" />
                                        <path d="m45 27h2v2h-2z" />
                                        <path d="m49 31h2v2h-2z" />
                                        <path d="m37 35h2v10h-2z" />
                                        <path d="m41 35h2v10h-2z" />
                                        <path d="m49 39h4v2h-4z" />
                                        <path d="m49 43h4v2h-4z" />
                                    </g>
                                </svg>
                            </div>
                            <p>Construction</p>
                        </li>
                    </a>

                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff"
                                id="Engineer-Avatar-Worker-Man-Occupation" viewBox="0 0 64 64" width="35" height="35">
                                <path d="M28,24H26a2,2,0,0,1-4,0H20a4,4,0,0,0,8,0Z" />
                                <rect x="19" y="20" width="2" height="2" />
                                <rect x="27" y="20" width="2" height="2" />
                                <path
                                    d="M58.89,48.55l-2-4A.988.988,0,0,0,56,44H50V41a1,1,0,0,0-1-1H42.81a7.065,7.065,0,0,0-4.95-5.17L29,32.25v-1.6A10.023,10.023,0,0,0,34,22V18.82a2.986,2.986,0,0,0-.04-5.65A9.9,9.9,0,0,0,27,4.46V4a2.006,2.006,0,0,0-2-2H23a2.006,2.006,0,0,0-2,2v.46a9.9,9.9,0,0,0-6.96,8.71A2.986,2.986,0,0,0,14,18.82V22a10.023,10.023,0,0,0,5,8.65v1.6l-8.85,2.58A7.021,7.021,0,0,0,5,41.58V61a1,1,0,0,0,1,1H58a1,1,0,0,0,1-1V49A1,1,0,0,0,58.89,48.55ZM48,42v2H40V42ZM31,34.91v1.26a3.113,3.113,0,0,0-2,0V34.33ZM27,6.58A8.108,8.108,0,0,1,31.93,13H27ZM23,4h2v9H23ZM21,6.58V13H16.07A8.108,8.108,0,0,1,21,6.58ZM14,16a1,1,0,0,1,1-1H33a1,1,0,0,1,0,2H15A1,1,0,0,1,14,16Zm2,6V19H32v3a8,8,0,0,1-16,0Zm11,9.54V35.5l-3,2.25L21,35.5V31.54a10.013,10.013,0,0,0,6,0ZM17,34.91l2-.58v1.84a3.113,3.113,0,0,0-2,0Zm8.11,13.64A1,1,0,0,0,25,49V60H14V45H12V60H7V41.58a5.035,5.035,0,0,1,3.7-4.83L15,35.5V39a1,1,0,0,0,2,0,1,1,0,0,1,2,0,1,1,0,0,0,2,0V38l2.4,1.8a1,1,0,0,0,1.2,0L27,38v1a1,1,0,0,0,2,0,1,1,0,0,1,2,0,1,1,0,0,0,2,0V35.5l4.31,1.25A5,5,0,0,1,40.73,40H39a1,1,0,0,0-1,1v3H28a.988.988,0,0,0-.89.55ZM37,60H27V49.24L28.62,46h6.76L37,49.24Zm20,0H39V53h6a3,3,0,0,0,6,0h6ZM47,53V51a1,1,0,0,1,2,0v2a1,1,0,0,1-2,0Zm10-2H51a3,3,0,0,0-6,0H39V49a1,1,0,0,0-.11-.45L37.62,46H55.38L57,49.24Z" />
                            </svg>
                        </div>
                        <p>contractor</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @php
        $count = 0;
    @endphp

    <div class="bestprperty_main_div">
        <div class="fdiv">
            <div class="top">
                <p>Best Properties For You</p>
                <p>
                    <a href="{{ route('allproperties', ['All']) }}"> View All </a>
                </p>
            </div>
            <div class="sdiv">
                <ul>
                    @foreach ($property as $item)
                        @if ($count < 24)
                             @if (str_contains($item->images, 'StaticMap') != true && str_contains($item->images,
                                'static') != true) @if ($item->images->count() > 1)
                        @php
                            $id = @$item->areaOne->city->name . '-' . @$item->type . '-' . @$item->property_type . '-' . @$item->property_for . '-' . @$item->areaOne->name . '-' . @$item->areaTwo->name . '-' . $item->id;
                            $id = str_replace(str_split('\\/:*?"<>|()'), '-', strtolower($id));
                            $id = str_replace(str_split(' '), '_', strtolower($id));
                            $id = strtolower($id);
                        @endphp

                        <li>
                            <div>
                                <!-- card start -->
                                <a href="{{ route('single.property', $id) }}" class="card_main_div text-decoration-none">

                                    @if (!$item->images->isEmpty())
                                    <img src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ @$item->images[0]->name }}"
                                        class="propertyImg" alt="" />
                                        @else
                                        <img
                                        src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                                        alt="" class="slideImg">
                                        @endif


                                    <p class="mb-0"> {{ $item->type }} </p>
                                    <b>
                                        {{ $item->property_for }} in
                                        {{ optional($item->areaTwo)->name }},
                                        {{ optional($item->areaOne)->name }}
                                    </b>
                                    <p>
                                        <b>
                                            @if ($item->price == null)
                                                <span style="background: red;" class="badge badge-pill badge-danger">On
                                                    Request</span>
                                            @else
                                                Rs: {{ convert_rupee($item->price) }}
                                            @endif
                                        </b>
                                    </p>
                                </a>
                                <!-- card end -->
                            </div>
                        </li>
                         @endif
                         @endif
                          @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="featured_project_main_div">
        <div class="fdiv">
            <div class="top">
                <p>Featured Projects</p>
                <!-- {/* <p>View All</p> */} -->
            </div>
            <div class="sdiv">
                <ul>
                    <li class="ml-0">
                        <!-- featured card start -->
                        <a href="" class="text-decoration-none">
                            <div class="featured_card_main_div">
                                <img src="{{ asset('assets/welcomeCenter.webp') }}" class="propertyImg" alt="" />
                                <p class="mb-0">Karachi</p>
                                <b> Welcome Center </b>
                                <p>
                                    <small> Highway Developers and Builders </small>
                                </p>
                            </div>
                        </a>
                        <!-- featured card end -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>


    @include('layouts.mobile.footer')
@endsection
