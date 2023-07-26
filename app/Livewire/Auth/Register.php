<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportValidation\Rule;

class Register extends Component
{
    #[Rule('required|unique:users,username')]
    public string $username = '';

    #[Rule('required|unique:users,email')]
    public string $email = '';

    #[Rule('required|min:8|confirmed')]
    public string $password = '';
    public string $password_confirmation = '';

    public function register()
    {
        $this->validate();
        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        if ($user) {
            session()->flash('status', 'Account created successfully!');
            return $this->redirect('/', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}