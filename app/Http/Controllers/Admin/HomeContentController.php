<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeContentController extends Controller
{
    public function edit()
    {
        // Kalau belum ada data sama sekali, otomatis buat 1 baris dengan nilai kosong (bukan null)
        $home = HomeContent::firstOrCreate([], [
            'nama'          => '',
            'role'          => '',
            'deskripsi'     => '',
            'linkinstagram' => '',
            'linkemail'     => '',
            'linklinkedin'  => '',
            'foto'          => '',
            'cv'            => '',
        ]);

        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        $home = HomeContent::firstOrCreate([]);

        $request->validate([
            'nama'          => 'required|string|max:30',
            'role'          => 'required|string|max:20',
            'deskripsi'     => 'required|string',
            'foto'          => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'cv'            => 'nullable|mimes:pdf|max:5120',
            'linkinstagram' => 'nullable|url|max:255',
            'linkemail'     => 'nullable|email|max:255',
            'linklinkedin'  => 'nullable|url|max:255',
        ]);

        $data = $request->only(['nama', 'role', 'deskripsi', 'linkinstagram', 'linkemail', 'linklinkedin']);

        if ($request->hasFile('foto')) {
            if ($home->foto) {
                \Storage::disk('public')->delete($home->foto);
            }
            $data['foto'] = $request->file('foto')->store('home', 'public');
        }

        if ($request->hasFile('cv')) {
            if ($home->cv) {
                \Storage::disk('public')->delete($home->cv);
            }
            $data['cv'] = $request->file('cv')->store('home', 'public');
        }

        $home->update($data);

        return redirect()->route('admin.home.edit')->with('success', 'Konten Home berhasil diupdate!');
    }
}