@extends('layouts.admin')

@section('content')

    <h1 class="text-3xl font-bold mb-8">Skills</h1>

    <div class="bg-[#191C26] border border-white/5 rounded-2xl p-8 max-w-4xl">
        <h2 class="text-sm font-bold text-white mb-6">Edit Data Skills</h2>

        <form action="{{ route('admin.skills.update', $skill) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm text-gray-300 mb-2">Nama Skill</label>
                <input type="text" name="nameskill" value="{{ old('nameskill', $skill->nameskill) }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('nameskill') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-2">Icon Skill (PNG/JPG/WEBP, max 2MB)</label>
                <input type="file" name="iconskill" accept="image/png, image/jpeg, image/webp" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 file:mr-4 file:py-1.5 file:px-4 file:rounded-full file:border-0 file:bg-blue-700 file:text-white">
                @error('iconskill') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Kategori</label>
                <input type="text" name="category" value="{{ old('category', $skill->category) }}" class="w-full bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('category') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-gray-300 mb-2">Presentase</label>
                <input type="number" name="percent" value="{{ old('percent', $skill->percent) }}" min="0" max="100" class="w-full md:w-1/3 bg-[#0A0C18] border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
                @error('percent') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center justify-end gap-4 pt-8">
                <button type="submit" class="px-8 py-2.5 bg-[#17A325] hover:bg-green-600 text-white rounded-lg text-sm font-semibold transition-colors">
                    Update
                </button>
                <a href="{{ route('admin.skills.index') }}" class="px-8 py-2.5 bg-[#E8E8E8] hover:bg-white text-black rounded-lg text-sm font-semibold transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection