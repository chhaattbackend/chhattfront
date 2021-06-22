@extends('layouts.mobile.master2')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/property.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/btnsearch.css') }}" />
@endsection

@section('content')
    @php
    $a = URL::current();
    $a = explode('/', $a);
    $a = end($a);
    @endphp
    <div class="buy_rent_main_div">
        <a href="{{ route('filter', 'buy') }}" id="btnbuy" class="for-sale @if ($a=='buy' ) activeBtn @endif ">
                <button onclick=" search('buy')">Buy</button>
        </a>
        <a href="{{ route('filter', 'rent') }}" id="btnrent" class="for-rent @if ($a=='rent' ) activeBtn @endif">
            <button onclick="search('rent')">Rent</button>
        </a>
        <a href="{{ route('filter', 'booking') }}" id="btnbooking" class="for-booking @if ($a=='booking' ) activeBtn @endif ">
            <button onclick="search('booking')">Booking</button>
        </a>
    </div>
    @include('frontend.property.mobile.btnsearch.ajax')
@endsection
