@extends('layouts.master')

@section('style')
    <title>Contact us – Buy Sell and Build Properties | Chhatt.com</title>
    <meta name="title" content="Contact us – Buy Sell and Build Properties | Chhatt.com">

    <meta name="description"
        content="Contact us – Buy Build and Sell properties on Pakistan’s No.1 realestate portal. Must visit Chhatt.com and stay connected with the leading propertyportal">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" /> --}}

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('styles/home/home.css') }}" /> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css') }}" />
    <style>
        .mn_div {
            background-image: url("../../assets/propertyCard.webp") !important;
        }

    </style>
@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Contact Us</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <img src="{{ asset('assets/map.webp') }}" alt="Contactus" style="width: 100%; height: 500px;">
    <!-- BANNER END -->

    <!-- FORM START -->
    <div class="contactSection">
        <div class="messageForm">
            <h3>Send us a message</h3>
            <p>
                Chhatt aims and relies on simple and easier communication with clients
                and providing real estate solutions at the touch of a finger. In short,
                Chhatt is a point of elevation which gives you a strategic view of the
                real estate market.
            </p>
            <div class="inputsContainer">
                <input type="text" placeholder="Username" />
                <input type="text" placeholder="Email" />
                <input type="number" placeholder="Phone Number" />
            </div>
            <textarea rows="5" placeholder="Message"></textarea>
            <br />
            <button>
                Send Email
            </button>
        </div>
    </div>

@endsection
