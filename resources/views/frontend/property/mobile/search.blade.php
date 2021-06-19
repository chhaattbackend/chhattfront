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
        <a href="">
            <button>
                Buy
            </button>
        </a>
        <a href="">
            <button>
                Rent
            </button>
        </a>
        <a href="">
            <button>
                Booking
            </button>
        </a>
    </div>
    <!-- BUTTONS END -->

    <!-- PROPERTIES LIST START -->
    <div class="propertyListMobile">
        <div class="top">
            <p> Best Properties For You </p>
        </div>
        <div class="cards_container">
            @foreach ($properties as $item)


                <a href="#" class="card_div text-decoration-none">

                    @if (!$item->images->isEmpty())
                        <img class="propertyImg"
                            src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ $item->images[0]->name }}"
                            alt="" />
                    @else
                        <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                            alt="" class="propertyImg">

                    @endif

                    <p> {{ $item->type }}</p>
                    <b>
                        {{ $item->property_for }}in {{ optional($item->areaThree)->name }},
                        {{ optional($item->areaTwo)->name }},
                        {{ optional($item->areaOne)->name }}
                    </b>
                    <p>
                        <b>
                            @if ($item->price == null)
                                <span style="background: red;" class="badge badge-pill badge-danger">On Request</span>
                            @else
                                Rs: {{ convert_rupee($item->price) }}
                            @endif
                        </b>
                    </p>
                </a>
            @endforeach


        </div>

        <div class="d-flex justify-content-center ">
            <nav aria-label="Page navigation example">
                {{$properties->links()}}
            </nav>
        </div>
    </div>

@endsection
