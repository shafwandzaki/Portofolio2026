<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    // Tampilkan semua data skill
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('admin.skills.index', compact('skills'));
    }

    // Tampilkan form tambah skill baru
    public function create()
    {
        return view('admin.skills.create');
    }

    // Simpan skill baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nameskill' => 'required|string|max:15',
            'iconskill' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'category'  => 'required|string|max:30',
            'percent'   => 'required|integer|min:0|max:100',
        ]);

        // Upload file, simpan ke storage/app/public/skills
        $path = $request->file('iconskill')->store('skills', 'public');

        Skill::create([
            'nameskill' => $request->nameskill,
            'iconskill' => $path,
            'category'  => $request->category,
            'percent'   => $request->percent,
        ]);

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil ditambahkan!');
    }

    // Tampilkan form edit skill
    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    // Update skill yang sudah ada
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'nameskill' => 'required|string|max:255',
            'iconskill' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'category'  => 'required|string|max:255',
            'percent'   => 'required|integer|min:0|max:100',
        ]);

        $data = $request->only(['nameskill', 'category', 'percent']);

        // Kalau ada file baru diupload, ganti; kalau tidak, biarkan yang lama
        if ($request->hasFile('iconskill')) {
            // Hapus file lama biar tidak numpuk sampah
            if ($skill->iconskill) {
                \Storage::disk('public')->delete($skill->iconskill);
            }
            $data['iconskill'] = $request->file('iconskill')->store('skills', 'public');
        }

        $skill->update($data);

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil diupdate!');
    }

    // Hapus skill
    public function destroy(Skill $skill)
    {
        if ($skill->iconskill) {
            \Storage::disk('public')->delete($skill->iconskill);
        }

        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil dihapus!');
    }
}