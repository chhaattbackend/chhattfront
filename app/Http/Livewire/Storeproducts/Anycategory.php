<?php

namespace App\Http\Livewire\Storeproducts;

use Livewire\WithPagination;
use Livewire\Component;

class Anycategory extends Component
{
    use WithPagination;

    public $which;
    public $user = [];
    public $anycategory = [];

    // public function mount()
    // {
    //     $this->anycategory=

    // }
    public function render()
    {
        return view('livewire.storeproducts.anycategory');
    }
}
