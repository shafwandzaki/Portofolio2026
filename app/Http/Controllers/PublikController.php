<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Career;
use Illuminate\Http\Request;

class PublikController extends Controller
{
    public function utama()
    {
        return view('utama', [
            'home'        => $this->home(),
            'skills'      => $this->skills(),
            'experiences' => $this->experiences(),
            'careers'     => $this->careers(),
            'projects'    => $this->projects(),
        ]);
    }

    private function home(): array
    {
        $home = HomeContent::first();

        return [
            'foto'          => asset('storage/' . $home->foto),
            'name'          => $home->nama,
            'title'         => $home->role,
            'deskripsi'     => $home->deskripsi,
            'linkinstagram' => $home->linkinstagram,
            'linkemail'     => 'mailto:' . $home->linkemail,
            'linklinkedin'  => $home->linklinkedin,
            'cv'            => asset('storage/' . $home->cv),
        ];
    }

    private function skills(): array
    {
        return Skill::latest()->get()->map(function ($skill) {
            return [
                'nameskill' => $skill->nameskill,
                'iconskill' => asset('storage/' . $skill->iconskill),
                'category'  => $skill->category,
                'percent'   => $skill->percent,
            ];
        })->toArray();
    }

    private function experiences(): array
    {
        $groupLabels = [
            'pengalamanterkait'    => 'Pengalaman Terkait',
            'pengalamanlain'       => 'Pengalaman Lainnya',
            'pengalamanorganisasi' => 'Organisasi & Lembaga',
        ];
         $order = ['pengalamanterkait', 'pengalamanlain', 'pengalamanorganisasi'];

         return Experience::latest()->get()
        ->sortBy(fn ($experience) => array_search($experience->type, $order))
        ->map(function ($experience) use ($groupLabels) {
            return [
                'grup'           => $groupLabels[$experience->type] ?? 'Lainnya',
                'iconex'         => asset($experience->icon),
                'posisi'         => $experience->posisi,
                'mitra'          => $experience->mitra,
                'waktu'          => $experience->periode,
                'lokasi'         => $experience->lokasi,
                'deskripsi'      => $experience->deskripsi,
            ];
        })->toArray();
    }

    private function projects(): array
    {
        $groupLabels = [
            'terkait'    => 'Project Terkait',
            'lainnya'    => 'Karya Saya Yang Lain',
        ];
         $order = ['terkait', 'lainnya'];

         return Project::latest()->get()
        ->sortBy(fn ($project) => array_search($project->type, $order))
        ->map(function ($project) use ($groupLabels) {
            return [
                'grup'        => $groupLabels[$project->type] ?? 'Lainnya',
                'img'         => 'storage/' . $project->image,
                'namaproject' => $project->nameproject,
                'deskripsi'   => $project->deskripsi,
                'detail'      => $project->detail_deskripsi,
                'linkproject' => $project->demo_url ?? $project->repo_url ?? '#',
            ];
        })->toArray();
    }

    private function careers(): array
    {
        return Career::latest()->get()->map(function ($career) {
            return [
                'tingkatan'      => $career->tingkatan,
                'icon'           => 'icon/career.png',
                'namainstitusi'  => $career->institusi,
                'waktu'          => $career->periode,
                'deskripsi'      => $career->deskripsi,
            ];
        })->toArray();
    }
}
