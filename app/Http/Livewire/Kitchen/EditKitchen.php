<?php

namespace App\Http\Livewire\Kitchen;

use Livewire\Component;
use App\Models\Kitchen;

class EditKitchen extends Component
{
    public $kitchen;

    /** @var string */
    public $name = '';

    public function mount(Kitchen $kitchen)
    {
        $this->kitchen = $kitchen;
        $this->name = $kitchen->name;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        $this->kitchen->update(['name' => $this->name]);

        return redirect(route('kitchens'))->with('status', 'Kitchen successfully created.');
    }

    public function render()
    {
        return view('livewire.kitchen.edit-kitchen');
    }
}
