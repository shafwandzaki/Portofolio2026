@extends('layouts.admin')

@section('content')

    <div class="mb-8 flex flex-wrap items-center justify-between gap-4 max-w-5xl">
        <h1 class="text-3xl font-bold">Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="px-6 py-2.5 bg-[#1C5BFF] hover:bg-blue-600 rounded-lg text-sm font-semibold transition-colors">
            + Tambah
        </a>
    </div>

    <div class="max-w-5xl space-y-6">
        @forelse($projects as $project)
            <div class="bg-[#191C26] border border-white/5 rounded-2xl p-6 flex flex-col md:flex-row gap-6">
                
                <!-- Kiri: Gambar & Tombol Aksi -->
                <div class="w-full md:w-[300px] shrink-0 flex flex-col gap-4">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->nameproject }}" class="w-full h-40 object-cover rounded-lg bg-gray-300">
                    
                    <div class="flex items-center gap-3">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="px-6 py-2 bg-[#1C5BFF] hover:bg-blue-600 text-white rounded-lg text-sm font-medium transition-colors text-center w-24">
                            Edit
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline" onsubmit="return confirm('Yakin mau hapus project ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-6 py-2 bg-[#FF1C1C] hover:bg-red-600 text-white rounded-lg text-sm font-medium transition-colors text-center w-24">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Kanan: Detail Project -->
                <div class="w-full">
                    <h3 class="text-white font-bold text-base mb-2">{{ $project->nameproject }}</h3>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4 text-justify">
                        {{ $project->deskripsi }}
                    </p>
                    
                    <!-- Tambahan informasi kecil (Opsional tampil di index, menyesuaikan data controller) -->
                    <div class="flex flex-wrap gap-2 mb-2">
                        <span class="text-xs bg-white/10 text-gray-300 px-2 py-1 rounded">{{ $project->tech_stack }}</span>
                    </div>
                </div>

            </div>
        @empty
            <div class="bg-[#191C26] border border-white/5 rounded-2xl p-10 text-center text-gray-500">
                Belum ada data project.
            </div>
        @endforelse
    </div>

@endsection