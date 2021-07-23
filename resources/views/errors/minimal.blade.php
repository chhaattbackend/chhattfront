<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#007BFF" />



    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/mediaquery.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./assets/fonticons/font/flaticon.css" />


    <style id="" media="all">
        /* cyrillic-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gTD_u50.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3g3D_u50.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gbD_u50.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gfD_u50.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gnD_g.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        body {
            padding: 0;
            margin: 0
        }

        #notfound {
            position: relative;
            height: 40vh
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .notfound {
            max-width: 520px;
            width: 100%;
            line-height: 1.4;
            text-align: center
        }

        .notfound .notfound-404 {
            position: relative;
            height: 200px;
            margin: 0 auto 20px;
            z-index: -1
        }

        .notfound .notfound-404 h1 {
            font-family: montserrat, sans-serif !important;
            font-size: 236px;
            font-weight: 200;
            margin: 0;
            color: #211b19;
            text-transform: uppercase;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .notfound .notfound-404 h2 {
            font-family: montserrat, sans-serif;
            font-size: 28px;
            font-weight: 400;
            text-transform: uppercase;
            color: #211b19;
            background: #fff;
            padding: 10px 5px;
            margin: auto;
            display: inline-block;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0
        }

        .notfound a {
            font-family: montserrat, sans-serif;
            display: inline-block;
            font-weight: 700;
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            padding: 13px 23px;
            background: #ff6300;
            font-size: 18px;
            -webkit-transition: .2s all;
            transition: .2s all
        }

        .notfound a:hover {
            color: #ff6300;
            background: #211b19
        }

        @media only screen and (max-width:767px) {
            .notfound .notfound-404 h1 {
                font-size: 148px
            }
        }

        @media only screen and (max-width:480px) {
            .notfound .notfound-404 {
                height: 148px;
                margin: 0 auto 10px
            }

            .notfound .notfound-404 h1 {
                font-size: 86px
            }

            .notfound .notfound-404 h2 {
                font-size: 16px
            }

            .notfound a {
                padding: 7px 15px;
                font-size: 14px
            }
        }

    </style>



</head>

<body>
    <div>
        <header id="sctop">
            <div class="main_div" id="head1">
                <div class="s_div navbarContainer">
                    <div class="innerContainer">
                        <div class="logo" id="lgo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/logow.png') }}" alt="home" />
                            </a>
                        </div>
                        <div class="tabss">
                            
                            <p></p>
                            <ul>
                                <a class="text-decoration-none" href="{{ route('home') }}">
                                    <li id="home" style="color: #fff" @if (Route::current()->getName() == 'home') class="activeNav" @endif class="lif">
                                        <span>Home</span>
                                    </li>
                                </a>
                                <a class="text-decoration-none" href="{{ route('property') }}">
                                    <li id="property" style="color: #fff" @if (Route::current()->getName() == 'property' || Route::current()->getName() == 'explorer.search' || Route::current()->getName() == 'property.search' || Route::current()->getName() == 'single.property') class="activeNav" @endif class="lis">
                                        <span>Property</span>
                                    </li>
                                </a>
                                <a class="text-decoration-none" href="{{ route('construction.home') }}">
                                    <li id="home" style="color: #fff" @if (Str::contains(Route::current()->getName(), 'construction')) class="activeNav" @endif class="lis">
                                        <span>Construction Material</span>
                                    </li>
                                </a>

                                <a class="text-decoration-none" href="{{ route('agency') }}">

                                    <li id="agencies" style="color: #fff" @if (Route::current()->getName() == 'agency' || Route::current()->getName() == 'single.agency') class="activeNav" @endif class="lis">
                                        <span>Agencies</span>
                                    </li>
                                </a>

                                <a class="text-decoration-none" href="{{ route('contact') }}">
                                    <li id="contact" style="color: #fff" @if (Route::current()->getName() == 'contact') class="activeNav" @endif class="lis">
                                        <span>Contact Us</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mn_divz">
                <div class="backgz">
                    <div class="backg_sdivz">
                    </div>
                </div>
            </div>
        </header>
        <br />
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>Oops!</h1>
                    <h2>@yield('code') - @yield('message')</h2>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    </div>
</body>

</html>
