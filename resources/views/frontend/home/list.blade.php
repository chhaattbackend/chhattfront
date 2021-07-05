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

@foreach ($property as $item)
    @php
        $id = @$item->areaOne->city->name . '-' . @$item->type . '-' . @$item->property_type . '-' . @$item->property_for . '-' . @$item->areaOne->name . '-' . @$item->areaTwo->name . '-' . $item->id;
        $id = str_replace(str_split('\\/:*?"<>|()'), '-', strtolower($id));
        $id = str_replace(str_split(' '), '_', strtolower($id));
        $id = strtolower($id);
    @endphp


    <li class="scroll-img-list ms-3 me-1 p-2">
        <a class="text-decoration-none position-relative" href="{{ route('single.property', $id) }}">
            <div class="imageSection position-relative">


                @if (!$item->images->isEmpty())
                    <img class="slideImg"
                        src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ $item->images[0]->name }}"
                        alt="" />
                @else
                    <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                        alt="" class="slideImg">

                @endif

                <div class="cardTag position-absolute">
                    <h6>
                        {{ $item->property_for }}
                    </h6>
                </div>
            </div>
            <div class="text-dark paraContainer">
                <div class="mt-1">
                    <div class="d-flex justify-content-between">
                        <h6 class="lightColor">{{ $item->type }}</h6>
                        <h6 class="lightColor">{{ $item->updated_at->diffForHumans() }}</h6>
                    </div>
                    <div class="mt-2 title ellipse">
                        <strong class="mt-5">{{ $item->property_for }}in {{ optional($item->areaThree)->name }},
                            {{ optional($item->areaTwo)->name }},
                            {{ optional($item->areaOne)->name }}</strong>
                    </div>
                    <h6 class="mt-1">
                        <strong>
                            @if ($item->price == null)
                                <span style="background: red;" class="badge badge-pill badge-danger">On Request</span>
                            @else
                                <p style="color: rgb(228, 20, 20)">
                                    Rs: {{ convert_rupee($item->price) }}
                                </p>
                            @endif
                        </strong>
                    </h6>

                    <div class="d-flex justify-content-lg-around mt-1">
                        @if ($item->bed != null)

                            <div><img class="m-2" src="{{ asset('assets/bed.png') }}" width="18"
                                    height="17">{{ $item->bed }}</div>|
                        @endif

                        @if ($item->bath != null)

                            <div><img class="m-2" src="{{ asset('assets/bath.png') }}" width="18" height="17">
                                {{ $item->bath }}</div>|
                        @endif
                        @if ($item->size != null)
                            <div><img class="m-2" src="{{ asset('assets/sq.png') }}" width="18" height="17">
                                {{ $item->size }} {{ $item->size_type }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-1">
                    <button class="w-100 themebtn py-1 text-white">View more</button>
                    <button class="w-100 ms-3">Contact Us</button>
                </div>
            </div>
        </a>
    </li>



@endforeach
