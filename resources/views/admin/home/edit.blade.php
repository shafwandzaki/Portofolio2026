@extends('layouts.admin')

@section('content')

    <h2 class="text-2xl font-bold mb-8">Edit Konten Home</h2>

    <form action="{{ route('admin.home.edit') }}" method="POST" enctype="multipart/form-data" class="max-w-6xl space-y-5">
        @csrf
        @method('PUT')

        {{-- <div>
            <label class="block text-sm text-gray-400 mb-2">Kalimat Sapaan</label>
            <input type="text" name="greeting" value="{{ old('greeting', $home->greeting) }}" placeholder="Selamat Datang di Portofolio Saya!" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5">
            @error('greeting') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div> --}}

        <div>
            <label class="block text-sm text-gray-400 mb-2">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama', $home->nama) }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5">
            @error('nama') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Role/Peran</label>
            <input type="text" name="role" value="{{ old('role', $home->role) }}" placeholder="Frontend Development" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5">
            @error('role') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="5" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5">{{ old('deskripsi', $home->deskripsi) }}</textarea>
            @error('deskripsi') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Foto Profil</label>
            @if($home->foto)
                <img src="{{ asset('storage/' . $home->foto) }}" class="w-32 h-32 object-cover rounded-lg mb-3">
            @endif
            <input type="file" name="foto" accept="image/png, image/jpeg, image/webp" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 file:mr-4 file:py-1.5 file:px-4 file:rounded-full file:border-0 file:bg-blue-700 file:text-white">
            @error('foto') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">File CV (PDF)</label>
            @if($home->cv)
                <p class="text-sm text-blue-400 mb-2">
                    <a href="{{ asset('storage/' . $home->cv) }}" target="_blank" class="underline">Lihat CV saat ini</a>
                </p>
            @endif
            <input type="file" name="cv" accept="application/pdf" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 file:mr-4 file:py-1.5 file:px-4 file:rounded-full file:border-0 file:bg-blue-700 file:text-white">
            @error('cv') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Link Instagram</label>
            <input type="text" name="linkinstagram" value="{{ old('linkinstagram', $home->linkinstagram) }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5">
            @error('linkinstagram') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Email</label>
            <input type="text" name="linkemail" value="{{ old('linkemail', $home->linkemail) }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5">
            @error('linkemail') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-2">Link LinkedIn</label>
            <input type="text" name="linklinkedin" value="{{ old('linklinkedin', $home->linklinkedin) }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5">
            @error('linklinkedin') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="pt-4">
            <button type="submit" class="px-6 py-2.5 bg-blue-700 hover:bg-blue-600 rounded-full text-sm font-semibold transition-colors">Update</button>
        </div>
    </form>

@endsection