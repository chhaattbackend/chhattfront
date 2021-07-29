<div>
    @foreach ($brand->storeproductwithpagination() as $item)
        <div class="product_detail_card_div_main_div p-2 m-2">
            <a class="text-decoration-none text-dark" href="">

                <div class="product_detail_card_div d-flex">
                    <a wire:onclick='product'
                        href="{{ route('construction.singleproduct', ['store' => $item->store->slug, 'product' => $item->product->slug]) }}">
                        <div class="frst_div">
                            <img
                                src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $item->product->image }}" />
                        </div>
                    </a>
                    <div class="ml-3 sec_div">
                        <h5 class="font-weight-bold">{{ $item->product->name }}</h5>
                        <span class="d-inline-block mr-3">RS {{ $item->store_price }} </span>
                        <span class="d-inline-block mr-3"> </span>
                        <a href=""> Get Export Price</a>
                        <ul class="mb-0 me-3">
                            <li><strong>Brand</strong>:<span> {{ @$item->product->brand->name }}</span>
                            </li>
                            {{ $item->product->description }}
                            <li><a href="name">read
                                    more...</a></li>
                        </ul>
                    </div>
                    <div class="th_div">
                        <h5 class="font-weight-light m-0">{{ $item->store->name }}</h5>
                        <span>{{ @$item->store->areaOne->name }} {{ @$item->store->areaTwo->name }}
                            {{ @$item->store->areaThree->name }} </span> <br>
                        <span>{{ @$item->store->areaOne->city->name }}</span>
                        {{-- <div class="mt-2">
                                    <span class="ls-img d-inline-block"></span>
                                    <span class="d-inline-block ind">Industry Leader</span>
                                    <span class="ls-img1 d-inline-block ml-4"></span>
                                    <span class="d-inline-block ind">Industry Leader</span>
                                </div>
                                <div class="mt-1">
                                    <span class="ls-img2 d-inline-block"></span>
                                    <span class="d-inline-block ind">Industry Leader</span>
                                </div> --}}
                        {{-- <div class="mr-auto mt-4 text-center curs">
                                    <img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNC43NSIgaGVpZ2h0PSIxNC41MTMiIHZpZXdCb3g9IjAgMCAxNC43NSAxNC41MTMiPjxkZWZzPjxzdHlsZT4uYXtmaWxsOiMwNjgwNzY7fTwvc3R5bGU+PC9kZWZzPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05MDguMjkxIC0zNjUuMTk1KSI+PHBhdGggY2xhc3M9ImEiIGQ9Ik05MTcuOSwzNzkuNzA4YTIuMjE3LDIuMjE3LDAsMCwwLDEuMzQ1LS40MTJjLjU1Mi0uMzk0LDEuMDgzLS44MjEsMS42LTEuMjYyYS44MjkuODI5LDAsMCwwLS4wMTYtMS4xMzRjLS41NzMtLjU5LTEuMTUzLTEuMTc0LTEuNzQ5LTEuNzQxYTEuMTA4LDEuMTA4LDAsMCwwLTEuNDA2LS4wNDVjLS4zMjQuMjI3LS42NTcuNDQ1LS45NTguN2EuNzY5Ljc2OSwwLDAsMS0uOTMxLjA4OSwzLjM1MSwzLjM1MSwwLDAsMS0uNzYtLjVjLS44NzUtLjgzMS0xLjczMi0xLjY4LTIuNTgzLTIuNTM2YTIuMzc1LDIuMzc1LDAsMCwxLS4zNjktLjU1NS45MTguOTE4LDAsMCwxLC4wOS0xLjFjLjI0Mi0uMy40Ni0uNjE5LjY4NS0uOTMzYTEuMDg2LDEuMDg2LDAsMCwwLS4xLTEuNDQxcS0uOC0uODE0LTEuNjE5LTEuNjEzYS44NzguODc4LDAsMCwwLTEuMzYuMDQzYy0uMzYxLjQxLS43LjgzOS0xLjAyNiwxLjI4YTIuMjUxLDIuMjUxLDAsMCwwLS4zLDIuMTkxLDkuOTc0LDkuOTc0LDAsMCwwLDEuODE1LDMuMDc2LDI2LjA0NywyNi4wNDcsMCwwLDAsNS4yMTUsNC45MTNBNC45NDUsNC45NDUsMCwwLDAsOTE3LjksMzc5LjcwOFoiLz48cGF0aCBjbGFzcz0iYSIgZD0iTTkxNi4wNzksMzY4LjhhNC4xMTksNC4xMTksMCwwLDEsMy4zNTYsMy4zNTUuNDI5LjQyOSwwLDAsMCwuNDI2LjM1OS40NDguNDQ4LDAsMCwwLC4wNzMtLjAwNy40MzMuNDMzLDAsMCwwLC4zNTYtLjUsNC45ODMsNC45ODMsMCwwLDAtNC4wNi00LjA2LjQzNC40MzQsMCwwLDAtLjUuMzUyLjQyOC40MjgsMCwwLDAsLjM0OS41Wm0wLDAiLz48cGF0aCBjbGFzcz0iYSIgZD0iTTkyMy4wMzQsMzcxLjg4N2E4LjIsOC4yLDAsMCwwLTYuNjg2LTYuNjg2LjQzMi40MzIsMCwwLDAtLjE0MS44NTIsNy4zMzEsNy4zMzEsMCwwLDEsNS45NzUsNS45NzUuNDMuNDMsMCwwLDAsLjQyNi4zNTkuNjIuNjIsMCwwLDAsLjA3NC0uMDA3LjQyNC40MjQsMCwwLDAsLjM1Mi0uNDkzWm0wLDAiLz48L2c+PC9zdmc+" />
                                    <span style="color: #068076; font-size: 14px;" class="font-weight-bold">
                                        View Mobile Number
                                    </span>
                                </div> --}}
                        <div class="border text-center btns_contact mt-3 curs">
                            <a class="text-white text-decoration-none" href="tel:{{ $item->store->phone }}">
                                <h6 class="m-0 font-weight-bold">Contact Supplier</h6>
                                <p class="m-0">Request a Quote</p>
                            </a>
                        </div>

                    </div>
                </div>
            </a>
            {{-- <p>{{ $storeproducts[0]->getrelatedcategory($storeproducts[0]->product->c_category->id,$storeproducts[0]->product->id) }}</p> --}}
            @unless($which == 'ccategory')
                <div class="botom_div_main  d-flex mt-3 flex-wrap justify-content-start pr-3">
                    @php
                        $spcount = 0;
                    @endphp
                    @foreach ($item->getrelatedproduct(3) as $suggesteditem)
                        @unless($suggesteditem->isstoreproduct($item->store_id) == null)
                            @php
                                $spcount++;
                            @endphp
                            @if ($spcount < 4)

                                <div class="d-flex div1 mr-2">
                                    <div>
                                        <a
                                            href="{{ route('construction.singleproduct', ['store' => $item->store->slug, 'product' => $suggesteditem->slug]) }}">
                                            <img width="80px" height="72px" style=" object-fit: contain;"
                                                src="https://chhatt.s3.ap-south-1.amazonaws.com/construction/product/{{ $suggesteditem->image }}" />
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="m-0 txt">{{ $suggesteditem->name }}</p>
                                        <p class="m-0 txt1">RS {{ $suggesteditem->price }}</p>
                                        <a class="anc" href="">Get Quote</a>
                                    </div>
                                </div>
                            @endif

                        @endunless
                    @endforeach
                </div>
            @endunless

        </div>
    @endforeach
    <br>
    <div class="d-flex justify-content-center">
        {{ $brand->storeproductwithpagination()->links('livewire::simple-tailwind') }}
    </div>
</div>
