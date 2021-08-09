<?php

namespace App\Http\Livewire\Storeproducts;

use Livewire\Component;
use Livewire\WithPagination;

class Brands extends Component
{
    use WithPagination;
    public $brand = [];
    public $which;


    public function render()
    {
        return view('livewire.storeproducts.brands');
    }
}
