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
                    <img @if (@$agent->user->thumbnail == null) src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"

                    @else

                        src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $agent->user->thumbnail !!}" @endif alt="" />
                    <div class="right_side">
                        <div class="mb-4">

                            <h6 class="mb-0">Email</h6>

                            <h3>
                                {{ $agent->user->email }}
                            </h3>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-0">Contact</h6>
                            <h3>
                                {{ $agent->user->mobile }}
                            </h3>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-0">Address</h6>
                            <h3>{{ $agent->user->address }}</h3>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="bottom_section">
                    <div class="left_side">
                        <div>
                            Properties : <strong class="text-dark">{{ $agent->properties->count() }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="contactContainer">
            <h2>Contact Us</h2>
            <a href="tel:+{{ $agent->user->mobile }}">
                <Button class="showNumber">
                    Call Now
                    {{-- {{$agent->user->mobile}} --}}
                </Button>


            </a>
            <hr />
            <div class="innerContactform">
                <form action="{{ route('contact.form') }}" method="POST">
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
        </div>
        <br />
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
                                    <img @if (@$items->user->thumbnail == null) src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"

                            @else

                                src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $items->user->thumbnail !!}" @endif alt="" />
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
@endsection
