<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $email;
    public $password;

    protected $rules = [
      'name' => 'required|min:3',
      'email' => 'required|email',
      'password' => 'required|min:3',
    ]

    public function render()
    {
        return view('livewire.user.create');
    }

    public function store()
    {
      $this->validate();

      $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => $this->password,
      ]);

      $this->name = '';
      $this->email = '';
      $this->password = '';

      $this->emit('userCreated', $user->id);
    }
}
