@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="./styles/home/home.css" />
    <link rel="stylesheet" type="text/css" href="./styles/property/property.css" />

@endsection

@section('headercontent')
    <div class="mn_div">
        <div class="backg">
            <div class="backg_sdiv">
                <h1>Search Your Desire Property</h1>
                <div class="main_bar">
                    <form onSubmit="" class="frm">
                      <div class="searchdiv">
                        <span class="searchIcon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                          </svg>
                        </span>
                        <!-- search field start  -->
                        <!-- search start -->
                        <div class="autoComplete_wrapper">
                          <input id="autoComplete" type="text" tabindex="1" />
                        </div>
                        <!-- city select start -->
                        <select id="citiesSelect" class="form-select" aria-label="Default select example"></select>
                        <!-- city select end -->
                        <!-- search end -->
                        <!-- city lagana h -->
                        <button type="submit" onclick="changeFunc(event)">
                          Search
                        </button>
                      </div>
                      <div class="serch_bottom" id="serch_option_show">
                        <div class="d-flex flex-column">
                          <div class="view_more_main">
                            <span>Reset</span>
                            <span class="sspan" id="view_more">View More</span>
                          </div>
                          <div class="d-flex justify-content-between">
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Property Type</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Area Type</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Beds</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Baths</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between mt-3" id="drop_show">
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Price Min</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Price Max</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Area Min</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                            <div class="slct1 slct w-100 mx-3">
                              <div class="pb-1">Area Max</div>
                              <select class="py-2 w-100 px-2  border-0" name="">
                                <option value="">Karachi</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <div id="bestProperty" class="propertylist">
        <div class="secdiv">
            <div class="secdivtxt">
                <h3 class="fw-bold">Best properties for you</h3>
            </div>
            <div class="sul">
                <ul>
                    <li title="All" >
                        <button id="all" class="active_bestProperties" onclick="allProperties()">All</button>
                    </li>
                    <li title="Residential" >
                        <button id="resBtn" onclick="residential()" variant="contained">Residential</button>
                    </li>
                    <li title="Commercial" >
                        <button id="comBtn" onclick="commercial()">Commercial</button>
                    </li>
                    <li title="Industrial" >
                        <button id="indBtn" onclick="industrial()">Industrial</button>
                    </li>
                    <li title="View all" class="viewall">
                        <button>View all</button>
                    </li>
                </ul>
            </div>
        </div>
        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid">


                <div id="list" class="row px-2">
                    @include('frontend.property.list')
                </div>

            </div>
            <hr style="background-color: black">


            @include('layouts.featuredproject')
        </div>
        <br><br><br>
        <div class="maindiv marginTop">
            <div class="innerDiv">
                <div class="secOne">
                    <h2>Visit Our Construction Site</h2>
                </div>
                <div class="secTwo">
                    Chhatt Media Pvt.ltd commonly known as chhatt.com is a powerful
                    platform which aims at connecting the realtors, builders,
                    developers, brokers with right kind of clientele for various types
                    of properties from various mediums.
                </div>
                <div class="secThree">
                    <!-- <Link to='/construction'> -->
                    <button>Visit Now</button>
                    <!-- </Link> -->
                </div>
            </div>
        </div>
        <div class="mapCardContainer">

            @include('layouts.agency')

        </div>

        <!--  PROPERTY CARD START  -->

    </div>



    @include('layouts.explorer')

<script>
    const btn1 = document.getElementById("all");
  const btn2 = document.getElementById("resBtn");
  const btn3 = document.getElementById("comBtn");
  const btn4 = document.getElementById("indBtn");
  const allProperties = () => {
    getListdata('All');
    btn1.classList.add("active_bestProperties");
    btn2.classList.remove("active_bestProperties");
    btn3.classList.remove("active_bestProperties");
    btn4.classList.remove("active_bestProperties");
  };
  const residential = () => {
    getListdata("residential");
    btn2.classList.add("active_bestProperties");
    btn1.classList.remove("active_bestProperties");
    btn3.classList.remove("active_bestProperties");
    btn4.classList.remove("active_bestProperties");
  };
  const commercial = () => {
    getListdata("commercial");
    btn3.classList.add("active_bestProperties");
    btn1.classList.remove("active_bestProperties");
    btn2.classList.remove("active_bestProperties");
    btn4.classList.remove("active_bestProperties");
  };
  const industrial = () => {
    getListdata("industrial");
    btn4.classList.add("active_bestProperties");
    btn1.classList.remove("active_bestProperties");
    btn2.classList.remove("active_bestProperties");
    btn3.classList.remove("active_bestProperties");
  };


  var serch_option = document.getElementById("serch_option_show");
    var view = document.getElementById("view_more");
    var drop = document.getElementById("drop_show");
    var view_more_bool = false
    view.addEventListener("click", () => {
      view_more_bool = !view_more_bool
      if (view_more_bool === true) {
        serch_option.style.height = "200px";
        drop.style.opacity = "1";
        drop.style.transition = "500ms 300ms";
      } else if (view_more_bool === false) {
        serch_option.style.height = "120px";
        drop.style.transition = "100ms";
        drop.style.opacity = "0";
      }
    });

</script>

    <script>


function getListdata(type) {
    $('#list').addClass('animate__animated animate__fadeOut');
    $.ajax({
                type: "get",
                url: "/property",
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    type: type
                },
                success: function(responese) {
                    $('#list').removeClass('animate__animated animate__fadeOut');
                    $('#list').html(responese.data);
                    $('#box-wrapper').removeClass('animate__animated animate__fadeOut');
                    // $('#list').addClass('animate__animated animate__fadeIn');

                },
            });



            // $('#box-wrapper').addClass('animate__animated animate__fadeOut');
            // $.ajax({
            //     type: "get",
            //     url: "/",
            //     dataType: 'JSON',
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     data: {
            //         type: type
            //     },
            //     success: function(responese) {
            //         $('#box-wrapper').removeClass('animate__animated animate__fadeOut');
            //         $('#box-wrapper').html(responese.data);
            //         $('#box-wrapper').addClass('animate__animated animate__fadeIn');

            //     },
            // });
        }

        // function getListdata(type) {
        //     console.log(type);





            // $.ajax({
            //     type: "get",
            //     url: "/property",
            //     dataType: 'JSON',
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     data: {
            //         type: type

            //     },
            //     success: function(responese) {
            //         // $('#tick').show();
            //         // setTimeout(function() {
            //         //     $('#tick').hide();
            //         // }, 3000);
            //         // alert("#visit_date".id)
            //         // alert(date)
            //         // console.log(responese.data);

            //         $('#list').html(responese.data);

            //         // $("#visit_date"+id).text(date);
            //         // $("#visit_date" + id).text('{{ date('D, d-m-Y', strtotime('responese.date')) }}');
            //         // // $("#visit_date" + id).color('green');
            //         // $("#visit_date2" + id).show();
            //         // $("#visit_date2" + id).text('{{ date('h:i A', strtotime('responese.date')) }}');






            //         // setTimeout(function(){ $("#tick").css("display", "block"); },2000);
            //     },
            // });

            // axios.get('/property')
            //     .then(function(response) {
            //         // handle success

            //     })
            //     .catch(function(error) {
            //         // handle error
            //         console.log(error);
            //     })
            //     .then(function() {
            //         // always executed
            //     });
        // }

    </script>

@endsection
