<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('admin.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'posisi'       => 'required|string|max:50',
            'mitra' => 'required|string|max:50',
            'periode'      => 'required|string|max:50',
            'lokasi'    => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'type'        => 'required|in:pengalamanterkait,pengalamanlain,pengalamanorganisasi',
        ]);

        Experience::create($request->all());

        return redirect()->route('admin.experience.index')->with('success', 'Experience berhasil ditambahkan!');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'posisi'       => 'required|string|max:50',
            'mitra' => 'required|string|max:50',
            'periode'      => 'required|string|max:50',
            'lokasi'    => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'type'        => 'required|in:pengalamanterkait,pengalamanlain,pengalamanorganisasi',
        ]);

        $experience->update($request->all());

        return redirect()->route('admin.experience.index')->with('success', 'Experience berhasil diupdate!');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('admin.experience.index')->with('success', 'Experience berhasil dihapus!');
    }
}