@extends('layouts.mobile.master')

@section('style')
    <title>{{ $agency->name }} | Buy Sell and Build property at Chhatt.com</title>
    <meta name="title" content="{{ $agency->name }} | Buy Sell and Build property at Chhatt.com">

    <meta name="description"
        content="Contact for {{ $agency->name }} {{ $agency->areaOne->city->name }}. And Getting latest updates for houses, flats, villas and commercial properties at leading property portal Chhatt.com">
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/index.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/agency/single.css') }}" />
@endsection


@section('content')


    <div id="mobile">
        <!--  TOP SECTION START -->
        <div class="topContainer">
            <div class="lightColor">Agents:&nbsp;<span class="numbers"> {{ $agency->agents()->count() }}</span></div>
            <div class="lightColor">Properties:<span class="numbers"> {{ $totalproperties }} </span></div>
            <div class="verified"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z">
                    </path>
                </svg> &nbsp;<span class="numbers">Verified</span></div>
        </div>
        <!--  TOP SECTION END -->


        <!-- IMAGE AND DETAILS SECTION START -->
        <div class="imageContainer">
            <h5> {{ $agency->name }}</h5>
            <div class="agencyImageContainer"><img
                    src="https://chhatt.s3.ap-south-1.amazonaws.com/agencies/{{ $agency->image }}"
                    alt="{{ $agency->name }}"></div>
            <div class="agencyDUpper mt-3">Name:</div>
            <div class="fetchedData">{{ $agency->user->name }}</div>
            <div class="agencyDUpper">Contact:</div>
            <div class="fetchedData">{{ $agency->user->phone }}</div>
            <div class="agencyDUpper">Address:</div>
            <div class="fetchedData">{{ @$agency->minor_area }}, {{ @$agency->major_area }}
                {{ $agency->areaOne->city->name }} </div>
        </div>
        <!-- IMAGE AND DETAILS SECTION END -->

        <!-- AGENT DETAILS SECTION START -->
        <div class="agentsContainerMobile">
            <div class="fdiv">
                <div class="top">
                    <p>Agents</p>
                </div>
                <div class="sdiv">
                    <ul>
                        @foreach ($agents as $item)

                            <li class="ml-0">
                                <div class="agentCard">
                                    <div class="imgContainer">
                                        @if ($item->user->thumbnail != null)
                                            <img src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{{ @$item->user->thumbnail }}"
                                                alt="" />
                                        @else
                                            <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png"
                                                alt="" />
                                        @endif

                                    </div>
                                    <div class="agentcard_body">
                                        <h3>{{ $item->user->name }}</h3>
                                        <h6>{{ $item->agency->name }}</h6>
                                        <div class="icons d-flex">
                                            <div class="icon_container">
                                                <svg stroke="#fff" fill="#fff" stroke-width="0" viewBox="0 0 512 512"
                                                    class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="background: rgb(67, 178, 67);">
                                                    <path
                                                        d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="icon_container">
                                                <svg stroke="#fff" fill="#fff" stroke-width="0" viewBox="0 0 24 24"
                                                    class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="background: rgb(0, 123, 255);">
                                                    <path
                                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!-- AGENT DETAILS SECTION END -->

    </div>

@endsection
