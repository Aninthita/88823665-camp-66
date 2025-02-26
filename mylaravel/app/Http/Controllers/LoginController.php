<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $req) {
        // Find user by email
        $user = User::where('email', $req->email)->first();

        // Verify password and authenticate user
        if ($user && Hash::check($req->password, $user->password)) {
            Auth::login($user);
            return redirect('/users');
        } else {
            return redirect('/login')->withErrors(['error' => 'กรุณาตรวจสอบความถูกต้อง']);
        }
    }
}
