<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use Filament\Pages\Auth\Register as FilamentRegister;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Hash;

class Register extends FilamentRegister
{
    protected static ?string $title = 'Register';

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Name')
                ->required(),

            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),

            TextInput::make('password')
                ->label('Password')
                ->password()
                ->required()
                ->minLength(8),

            TextInput::make('password_confirmation')
                ->label('Confirm Password')
                ->password()
                ->required()
                ->same('password'),
        ];
    }

    // protected function register(): void
    // {
    //     $data = $this->form->getState();

    //     User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);

    //     redirect()->route('filament.auth.login');
    // }
}
