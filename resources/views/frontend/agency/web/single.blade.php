@extends('layouts.master')

@section('style')
    <title>{{ $agency->name }} | Buy Sell and Build property at Chhatt.com</title>
    <meta name="title" content="{{ $agency->name }} | Buy Sell and Build property at Chhatt.com">

    <meta name="description"
        content="Contact for {{ $agency->name }} {{ $agency->areaOne->city->name }}. And Getting latest updates for houses, flats, villas and commercial properties at leading property portal Chhatt.com">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/agency/singleagency.css') }}" />
@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h2 class="fw-bolder">{{ $agency->name }} {{ $agency->areaOne->city->name }}</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="detailSection">
        <div class="right_side">
            <div class="agencyDetails">
                <h3>
                    {{ $agency->name }}
                </h3>
                <hr />
                <div class="imgDetails">
                    <img src="https://chhatt.s3.ap-south-1.amazonaws.com/agencies/{{ $agency->image }}" alt="" />
                    <div class="right_side">
                        <div>
                            <h6>Name</h6>
                            <h3>
                                {{ $agency->user->name }}
                            </h3>
                        </div>
                        <br />
                        <div>
                            <h6>Contact</h6>
                            <h3>
                                @if ($agency->user->phone==null)
                                {{ $agency->user->mobile }}
                                {{-- @dd($agency->user->mobile) --}}

                                @else
                                {{ $agency->user->phone }}
                                {{-- @dd('phone not null') --}}
                                @endif

                            </h3>
                        </div>
                        <br />
                        <div>
                            <h6>Address</h6>
                            <h3>Karachi, Pakistan</h3>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="bottom_section">
                    <div class="left_side">
                        <div>
                            Realtors : {{ $agency->agents()->count() }}

                        </div>
                        <div>

                            Properties : {{ $totalproperties }}
                        </div>
                    </div>
                    <div class="right_side">
                        {{-- <MdVerifiedUser style="font-size: 20p; color: #43b243" /> --}}
                        &nbsp;Verified
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="contactContainer">
            <h2>Contact Us</h2>
            @if ($agency->user->phone==null)
            <input hidden type="text" id="numberrrr" value="{{ @$agency->user->mobile }}">
            @else
            <input hidden type="text" id="numberrrr" value="{{ @$agency->user->phone }}">
            @endif
            <Button class="showNumber ripple" onclick="chnagenumb()">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                class="text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                style="font-size: 14px;">
                <path
                    d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z">
                </path>
            </svg> <span id="changethis">Call Now</span>
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
                        {{-- <MdEmail class="text-white" style="font-size: 17px" /> --}}
                        &nbsp;Submit
                    </Button>
                </form>
            </div>
        </div>
    </div>
    <div class="maindivAgent">
        <hr />
        <div class="secdiv">
            <h3> Realtors </h3>
            <hr />

        </div>

        <div class="position-relative mt-5">
            <div class="sliderBtnLeft text-right m-auto">
                <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
            </div>
            <!--image allary list-->
            <ul id="box-wrapper" class="boxWrapper ps-0">
                <!--apply loop on this li-->
                @foreach ($agents as $item)

                    {{-- @dd($item->user->thumbnail) --}}
                    <li class="scroll-img-list ms-3 me-1 p-2">
                        <div class="maindivAgentCard">
                            <a href="{{ route('agent.single', ['id' => $item->id]) }}">

                                <div class="imgContainer">

                                    @if ($item->user->thumbnail != null)
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{{ @$item->user->thumbnail }}"
                                            alt="" />
                                    @else
                                        <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png"
                                            alt="" />
                                    @endif
                                </div>
                            </a>
                            <div class="card_body text-center">
                                <h3>{{ $item->user->name }}</h3>
                                <h6 style="overflow: hidden; text-overflow: ellipsis;">{{ $item->agency->name }}</h6>
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
                @endforeach
            </ul>
            <div class="sliderBtnRight col-1 m-auto">
                <i class="scroll-right bi bi-arrow-right-circle-fill"></i>
            </div>
        </div>
    </div>
    <script>
        function chnagenumb() {

            var number = $('#numberrrr').val();
            $('#changethis').html(number)
        }
    </script>
    <!-- AGENTS END -->
@endsection
