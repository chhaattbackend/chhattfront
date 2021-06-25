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

@forelse ($properties as $item)
    @php
        $id = @$item->areaOne->city->name . '-' . @$item->type . '-' . @$item->property_type . '-' . @$item->property_for . '-' . @$item->areaOne->name . '-' . @$item->areaTwo->name . '-' . $item->id;
        $id = str_replace(str_split('\\/:*?"<>|()'), '-', strtolower($id));
        $id = str_replace(str_split(' '), '_', strtolower($id));
        $id = strtolower($id);
    @endphp
    <div class="col-sm-4 col-lg-3 mb-4">
        <!-- property card start -->
        <div class="propertyCard p-2">
            <a class="text-decoration-none position-relative" href="{{ route('single.property', $id) }}">
                <div class="imageSection">
                    @if (!$item->images->isEmpty())
                        <img class="slideImg"
                            src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ @$item->images[0]->name }}"
                            alt="" />
                    @else
                        <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                            alt="" class="slideImg" />

                    @endif

                </div>
                <div class="text-dark paraContainer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-between">
                            <h6 class="lightColor">{{ $item->type }}</h6>
                            <h6 class="lightColor">{{ $item->updated_at->diffForHumans() }}</h6>
                        </div>
                        <div style="text-align: left" class="mt-2 ellipse">
                            <strong class="mt-5">{{ $item->property_for }} in {{ optional($item->areaThree)->name }}
                                {{ optional($item->areaTwo)->name }},
                                {{ optional($item->areaOne)->name }}</strong>
                        </div>
                        <h6 style="text-align: left" class="mt-1 mb-2">
                            @if ($item->price == null || $item->price == 0)
                                <span style="background: red;" class="badge badge-pill badge-danger">On Request</span>
                            @else
                                <strong> Rs: {{ convert_rupee($item->price) }} </strong>
                            @endif
                        </h6>
                        <div class="d-flex justify-content-lg-around">
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
                    <div class="d-flex justify-content-between mt-3">
                        <button class="w-100 themebtn py-1 text-white">View more</button>
                        <button class="w-100 ms-3">Contact Us</button>
                    </div>
                </div>
            </a>
        </div>
        <!-- property card end -->
    </div>
@empty
    <p>no data found</p>
@endforelse
