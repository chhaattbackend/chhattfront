@extends('layouts.mobile.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/property.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/btnsearch.css') }}" />
@endsection





@section('content')
    {{-- @include('functions.convert_rupee') --}}
    @php
    function convert_rupee($amount)
    {
        $length = strlen($amount);
        if ($length >= 6 && $length <= 7) {
            return round($amount / 100000, 2) . ' Lacs';
        } elseif ($length >= 8 && $length <= 9) {
            return round($amount / 10000000, 2) . ' Cr.';
        } elseif ($length >= 4 && $length <= 5) {
            return round($amount / 1000, 2) . ' K';
        } else {
            return 0;
        }
    }
    @endphp
    <meta hidden name="csrf-token" content="{{ csrf_token() }}" />


    <section>
        <div class="buy_rent_main_div">
            <a href="{{ route('filter', 'buy') }}" id="btnbuy" class="for-sale ">
                <button onclick="search('buy')">Buy</button>
            </a>
            <a href="{{ route('filter', 'rent') }}" id="btnrent" class="for-rent">
                <button onclick="search('rent')">Rent</button>
            </a>
            <a href="{{ route('filter', 'booking') }}" id="btnbooking" class="for-booking ">
                <button onclick="search('booking')">Booking</button>
            </a>
        </div>
    </section>

    <!-- buy rent booking start -->


    <!-- buy rent booking end -->
    <!-- property Type start -->
    <section id="content">

        <div class="main_div">
            <div class="fdiv">
                <div class="top">
                    <p>Property Type</p>
                    <!-- {/* <p>View All</p> */} -->
                </div>
                <div class="sdiv">
                    <ul>
                        <li>
                            <a href="{{ route('explorer.search', ['property_type' => 'flat']) }}" class="text-decoration-none">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" height="25"
                                        viewBox="-35 0 512 512" width="25">
                                        <path
                                            d="m391.753906 481.578125v-31.582031c12.097656-5.660156 20.5-17.945313 20.5-32.164063 0-19.574219-15.925781-35.5-35.5-35.5-19.574218 0-35.5 15.925781-35.5 35.5 0 14.21875 8.402344 26.503907 20.5 32.164063v31.582031c-28.90625-6.800781-50.5-32.789063-50.5-63.746094 0-36.117187 29.382813-65.5 65.5-65.5 5.132813 0 10.117188.613281 14.910156 1.734375v-251.898437h-107.507812v379.667969h-30v-439.140626h-24.351562v-42.695312h-205.453126v42.695312h-24.351562v469.304688l441.667969-.167969v-30h-49.910157v-.253906zm-38.753906-165.746094h-30v-42.667969h30zm0-85.332031h-30v-42.667969h30zm-173.667969 42.667969v42.667969h-30v-42.667969zm-30-42.667969v-42.667969h30v42.667969zm30 128v42.667969h-30v-42.667969zm0-213.332031h-30v-42.667969h30zm-104.667969-42.667969h30v42.667969h-30zm0 85.332031h30v42.667969h-30zm0 85.335938h30v42.667969h-30zm0 85.332031h30v42.667969h-30zm0 0" />
                                    </svg>
                                </div>
                                <p>Flat</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('explorer.search', ['property_type' => 'house']) }}" class="text-decoration-none">
                                <div>
                                    <svg fill="#007bff" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                        width="25" height="25" viewBox="0 0 495.398 495.398"
                                        style="enable-background:new 0 0 495.398 495.398;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391     v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158     c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747     c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z" />
                                                    <path
                                                        d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401     c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79     c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z" />
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </div>
                                <p>House</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('explorer.search', ['property_type' => 'plot']) }}" class="text-decoration-none">
                                <div>
                                    <svg fill="#007bff" xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                        enable-background="new 0 0 609.619 609.619" height="25"
                                        viewBox="0 0 609.619 609.619" width="25">
                                        <g>
                                            <g id="Page-1_14_">
                                                <g id="_x30_15---Plot-Clipboard">
                                                    <path id="Rectangle_25_" clip-rule="evenodd"
                                                        d="m348.354 283.037h76.202v43.544h-76.202z" fill-rule="evenodd" />
                                                    <path id="Shape_20_"
                                                        d="m97.974 65.316c-6.012 0-10.886 4.874-10.886 10.886v478.986c0 6.012 4.874 10.886 10.886 10.886h370.126c6.012 0 10.886-4.874 10.886-10.886v-478.986c0-6.012-4.874-10.886-10.886-10.886h-43.544v21.772c0 12.024-9.748 21.772-21.772 21.772h-239.493c-12.024 0-21.772-9.748-21.772-21.772v-21.772zm359.24 457.214c0 6.012-4.874 10.886-10.886 10.886h-315.695c-6.012 0-10.886-4.874-10.886-10.886s4.874-10.886 10.886-10.886h315.695c6.012 0 10.886 4.874 10.886 10.886zm-130.633-119.746v-239.493c0-18.037 14.622-32.658 32.658-32.658h76.202c6.012 0 10.886 4.874 10.886 10.886v326.581c0 6.012-4.874 10.886-10.886 10.886h-76.201c-18.037 0-32.658-14.622-32.658-32.658v-43.544zm-54.43-261.265c0-6.012 4.874-10.886 10.886-10.886s10.886 4.874 10.886 10.886v32.658c0 6.012-4.874 10.886-10.886 10.886s-10.886-4.874-10.886-10.886zm0 76.202c0-6.012 4.874-10.886 10.886-10.886s10.886 4.874 10.886 10.886v32.658c0 6.012-4.874 10.886-10.886 10.886s-10.886-4.874-10.886-10.886zm0 76.202c0-6.012 4.874-10.886 10.886-10.886s10.886 4.874 10.886 10.886v32.658c0 6.012-4.874 10.886-10.886 10.886s-10.886-4.874-10.886-10.886zm0 76.203c0-6.012 4.874-10.886 10.886-10.886s10.886 4.874 10.886 10.886v32.658c0 6.012-4.874 10.886-10.886 10.886s-10.886-4.874-10.886-10.886zm0 76.202c0-6.012 4.874-10.886 10.886-10.886s10.886 4.874 10.886 10.886v32.658c0 6.012-4.874 10.886-10.886 10.886s-10.886-4.874-10.886-10.886zm-65.316-315.695c18.037 0 32.658 14.622 32.658 32.658v283.037c0 18.037-14.622 32.658-32.658 32.658h-76.202c-6.012 0-10.886-4.874-10.886-10.886v-326.581c0-6.012 4.874-10.886 10.886-10.886z" />
                                                    <path id="Path_111_" clip-rule="evenodd"
                                                        d="m130.633 587.847v10.886c0 6.012 4.874 10.886 10.886 10.886h370.126c6.012 0 10.886-4.874 10.886-10.886v-478.986c0-6.012-4.874-10.886-10.886-10.886h-10.886v446.328c0 18.037-14.622 32.658-32.658 32.658z"
                                                        fill-rule="evenodd" />
                                                    <path id="Path_110_" clip-rule="evenodd"
                                                        d="m217.721 446.328v-32.658h-76.202v43.544h65.316c6.012 0 10.886-4.874 10.886-10.886z"
                                                        fill-rule="evenodd" />
                                                    <path id="Rectangle_24_" clip-rule="evenodd"
                                                        d="m348.354 348.354h76.202v43.544h-76.202z" fill-rule="evenodd" />
                                                    <path id="Shape_19_"
                                                        d="m348.354 0h-130.633c-6.012 0-10.886 4.874-10.886 10.886v21.772c0 6.012-4.874 10.886-10.886 10.886h-21.772c-6.012 0-10.886 4.874-10.886 10.886v32.658h239.493v-32.658c0-6.012-4.874-10.886-10.886-10.886h-21.772c-6.012 0-10.886-4.874-10.886-10.886v-21.772c0-6.012-4.874-10.886-10.886-10.886zm-43.545 54.43h-43.544c-6.012 0-10.886-4.874-10.886-10.886s4.874-10.886 10.886-10.886h43.544c6.012 0 10.886 4.874 10.886 10.886s-4.873 10.886-10.886 10.886z" />
                                                    <g clip-rule="evenodd" fill-rule="evenodd">
                                                        <path id="Path_109_"
                                                            d="m424.556 152.405h-65.316c-6.012 0-10.886 4.874-10.886 10.886v32.658h76.202z" />
                                                        <path id="Rectangle_23_"
                                                            d="m141.519 348.354h76.202v43.544h-76.202z" />
                                                        <path id="Rectangle_22_"
                                                            d="m348.354 217.721h76.202v43.544h-76.202z" />
                                                        <path id="Rectangle_21_"
                                                            d="m141.519 283.037h76.202v43.544h-76.202z" />
                                                        <path id="Path_108_"
                                                            d="m217.721 163.291c0-6.012-4.874-10.886-10.886-10.886h-65.316v43.544h76.202z" />
                                                        <path id="Path_107_"
                                                            d="m359.24 457.214h65.316v-43.544h-76.202v32.658c0 6.012 4.873 10.886 10.886 10.886z" />
                                                        <path id="Rectangle_20_"
                                                            d="m141.519 217.721h76.202v43.544h-76.202z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p>Plot</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('explorer.search', ['property_type' => 'villa']) }}" class="text-decoration-none">
                                <div>
                                    <svg fill="#007bff" xmlns="http://www.w3.org/2000/svg" height="25"
                                        viewBox="0 -1 456 456" width="25">
                                        <path
                                            d="m321 256.261719-89.132812-88.808594-96.867188 96.546875v189.582031h58v-64.175781c0-19.328125 15.671875-35 35-35s35 15.671875 35 35v64.175781h58zm-93 32.96875c-17.121094 0-31-13.878907-31-31 0-17.121094 13.878906-31 31-31s31 13.878906 31 31c-.019531 17.113281-13.886719 30.980469-31 31zm0 0" />
                                        <path
                                            d="m249 389.40625c0-11.597656-9.402344-21-21-21s-21 9.402344-21 21v64.175781h42zm0 0" />
                                        <path
                                            d="m121 323.582031h-121v130h121zm-71 112h-29v-14h29zm0-36h-29v-14h29zm0-36h-29v-14h29zm50 72h-29v-14h29zm0-36h-29v-14h29zm0-36h-29v-14h29zm0 0" />
                                        <path
                                            d="m225.644531 18.1875c2.730469-2.734375 7.164063-2.734375 9.898438 0l76.492187 76.496094 6.667969-6.570313-88.109375-88.113281-93.300781 93.300781 6.667969 6.570313zm0 0" />
                                        <path
                                            d="m245 258.230469c0 9.390625-7.609375 17-17 17s-17-7.609375-17-17c0-9.386719 7.609375-17 17-17s17 7.613281 17 17zm0 0" />
                                        <path
                                            d="m226.917969 152.605469c2.734375-2.734375 7.167969-2.734375 9.898437 0l116.511719 116.511719 11.765625-11.761719-133.226562-133.222657-140.960938 140.960938 11.765625 11.761719zm0 0" />
                                        <path
                                            d="m335 453.582031h121v-130h-121zm71-104h29v14h-29zm0 36h29v14h-29zm0 36h29v14h-29zm-50-72h29v14h-29zm0 36h29v14h-29zm0 36h29v14h-29zm0 0" />
                                        <path
                                            d="m176 87.292969v72.570312l50.835938-50.582031c2.832031-2.730469 7.316406-2.730469 10.148437 0l43.015625 42.847656v-70.019531l-49.40625-49.074219zm0 0" />
                                    </svg>
                                </div>
                                <p>Villa</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('explorer.search', ['property_type' => 'farm-house']) }}" class="text-decoration-none">
                                <div>
                                    <svg fill="#007bff" xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                        enable-background="new 0 0 512 512" height="25" width="25" viewBox="0 0 512 512">
                                        <path
                                            d="m466.948 217.563c2.457 1.444 4.836 2.887 7.166 4.327v-48.111c19.624-6.32 33.865-24.747 33.865-46.445v-67.73c0-26.901-21.886-48.787-48.787-48.787s-48.787 21.886-48.787 48.787v67.731c0 21.698 14.242 40.125 33.865 46.445v31.517c8.278 4.117 15.847 8.253 22.678 12.266z" />
                                        <path
                                            d="m67.731 205.296v-31.517c19.624-6.32 33.865-24.747 33.865-46.445v-67.73c0-26.901-21.886-48.787-48.787-48.787s-48.788 21.885-48.788 48.787v67.731c0 21.698 14.242 40.125 33.865 46.445v48.111c2.33-1.44 4.709-2.884 7.166-4.327 6.831-4.014 14.4-8.15 22.679-12.268z" />
                                        <path
                                            d="m241.078 162.788v-27.21c0-8.241 6.681-14.922 14.922-14.922s14.922 6.681 14.922 14.922v27.21c24.305.78 46.906 3.415 67.731 7.339v-56.763c2.416 1.235 5.036 1.84 7.641 1.84 5.127 0 10.19-2.33 13.503-6.746 5.588-7.45 4.078-18.019-3.372-23.607l-90.308-67.731c-5.995-4.497-14.24-4.497-20.235 0l-90.308 67.731c-7.45 5.588-8.96 16.157-3.373 23.607 4.996 6.662 13.972 8.557 21.145 4.89v56.779c20.826-3.923 43.427-6.559 67.732-7.339z" />
                                        <path
                                            d="m256 301.827c55.697-32.822 118.175-54.779 184.325-64.981-40.092-21.488-102.17-44.47-184.325-44.47-79.827 0-141.225 21.412-184.216 44.487 66.11 10.209 128.55 32.16 184.216 64.964z" />
                                        <path
                                            d="m512 260.317c-82.447 2.329-160.692 23.897-227.092 59.952 32.743 22.603 61.63 48.72 86.033 77.849 26.604 31.758 47.277 66.389 61.585 103.065h64.552c8.241 0 14.922-6.681 14.922-14.922z" />
                                        <path
                                            d="m0 332.286c50.324 2.858 97.844 20.173 138.236 50.519 39.931 30 70.395 71.722 86.671 118.378h175.365c-60.355-139.107-220.326-235.783-400.272-240.866z" />
                                        <path
                                            d="m193.052 501.184c-31.681-78.521-107.394-133.247-193.052-138.983v124.06c0 8.241 6.681 14.922 14.922 14.922h178.13z" />
                                    </svg>
                                </div>
                                <p>Farm House</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('explorer.search', ['property_type' => 'upper-portion']) }}" class="text-decoration-none">
                                <div>
                                    <svg fill="#007bff" height="25" width="25" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                        viewBox="0 0 453.44 453.44" style="enable-background:new 0 0 453.44 453.44;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M383.639,0.024c-0.525,0.013-1.047,0.078-1.559,0.194l-314.44,80c-3.574,0.824-6.129,3.973-6.2,7.64v289.76h113.84v-117    H278v117.16l113.84,0V7.818C391.728,3.401,388.056-0.088,383.639,0.024z M143.36,222.098h-38.8v-38.84h38.84L143.36,222.098z     M143.36,153.538h-38.8v-38.92h38.84L143.36,153.538z M211.8,222.098h-38.84v-38.84h38.84V222.098z M211.8,153.538h-38.84v-38.92    h38.84V153.538z M280.32,222.098h-38.84v-38.84h38.84V222.098z M280.32,153.458h-38.84v-38.84h38.84V153.458z M348.76,222.018    h-38.84v-38.84h38.84V222.018z M348.76,153.458h-38.84v-38.84h38.84V153.458z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M397.76,389.738h-0.16H55.68C25.001,389.913,0.175,414.74,0,445.418c0,4.418,3.582,8,8,8h437.44c4.418,0,8-3.582,8-8    C453.265,414.74,428.439,389.913,397.76,389.738z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </div>
                                <p>Upper Portion</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('explorer.search', ['property_type' => 'lower-portion']) }}" class="text-decoration-none">
                                <div>
                                    <svg fill="#007bff" height="25" width="25" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                        viewBox="0 0 453.44 453.44" style="enable-background:new 0 0 453.44 453.44;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M452.212,145.245c-0.214-2.265-1.382-4.332-3.212-5.683L230.92,1.322c-2.584-1.605-5.856-1.605-8.44,0L4.2,139.202    c-3.746,2.343-4.883,7.279-2.541,11.025c1.349,2.157,3.644,3.544,6.181,3.735h0h36v224.72c3.856-0.685,7.764-1.033,11.68-1.04h4    v-24h90.68v24h15.64v-100.52c-0.017-6.257,0.941-12.478,2.84-18.44v-0.48c10.451-31.911,44.793-49.307,76.704-38.856    c18.4,6.026,32.83,20.456,38.856,38.856v0.48c1.882,5.911,2.84,12.077,2.84,18.28v100.68h15.64v-24h90.56v24h4    c3.93,0.004,7.851,0.352,11.72,1.04v-224.72h36C449.399,153.546,452.628,149.644,452.212,145.245z M120.72,84.042h212l46.44,29.36    H74.28L120.72,84.042z M150.24,277.162v16.24h-90.6v-29.36h91.72C150.608,268.374,150.233,272.764,150.24,277.162z M59.64,203.402    v-29.36h334v29.36H59.64z M393.64,293.362h-90.56v-16.24c0.007-4.398-0.368-8.787-1.12-13.12h91.72L393.64,293.362z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M397.76,389.642H55.68C24.939,389.817,0.087,414.741,0,445.482c0.085,4.294,3.546,7.755,7.84,7.84h437.6    c4.418,0,8-3.582,8-8C453.265,414.643,428.438,389.817,397.76,389.642z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </div>
                                <p>Lower Portion</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- property Type end -->

        <!-- best property start -->
        <div class="best_main_div">
            <div class="fdiv">
                <div class="top">
                    <p>Best Properties For You </p>
                    <a class="text-decoration-none" href="{{ route('allproperties', ['All']) }}">
                        View All
                    </a>
                </div>
                <div class="sdiv">
                    <ul>
                        @foreach ($properties as $item)
                            @php
                                $id = @$item->areaOne->city->name . '-' . @$item->type . '-' . @$item->property_type . '-' . @$item->property_for . '-' . @$item->areaOne->name . '-' . @$item->areaTwo->name . '-' . $item->id;
                                $id = str_replace(str_split('\\/:*?"<>|()'), '-', strtolower($id));
                                $id = str_replace(str_split(' '), '_', strtolower($id));
                                $id = strtolower($id);
                            @endphp

                            <li>
                                <div>
                                    <a href="{{ route('single.property', $id) }}"
                                        class="property_card_main_div text-decoration-none">
                                        <img src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ @$item->images[0]->name }}"
                                            class="propertyImg" alt="" />
                                        <p> {{ $item->type }} </p>
                                        <b>
                                            {{ $item->property_for }} in
                                            {{ optional($item->areaTwo)->name }},
                                            {{ optional($item->areaOne)->name }}
                                        </b>
                                        <p>
                                            <b>
                                                @if ($item->price == null)
                                                    <span style="background: red;" class="badge badge-pill badge-danger">On
                                                        Request</span>
                                                @else
                                                    Rs: {{ convert_rupee($item->price) }}
                                                @endif
                                            </b>
                                        </p>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- best property end -->

        <!-- FEATURED PROJECTS start -->
        <div class="best_main_div">
            <div class="fdiv">
                <div class="top">
                    <p>Featured Projects</p>
                    <!-- <p onClick="">
                                                                                                                                            View All
                                                                                                                                          </p> -->
                </div>
                <div class="sdiv">
                    <ul>
                        <li>
                            <div>
                                <a href="" class="property_card_main_div text-decoration-none">
                                    <img src="{{ asset('assets/welcomeCenter.webp') }}" class="propertyImg" alt="" />
                                    <p> Karachi </p>
                                    <b>
                                        Welcome Center
                                    </b>
                                    <p>
                                        <b class="text-dark fw-light"></b>
                                    </p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- FEATURED PROJECTS end -->

        <!-- best property start -->
        <div class="best_main_div">
            <div class="fdiv">
                <div class="top">
                    <p>Agencies</p>
                    <a href="{{ route('agency') }}" class="text-decoration-none">
                        View All
                    </a>
                </div>
                <div class="sdiv">
                    <ul id="agency">

                    </ul>
                </div>
            </div>
        </div>
        <!-- best property end -->

        @include('layouts.mobile.footer')

    </section>

    {{-- <section>
        @include('frontend.property.mobile.btnsearch.ajax')
    </section> --}}


