<?php

namespace App\Http\Livewire\Food;

use Livewire\Component;
use App\Models\Food;

class EditFood extends Component
{
    public $food;

    /** @var string */
    public $name = '';

    public $price;

    public function mount(Food $food)
    {
        $this->food = $food;
        $this->name = $food->name;
        $this->price = $food->price;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'price' => ['required', 'numeric', 'min:1'],
        ]);
        
        $this->food->update(['name' => $this->name, 'price' => $this->price]);

        return redirect(route('foods'))->with('status', 'Food successfully created.');
    }

    public function render()
    {
        return view('livewire.food.edit-food');
    }
}
