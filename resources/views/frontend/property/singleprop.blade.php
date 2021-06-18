@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/property/single.css') }}" />
    <!-- EXTERNAL LINKS START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  </link>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <!-- image gallery start -->
  <!-- jQuery 1.8 or later, 33 KB -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Fotorama from CDNJS, 19 KB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
  <!-- image gallery end -->
  <!-- EXTERNAL LINKS END -->
@endsection
@section('headercontent')
<div class="mn_divz">
      <div class="backgz">
        <div class="backg_sdivz">
          <h1>heading</h1>
        </div>
      </div>
    </div>
@endsection
@section('content')
<!-- breadcrumbs start -->
<div class="breadcrumbs_main_div">
    <div class="inner_div">
      <div>
        <a href="" title="Chhatt"> Chhatt </a>
        &nbsp;
        <a title="" href="">lol </a>
        &nbsp;
        <a title="" href=""> lol </a>
        &nbsp;
        <a title="" href=""> lol </a>
        <a title="" to=""> lol </a>
        <a title="" to=""> lol </a>
        &nbsp;
      </div>
      <div class="share_div">
        <Share />
        <!--  <button>
            <MdFavoriteBorder /> Favorite
          </button>  -->
        <!--  <button>Print</button>  -->
      </div>
    </div>
    <hr />
  </div>
  <!-- breadcrumbs end -->
        <!-- image gallery start -->
  <div class="image_gallery_maindiv">
    <div class="slider">
      <div class="mapImage">
        <h3> Hello world </h3>
        <!-- Add images to <div class="fotorama"></div> -->
        <div class="fotorama mt-5" data-nav="thumbs" data-width="100%" data-allowfullscreen="true">
          <!-- ↑ The same as data-ratio="4/3"
       or data-ratio="1.3333333333". -->
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
          <a href="https://s.fotorama.io/1.jpg"><img src="https://s.fotorama.io/1.jpg" width="130" height="96"></a>
        </div>
        <!-- Add images to <div class="fotorama"></div> -->
      </div>

      <!-- OVERVIEW START -->
      <div class="overViewContainer">
        <h3>Overview</h3>
        <div class="overviewItems">
          <div>
            <h5>Type</h5>
            <h4>
              Flat
            </h4>
          </div>
          <span></span>
          <div>
            <h5>Price</h5>
            <h4>
              PKR 500 </h4>
          </div>
          <span></span>
          <div>
            <h5>Area</h5>
            <h4>
              100
            </h4>
          </div>
          <span></span>
          <div>
            <h5>Purpose</h5>
            <h4>
              buy
            </h4>
          </div>
          <span></span>
          <div>
            <h5>Bedroom(s)</h5>
            <h4>
              5
            </h4>
          </div>
          <span></span>
          <div>
            <h5>Bath(s)</h5>
            <h4>
              5
            </h4>
          </div>
        </div>
      </div>
      <!-- OVERVIEW END -->
      <!-- DESCRIPTION START -->
      <div class="descriptionContainer">
        <h3> Description </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptate molestiae eum nisi deleniti quia
          itaque nulla nam dolorum omnis?</p>
      </div>
      <!-- DESCRIPTION END -->

      <!-- MAP START -->
      <div class="mapContainer">
        <h3> Google Map </h3>
        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462116.6683962556!2d66.87527626848234!3d25.193559924666214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1623671736343!5m2!1sen!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <!-- MAP END -->
    </div>


    <!-- {/* HIDDEN FOR MAP PAGE START */} -->

    <!--  HIDDEN FOR MAP PAGE END  -->
    <div class="formContainer">
      <!--  HIDDEN FOR MAP PAGE START  -->
      <div class='saleTagContainer'>
        <h2>
          property
        </h2>
        <h2>
          PKR: 500
        </h2>
        <p>
          Address
        </p>
      </div>
      <br />
      <!--  HIDDEN FOR MAP PAGE END  -->
      <div class="contactContainer">
        <h2>Contact Us</h2>
        <Button class="showNumber">
          268445848484
        </Button>
        <hr />
        <div class="innerContactform">
          <form>
            <input class="inpC" type="text" placeholder="Name" />
            <br />
            <input class="inpC mt-4" type="text" name="email" placeholder="Email" />
            <br />
            <textarea rows="5"></textarea>
            <br />
            <Button type="submit">
              <MdEmail class="text-white" style="font-size: 17px" />
              &nbsp;Submit
            </Button>
          </form>
        </div>
      </div>

      <br />
      <!--  <LoginForm />  -->
    </div>
  </div>
  <!-- BEST PROPERTY START -->
  <div class="relatedProperties">
    <br />
    <hr />
    <div class="d-flex justify-content-between">
      <h2 class="fw-bold">Related Properties</h2>
      <div class="d-flex">
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
              <img class="slideImg" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                alt="" />
            </div>
            <div class="text-dark paraContainer">
              <div class="mt-1">
                <div class="d-flex justify-content-between">
                  <h6 class="lightColor">Karachi</h6>
                </div>
                <div class="mt-2">
                  <strong class="mt-5">Welcome Center</strong>
                </div>
                <h6 class="mt-2">
                  <strong>
                    Highway developers and builders
                  </strong>
                </h6>
              </div>
            </div>
          </a>
        </li>
        <li class="scroll-img-list ms-3 me-1 p-2">
          <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">
              <img class="slideImg" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                alt="" />
            </div>
            <div class="text-dark paraContainer">
              <div class="mt-1">
                <div class="d-flex justify-content-between">
                  <h6 class="lightColor">Karachi</h6>
                </div>
                <div class="mt-2">
                  <strong class="mt-5">Welcome Center</strong>
                </div>
                <h6 class="mt-2">
                  <strong>
                    Highway developers and builders
                  </strong>
                </h6>
              </div>
            </div>
          </a>
        </li>
        <li class="scroll-img-list ms-3 me-1 p-2">
          <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">
              <img class="slideImg" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                alt="" />
            </div>
            <div class="text-dark paraContainer">
              <div class="mt-1">
                <div class="d-flex justify-content-between">
                  <h6 class="lightColor">Karachi</h6>
                </div>
                <div class="mt-2">
                  <strong class="mt-5">Welcome Center</strong>
                </div>
                <h6 class="mt-2">
                  <strong>
                    Highway developers and builders
                  </strong>
                </h6>
              </div>
            </div>
          </a>
        </li>
        <li class="scroll-img-list ms-3 me-1 p-2">
          <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">
              <img class="slideImg" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                alt="" />
            </div>
            <div class="text-dark paraContainer">
              <div class="mt-1">
                <div class="d-flex justify-content-between">
                  <h6 class="lightColor">Karachi</h6>
                </div>
                <div class="mt-2">
                  <strong class="mt-5">Welcome Center</strong>
                </div>
                <h6 class="mt-2">
                  <strong>
                    Highway developers and builders
                  </strong>
                </h6>
              </div>
            </div>
          </a>
        </li>
        <li class="scroll-img-list ms-3 me-1 p-2">
          <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">
              <img class="slideImg" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                alt="" />
            </div>
            <div class="text-dark paraContainer">
              <div class="mt-1">
                <div class="d-flex justify-content-between">
                  <h6 class="lightColor">Karachi</h6>
                </div>
                <div class="mt-2">
                  <strong class="mt-5">Welcome Center</strong>
                </div>
                <h6 class="mt-2">
                  <strong>
                    Highway developers and builders
                  </strong>
                </h6>
              </div>
            </div>
          </a>
        </li>
        <li class="scroll-img-list ms-3 me-1 p-2">
          <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">
              <img class="slideImg" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                alt="" />
            </div>
            <div class="text-dark paraContainer">
              <div class="mt-1">
                <div class="d-flex justify-content-between">
                  <h6 class="lightColor">Karachi</h6>
                </div>
                <div class="mt-2">
                  <strong class="mt-5">Welcome Center</strong>
                </div>
                <h6 class="mt-2">
                  <strong>
                    Highway developers and builders
                  </strong>
                </h6>
              </div>
            </div>
          </a>
        </li>
        <li class="scroll-img-list ms-3 me-1 p-2">
          <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">
              <img class="slideImg" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/74/dc/bb.jpg"
                alt="" />
            </div>
            <div class="text-dark paraContainer">
              <div class="mt-1">
                <div class="d-flex justify-content-between">
                  <h6 class="lightColor">Karachi</h6>
                </div>
                <div class="mt-2">
                  <strong class="mt-5">Welcome Center</strong>
                </div>
                <h6 class="mt-2">
                  <strong>
                    Highway developers and builders
                  </strong>
                </h6>
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
        <!-- EXTERNAL LINKS START -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="assets/js/index.js"></script>
        <!-- EXTERNAL LINKS END -->
        <script>
            // == CAROUSEL START
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
            // == CAROUSEL END
        </script>
    @endsection