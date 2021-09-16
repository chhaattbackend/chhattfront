@foreach ($maps as $item)

    <div class="col-sm-4 col-lg-3 mb-4">
        <!-- property card start -->
        <div class="propertyCard p-2">
            @php
                // $a = str_replace('(', '', str_replace(' ', '-', strtolower($item->name))) . '-' . strtolower($item->getCity->name) . '-' . $item->id;
                $a='';
            @endphp
            <a class="text-decoration-none position-relative"
                href="{{ route('single.map', $item->id)}}">
                <div class="imageSection zoom" style="">
                    <img class="slideImg" src='https://chhatt.s3.ap-south-1.amazonaws.com/maps/{{ $item->image }}'
                        alt="" />
                </div>
                <div class="text-dark paraContainer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-between">
                            {{-- <h6 class="lightColor">{{ $item->areaOne->city->name }}</h6> --}}
                            <h6 class="lightColor">{{optional($item->city)->name}}</h6>
                        </div>
                        {{-- @dd($item->areaOne); --}}
                        <div style="white-space: nowrap;"
                            class="text-start mt-1">
                            <strong class="mt-5">{{ $item->name }}</strong>
                        </div>
                        <div style="white-space: nowrap;"
                            class="text-start mt-1">
                            <strong class="mt-5">{{ optional($item->areaOne)->name }}</strong>
                        </div>
                        <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"
                            class="text-start mt-1 mb-0">
                            <strong>
                                {{ optional($item->areaTwo)->name }}
                            </strong>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <!-- property card end -->
    </div>

@endforeach
