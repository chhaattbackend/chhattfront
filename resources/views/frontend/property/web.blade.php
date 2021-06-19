@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="./styles/property/property.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.1.3/dist/css/autoComplete.01.min.css">

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
                                <input id="autoComplete" autocomplete="off" type="text" tabindex="1" />
                            </div>
                            <!-- city select start -->
                            <select id="citiesSelect" onchange="changecity()" class="form-select"
                                aria-label="Default select example">
                                @foreach ($city as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }} </option>
                                @endforeach
                            </select>
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
                                `http://uat.chhatt.com/api/allareas?city=${city}`
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
                placeHolder: "Try Something 'Final'",
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span style="margin-left:15px;display:inline-block;width:160px;text-align:right;align-items: center; font-size: 13px; font-weight: 100; text-transform: uppercase; color: rgba(0,0,0,.2); text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                        ${data.value.parent}
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
                    var url = '{{ route('property.search', 'search_areas=:key') }}';
                    url = url.replace(':key', filteredArea[0].key);
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

    </script>

@endsection
@section('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <meta hidden name="csrf-token" content="{{ csrf_token() }}" />

    <div id="bestProperty" class="propertylist">
        <div class="secdiv">
            <div class="secdivtxt">
                <h3 class="fw-bold">Best properties for you</h3>
            </div>
            <div class="sul">
                <ul>
                    <li title="All">
                        <button id="all" class="themebtnUnPressed active_bestProperties"
                            onclick="allProperties()">All</button>
                    </li>
                    <li title="Residential">
                        <button class="themebtnUnPressed" id="resBtn" onclick="residential()"
                            variant="contained">Residential</button>
                    </li>
                    <li title="Commercial">
                        <button id="comBtn" class="themebtnUnPressed" onclick="commercial()">Commercial</button>
                    </li>
                    <li title="Industrial">
                        <button id="indBtn" class="themebtnUnPressed" onclick="industrial()">Industrial</button>
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
        <div class="visit_maindiv">
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

        <br>

        @include('layouts.agency')


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
                    $('#list').addClass('animate__animated animate__fadeIn');

                },
            });

        }

    </script>
@endsection
