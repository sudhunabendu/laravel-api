<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;

class Users extends Controller
{
    public function index()
    {
        $user = User::all();
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }

    public function save()
    {
        $phone = new Phone();
        $phone->phone = '9875614547';
        $user = new User();
        $user->name = 'Nabendu Bose';
        $user->email = 'nabendubose1991@gmail.com';
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "record has been saved successfully";
    }

    public function fetch()
    {
        $phone = User::find(5)->phone;
        echo "<pre>";
        return print_r($phone);
        echo "</pre>";
    }
}
