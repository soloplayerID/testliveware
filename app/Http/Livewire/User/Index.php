<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $users = [];
    public $search = '';

    protected $listeners = [
      'userCreated'
    ];

    public function mount()
    {
      $this->users = User::orderBy('id', 'desc')->get();
    }

    public function userCreated($id)
    {
      $this->users = User::orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.user.index');
    }

    public function searchUser()
    {
      $this->users = User::where('name', 'like', '%'.$this->search .'%')->get();
    }
}
