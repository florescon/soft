<?php

namespace App\Http\Livewire\Zone;

use Livewire\Component;
use App\Models\Zone;

class EditZone extends Component
{
    public $zone;

    /** @var string */
    public $name = '';

    public function mount(Zone $zone)
    {
        $this->zone = $zone;
        $this->name = $zone->name;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'min:3', 'max:100'],
        ]);
        
        $this->zone->update(['name' => $this->name]);

        return redirect(route('zones'))->with('status', 'Zone successfully created.');
    }

    public function render()
    {
        return view('livewire.zone.edit-zone');
    }
}
