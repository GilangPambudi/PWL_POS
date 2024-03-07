<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    public function index(){
        $user = UserModel::create([ 
        'username' => 'manager11', 
        'nama' => 'Manager11', 
        'password' => Hash::make('12345'), 
        'level_id' => 2,
        ]);

        $user->username = 'manager 12';

        $user->isDirty(); // true
        $user->isDirty('username'); // true
        $user->isDirty('nama'); // false
        $user->isDirty(['nama', 'username']); // true

        $user->isClean(); // false
        $user->isClean('username'); // false
        $user->isClean('nama'); // true
        $user->isClean (['nama', 'username']); // false

        $user->save();

        $user->isDirty(); // false
        $user->isClean(); // true

        dd($user->wasChanged(['nama', 'username']));
    }
}