<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count(); // Mengambil total users dari model User
        $users = User::all(); // Mengambil semua data users

        return view('auth.dashboard', compact('totalUsers', 'users'));
        return view('your.view', ['users' => $users]);
    }
    
}
