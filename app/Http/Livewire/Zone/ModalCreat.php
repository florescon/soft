<?php

namespace App\Http\Livewire\Zone;

use Livewire\Component;
use App\Models\Zone;

class ModalCreat extends Component
{
    public $createModal = false;

    /** @var mixed */
    public $zone;

    public $image;

    /** @var array<string> */
    public $listeners = ['createModal'];

    /** @var array */
    protected $rules = [
        'zone.name'        => 'required|min:3|max:30',
        'zone.description' => 'nullable|min:3|max:255',
    ];

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function createModal(): void
    {
        $this->resetErrorBag();

        $this->resetValidation();

        $this->zone = new Zone();

        $this->createModal = true;
    }

    public function create()
    {
        $this->createModal = false;
    }

    public function render()
    {
        return view('livewire.zone.modal-creat');
    }
}
