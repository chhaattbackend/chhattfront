<?php

namespace App\Http\Livewire\Map;

use App\AreaOne;
use App\Map;
use Livewire\Component;
use Livewire\WithPagination;

class Item extends Component
{
    use WithPagination;
    public $selectarea, $area;
    public function mount()
    {
        $this->area=AreaOne::all();
        $this->selectarea="DHA";
    }

    public function render()
    {
        $maps = Map::whereHas('areaOne', function ($query) {
            $query->where('name', $this->selectarea);
        })->orderBy('created_at', 'desc')->paginate(28);


        return view('livewire.map.item', compact('maps'));
    }
}
