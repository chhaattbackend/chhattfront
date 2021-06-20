@foreach ($agencies as $item)

    <li>
        <div>
            <a href="{{ route('single.agency', $item->id ) }}" class="property_card_main_div text-decoration-none">
                <img src="https://chhatt.s3.ap-south-1.amazonaws.com/agencies/{{ @$item->image }}"
                    class="propertyImg" alt="" />
                <p> {{ @$item->areaOne->city->name }} </p>
                <b>
                   {{ @$item->name }}
                </b>
                <p>
                    <b class="text-dark fw-light">{{ @$item->user->name }}</b>
                </p>
            </a>
        </div>
    </li>


@endforeach
