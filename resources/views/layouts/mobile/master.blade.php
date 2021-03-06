<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ URL::asset('assets/favicon.ico') }}" type="image/x-icon" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#007BFF" />

    @yield('style')
    <link rel="stylesheet" type="text/css" href="./mobile/index.css" />
    @if (isset($search))
        <link rel="stylesheet" href="{{ asset('mobile/autoInp.css') }}">
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./assets/fonticons/font/flaticon.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">
</head>

<body>

    <div id="mobile">
        <!-- header start -->
        <div class="mobile_home_main_div position-relative" @if (isset($search)) style="padding-bottom: 35px !important" @endif>
            @if (isset($search))
                <div class="search_inp">
                    <!-- <div class="autoComplete_wrapper"> -->
                    <input style="margin-top: 8px; height: 100% !important; padding-left: 2rem !important; background: transparent"
                        id="autoComplete" autocomplete="off" type="text" width="100%" tabindex="1" class="border-0" />
                    <!-- </div> -->

                    <svg id="srchIcn" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                        class="srchIcn">
                        <path fill="#007bff"
                            d="M17.415 16.385l-4.282-4.453c1.1-1.308 1.704-2.955 1.704-4.669C14.837 3.258 11.58 0 7.574 0S.31 3.258.31 7.263s3.258 7.263 7.263 7.263c1.503 0 2.936-.453 4.161-1.314l4.314 4.487c.18.187.423.29.683.29.246 0 .48-.094.656-.264.377-.362.389-.963.027-1.34zM7.574 1.895c2.96 0 5.368 2.408 5.368 5.368 0 2.96-2.408 5.369-5.368 5.369-2.96 0-5.369-2.409-5.369-5.369s2.409-5.368 5.369-5.368z">
                        </path>
                    </svg>

                    <i onclick="changeFunc(event)" id="micIcn" class="bi bi-arrow-up-right-square-fill"
                        style="color: #007bff; font-size: 1.2rem"></i>
                </div>
            @endif
            <a href='{{ route('home') }}'>
                <img src="{{ asset('assets/logow.png') }}" width='90px' alt='logo' />
            </a>
            <svg href="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>

        </div>

        <!-- header end -->

        <!-- featured project end -->

        <!-- mobile footer start -->
        @yield('content')
        <!-- mobile footer end-->
    </div>

    <!-- bottom navigation start -->
    <div class="nav_container">
        <div class="main_container">
            <div class="navigation_main_div">
                <a href="{{ route('home') }}" class="text-decoration-none">
                    <div class="each_navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" height="22" viewBox="0 1 511 511.999"
                            width="22">
                            <path
                                d="m498.699219 222.695312c-.015625-.011718-.027344-.027343-.039063-.039062l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.808594-33.328126-13.808594-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.144532.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.441406 13.234375 31.273437 13.746093.484375.046876.96875.070313 1.457031.070313h8.320313v153.695313c0 30.417968 24.75 55.164062 55.167969 55.164062h81.710937c8.285157 0 15-6.71875 15-15v-120.5c0-13.878906 11.292969-25.167969 25.171875-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.28125 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.164062v-153.695313h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.8125 18.359375-18.367187 18.367187-48.253906.027344-66.632813zm-21.242188 45.421876c-3.238281 3.238281-7.542969 5.023437-12.117187 5.023437h-22.71875c-8.285156 0-15 6.714844-15 15v168.695313c0 13.875-11.289063 25.164062-25.167969 25.164062h-66.710937v-105.5c0-30.417969-24.746094-55.167969-55.167969-55.167969h-48.195313c-30.421875 0-55.171875 24.75-55.171875 55.167969v105.5h-66.710937c-13.875 0-25.167969-11.289062-25.167969-25.164062v-168.695313c0-8.285156-6.714844-15-15-15h-22.328125c-.234375-.015625-.464844-.027344-.703125-.03125-4.46875-.078125-8.660156-1.851563-11.800781-4.996094-6.679688-6.679687-6.679688-17.550781 0-24.234375.003906 0 .003906-.003906.007812-.007812l.011719-.011719 208.847656-208.839844c3.234375-3.238281 7.535157-5.019531 12.113281-5.019531 4.574219 0 8.875 1.78125 12.113282 5.019531l208.800781 208.796875c.03125.03125.066406.0625.097656.09375 6.644531 6.691406 6.632813 17.539063-.03125 24.207032zm0 0" />
                        </svg>
                        <h6>Home</h6>
                    </div>
                </a>
                <a href="{{ route('property') }}" class="text-decoration-none">
                    <div class="each_navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#007bff" viewBox="0 0 512 512"
                            width="25">
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
                        <h6>Property</h6>
                    </div>
                </a>

                <a href="{{ route('invest') }}" class="text-decoration-none">
                    <div class="each_navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" id="Layer_5"
                            enable-background="new 0 0 64 64" height="25" viewBox="0 0 64 64" width="25">
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
                        <h6>Construction</h6>
                    </div>
                </a>

                <a href="{{ route('filter', 'buy') }}" class='text-decoration-none'>
                    <div class="each_navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" height="25" viewBox="0 0 512 512"
                            width="30">
                            <path
                                d="m201 351.924a150.676 150.676 0 0 0 92.363-31.459l14.974 14.975-7.76 7.761a6 6 0 0 0 0 8.485l99.723 99.729a36.142 36.142 0 1 0 51.115-51.115l-99.729-99.728a6 6 0 0 0 -8.485 0l-7.761 7.76-14.975-14.974c45.82-59.179 41.588-144.851-12.7-199.135-58.865-58.871-154.665-58.871-213.539.003s-58.874 154.669 0 213.543a150.529 150.529 0 0 0 106.774 44.155zm241.931 56.865a24.141 24.141 0 0 1 -34.14 34.14l-66.316-66.316 34.14-34.14zm-95.488-95.489 20.685 20.684-34.141 34.141-20.687-20.682zm-20.488 3.518-10.134 10.134-14.242-14.242q2.637-2.4 5.19-4.944t4.944-5.19zm-224.244-214.107a139.157 139.157 0 0 1 196.573 0c54.195 54.2 54.195 142.377 0 196.573s-142.377 54.195-196.573 0-54.195-142.377 0-196.573z" />
                            <path
                                d="m114.806 169.826a6 6 0 0 0 -7.466 4.032 102.761 102.761 0 0 0 7.485 76.811 6 6 0 0 0 10.611-5.606 90.662 90.662 0 0 1 -6.6-67.771 6 6 0 0 0 -4.03-7.466z" />
                            <path
                                d="m128.005 156.613c1.4-2.3 2.915-4.571 4.515-6.737a6 6 0 1 0 -9.653-7.128c-1.816 2.459-3.54 5.031-5.124 7.646a6 6 0 1 0 10.262 6.219z" />
                            <path
                                d="m201.035 324.931a123.735 123.735 0 0 0 87.732-36.258c48.344-48.344 48.4-127.006.056-175.351a122.27 122.27 0 0 0 -57.385-32.57 6 6 0 0 0 -7.438 5.828v.048a6.012 6.012 0 0 0 4.544 5.812 113.689 113.689 0 0 1 51.794 29.368c43.665 43.665 43.59 114.714-.075 158.38a112.166 112.166 0 0 1 -158.418 0c-43.665-43.666-43.533-114.715.132-158.38a109.907 109.907 0 0 1 66.623-32.043 6 6 0 1 0 -1.262-11.926 122.08 122.08 0 0 0 -73.865 35.483c-48.344 48.345-48.419 127.007-.076 175.351a123.524 123.524 0 0 0 87.638 36.258z" />
                        </svg>
                        <h6>Search</h6>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <!-- bottom navigation end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/autoComplete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @yield('personalscripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    @if (isset($search))
        <script>
            // slick slider start
            $('.slider').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                responsive: [{
                        breakpoint: 1300,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: false
                        }
                    },
                ]
            });

            // == SEARCH AREA DROPDOWN START
            var areas;
            const autoCompleteJS = new autoComplete({
                data: {
                    src: async () => {
                        try {
                            // Loading placeholder text
                            document
                                .getElementById("autoComplete")
                                .setAttribute("placeholder", "Loading...");
                            // Fetch External Data Source
                            const source = await fetch(
                                "{{ route('construction.searchsuggestions') }}"
                            );
                            areas = await source.json();
                            // Post Loading placeholder text
                            document
                                .getElementById("autoComplete")
                                .setAttribute("placeholder", autoCompleteJS.placeHolder);
                            // Returns Fetched data
                            // console.log(areas);
                            return areas;
                        } catch (error) {
                            return error;
                        }
                    },
                    keys: ["name"],
                    cache: true,
                    filter: (list) => {
                        // Filter duplicates
                        // incase of multiple data keys usage
                        const filteredResults = Array.from(
                            new Set(list.map((value) => value.match))
                        ).map((food) => {
                            return list.find((value) => value.match === food);
                        });
                        return filteredResults;
                    }
                },
                placeHolder: "Search Your Desire Item",
                resultsList: {
                    element: (list, data) => {
                        const info = document.createElement("p");
                        if (data.results.length > 0) {
                            info.innerHTML = `Displaying <strong>${data.matches.length}</strong> results`;
                        } else {
                            info.innerHTML =
                                `Found <strong>${data.matches.length}</strong> matching results for <strong>"${data.query}"</strong>`;
                        }
                        list.prepend(info);
                    },
                    noResults: true,
                    maxResults: 10000,
                    tabSelect: true
                },
                resultItem: {
                    element: (item, data) => {
                        // console.log(data);
                        // Modify Results Item Style
                        item.style = "display: flex; justify-content: space-between;";
                        // Modify Results Item Content
                        item.innerHTML = `
     <span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
       ${data.match}
     </span>
     <span style="margin-left:15px;display:inline-block;width:160px;text-align:right;align-items: center; font-size: 13px; font-weight: 100; text-transform: uppercase; color: rgba(0,0,0,.2); text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
       ${data.value.from}
     </span>`;
                    },
                    highlight: true
                },
                events: {
                    input: {
                        selection: (e) => {
                            const selection = e.detail.selection.value;
                            autoCompleteJS.input.value = selection.name;
                        },
                        focus: () => {
                            if (autoCompleteJS.input.value.length) autoCompleteJS.start();
                        }
                    }
                }
            });

            // SUBMIT START
            function changeFunc(e) {
                e.preventDefault()
                const inpVal = document.getElementById("autoComplete");

                var url = '{{ route('construction.search', 'searched=:key') }}';
                key = inpVal.value
                url = url.replace(':key', key);
                document.location.href = url;

                // if (areas) {
                //     const filteredArea = areas.data.filter((prev) => prev.name === inpVal.value)
                //     if (filteredArea.length) {} else {
                //         // console.log(inpVal.value)
                //     }
                // } else {
                //     // console.log("error")
                // }
            }
            // SUBMIT END
            // == SEARCH AREA DROPDOWN END\

            // PROPERTY CAROUSEL START
            var scrolled = 0;
            $(".scroll-left").on("click", function() {
                scrolled = scrolled - 300;
                $("#box-wrapper").animate({
                    scrollLeft: scrolled,
                });
            });
            $(".scroll-right").on("click", function() {
                scrolled = scrolled + 300;
                $("#box-wrapper").animate({
                    scrollLeft: scrolled,
                });
            });
            // PROPERTY CAROUSEL END

            // == EXPLORE CAROUSEL START
            var scrolled = 0;
            $(".scroll-leftExplore").on("click", function() {
                scrolled = scrolled - 300;
                $("#box-wrapperExplore").animate({
                    scrollLeft: scrolled,
                });
            });
            $(".scroll-rightExplore").on("click", function() {
                scrolled = scrolled + 300;
                $("#box-wrapperExplore").animate({
                    scrollLeft: scrolled,
                });
            });
            // slick slider end
        </script>
    @endif



</body>

</html>
