@foreach ($property as $item)




    <li class="scroll-img-list ms-3 me-1 p-2">
        <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">


                @if (!$item->images->isEmpty())
                    <img class="slideImg"
                        src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ $item->images[0]->name }}"
                        alt="" />
                @else
                    <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                        alt="" class="slideImg">

                @endif
            </div>
            <div class="text-dark paraContainer">
                <div class="mt-1">
                    <div class="d-flex justify-content-between">
                        <h6 class="lightColor">{{ $item->type }}</h6>
                        <h6 class="lightColor">{{ $item->updated_at->diffForHumans() }}</h6>
                    </div>
                    <div class="mt-2 title">
                        <strong class="mt-5">{{ $item->property_for }}in {{ optional($item->areaThree)->name }},
                            {{ optional($item->areaTwo)->name }},
                            {{ optional($item->areaOne)->name }}</strong>
                    </div>
                    <h6 class="mt-2">
                        <strong>
                            @if ($item->price == null)
                                <span style="background: red;" class="badge badge-pill badge-danger">On Request</span>
                            @else
                                Rs: {{ convert_rupee($item->price) }}
                            @endif
                        </strong>
                    </h6>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <button class="w-100 themebtn py-1 text-white">View more</button>
                    <button class="w-100 ms-3">Contact Us</button>
                </div>
            </div>
        </a>
    </li>



@endforeach
