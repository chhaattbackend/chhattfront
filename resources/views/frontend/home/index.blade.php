@extends('layouts.master')

@section('content')


    <div class="pageContainer">

        <div class="container-fluid">
            <!-- TW CARDS START -->
            <div class="twoCards mt-5 text-center">
                <h2 class="fw-bolder">Find the Business in town</h2>
                <div class="mt-5 d-flex justify-content-center">
                    <div>
                        <div class="card1">
                            <a href="#">
                                <img src="assets/propertyhigh.webp" alt="propertyhigh">
                            </a>
                            <a href="">
                            </a>
                        </div>
                        <a class="mt-5 text-decoration-none text-dark" href="">
                            <h4 class="mt-2 fw-bold">Realtor</h4>
                        </a>
                    </div>
                    <div>
                        <div class="card2 ms-4">
                            <a href="#">
                                <img src="assets/realtorhigh.webp" alt="propertyhigh">
                            </a>
                            <a href="">
                            </a>
                        </div>
                        <a class="text-decoration-none text-dark" href="">
                            <h4 class="mt-2 fw-bold">Property</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!-- TW CARDS END -->
            <br>
            <hr>
            <br>

            <!-- BEST PROPERTY START -->
            <div>
                <div class="d-flex justify-content-between">
                    <h2 class="fw-bold">Best properties for you</h2>
                    <div class="d-flex">
                        <div>
                            <button class="themebtn text-white px-3 py-1">All</button>
                            <button class="themebtnUnPressed px-3 py-1 ms-1">Residential</button>
                            <button class="themebtnUnPressed px-3 py-1 ms-1">Commercial</button>
                            <button class="themebtnUnPressed px-3 py-1 ms-1">Industrial</button>
                        </div>
                        <div class="ms-4">
                            <button class="themebtn2 px-3 py-1 ms-1">View all</button>
                        </div>
                    </div>
                </div>
                <div class="position-relative mt-5">
                    <div class="sliderBtnLeft text-right m-auto">
                        <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
                    </div>
                    <!--image allary list-->
                    <ul id="box-wrapper" class="boxWrapper ps-0">
                        <!--apply loop on this li-->
                        
                        <li class="scroll-img-list ms-3 me-1 p-2">
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
                        </li>
                        <li class="scroll-img-list ms-3 me-1 p-2">
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
                        </li>
                        <li class="scroll-img-list ms-3 me-1 p-2">
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
                        </li>
                        <li class="scroll-img-list ms-3 me-3 p-2">
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
                        </li>
                    </ul>
                    <div class="sliderBtnRight col-1 m-auto">
                        <i class="scroll-right bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
            </div>
            <!-- BEST PROPERTY END -->
        </div>
    </div>



    @include('layouts.explorer')
    <br>
    @include('layouts.textcontent')
    @include('layouts.twocard')

@endsection

