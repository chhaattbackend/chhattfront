@foreach ($collection as $item)


    <li class="scroll-img-list ms-3 me-1 p-2">
        <a class="text-decoration-none position-relative" href="#">
            <div class="imageSection">
                <img class="slideImg"
                    src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ $item->images[0]->name }}" alt="" />
            </div>
            <div class="text-dark paraContainer">
                <div class="mt-1">
                    <div class="d-flex justify-content-between">
                        <h6 class="lightColor">{{ $item->type }}</h6>
                        <h6 class="lightColor">an hour ago</h6>
                    </div>
                    <div class="mt-2">
                        <strong class="mt-5">Flat For Sale in {{ optional($item->areaThree)->name }},
                            {{ optional($item->areaTwo)->name }},
                            {{ optional($item->areaOne)->name }}</strong>
                    </div>
                    <h6 class="mt-2">
                        <strong>
                            Rs: 1.2 Cr.
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
