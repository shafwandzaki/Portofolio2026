<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::latest()->get();
        return view('admin.career.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.career.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tingkatan'       => 'required|string|max:30',
            'institusi' => 'required|string|max:30',
            'periode'      => 'required|string|max:30',
            'deskripsi' => 'required|string',
        ]);

        Career::create($request->all());

        return redirect()->route('admin.career.index')->with('success', 'Career berhasil ditambahkan!');
    }

    public function edit(Career $career)
    {
        return view('admin.career.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'tingkatan'       => 'required|string|max:30',
            'institusi' => 'required|string|max:30',
            'periode'      => 'required|string|max:30',
            'deskripsi' => 'required|string',
        ]);

        $career->update($request->all());

        return redirect()->route('admin.career.index')->with('success', 'Career berhasil diupdate!');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('admin.career.index')->with('success', 'Career berhasil dihapus!');
    }
}