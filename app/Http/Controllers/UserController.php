<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin'],
            ['id' => 2, 'username' => 'cashier1'],
            ['id' => 3, 'username' => 'manager'],
            ['id' => 4, 'username' => 'staff1'],
            ['id' => 5, 'username' => 'staff2'],
        ];

        return view('users', compact('users'));
    }
}