<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    public function dashboard()
    {
        return view('admin.auth.dashboard');
    }

    public function logout()
    {
      auth()->logout();  
      return redirect()->route('getLogin')->with('success','you have successful logout');
    }
}
