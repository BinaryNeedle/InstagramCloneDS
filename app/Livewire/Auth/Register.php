<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $title = "Register to Instantgram";

    #[Rule('required', message: 'Please enter your name.')]
    #[Rule('string', message: 'Please enter a valid name.')]
    public $name;

    #[Rule('required', message: 'Please enter your username.')]
    #[Rule('min:3', message: 'Your username must be at least 3 characters long.')]
    #[Rule('max:25', message: 'Your username must be less than 25 characters long.')]
    #[Rule('unique:users', message: 'This username is already taken. Please choose another.')]
    #[Rule('alpha_dash', message: 'Your username may only contain letters, numbers, dashes and underscores.')]
    public $username;

    #[Rule('required', message: 'Please enter your email.')]
    #[Rule('email', message: 'Please enter a valid email address.')]
    #[Rule('unique:users', message: 'This email is already taken. Please choose another.')]
    public $email;

    #[Rule('required', message: 'Please enter your password.')]
    #[Rule('min:8', message: 'Your password must be at least 8 characters long.')]
    #[Rule('confirmed', message: 'Your passwords do not match.')]
    public $password;

    #[Rule('required', message: 'Please confirm your password.')]
    public $password_confirmation;

    public function register()
    {
        // dd($this);
        $this->validate();

        $user = $this->store(
            $this->only(
                'name',
                'username',
                'email',
                'password',
            )
        );

        Auth::login($user);

        return $this->redirect(
            session('url.intended', Route('dashboard')),
            navigate: true
        );
    }

    protected function store(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
