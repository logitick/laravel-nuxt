<?php


namespace App\BunkerMaestro\UserManagement\Actions;


use App\User;

class CreateUser
{
    public function handle(string $name, string $email)
    {
        return User::create([
            'name' => $name,
            'email' => $email,
        ]);
    }
}
