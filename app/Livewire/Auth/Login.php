<?php

namespace App\Livewire\Auth;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportValidation\Rule;

class Login extends Component
{
    #[Rule('required|email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function login(): void
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->redirect('/', navigate: true);
        } else {
            session()->flash('error', 'Could not find matching credentials in our records!');
            $this->redirect('/login', navigate: true);
        }
    }

    public function render()
    {
        if (Auth::check())
            $this->redirect('/', navigate: true);

        return view('livewire.auth.login');
    }
}
