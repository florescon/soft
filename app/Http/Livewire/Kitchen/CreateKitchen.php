<?php

namespace App\Http\Livewire\Kitchen;

use Livewire\Component;
use App\Models\Kitchen;

class CreateKitchen extends Component
{
    /** @var string */
    public $name = '';

    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        Kitchen::create([
            'name' => $this->name,
        ]);

        return redirect(route('kitchens'))->with('status', 'Kitchen successfully updated.');
    }

    public function render()
    {
        return view('livewire.kitchen.create-kitchen');
    }
}
