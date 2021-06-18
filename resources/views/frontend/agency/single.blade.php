@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/agency/singleagency.css') }}" />
@endsection

@section('headercontent')
<div class="mn_divz">
      <div class="backgz">
        <div class="backg_sdivz">
          <h1>heading</h1>
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
                                {{ $agency->user->phone }}

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
                            Agents : {{ $agency->agents()->count()}}

                        </div>
                        <div>

                            Properties : {{ $totalproperties }}
                        </div>
                    </div>
                    <div class="right_side">
                        <MdVerifiedUser style="font-size: 20p; color: #43b243" />
                        &nbsp;Verified
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="contactContainer">
            <h2>Contact Us</h2>
            <Button class="showNumber">
                {{ $agency->user->phone }}
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
                        <MdEmail class="text-white" style="font-size: 17px" />
                        &nbsp;Submit
                    </Button>
                </form>
            </div>
        </div>
    </div>
    <div class="maindivAgent">
        <hr />
        <div class="secdiv">
            <h3> Agents </h3>
        </div>
        <div class="position-relative mt-5">
            <div class="sliderBtnLeft text-right m-auto">
                <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
            </div>
            <!--image allary list-->
            <ul id="box-wrapper" class="boxWrapper ps-0">
                <!--apply loop on this li-->
                @foreach ($agents as $item)
                    <li class="scroll-img-list ms-3 me-1 px-2 py-5">
                        <div class="maindivAgentCard">
                            <div class="imgContainer">
                                <img src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{{$item->user->image}}"
                                    alt="" />
                            </div>
                            <div class="card_body text-center">
                                <h3>{{ $item->user->name }}</h3>
                                <h6 style="white-space: break-spaces">{{ $item->agency->name }}</h6>
                               <h6>Properties :{{count($item->user->properties)}}</h6>
                                <div class="icons">
                                    <div class="icon_container">
                                        <i class="bi bi-telephone-fill icon"></i>
                                    </div>
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
    <!-- AGENTS END -->
@endsection
