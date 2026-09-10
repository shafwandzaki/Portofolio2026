@extends('layouts.admin')

@section('content')

    <div class="mb-8 flex flex-wrap items-center justify-between gap-4 max-w-6xl">
        <h1 class="text-3xl font-bold">Experience</h1>
        <a href="{{ route('admin.experience.create') }}" class="px-6 py-2.5 bg-[#1C5BFF] hover:bg-blue-600 rounded-lg text-sm font-semibold transition-colors">
            + Tambah
        </a>
    </div>

    <div class="max-w-6xl space-y-6">
        @forelse($experiences as $experience)
            <div class="bg-[#191C26] border border-white/5 rounded-2xl p-6">
                
                {{-- Format penamaan tipe pengalaman --}}
                @php
                    $typeLabel = match($experience->type) {
                        'pengalamanterkait' => 'Pengalaman Terkait',
                        'pengalamanlain' => 'Pengalaman Lainnya',
                        'pengalamanorganisasi' => 'Pengalaman Organisasi',
                        default => 'Pengalaman',
                    };
                @endphp

                <h3 class="text-white font-bold text-base mb-1">{{ $typeLabel }}</h3>
                <p class="text-gray-200 text-base mb-1">{{ $experience->posisi }}</p>
                <p class="text-gray-300 text-sm mb-1">{{ $experience->mitra }}</p>
                <p class="text-gray-400 text-sm mb-1">{{ $experience->periode }}</p>
                <p class="text-gray-400 text-sm mb-3">{{ $experience->lokasi }}</p>
                
                <p class="text-gray-300 text-sm leading-relaxed mb-6 text-justify">
                    {{ $experience->deskripsi }}
                </p>

                <div class="flex items-center gap-4">
                    <a href="{{ route('admin.experience.edit', $experience) }}" class="px-5 py-2 bg-[#1C5BFF] hover:bg-blue-600 text-white rounded-lg text-sm font-medium transition-colors">
                        Edit
                    </a>
                    <form action="{{ route('admin.experience.destroy', $experience) }}" method="POST" class="inline" onsubmit="return confirm('Yakin mau hapus experience ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-5 py-2 bg-[#FF1C1C] hover:bg-red-600 text-white rounded-lg text-sm font-medium transition-colors">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="bg-[#191C26] border border-white/5 rounded-2xl p-10 text-center text-gray-500">
                Belum ada data experience.
            </div>
        @endforelse
    </div>

@endsection