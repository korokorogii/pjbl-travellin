<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Autentikasi;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:4', 'max:16', 'unique:autentikasis'],
            'email' => 'required|email:dns|unique:autentikasis',
            'password' => 'required|min:8|max:16',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Autentikasi::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan');
    }
}
