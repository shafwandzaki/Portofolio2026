@extends('layouts.admin')

@section('content')

    <h1 class="text-3xl font-bold mb-8">Projects</h1>

    <div class="bg-[#191C26] border border-white/5 rounded-2xl p-8 max-w-4xl">
        <h2 class="text-sm font-bold text-white mb-6">Edit Data Project</h2>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm text-gray-300 mb-2">Jenis Project</label>
                <select name="type" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                    <option value="terkait" {{ old('type', $project->type) == 'terkait' ? 'selected' : '' }}>Project Terkait</option>
                    <option value="lainnya" {{ old('type', $project->type) == 'lainnya' ? 'selected' : '' }}>Karya Saya yang Lain</option>
                </select>
                @error('type') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Nama Project</label>
                <input type="text" name="nameproject" value="{{ old('nameproject', $project->nameproject) }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('nameproject') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="3" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">{{ old('deskripsi', $project->deskripsi) }}</textarea>
                @error('deskripsi') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Detail Deskripsi</label>
                <textarea name="detail_deskripsi" rows="6" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">{{ old('detail_deskripsi', $project->detail_deskripsi) }}</textarea>
                @error('detail_deskripsi') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm text-gray-300 mb-2">Tech Stack (Maks 15 karakter)</label>
                    <input type="text" name="tech_stack" value="{{ old('tech_stack', $project->tech_stack) }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                    @error('tech_stack') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                
                <div>
                    <label class="block text-sm text-gray-300 mb-2">Ganti Foto Banner (Kosongkan jika tidak diganti)</label>
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Current Banner" class="h-16 w-32 object-cover rounded mb-3 border border-white/10">
                    @endif
                    <input type="file" name="image" accept="image/png, image/jpeg, image/webp" class="block w-full text-sm text-gray-400 file:cursor-pointer file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-500 file:text-white hover:file:bg-gray-600 transition-colors">
                    @error('image') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm text-gray-300 mb-2">Link Demo Project (Opsional)</label>
                    <input type="url" name="demo_url" value="{{ old('demo_url', $project->demo_url) }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                    @error('demo_url') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm text-gray-300 mb-2">Link Repository (Opsional)</label>
                    <input type="url" name="repo_url" value="{{ old('repo_url', $project->repo_url) }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                    @error('repo_url') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 pt-6">
                <button type="submit" class="px-8 py-2.5 bg-[#17A325] hover:bg-green-600 text-white rounded-lg text-sm font-semibold transition-colors">
                    Update
                </button>
                <a href="{{ route('admin.projects.index') }}" class="px-8 py-2.5 bg-[#E8E8E8] hover:bg-white text-black rounded-lg text-sm font-semibold transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection