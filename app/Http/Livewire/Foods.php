<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Food;

class Foods extends Component
{
    use WithPagination;

    public $search = '';
    
    public $perPage = '10';

    public function mount(): void
    {
        $this->perPage = 10;
    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
 
    public function destroy(Food $food)
    {
        if($food){
            $food->delete();
        }
    }

    public function render()
    {
        return view('livewire.foods',[
            'foods' => Food::where('name', 'like', '%'.$this->search.'%')->paginate($this->perPage),
        ]);
    }
}
