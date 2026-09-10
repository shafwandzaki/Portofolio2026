@extends('layouts.admin')

@section('content')

    <h1 class="text-3xl font-bold mb-8">Career</h1>

    <div class="bg-[#191C26] border border-white/5 rounded-2xl p-8 max-w-6xl">
        <h2 class="text-sm font-bold text-white mb-6">Data Career Baru</h2>

        <form action="{{ route('admin.career.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm text-gray-300 mb-2">Jenjang Pendidikan</label>
                <input type="text" name="tingkatan" value="{{ old('tingkatan') }}" placeholder="Contoh: Sarjana Teknik Informatika" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('tingkatan') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Institusi</label>
                <input type="text" name="institusi" value="{{ old('institusi') }}" placeholder="Contoh: Universitas Mercu Buana" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('institusi') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Waktu / Periode</label>
                <input type="text" name="periode" value="{{ old('periode') }}" placeholder="Contoh: September 2023 - Sekarang" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('periode') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Deskripsi Pengalaman</label>
                <textarea name="deskripsi" rows="5" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">{{ old('deskripsi') }}</textarea>
                @error('deskripsi') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center justify-end gap-4 pt-6">
                <button type="submit" class="px-8 py-2.5 bg-[#17A325] hover:bg-green-600 text-white rounded-lg text-sm font-semibold transition-colors">
                    Simpan
                </button>
                <a href="{{ route('admin.career.index') }}" class="px-8 py-2.5 bg-[#E8E8E8] hover:bg-white text-black rounded-lg text-sm font-semibold transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection