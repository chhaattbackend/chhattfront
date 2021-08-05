@extends('layouts.mobile.master')
@section('style')
    <title>Browse the Best Real Estate Agencies in Karachi Pakistan | Chhatt.com</title>
    <meta name="title" content="Browse the Best Real Estate Agencies in Karachi Pakistan | Chhatt.com">
    <meta name="description"
        content="Get in touch with the best real estate agencies in Karachi. And Choose yourbest properties like houses, flats, villas and commercial properties at Chhatt.com">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/agent/single.css') }}" />

    <style>
        li.page-item {
            display: none;
        }
        .page-item:first-child,
        .page-item:nth-child(2),
        .page-item:nth-last-child(2),
        .page-item:last-child,
        .page-item.active,
        .page-item.disabled {
            display: block;
        }
        }
    </style>
@endsection
@section('content')

<div id="mobile">
    <!--  TOP SECTION START -->
    <div class="topContainer">
        {{-- <div class="lightColor">Agents:&nbsp;<span class="numbers"> 12</span></div> --}}
        <div class="lightColor">Properties:<span class="numbers"> 1 </span></div>
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
        <h5> {{$agent->user->name}} </h5>
        <div class="agencyImageContainer"><img
                 <img @if (@$agent->user->thumbnail == null) src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"

                    @else

                        src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $agent->user->thumbnail !!}" @endif alt="" />

            </div>
        <div class="agencyDUpper mt-3">Agency Name:</div>
        <div class="fetchedData">{{$agent->agency->name}}</div>
        <div class="agencyDUpper">Agent Contact:</div>
        <div class="fetchedData">{{$agent->user->mobile}}</div>
        <div class="agencyDUpper">Address:</div>
        <div class="fetchedData">{{$agent->user->address}}</div>
    </div>
    <!-- IMAGE AND DETAILS SECTION END -->

    <!-- AGENT DETAILS SECTION START -->
    <div class="agentsContainerMobile mb-4">
        <div class="fdiv">
            <div class="top">
                <p>Related Agents</p>
            </div>
            <div class="sdiv">
                <ul>

                @foreach ($relatedagents as $items)
                @if (@$agent->user->id != @$items->user->id)
                    <li class="ml-0">
                        <div class="agentCard">
                            <div class="imgContainer">
                                <img
                                @if (@$items->user->thumbnail == null) src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"

                                @else

                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $items->user->thumbnail !!}" @endif alt="" />
                            </div>
                            <div class="agentcard_body">
                                <h3>{{$items->user->name}}</h3>

                                <div class="icons d-flex">

                                        <div class="icon_container">
                                            <a href="tel:+{{ @$items->user->mobile }}">
                                            <svg stroke="#fff" fill="#fff" stroke-width="0" viewBox="0 0 512 512"
                                                class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                                style="background: rgb(67, 178, 67);">
                                                <path
                                                    d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                </path>
                                            </svg>
                                        </a>
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
                    @endif
                    @endforeach


                </ul>
            </div>
        </div>
    </div>
    <!-- AGENT DETAILS SECTION END -->

</div>
<!-- MOBILE END -->





@endsection
