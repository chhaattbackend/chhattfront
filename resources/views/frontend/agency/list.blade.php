@foreach ($agencies as $item)

    <div class="col-sm-4 col-lg-3 mb-4">
        <!-- property card start -->
        <div class="propertyCard p-2">
            <a class="text-decoration-none position-relative" href="#">
                <div class="imageSection">
                    <img class="slideImg"
                        src='https://chhatt.s3.ap-south-1.amazonaws.com/agencies/{{ $item->image }}' alt="" />
                </div>
                <div class="text-dark paraContainer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-between">
                            <h6 class="lightColor">{{ $item->areaOne->city->name }}</h6>
                        </div>
                        <div class="text-start mt-2">
                            <strong class="mt-5">{{ $item->name }}</strong>
                        </div>
                        <h6 class="text-start mt-2">
                            <strong>
                                {{ $item->user->name }}
                            </strong>
                        </h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- property card end -->
    </div>

@endforeach
