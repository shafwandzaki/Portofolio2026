@extends('layouts.admin')

@section('content')

    <h1 class="text-3xl font-bold mb-8">Experience</h1>

    <div class="bg-[#191C26] border border-white/5 rounded-2xl p-8 max-w-6xl">
        <h2 class="text-sm font-bold text-white mb-6">Data Experience</h2>

        <form action="{{ route('admin.experience.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm text-gray-300 mb-2">Jenis Pengalaman</label>
                <select name="type" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 appearance-none">
                    <option value="" disabled {{ old('type') ? '' : 'selected' }}>Pilih Jenis Pengalaman</option>
                    <option value="pengalamanterkait" {{ old('type') == 'pengalamanterkait' ? 'selected' : '' }}>Pengalaman Terkait</option>
                    <option value="pengalamanlain" {{ old('type') == 'pengalamanlain' ? 'selected' : '' }}>Pengalaman Lainnya</option>
                    <option value="pengalamanorganisasi" {{ old('type') == 'pengalamanorganisasi' ? 'selected' : '' }}>Pengalaman Organisasi</option>
                </select>
                @error('type') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Posisi</label>
                <input type="text" name="posisi" value="{{ old('posisi') }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('posisi') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Mitra</label>
                <input type="text" name="mitra" value="{{ old('mitra') }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('mitra') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-1">Waktu</label>
                <label class="block text-xs text-gray-500 mb-2">Bulan & Tahun (contoh: April 2026 - Agustus 2026)</label>
                <input type="text" name="periode" value="{{ old('periode') }}" class="w-full md:w-1/2 bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('periode') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Lokasi</label>
                <input type="text" name="lokasi" value="{{ old('lokasi') }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('lokasi') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
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
                <a href="{{ route('admin.experience.index') }}" class="px-8 py-2.5 bg-[#E8E8E8] hover:bg-white text-black rounded-lg text-sm font-semibold transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection