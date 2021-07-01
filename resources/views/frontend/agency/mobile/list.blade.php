
<div class="cards_container">
    @foreach ($agencies as $item)
        @php
            $id = str_replace('(', '', str_replace(' ', '-', strtolower($item->name))) . '-' . strtolower($item->areaOne->city->name) . '-' . $item->id;
        @endphp


        <div class="card_div text-decoration-none">
            <a href="{{ route('single.agency', [str_replace(')', '', $id)]) }}">
                <img class="propertyImg"
                    src='https://chhatt.s3.ap-south-1.amazonaws.com/agencies/{{ $item->image }}' alt="" />
            </a>
            <p> {{ @$item->areaOne->city->name ?? 'Karachi' }}</p>
            <b>
                {{ $item->name }}
            </b>
            <p>
                <b style="color: rgb(0, 51, 255)">
                    {{ $item->user->name }}
                </b>
            </p>
        </div>
    @endforeach

</div>
<div class="d-flex justify-content-center ">
    <nav aria-label="Page navigation example">
        {{ $agencies->links() }}
    </nav>
</div>
