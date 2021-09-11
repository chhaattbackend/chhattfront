<div class="mapCardContainer">
    <div class="d-flex justify-content-between">
        <h2 class="fw-bold" style="margin-left: 10px">Mega Projects</h2>
        <div class="d-flex">
            {{-- <div class="ms-4">
                <button onclick="window.location=''" class="themebtn2 px-3 py-1 ms-1">View
                    all</button>
            </div> --}}
        </div>
    </div>
    <div class="position-relative mt-5">
        <div class="sliderBtnLeft text-right m-auto">
            <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
        </div>
        <!--image allary list-->
        <ul id="box-wrapper" class="boxWrapper ps-0">
            <!--apply loop on this li-->
            @forelse ($projects as $item)
                {{-- @php
                    $a = str_replace('(', '', str_replace(' ', '-', strtolower($item->name))) . '-' . strtolower($item->areaOne->city->name) . '-' . $item->id;
                @endphp --}}
                <li class="scroll-img-list ms-3 me-1 p-2" style="width: 237px;">

                    <a class="text-decoration-none position-relative" href="">

                        <div class="imageSection">

                            @if ($item->image != null)
                                <img class="slideImg"
                                    src="https://chhatt.s3.ap-south-1.amazonaws.com/agencies/{{ $item->image }}"
                                    alt="" />
                            @else
                                <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                                    alt="" class="slideImg">

                            @endif
                        </div>

                        <div class="text-dark paraContainer">
                            <div class="mt-1">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="lightColor">{{ optional($item->areaOne->city)->name }}</h6> --}}
                                </div>
                                <div class="mt-2 ellipse">
                                    <strong class="mt-5">{{ optional($item)->name }}</strong>
                                </div>
                                <h6 class="mt-2">
                                    <strong>
                                        {{ optional($item->user)->name }}
                                    </strong>
                                </h6>
                            </div>
                        </div>
                    </a>
                </li>
                @empty
                <p>
                    No project found
                </p>
            @endforelse

        </ul>
        <div class="sliderBtnRight col-1 m-auto">
            <i class="scroll-right bi bi-arrow-right-circle-fill"></i>
        </div>
    </div>


</div>
