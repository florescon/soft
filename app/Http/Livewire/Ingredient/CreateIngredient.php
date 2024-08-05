<?php

namespace App\Http\Livewire\Ingredient;

use Livewire\Component;
use App\Models\Ingredient;

class CreateIngredient extends Component
{
    /** @var string */
    public $name = '';

    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        Ingredient::create([
            'name' => $this->name,
        ]);

        return redirect(route('ingredients'))->with('status', 'Ingredient successfully updated.');
    }

    public function render()
    {
        return view('livewire.ingredient.create-ingredient');
    }
}
