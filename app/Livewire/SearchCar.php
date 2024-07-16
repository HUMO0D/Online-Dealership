<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\AddCar;
use Illuminate\Http\Request;



class SearchCar extends Component
{
    public $search='';
    public $listCars;

    public function mount()
    {
        $this->listCars = [];
    }

    public function render()
    {
    //    dd($this->search);
       $this-> listCars = AddCar::where('carname', 'like', '%'.$this->search.'%')
                                ->orWhere('model', 'like', '%'.$this->search.'%')
                                ->get();
        return view('livewire.search-car');
    }
}
