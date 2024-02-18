<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nis' => 'required|integer|digits:8',
            'aspirasi' => 'required',
            'lokasi_kejadian' => 'required',
            'keterangan' => 'required',
            'gambar_kejadian' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke penyimpanan
        $gambarKejadianPath = $request->file('gambar_kejadian')->store('public/gambar_kejadian');

        // Buat entri dalam database
        $laporan = new Laporan; // Gunakan namespace yang benar
        $laporan->category_id = $request->category_id;
        $laporan->nis = $request->nis;
        $laporan->aspirasi = $request->aspirasi;
        $laporan->lokasi_kejadian = $request->lokasi_kejadian;
        $laporan->keterangan = $request->keterangan;
        $laporan->gambar_kejadian = str_replace('public/', 'storage/', $gambarKejadianPath); // Ubah path untuk disimpan di kolom gambar_kejadian
        $laporan->status = 'pending'; // Status awal, bisa disesuaikan sesuai kebutuhan
        $laporan->feedback = 'Belum ada umpan balik'; 
        $laporan->save();

        // Di dalam method submitForm() dalam FormController
        return redirect()->back()->with('success', 'Formulir berhasil terkirim. NO.Laporan anda :'  . $laporan->id);

    }
}
