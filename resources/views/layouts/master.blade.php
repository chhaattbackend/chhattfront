<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#007BFF" />

    @yield('style')
    <link rel="stylesheet" type="text/css" href="./styles/index.css" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <div id="root">
        <!-- HEADER START -->
        @include('layouts.header')
        <!-- HEADER END -->
        @yield('content')



        <br />

        <!-- explorer start -->
        {{-- @include('layouts.explorer') --}}


        <!-- explorer end -->
        {{-- <br /> --}}
        <!-- == TEXT CONTENT START == -->
        {{-- @include('layouts.twocard') --}}
        {{-- @include('layouts.textcontent') --}}

        <!-- == TEXT CONTENT END == -->



    </div>


    <!-- two-cards start -->

    <!-- tow cards end -->

    <!-- == NEWSLETTER START == -->

    <!-- == NEWSLETTER END == -->


    <!-- footr start -->
    @include('layouts.footer')

    <!-- footr end -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script>
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

        var scrolled = 0;
        $(".scroll-left2").on("click", function() {
            scrolled = scrolled - 300;
            $("#box-wrapper2").animate({
                scrollLeft: scrolled,
            });
        });
        $(".scroll-right2").on("click", function() {
            scrolled = scrolled + 300;
            $("#box-wrapper2").animate({
                scrollLeft: scrolled,
            });
        });
        var scrolled = 0;
        $(".scroll-left2").on("click", function() {
            scrolled = scrolled - 300;
            $("#box-wrapper2").animate({
                scrollLeft: scrolled,
            });
        });
        $(".scroll-right2").on("click", function() {
            scrolled = scrolled + 300;
            $("#box-wrapper2").animate({
                scrollLeft: scrolled,
            });
        });

    </script>
</body>

</html>
