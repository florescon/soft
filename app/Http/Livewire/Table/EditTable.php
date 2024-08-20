<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Table;

class EditTable extends Component
{
    public $table;

    /** @var string */
    public $name = '';

    public function mount(Table $table)
    {
        $this->table = $table;
        $this->name = $table->name;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        $this->table->update(['name' => $this->name]);

        return redirect(route('tables'))->with('status', 'Table successfully created.');
    }

    public function render()
    {
        return view('livewire.table.edit-table');
    }
}
