<?php

namespace App\Http\Livewire\Service;

use App\AreaOne;
use App\City;
use App\ConstructionService;
use App\ConstructionServiceType;
use Livewire\Component;

class Dropdowns extends Component
{
    public $service;
    public $city;
    public $area;
    public $servicekey;
    public $citykey;
    public $areakey;

    public function mount()
    {
        $this->service = ConstructionServiceType::take(3)->get();
        $this->city = City::take(3)->get();
        $this->area = AreaOne::take(3)->get();
    }

    public function Search($whatto)
    {
        if ($whatto == 'city') {
            $this->city = City::where('name', 'like', '%' . $this->citykey . '%')->get();
        }
        if ($whatto == 'service') {
            $this->service = ConstructionServiceType::where('name', 'like', '%' . $this->servicekey . '%')->get();
        }
        if ($whatto == 'area') {
            $this->area = AreaOne::where('name', 'like', '%' . $this->areakey . '%')->get();
        }
    }


    public function render()
    {
        return view('livewire.service.dropdowns');
    }
}
