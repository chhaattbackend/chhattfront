@extends('layouts.master')


@section('style')
    <title>Find Out Best Properties in {{ @$inputcity_name }}, Pakistan | Chhatt.com</title>
    <meta name="title" content="Find Out Best Properties in {{ @$inputcity_name }}, Pakistan | Chhatt.com">
    <meta name="description"
        content="Browse the best properties in {{ @$inputcity_name }}, Pakistan. Find the latest apartments, plots, houses and commercial properties at leading property portal Chhatt.com">
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="./styles/property/properties.css" /> --}}
    <link rel="stylesheet" href="{{ asset('styles/property/properties.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/mediaquery.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Find the best Properties</h1>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- agency search start -->

    <div>
        <div class="agency-search">
            <div class="secdiv" id="serch_option_show">
                <!-- ============================  SEARCH BOX START  ================================  -->
                <div class="searchdiv">
                    <div class="leftSec">
                        <form onSubmit="" class="searchdivL">
                            <span class="searchIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="#CCCCCC"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>

                            <!-- search field start  -->
                            <!-- search start -->
                            <div class="autoComplete_wrapper">
                                <input value="{{ $inputval }}" id="autoComplete" autocomplete="off" type="text"
                                    tabindex="1" />
                            </div>
                            <!-- city select start -->
                            <select id="citiesSelect" onchange="changecity()" class="form-select"
                                aria-label="Default select example">
                                @foreach ($city as $item)
                                    <option @if (@$inputcity_id == @$item->id) selected @endif value="{{ $item->name }}">{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- city select end -->
                            <!-- search end -->
                            <!-- city lagana h -->
                            <button type="submit" onclick="changeFunc(event)">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
                <form id="form11">

                    <div class="d-flex flex-column mt-2">
                        <div class="view_more_main">
                            <span>Reset</span>
                            <span class="sspan" id="view_more">View More</span>
                        </div>
                        <div id="moreItems">
                            <div class="d-flex justify-content-between" id="drop_show">
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="property_type" id="">
                                    <option selected disabled value="">Property Type </option>
                                    @foreach ($propertytype as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="area_type" id="">
                                    <option selected disabled value="">Area Type </option>
                                    <option value="Residential">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Industrial">Industrial</option>
                                </select>
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="bed" id="">
                                    <option selected disabled value="">Beds</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="+10">+10</option>
                                </select>
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="bath" id="">
                                    <option selected disabled value="">Bath </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="+10">+10</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-between mt-4" id="drop_showl">
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="min_price" id="">
                                    <option selected disabled value="">Min Price </option>
                                    <option value="500000">500,000</option>
                                    <option value="1000000">1,000,000</option>
                                    <option value="2000000">2,000,000</option>
                                    <option value="3500000">3,500,000</option>
                                    <option value="5000000">5,000,000</option>
                                    <option value="6500000">6,500,000</option>
                                    <option value="8000000">8,000,000</option>
                                    <option value="10000000">10,000,000</option>
                                    <option value="12500000">12,500,000</option>
                                    <option value="15000000">15,000,000</option>
                                    <option value="17500000">17,500,000</option>
                                    <option value="20000000">20,000,000</option>
                                    <option value="30000000">30,000,000</option>
                                    <option value="40000000">40,000,000</option>
                                    <option value="50000000">50,000,000</option>
                                    <option value="75000000">75,000,000</option>
                                    <option value="100000000">100,000,000</option>
                                    <option value="250000000">250,000,000</option>
                                    <option value="500000000">500,000,000</option>
                                    <option value="1000000000">1,000,000,000</option>
                                </select>
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="max_price">
                                    <option selected disabled value="">Max Price </option>
                                    <option value="500000">500,000</option>
                                    <option value="1000000">1,000,000</option>
                                    <option value="2000000">2,000,000</option>
                                    <option value="3500000">3,500,000</option>
                                    <option value="5000000">5,000,000</option>
                                    <option value="6500000">6,500,000</option>
                                    <option value="8000000">8,000,000</option>
                                    <option value="10000000">10,000,000</option>
                                    <option value="12500000">12,500,000</option>
                                    <option value="15000000">15,000,000</option>
                                    <option value="17500000">17,500,000</option>
                                    <option value="20000000">20,000,000</option>
                                    <option value="30000000">30,000,000</option>
                                    <option value="40000000">40,000,000</option>
                                    <option value="50000000">50,000,000</option>
                                    <option value="75000000">75,000,000</option>
                                    <option value="100000000">100,000,000</option>
                                    <option value="250000000">250,000,000</option>
                                    <option value="500000000">500,000,000</option>
                                    <option value="1000000000">1,000,000,000</option>
                                </select>
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="area_min" id="">
                                    <option selected disabled value="">Area Min </option>
                                    <option value="500">500</option>
                                    <option value="1000">1000</option>
                                    <option value="1500">1500</option>
                                    <option value="2000">2000</option>
                                    <option value="2500">2500</option>
                                    <option value="3000">3000</option>
                                    <option value="3500">3500</option>
                                    <option value="4000">4000</option>


                                </select>
                                <select class="py-2 w-100 px-2 mx-3 border-0" name="area_max" id="">
                                    <option selected disabled value="">Area Max </option>
                                    <option value="500">500</option>
                                    <option value="1000">1000</option>
                                    <option value="1500">1500</option>
                                    <option value="2000">2000</option>
                                    <option value="2500">2500</option>
                                    <option value="3000">3000</option>
                                    <option value="3500">3500</option>
                                    <option value="4000">4000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        @unless($suggestedareas == null || $suggestedareasid == 'a2' || $suggestedareasid == 'a3')

            <div class="agency-search" style="padding-top: 10px !important;">
                <div class="secdiv2">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($suggestedareas as $item)

                                @unless($suggestedareasid == 'a2' || $suggestedareasid == 'a3')
                                    <a href="{{ route('property.search', ['search_areas' => 'a2-' . $item->id]) }}"
                                        class="col-4 col-xl-3 fw-bold text-decoration-none text-dark my-1">{{ $item->name }}
                                        ({{ $item->properties->count() }})
                                    </a>
                                @endunless


                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        @endunless

    </div>
    <!-- agency search end -->

    <!-- AGENCIES START -->
    <!-- propertylist start -->
    <div id="bestProperty" class="propertylist mapCardContainer" style="margin-top: 5px">
        <div class="row">
            <div class="col-6" style="align-self: flex-start">

                {{-- <h5 class=" fw-bold" style=" text-align: start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                        <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                      </svg>

                </h5> --}}
            </div>
            {{-- @dd($properties->count()) --}}
            <div class="col-6" style="align-self: flex-end;">
                <h5 class=" fw-bold " style=" text-align: end">Showing {{ $properties->total() }} Results</h5>
            </div>




        </div>

        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid px-0">
                <div class="row">
                    @include('layouts.listwithimage')
                </div>

                <div class="d-flex justify-content-center">
                    {{ $properties->links() }}
                </div>

                <br />
                <hr class="bg-dark" />
                <br />
            </div>



        </div>
        <!--  PROPERTY CARD START  -->
    </div>

@endsection
@section('personalscripts')
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/autoComplete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <!-- EXTERNAL LINKS END -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var city = $('#citiesSelect').children("option:selected").val();

        search('karachi');

        // function citiesData() {
        // CITIES START
        //     axios.get('https://uat.chhatt.com/api/cities').then((prev) =>
        //         $.each(prev.data, function(key, value) {
        //             console,log()
        //             $("#citiesSelect").append(`
    //         <option value="${value.id}">${value.name}</option>`);
        //         })
        //     )
        // }
        // CITIES END

        // == SEARCH AREA DROPDOWN START
        var areas;
        var city;

        function changecity() {
            // var city = $('#citiesSelect').children("option:selected").val();
            city = $('#citiesSelect').children("option:selected").val();
            // console.log(city);
            // areas = "";
            search(city);
        }

        function search() {
            const autoCompleteJS = new autoComplete({
                data: {
                    src: async () => {
                        console.log(areas)
                        try {
                            // Loading placeholder text
                            document
                                .getElementById("autoComplete")
                                .setAttribute("placeholder", "Loading...");
                            // Fetch External Data Source
                            const source = await fetch(
                                `https://uat.chhatt.com/api/allareas?city=${city}`
                            );
                            areas = await source.json();
                            // Post Loading placeholder text
                            document
                                .getElementById("autoComplete")
                                .setAttribute("placeholder", autoCompleteJS.placeHolder);
                            // Returns Fetched data
                            // console.log(areas.data)
                            return areas.data;
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
                placeHolder: "Search Location",
                resultsList: {

                    // noResults: true,
                    maxResults: 100,
                    // tabSelect: true
                },
                resultItem: {
                    element: (item, data) => {
                        // console.log(data.match)
                        // Modify Results Item Style
                        item.style = "display: flex; justify-content: space-between;";
                        // Modify Results Item Content
                        item.innerHTML =
                            `<span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ${data.match}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <span style="margin-left:15px;display:inline-block;width:160px;text-align:right;align-items: center; font-size: 13px; font-weight: 100; text-transform: uppercase; color: rgba(0,0,0,.2); text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">                                                                                                                                                                                                                                                                                                                                                                                                                                          ${data.value.parent}
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

        }

        // SUBMIT START
        function changeFunc(e) {
            e.preventDefault()
            const inpVal = document.getElementById("autoComplete");
            if (areas) {
                const filteredArea = areas.data.filter((prev) => prev.name === inpVal.value)
                if (filteredArea.length) {
                    // console.log(filteredArea[0].key)
                    var formData = $('#form11').serialize();
                    var url = '{{ route('property.search', 'search_areas=:key:word:formdata') }}';
                    array = filteredArea[0].key.split(",");
                    area = array[0];
                    if (area == "area_one_id") {
                        area = 'a1';
                    }
                    if (area == "area_two_id") {
                        area = 'a2';
                    }
                    if (area == "area_three_id") {
                        area = 'a3';
                    }
                    key = area + ',' + array[1];
                    // console.log(key)
                    url = url.replace(':key', key);
                    if (formData == null) {
                        url = url.replace(':word', '&');
                    } else {
                        url = url.replace(':word', '');
                    }
                    url = url.replace(':formdata', formData);
                    document.location.href = url;
                } else {
                    // console.log(inpVal.value)
                }
            } else {
                // console.log("error")
            }
        }
        // SUBMIT END
        // == SEARCH AREA DROPDOWN END
        var serch_option = document.getElementById("serch_option_show");
        var moreItems = document.getElementById("moreItems");
        var view = document.getElementById("view_more");
        var drop = document.getElementById("drop_show");
        var drop1 = document.getElementById("drop_showl");
        var view_more_bool = false
        view.addEventListener("click", () => {
            view_more_bool = !view_more_bool
            if (view_more_bool === true) {
                moreItems.style.transition = "500ms 1000ms";
                serch_option.style.height = "230px";
                drop.style.opacity = "1";
                drop.style.transition = "500ms 300ms";
                drop1.style.opacity = "1";
                drop1.style.transition = "500ms 300ms";
                moreItems.style.display = "block";
                view.innerText = "View Less"
            } else if (view_more_bool === false) {
                moreItems.style.transition = "0ms";
                serch_option.style.height = "111px";
                drop.style.transition = "400ms";
                drop.style.opacity = "0";
                drop1.style.transition = "300ms";
                drop1.style.opacity = "0";
                moreItems.style.display = "none";
                view.innerText = "View More"
            }
        });
    </script>

@endsection
