@extends('layouts.master')

@section('style')
    <style>
        * {
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .hero_container {
            background-image: radial-gradient(circle, #0071d8, #0364c0, #0558a9, #074c92, #08407c);
            height: 600px;
            width: 100%;
        }

        .search_cont {
            max-width: 600px;
        }

        select:focus {
            outline: none;
        }

        .vc_single_image-wrapper {
            border-radius: 100%;
            padding: 30px;
            background: #1e2432;
            width: 120px;
            height: 120px;
        }

        @media screen and (max-width: 575px) {
            .hero_container {
                height: 450px;
            }
        }

    </style>
@endsection

@section('content')
    <div class="hero_container w-100 d-flex justify-content-center align-items-center">
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
            <div class="search_cont w-100">
                <h1 class="text-center">Find a Professional</h1>
                <p class="text-center">Find and book the best professional near you</p>
                <div class="mb-3 d-flex flex-column flex-sm-row w-100">

                    <input list="service" style="outline: none" class="w-100 py-1 rounded-3 px-2 border border-dark border-1 mb-2 mb-sm-0">
                    <datalist  id="service">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                    </datalist>

                    <select name="" id=""
                        class="w-100 py-1 rounded-3 px-2 border border-dark border-1 mb-2 mb-sm-0 ms-0 ms-sm-3">
                        <option value="">City</option>
                        <option value="">City</option>
                    </select>
                    <select name="" id="" class="w-100 py-1 rounded-3 px-2 border border-dark border-1 ms-0 ms-sm-3">
                        <option value="">Area</option>
                        <option value="">Area</option>
                    </select>
                </div>
                <div class="w-100">
                    <button class="bg-dark w-100 border-0 text-white py-2 small rounded-3">Search Professionals</button>
                </div>
            </div>
        </div>
    </div>

    <div style="max-width: 1200px; margin: auto;" class="d-flex justify-content-center align-items-center mt-5">
        <div class="container-fluid h-100">
            <h1 class="text-center">What do you need to be done?</h1>
            <div class="row mt-5">
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <div
                        class="vc_single_image-wrapper   vc_box_border_grey d-flex justify-content-center align-items-center">
                        <img width="66" height="66" src="https://zarea.pk/wp-content/uploads/2021/05/Group-1517.png"
                            class="vc_single_image-img attachment-full woodmart-lazy-load woodmart-lazy-fade woodmart-loaded"
                            alt="" loading="lazy" data-wood-src="https://zarea.pk/wp-content/uploads/2021/05/Group-1517.png"
                            srcset="">
                    </div>
                    <p class="ms-4 mt-2">Architects</p>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <div
                        class="vc_single_image-wrapper   vc_box_border_grey d-flex justify-content-center align-items-center">
                        <img width="82" height="58" src="https://zarea.pk/wp-content/uploads/2021/05/Group-1518.png"
                            class="vc_single_image-img attachment-full woodmart-lazy-load woodmart-lazy-fade woodmart-loaded"
                            alt="" loading="lazy" data-wood-src="https://zarea.pk/wp-content/uploads/2021/05/Group-1518.png"
                            srcset="">
                    </div>
                    <p class="ms-4 mt-2">Designers</p>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <div
                        class="vc_single_image-wrapper   vc_box_border_grey d-flex justify-content-center align-items-center">
                        <img width="78" height="66" src="https://zarea.pk/wp-content/uploads/2021/05/Group-1519.png"
                            class="vc_single_image-img attachment-full woodmart-lazy-load woodmart-lazy-fade woodmart-loaded"
                            alt="" loading="lazy" data-wood-src="https://zarea.pk/wp-content/uploads/2021/05/Group-1519.png"
                            srcset="">
                    </div>
                    <p class="ms-4 mt-2">Carpenters</p>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <div
                        class="vc_single_image-wrapper   vc_box_border_grey d-flex justify-content-center align-items-center">
                        <img width="64" height="64" src="https://zarea.pk/wp-content/uploads/2021/05/Group-1520.png"
                            class="vc_single_image-img attachment-full woodmart-lazy-load woodmart-lazy-fade woodmart-loaded"
                            alt="" loading="lazy" data-wood-src="https://zarea.pk/wp-content/uploads/2021/05/Group-1520.png"
                            srcset="">
                    </div>
                    <p class="ms-4 mt-2">Flooring</p>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <div
                        class="vc_single_image-wrapper   vc_box_border_grey d-flex justify-content-center align-items-center">
                        <img width="42" height="65"
                            src="https://zarea.pk/wp-content/uploads/2021/05/Engineer-Avatar-Worker-Occupation-Man.png"
                            class="vc_single_image-img attachment-full woodmart-lazy-load woodmart-lazy-fade woodmart-loaded"
                            alt="" loading="lazy"
                            data-wood-src="https://zarea.pk/wp-content/uploads/2021/05/Engineer-Avatar-Worker-Occupation-Man.png"
                            srcset="">
                    </div>
                    <p class="ms-4 mt-2">Contractors</p>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                    <div
                        class="vc_single_image-wrapper   vc_box_border_grey d-flex justify-content-center align-items-center">
                        <img width="60" height="68" src="https://zarea.pk/wp-content/uploads/2021/05/Group.png"
                            class="vc_single_image-img attachment-full woodmart-lazy-load woodmart-lazy-fade woodmart-loaded"
                            alt="" loading="lazy" data-wood-src="https://zarea.pk/wp-content/uploads/2021/05/Group.png"
                            srcset="">
                    </div>
                    <p class="ms-4 mt-2">Painters</p>
                </div>
            </div>
        </div>
    </div>
@endsection
