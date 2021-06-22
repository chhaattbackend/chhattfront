<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#007BFF" />

    @yield('style')
    <link rel="stylesheet" type="text/css" href="./mobile/index.css" />
    {{-- <link rel="stylesheet" type="text/css" href="./styles/mediaquery.css" /> --}}
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./assets/fonticons/font/flaticon.css" />

</head>

<body>

    <div id="mobile">
        <!-- header start -->
        <div class="mobile_home_main_div">
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




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

    @yield('personalscripts')



</body>

</html>
