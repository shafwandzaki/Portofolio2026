@props(['project'])

    <!-- Card -->
    <div 
    @click="selected = {{ Illuminate\Support\Js::from($project) }}"
    class="flex flex-col bg-[#151822] border border-[#262b3d] rounded-2xl overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:text-blue-300">
        
        <img src="{{ asset($project['img']) }}" alt="{{ $project['namaproject'] }}" class="w-full h-48 object-cover bg-gray-700" />
        <div class="p-6 flex flex-col grow">
            <p class="text-xl font-bold mb-3 leading-snug">{{ $project['namaproject'] }}</p>
            <p class="text-gray-300 text-sm leading-relaxed">
                {{ $project['deskripsi'] }}
            </p>
            <a href="{{ $project['linkproject'] }}" target="_blank" rel="noopener noreferrer" @click.stop class="inline-flex items-center gap-1 text-white hover:text-blue-500 text-sm font-semibold mt-8">
                Lihat Project
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>