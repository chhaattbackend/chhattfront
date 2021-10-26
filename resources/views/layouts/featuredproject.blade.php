<br />
<div class="secdivtxt">
    <h3 class="fw-bold">Featured Projects</h3>
</div>
<br>
<br>


@foreach ($projects as $item)
    <div class="col-sm-3 p-3">
        <!-- property card start -->
        <div class="propertyCard p-2">
            <a class="text-decoration-none text-dark position-relative" href="#">
                <div class="imageSection">
                   
                    <img class="slideImg" src="https://chhatt.s3.ap-south-1.amazonaws.com/projects/{{ @$item->images[0]->name }}"
                        alt="" />
                </div>
                <div class="text-dark paraContainer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-between">

                        </div>
                        <div class="mt-2">
                            <strong class="mt-5">{{ $item->name }}</strong>

                        </div>
                        <h6>
                            {{ $item->address }}
                        </h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- property card end -->
    </div>


@endforeach