@endsection

@section('personalscripts')
    <script>
        $(function() {
            getData();
        });



        function getData() {

            $.ajax({
                type: "POST",
                url: "propertymobile",
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    agency: true
                },
                success: function(responese) {
                    // $('#box-wrapper').removeClass('animate__animated animate__fadeOut');
                    $('#agency').addClass('animate__animated animate__fadeIn');
                    $('#agency').html(responese.data);
                },
            });
        }

        // function search(btn) {
        //     if (btn == 'buy') {
        //         $('#btnbuy').addClass('activeBtn');
        //         $('#btnrent').removeClass('activeBtn');
        //         $('#btnbooking').removeClass('activeBtn');
        //         $('#content').addClass('animate__animated animate__fadeOut');
        //         changePage('buy');

        //     }
        //     if (btn == 'rent') {

        //         $('#btnrent').addClass('activeBtn');
        //         $('#btnbuy').removeClass('activeBtn');
        //         $('#btnbooking').removeClass('activeBtn');
        //         $('#content').addClass('animate__animated animate__fadeOut');
        //         changePage('rent');

        //     }
        //     if (btn == 'booking') {
        //         $('#btnbooking').addClass('activeBtn');
        //         $('#btnrent').removeClass('activeBtn');
        //         $('#btnbuy').removeClass('activeBtn');
        //         $('#content').addClass('animate__animated animate__fadeOut');

        //         changePage('booking');

        //     }
        // }


        // function changePage(c) {

        //     $.ajax({
        //         type: "POST",
        //         url: "propertymobile",
        //         dataType: 'JSON',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         data: {
        //             search: true
        //         },
        //         success: function(responese) {
        //             $('#content').removeClass('animate__animated animate__fadeOut');
        //             $('#content').addClass('animate__animated animate__fadeIn');
        //             $('#content').html(responese.data);
        //         },
        //     });

        // }
    </script>

@endsection
