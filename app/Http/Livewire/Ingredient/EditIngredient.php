<?php

namespace App\Http\Livewire\Ingredient;

use Livewire\Component;
use App\Models\Ingredient;

class EditIngredient extends Component
{
    public $ingredient;

    /** @var string */
    public $name = '';

    public function mount(Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;
        $this->name = $ingredient->name;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        $this->ingredient->update(['name' => $this->name]);

        return redirect(route('ingredients'))->with('status', 'Ingredient successfully created.');
    }

    public function render()
    {
        return view('livewire.ingredient.edit-ingredient');
    }
}
