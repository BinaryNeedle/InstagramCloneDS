<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $title = "Login to Instantgram";

    #[Rule('required', message: 'Please enter your username or email.')]
    public $username_or_email;

    #[Rule('required', message: 'Please enter your password.')]
    public $password;

    public function login()
    {
        $this->validate();

        $field = filter_var($this->username_or_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where($field, $this->username_or_email)->first();

        if (!$user) {
            return $this->addError(
                'username_or_email',
                'The provided username or email is incorrect. Please try again or create a new account.',
            );
        }

        if (!Hash::check($this->password, $user->password)) {
            return $this->addError(
                'password',
                'The provided password is incorrect. Please try again or reset your password.',
            );
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
