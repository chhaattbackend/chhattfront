<div class="mb-3 d-flex flex-column flex-sm-row w-100">
    <input wire:keyup="Search('service')" wire:model="servicekey" list="service" style="outline: none;margin-right:5px ;" placeholder="Service"
        class="w-100 py-1 rounded-3 px-2 border border-dark border-1 mb-2 mb-sm-0 ">
    <datalist id="service">
         @foreach ($service as $item)
        <option value="{{ $item->name }}">
        @endforeach
    </datalist>

    <input wire:keyup="Search('city')" wire:model="citykey" list="city" style="outline: none;margin-right:5px;" placeholder="City"
        class="w-100 py-1 rounded-3 px-2 border border-dark border-1 mb-2 mb-sm-0">
    <datalist id="city">
        @foreach ($city as $item)
        <option value="{{ $item->name }}">
        @endforeach
    </datalist>

    <input wire:keyup="Search('area')" wire:model="areakey" list="0" style="outline: none" placeholder="Area"
        class="w-100 py-1 rounded-3 px-2 border border-dark border-1 mb-2 mb-sm-0">
    <datalist id="area">
         @foreach ($area as $item)
        <option value="{{ $item->name }}">
        @endforeach
    </datalist>
</div>
