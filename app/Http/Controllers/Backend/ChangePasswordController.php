<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('backend.account.change-password.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed'
        ]);

        // check if email matches the authenticated user email
        if ($request->email != Auth::user()->email) {
            return redirect()->back()->with('error', 'Email belum terdaftar!');
        }

        // update the user password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('message', 'Kata sandi berhasil diubah!');
    }
}
