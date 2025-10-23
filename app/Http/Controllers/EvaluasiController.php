<?php

namespace App\Http\Controllers;

use App\Models\DetailEvaluasi;
use App\Models\EvaluasiKompetensi;
use App\Models\User;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function index()
    {
        return view('evaluasi.index');
    }

    public function kompetensi()
    {

        $kompetensi = EvaluasiKompetensi::with('detail_kompetensi')->get();
        $users = User::where('status_kerja', 'Magang')->where('role', 'user')->get();

        
        return view('evaluasi.kompetensi', compact('kompetensi', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ], [
            'user_id.required' => 'Nama perawat wajib dipilih.',
        ]);

        foreach ($request->all() as $key => $value) {
            if (str_starts_with($key, 'skor_')) {
                $kompetensiId = str_replace('skor_', '', $key);

                // cek apakah sudah ada data sebelumnya
                $detail = DetailEvaluasi::where('user_id', $request->user_id)
                    ->where('evaluasi_kompetensi_id', $kompetensiId)
                    ->first();

                if ($detail) {
                    // ✅ jika sudah ada → update
                    $detail->update([
                        'skor' => $value,
                        'catatan' => $request->input('catatan_' . $kompetensiId),
                    ]);
                } else {
                    // ✅ jika belum ada → insert
                    DetailEvaluasi::create([
                        'user_id' => $request->user_id,
                        'evaluasi_kompetensi_id' => $kompetensiId,
                        'skor' => $value,
                        'catatan' => $request->input('catatan_' . $kompetensiId),
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Penilaian berhasil disimpan.');
    }


    public function getKompetensi($id)
    {
        $kompetensi = DetailEvaluasi::with('evaluasi_kompetensi')->where('user_id', $id)->get();
    
        if($kompetensi->isEmpty()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ]
            );
        }

        return response()->json(
            [
                'status' => true,
                'data' => $kompetensi
            ]
        );
    }
}
