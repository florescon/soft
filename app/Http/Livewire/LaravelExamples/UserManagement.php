<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class UserManagement extends Component
{
    use WithPagination;

    public $search = '';
    
    public $perPage = '10';

    public function mount(): void
    {
        $this->perPage = 10;
    }

    public function sortBy()
    {

    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
 
    public function destroy(User $user)
    {
        if($user){
            $user->delete();
        }
    }

    public function render()
    {
        return view('livewire.laravel-examples.user-management',[
            'users' => User::where('name', 'like', '%'.$this->search.'%')->paginate($this->perPage),
        ]);
    }
}
