@extends('layouts.master')

@section('style')
    <title>Realtors | Chhatt.com</title>
    <meta name="title" content="Karachi Estate Agents">

    <meta name="description"
        content="Get in touch with the best real estate agents in Karachi. And Choose yourbest properties like houses, flats, villas and commercial properties at Chhatt.com">

    <link rel="stylesheet" href="{{ asset('styles/agent/single.css') }}">
@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Find the Best Realtors</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- WEBSITE START -->



    <!-- BODY START -->
    <div class="detailSection">
        <div class="right_side">
            <div class="agencyDetails">
                <h3>
                    {{ $agent->user->name }}
                </h3>
                <hr />
                <div class="imgDetails">
                    <img @if (@$agent->user->thumbnail == null)
                    src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"

                @else

                    src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $agent->user->thumbnail !!}" @endif alt="" />
                    <div class="right_side">
                        {{-- <div class="mb-4">

                            <h6 class="mb-0">Email</h6>

                            <h3>
                                {{ @$agent->user->email }}
                            </h3>
                        </div> --}}
                        <div class="mb-4">
                            <h6 class="mb-0">Contact</h6>
                            <h3>
                                @if ($agent->user->phone == null)
                                    {{ $agent->user->mobile }}
                                @else
                                    {{ $agent->user->phone }}
                                @endif

                            </h3>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-0">Address</h6>
                            <h3>{{ @$agent->user->address }}</h3>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-0">Agency</h6>
                            <h3>{{ @$agent->agency->name }}</h3>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="bottom_section">
                    <div class="left_side">
                        <div>
                            Properties : <strong class="text-dark">{{ $agent->user->properties->count() }}</strong>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="contactContainer">
            <h2>Contact Us</h2>

            @if ($agent->user->phone == null)
                <input hidden type="text" id="numberrrr" value="{{ @$agent->user->mobile }}">
            @else
                <input hidden type="text" id="numberrrr" value="{{ @$agent->user->phone }}">
            @endif
            <Button class="showNumber ripple" onclick="chnagenumb()">

                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-white"
                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="font-size: 14px;">
                    <path
                        d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z">
                    </path>
                </svg> <span id="changethis">Call Now</span>

            </Button>



            <hr />
            <div class="innerContactform">
                <form action="{{ route('contact.form', ['agent_id' => $agent->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name='agent_id' value="{!! $agent->id !!}">
                    <input type="hidden" name='lead_from' value="property">
                    <input class="inpC @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name"
                        required />
                    <br />
                    <input class="inpC mt-4 @error('email') is-invalid @enderror" type="email" name="email"
                        placeholder="Email" required />
                    <br />
                    <div class="phone_inp">
                        <input class="inpC mt-4" type="number" name="phone" placeholder="Phone" />
                        <div class="flag d-flex">
                            <img src="https://cdn.britannica.com/46/3346-004-D3BDE016/flag-symbolism-Pakistan-design-Islamic.jpg"
                                alt="">
                            <h6>+92</h6>
                        </div>
                    </div>
                    <br>
                    <textarea required name="description" class="@error('description') is-invalid @enderror"
                        rows="5"></textarea>
                    <br />
                    <Button type="submit">
                        <MdEmail class="text-white" style="font-size: 17px" />
                        &nbsp;Submit
                    </Button>
                </form>
            </div>
            <br />
            @if (Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
        </div>



        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <!-- BODY END -->

    <!-- AGENTS START -->
    <div class="maindivAgent">
        <hr />
        <div class="secdiv">
            <h3> Related Agents </h3>
        </div>
        <div class="position-relative mt-5">
            <div class="sliderBtnLeft text-right m-auto">
                <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
            </div>
            <!--image allary list-->
            <ul id="box-wrapper" class="boxWrapper ps-0">
                <!--apply loop on this li-->

                @foreach ($relatedagents as $items)
                    @if (@$agent->user->id != @$items->user->id)
                        <li class="scroll-img-list ms-3 me-1 p-2">
                            <div class="maindivAgentCard">
                                <div class="imgContainer">
                                    <a href="{{ route('agent.single', ['id' => $items->id]) }}">

                                        <img @if (@$items->user->thumbnail == null)
                                        src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"

                                    @else

                                        src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $items->user->thumbnail !!}"
                    @endif
                    alt="" />
                    </a>
        </div>

        <div class="card_body text-center">
            {{-- @dd($items->user->name) --}}
            <h3>{{ @$items->user->name }}</h3>
            <h6 class="eclipse1">{{ @$items->agency->name }}</h6>
            <div class="icons">
                <a href="tel:+{{ @$items->user->mobile }}">

                    <div class="icon_container">
                        <i class="bi bi-telephone-fill icon"></i>
                    </div>

                </a>
                <div class="icon_container">
                    <i class="bi bi-envelope-fill icon"></i>
                </div>
            </div>
        </div>
    </div>
    </li>
    @endif
    @endforeach

    </ul>
    <div class="sliderBtnRight col-1 m-auto">
        <i class="scroll-right bi bi-arrow-right-circle-fill"></i>
    </div>
    </div>
    </div>

    <!-- AGENTS END -->





    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="assets/js/index.js"></script>
<script>
    var mobile = document.getElementById("mobile");
    var website = document.getElementById("website");

    $(document).ready(function () {
        globalNavigator(mobile, website)
    });

    var scrolled = 0;
    $(".scroll-left").on("click", function () {
        scrolled = scrolled - 300;
        $("#box-wrapper").animate({
            scrollLeft: scrolled,
        });
    });
    $(".scroll-right").on("click", function () {
        scrolled = scrolled + 300;
        $("#box-wrapper").animate({
            scrollLeft: scrolled,
        });
    });
</script> --}}
    <script>
        function chnagenumb() {

            var number = $('#numberrrr').val();
            $('#changethis').html(number)
        }
    </script>
@endsection
