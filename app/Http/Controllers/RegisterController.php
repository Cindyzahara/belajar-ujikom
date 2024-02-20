<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return view('auth_manual.register');
    }

    public function store(Request $request)
    {
        // return request()->all();
        
        $validatedData = $request->validate([
            'username'  => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'namaLengkap' => 'required',
            'alamat' => 'required',
            'role' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

            return redirect()->intended('login');
        // }

        // return back()->withInput()->with('failed','Register Failed!');
        }
    }