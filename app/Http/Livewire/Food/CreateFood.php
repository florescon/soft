<?php

namespace App\Http\Livewire\Food;

use Livewire\Component;
use App\Models\Food;

class CreateFood extends Component
{
    /** @var string */
    public $name = '';

    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        Food::create([
            'name' => $this->name,
        ]);

        return redirect(route('foods'))->with('status', 'Food successfully updated.');
    }

    public function render()
    {
        return view('livewire.food.create-food');
    }
}
