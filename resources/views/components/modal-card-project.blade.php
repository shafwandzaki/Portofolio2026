<div 
    x-show="selected !== null" 
    x-cloak
    @click.self="selected = null"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur px-4"
>
    <div @click.away="selected = null" class="custom-scrollbar bg-[#0A0C18]/30 border border-white/10 backdrop-blur-lg rounded-2xl max-w-2xl w-full max-h-[85vh] overflow-y-auto p-8 relative">
        <button @click="selected = null" class="absolute top-6 right-6 text-white hover:text-blue-500 text-xl">
            ✕
        </button>

        <template x-if="selected">
            <div>
                <h2 class="text-xl font-bold mb-4" x-text="selected.namaproject"></h2>
                <img :src="'/' + selected.img" class="w-full h-full object-cover rounded-xl mb-6" />
                <p class="text-gray-300 leading-relaxed" x-text="selected.detail"></p>
                <a :href="selected.linkproject" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-white hover:text-blue-500 text-sm font-semibold mt-8">
                    Lihat Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </template>
    </div>
</div>