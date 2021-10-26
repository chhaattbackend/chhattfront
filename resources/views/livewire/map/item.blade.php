<div>
    <div>


        <meta hidden name="csrf-token" content="{{ csrf_token() }}" />

        <div class="agency-search m-3 p-2">
            <div class="secdiv">
                <!-- ============================  SEARCH BOX START  ================================  -->
                <h3>Search Maps</h3>
                <div class="searchdiv">
                    <div class="leftSec w-100">
                        <span>
                            <!-- <RiSearch2Line fontSize="26px" /> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </span>
                        <!-- search field start  -->
                        <div style="width: 100%">
                            {{-- <input id="keyword" type="text" placeholder="Search Maps" /> --}}
                            <select wire:model.debounce='selectarea' class="mdb-select md-form w-100"
                                searchable="Search here.." name="" id="">
                                <div>

                                    @foreach ($area as $item)

                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </div>
                                {{-- <input type="text" placeholder="Search.." id="myInput" onkeyup=""> --}}


                            </select>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <h2>
            New Society Maps
        </h2>
        <div class="mapCardContainer">
            <div class="container-fluid px-0">
                <h6 id="total" class="text-end fw-bold">Showing {{ $maps->total() }} Results</h6>

                <div id="list" class="row">

                    @forelse($maps as $item)

                        <div class="col-sm-4 col-lg-3 mb-4">
                            <!-- property card start -->
                            <div class="propertyCard p-2">
                                @php
                                    // $a = str_replace('(', '', str_replace(' ', '-', strtolower($item->name))) . '-' . strtolower($item->getCity->name) . '-' . $item->id;
                                    $a = '';
                                @endphp
                                <a class="text-decoration-none position-relative"
                                    href="{{ route('single.map', $item->id) }}">
                                    <div class="imageSection zoom" style="">
                                        <img class="slideImg"
                                            src='https://chhatt.s3.ap-south-1.amazonaws.com/maps/{{ $item->image }}'
                                            alt="" />
                                    </div>
                                    <div class="text-dark paraContainer">
                                        <div class="mt-1">
                                            <div class="d-flex justify-content-between">
                                                {{-- <h6 class="lightColor">{{ $item->areaOne->city->name }}</h6> --}}
                                                <h6 class="lightColor">{{ optional($item->city)->name }}</h6>
                                            </div>
                                            {{-- @dd($item->areaOne); --}}
                                            <div style="white-space: nowrap;" class="text-start mt-1">
                                                <strong class="mt-5">{{ $item->name }}</strong>
                                            </div>
                                            <div style="white-space: nowrap;" class="text-start mt-1">
                                                <strong
                                                    class="mt-5">{{ optional($item->areaOne)->name }}</strong>
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
                        @empty
                        <h4>
                            No Data Found
                        </h4>
                    @endforelse
                </div>

                <div id="wow" class="justify-content-center pagination">
                    {{ $maps->links('livewire::simple-bootstrap') }}
                </div>
                <br />
                <hr class="bg-dark" />
                <br />
            </div>
        </div>
    </div>

    {{-- <script type="text/javascript">



    $("#drop").select2({
    placeholder: "Select a Name",
    allowClear: true
    });

    </script> --}}
</div>
