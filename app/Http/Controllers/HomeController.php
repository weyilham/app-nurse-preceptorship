<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Mod;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function module()
    {
        $modules = Module::all();
        return view('module', compact('modules'));
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to homepage after logout
    }
}
