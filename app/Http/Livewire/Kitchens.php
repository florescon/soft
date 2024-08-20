<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Kitchen;

class Kitchens extends Component
{
    use WithPagination;

    public $search = '';
    
    public $perPage = '10';

    public function mount(): void
    {
        $this->perPage = 10;
    }

    public function sortBy()
    {

    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
 
    public function destroy(Kitchen $kitchen)
    {
        if($kitchen){
            $kitchen->delete();
        }
    }

    public function render()
    {
        return view('livewire.kitchens', [
            'kitchens' => Kitchen::where('name', 'like', '%'.$this->search.'%')->paginate($this->perPage),
        ]);
    }
}
