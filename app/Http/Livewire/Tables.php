<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Table;

class Tables extends Component
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
 
    public function destroy(Table $table)
    {
        if($table){
            $table->delete();
        }
    }

    public function render()
    {
        return view('livewire.tables', [
            'tables' => Table::where('name', 'like', '%'.$this->search.'%')->paginate($this->perPage),
        ]);
    }
}
