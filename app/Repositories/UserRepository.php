<?php

namespace App\Repositories;

use App\Models\User;
use App\Jobs\SendRegistrationEmail;

class UserRepository
{
    public function getAll()
    {
        return User::get();
    }

    public function createUser($data)
    {
        $user = new User;

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->save();

        SendRegistrationEmail::dispatch($user->email)->delay(now()->addSeconds(10));

        return $user->fresh();
    }

    public function getById($id)
    {
        return User::where('id', $id)->get();
    }

    public function updateUser($data, $id)
    {
        $user = User::find($id);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->update();

        return $user;
    }

    public function deleteById($id)
    {
        $user = User::find($id);
        $user->delete();

        return $user;
    }
}
