<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search = '';
    public function render()
    {

        if ($this->search) {
            $users = User::where('name', 'LIKE', '%' . $this->search . '%')->paginate(25);
        } else {
            $users = User::paginate(25);
        }


        return view('livewire.table', compact('users'));
    }
}
