<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    //Tampilkan Semua data project
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    //tampilan form tambah project baru
    public function create()
    {
        return view('admin.projects.create');
    }

    //Simpan project baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nameproject'              => 'required|string|max:100',
            'image'              => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'deskripsi'        => 'required|string',
            'detail_deskripsi' => 'required|string',
            'tech_stack'         => 'required|string|max:15',
            'demo_url'           => 'nullable|url|max:255',
            'repo_url'           => 'nullable|url|max:255',
            'type'           => 'required|in:terkait,lainnya',
        ]);

        $path = $request->file('image')->store('projects', 'public');

        Project::create([
            'nameproject'              => $request->nameproject,
            'image'              => $path,
            'deskripsi'        => $request->deskripsi,
            'detail_deskripsi' => $request->detail_deskripsi,
            'tech_stack'         => $request->tech_stack,
            'demo_url'           => $request->demo_url,
            'repo_url'           => $request->repo_url,
            'type'               => $request->type,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'nameproject'              => 'required|string|max:100',
            'image'              => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'deskripsi'        => 'required|string',
            'detail_deskripsi' => 'required|string',
            'tech_stack'         => 'required|string|max:15',
            'demo_url'           => 'nullable|url|max:255',
            'repo_url'           => 'nullable|url|max:255',
            'type'               => 'required|in:terkait,lainnya',
        ]);

        $data = $request->only([
            'nameproject', 'deskripsi', 'detail_deskripsi', 'tech_stack', 'demo_url', 'repo_url', 'type'
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                \Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diupdate!');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            \Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    }
}