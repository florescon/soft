<?php

namespace App\Http\Livewire\Zone;

use Livewire\Component;
use App\Models\Zone;

class CreateZone extends Component
{
    /** @var string */
    public $name = '';

    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        Zone::create([
            'name' => $this->name,
        ]);

        return redirect(route('zones'))->with('status', 'Zone successfully updated.');
    }

    public function render()
    {
        return view('livewire.zone.create-zone');
    }
}
