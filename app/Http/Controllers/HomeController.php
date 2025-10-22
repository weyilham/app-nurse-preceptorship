<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\User;
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

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date|before:today',
            'alamat' => 'required|string|max:255',
            'phone' => 'required|regex:/^08[0-9]{8,13}$/',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ], [
            'name.required' => 'Nama tidak boleh kosong.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
            'alamat.required' => 'Alamat tidak boleh kosong.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.regex' => 'Nomor telepon harus dimulai dengan 08 dan terdiri dari 10-15 digit.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'jenis_kelamin.in' => 'Pilih jenis kelamin yang valid.',
        ]);

        // Jika valid, lanjut update ke database
        $user = User::findOrFail($id);
        $user->update($validated);

        return redirect()->back()->with('success', 'Data user berhasil diperbarui.');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to homepage after logout
    }
}
