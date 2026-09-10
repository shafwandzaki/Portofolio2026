@extends('layouts.admin')

@section('content')

    <div class="flex items-center justify-between mb-8 max-w-5xl">
        <h1 class="text-3xl font-bold">Skills</h1>
        <a href="{{ route('admin.skills.create') }}" class="px-6 py-2.5 bg-[#1C5BFF] hover:bg-blue-600 rounded-lg text-sm font-semibold transition-colors">
            + Tambah
        </a>
    </div>

    <div class="bg-[#191C26] border border-white/5 rounded-2xl overflow-hidden max-w-5xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-[#212430] text-gray-300 text-sm border-b border-white/5">
                    <tr>
                        <th class="px-6 py-4 font-medium rounded-tl-xl">Nama Skill</th>
                        <th class="px-6 py-4 font-medium">Icon</th>
                        <th class="px-6 py-4 font-medium">Kategori</th>
                        <th class="px-6 py-4 font-medium">Presentase</th>
                        <th class="px-6 py-4 font-medium rounded-tr-xl">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @forelse($skills as $skill)
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-gray-200">{{ $skill->nameskill }}</td>
                            <td class="px-6 py-4 text-gray-400">
                                <i class="{{ $skill->iconskill }} text-xl"></i>
                            </td>
                            <td class="px-6 py-4 text-gray-300">{{ $skill->category }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $skill->percent }}%</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <a href="{{ route('admin.skills.edit', $skill) }}" class="text-blue-600 hover:text-blue-500">Edit</a>
                                    <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline" onsubmit="return confirm('Yakin mau hapus skill ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-500">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-500">Belum ada data skill.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection