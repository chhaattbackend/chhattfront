@extends('layouts.master')
@section('style')
    <title>Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com</title>
    <meta name="title" content="Buy and Sell Property on Pakistan’s Best Real Estate Portal | Chhatt.com">
    <meta name="description"
        content="Buy rent and sell your properties with Pakistan's best real estate portal at Chhatt.com. Find property dealers, developers and best property agents visit our website">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/property/single.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/zoom-main.css') }}" />
    <!-- EXTERNAL LINKS START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- image gallery start -->
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Fotorama from CDNJS, 19 KB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script>
        src = "public/js/zoom-image.js"
    </script>
    <script>
        src = "public/js/zoom-main.js"
    </script>
    <style>
        .help-block {
            color: red
        }

        .zoom {
            /* padding: 20px; */
            /* background-color: rgba(57, 65, 57, 0.151); */
            transition: transform .2s;
            /* Animation */
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(2.0);
            /* (150% zoom)*/
        }

        * {
            box-sizing: border-box;
        }

        * {
            box-sizing: border-box;
        }

        .img-zoom-container {
            position: relative;
        }

        .img-zoom-lens {
            position: relative;
            border: 1px solid #d4d4d4;
            margin-top: 50px;
            /*set the size of the lens:*/
            width: 40px;
            height: 40px;
        }

        .img-zoom-result {
            border: 1px solid #d4d4d4;
            /*set the size of the result div:*/
            width: 400px;
            height: 500px;
            margin-top: 180px;
            margin-right: 60px;

        }

        #preview {
            margin-top: 10px;
            border: 1px solid black;
            width: 350px;
            height: 500px;
            background-repeat: no-repeat;
            margin-left: auto;
            margin-right: auto;
        }

        #samples {
            text-align: center;
        }

        #samples img {
            margin: 10px;
            display: block;
            border: 2px solid #6A6462;
        }

        #samples img:hover {
            cursor: zoom-in;
            border: 0;
            -moz-box-shadow: 2px 2px 7px 2px rgba(130, 130, 130, 1), -1px -1px 7px 2px rgba(130, 130, 130, 1);
            -webkit-box-shadow: 2px 2px 7px 2px rgba(130, 130, 130, .7), -1px -1px 7px 2px rgba(130, 130, 130, 1);
            box-shadow: 2px 2px 7px 2px rgba(130, 130, 130, .7), -2px -2px 7px 2px rgba(130, 130, 130, 1);
        }

        @media screen and (max-width: 767px) {
            #samples img {
                display: inline-block;
            }
        }

    </style>

@endsection
@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Maps</h1>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>
                    {{ $maps[0]->name }}
                </h2>

            </div>

        </div>

    </div>

    <div class="mapImage">
        <div class="img-zoom-container" href="">
            <div class="row">
                <div class="col-md-7">

                    <div class="mt-5" data-nav="thumbs" data-width="70%" data-allowfullscreen="true"
                        style="margin-left: 5%">

                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/maps/{{ $maps[0]->image }}"
                              id="myimage" alt="" class="" width="
                            800" height="800">

                        {{-- <a href="">
                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/maps/{{ $maps->image }}"
                            width="800px" height="800px">
                    </a> --}}

                    </div>
                </div>
                <div class="col-md-5">
                    <div id="myresult" class="img-zoom-result"></div>


                </div>
            </div>


        </div>

        <!-- Add images to <div class="fotorama"></div> -->
    </div>
    <script>
        function imageZoom(imgID, resultID) {
            var img, lens, result, cx, cy;
            img = document.getElementById(imgID);
            result = document.getElementById(resultID);
            /* Create lens: */
            lens = document.createElement("DIV");
            lens.setAttribute("class", "img-zoom-lens");
            /* Insert lens: */
            img.parentElement.insertBefore(lens, img);
            /* Calculate the ratio between result DIV and lens: */
            cx = 100 / lens.offsetWidth;
            cy = 100 / lens.offsetHeight;
            /* Set background properties for the result DIV */
            result.style.backgroundImage = "url('" + img.src + "')";
            result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
            /* Execute a function when someone moves the cursor over the image, or the lens: */
            lens.addEventListener("mousemove", moveLens);
            img.addEventListener("mousemove", moveLens);
            /* And also for touch screens: */
            lens.addEventListener("touchmove", moveLens);
            img.addEventListener("touchmove", moveLens);

            function moveLens(e) {
                var pos, x, y;
                /* Prevent any other actions that may occur when moving over the image */
                e.preventDefault();
                /* Get the cursor's x and y positions: */
                pos = getCursorPos(e);
                /* Calculate the position of the lens: */
                x = pos.x - (lens.offsetWidth / 2);
                y = pos.y - (lens.offsetHeight / 2);
                /* Prevent the lens from being positioned outside the image: */
                if (x > img.width - lens.offsetWidth) {
                    x = img.width - lens.offsetWidth;
                }
                if (x < 0) {
                    x = 0;
                }
                if (y > img.height - lens.offsetHeight) {
                    y = img.height - lens.offsetHeight;
                }
                if (y < 0) {
                    y = 0;
                }
                /* Set the position of the lens: */
                lens.style.left = x + "px";
                lens.style.top = y + "px";
                /* Display what the lens "sees": */
                result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
            }

            function getCursorPos(e) {
                var a, x = 0,
                    y = 0;
                e = e || window.event;
                /* Get the x and y positions of the image: */
                a = img.getBoundingClientRect();
                /* Calculate the cursor's x and y coordinates, relative to the image: */
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /* Consider any page scrolling: */
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {
                    x: x,
                    y: y
                };
            }
        }

        function zoomIn(params) {
            var pre = document.getElementById("myresult");
            pre.style.visibility = "visible";
            if ($('#myimage').is(':hover')) {
                var img = document.getElementById("myimage");
                pre.style.backgroundImage = "url('pic1.jpg')";
            }

            var posX = event.offsetX;
            var posY = event.offsetY;
            pre.style.backgroundPosition = (-posX * 2.5) + "px " + (-posY * 5.5) + "px";


        }
    </script>
    <script>
        imageZoom("myimage", "myresult");
    </script>

@endsection
