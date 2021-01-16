<?php

namespace App\Http\Livewire;
use App\Models\Car;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        $dataList = Car::where('title','like','%'.$this->search.'%')->get();
        return view('livewire.search',['dataList'=>$dataList,'query'=>$this->search]);
    }
}
