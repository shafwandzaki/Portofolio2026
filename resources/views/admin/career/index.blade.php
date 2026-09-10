@extends('layouts.admin')

@section('content')

    <div class="mb-8 flex flex-wrap items-center justify-between gap-4 max-w-4xl">
        <h1 class="text-3xl font-bold">Career</h1>
        <a href="{{ route('admin.career.create') }}" class="px-6 py-2.5 bg-[#1C5BFF] hover:bg-blue-600 rounded-lg text-sm font-semibold transition-colors">
            + Tambah
        </a>
    </div>

    <div class="max-w-4xl space-y-6">
        @forelse($careers as $career)
            <div class="bg-[#191C26] border border-white/5 rounded-2xl p-6">
                
                <h3 class="text-white font-bold text-base mb-1">{{ $career->tingkatan }}</h3>
                <p class="text-gray-300 text-sm mb-1">{{ $career->institusi }}</p>
                <p class="text-gray-400 text-sm mb-3">{{ $career->periode }}</p>
                
                <p class="text-gray-300 text-sm leading-relaxed mb-6 text-justify">
                    {{ $career->deskripsi }}
                </p>
                
                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.career.edit', $career) }}" class="px-6 py-2 bg-[#1C5BFF] hover:bg-blue-600 text-white rounded-lg text-sm font-medium transition-colors text-center w-24">
                        Edit
                    </a>
                    <form action="{{ route('admin.career.destroy', $career) }}" method="POST" class="inline" onsubmit="return confirm('Yakin mau hapus data career ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-6 py-2 bg-[#FF1C1C] hover:bg-red-600 text-white rounded-lg text-sm font-medium transition-colors text-center w-24">
                            Hapus
                        </button>
                    </form>
                </div>

            </div>
        @empty
            <div class="bg-[#191C26] border border-white/5 rounded-2xl p-10 text-center text-gray-500">
                Belum ada data career.
            </div>
        @endforelse
    </div>

@endsection