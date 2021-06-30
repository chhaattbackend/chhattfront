@extends('layouts.mobile.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/properties.css') }}" />
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
    @include('functions.convert_rupee')

    <!-- BUTTONS START -->
    <div class="brb_buttons">
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-12">
                     <input type="text" name="keyword" class="form-control p-2 "
                            placeholder="Search Agency">

                </div>
            </div>
        </div>
    </div>
    <!-- BUTTONS END -->

    <!-- PROPERTIES LIST START -->
    <div class="propertyListMobile">
        <div class="top">
            <p> Find The Best Real Estate Agencies </p>
        </div>
        @include('frontend.agency.mobile.list')
    </div>

@endsection
