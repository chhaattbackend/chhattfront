<!-- explorer start -->
<div class="exp">
    <div class="sdiv">
      <div class="f_div">
        <h3>
          <b>Explore</b>
        </h3>
        <h3>
          <b>by Property Type</b>
        </h3>
        <!-- <br />  -->
        <!-- <button onClick={viewAll}>View All</button>  -->
      </div>
      <!-- property slider  -->
      <div class="mainSlide_Div">
        <div class="position-relative mt-5">
          <div class="sliderBtnLeft text-right m-auto">
            <i class="scroll-leftExplore h1 bi bi-chevron-left"></i>
          </div>
          <!--image allary list-->
          <ul id="box-wrapperExplore" class="boxWrapper ps-0">
            <!--apply loop on this li-->
            <a href="{{ route('explorer.search', ['property_type' => 'flat']) }}">
                <li class="scroll-img-list my-3 ms-3 me-1 py-4">
                  <i class="display-4 flaticon-flats"></i>
                  <h5>Flat</h5>
                </li>
            </a>

            <a href="{{ route('explorer.search', ['property_type' => 'villa']) }}">
                <li class="scroll-img-list my-3 ms-3 me-1 py-4">
                  <i class="display-4 flaticon-villa"></i>
                  <h5>Villa</h5>
                </li>
            </a>


            <a href="{{ route('explorer.search', ['property_type' => 'plot']) }}">

                <li class="scroll-img-list my-3 ms-3 me-1 py-4">
                  <i class="display-4 flaticon-building"></i>
                  <h5>Plot</h5>
                </li>
            </a>

            <a href="{{ route('explorer.search', ['property_type' => 'farm house']) }}">

                <li class="scroll-img-list my-3 ms-3 me-1 py-4">
                  <i class="display-4 flaticon-field"></i>
                  <h5>Farm House</h5>
                </li>
            </a>

            <a href="{{ route('explorer.search', ['property_type' => 'upper portion']) }}">

                <li class="scroll-img-list my-3 ms-3 me-3 py-4">
                  <i class="display-4 flaticon-building-1"></i>
                  <h5>Upper Portion</h5>
                </li>
            </a>

            <a href="{{ route('explorer.search', ['property_type' => 'lower portion']) }}">
                <li class="scroll-img-list my-3 ms-3 me-3 py-4">
                  <i class="display-4 flaticon-building-1"></i>
                  <h5>Lower Portion</h5>
                </li>
            </a>

          </ul>
          <div class="sliderBtnRight col-1 m-auto">
            <i class="scroll-rightExplore h1 bi bi-chevron-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- explorer end -->
