<?php

namespace App\Http\Livewire\Food;

use Livewire\Component;
use App\Models\Food;
use Livewire\WithFileUploads;

class CreateFood extends Component
{
    use WithFileUploads;

    /** @var string */
    public $name = '';
    public $description = '';
    public $price;
    public $image;
    public $category_id;

    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'description' => ['required', 'min:3', 'max:100'],
            'price' => ['required', 'numeric', 'min:1'],
            'image' => ['image', 'nullable', 'max:1024'],
            'category_id' => ['required']
        ]);
        
        if($this->image){
            $date = date("Y-m-d");
            $imageName = $this->image->store("pictures/".$date,'public');
        }

        Food::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'image' => $this->image ? $imageName : null,
        ]);

        return redirect(route('foods'))->with('status', 'Food successfully updated.');
    }

    public function render()
    {
        return view('livewire.food.create-food');
    }
}
