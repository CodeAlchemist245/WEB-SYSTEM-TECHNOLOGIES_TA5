<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Juan Dela Cruz', 'email' => 'juan@gmail.com'],
            ['id' => 2, 'name' => 'Maria Santos', 'email' => 'maria@gmail.com'],
            ['id' => 3, 'name' => 'Pedro Cruz', 'email' => 'pedro@gmail.com'],
            ['id' => 4, 'name' => 'Ana Reyes', 'email' => 'ana@gmail.com'],
            ['id' => 5, 'name' => 'Mark Gonzales', 'email' => 'mark@gmail.com'],
        ];

        return view('customers', compact('customers'));
    }
}