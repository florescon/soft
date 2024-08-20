<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Table;

class CreateTable extends Component
{
    /** @var string */
    public $name = '';

    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        Table::create([
            'name' => $this->name,
        ]);

        return redirect(route('tables'))->with('status', 'Table successfully updated.');
    }

    public function render()
    {
        return view('livewire.table.create-table');
    }
}
