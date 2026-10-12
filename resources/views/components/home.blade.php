@props(['home'])

<section id="home" class="scroll-mt-18 relative flex  justify-center min-h-screen overflow-hidden px-8 pt-10 md:py-0 mb-32">

        <!-- Kiri -->
        <div class="items-start text-center md:text-left w-full md:w-1/2 mx-auto md:mx-0">
            <div class="mt-20 flex items-center gap-6 mb-4">
                <span class="h-2 w-2 rounded-full bg-white"></span>
                <p class="text-gray-300 text-sm sm:text-lg font-jetbrains">Selamat Datang di Portofolio Saya!</p>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-semibold sm:font-bold text-white leading-tight">Hai, Saya</h1>
    
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-blue-500 leading-tight mb-6">{{ $home['name'] }}</h1>
            <p class="text-white text-lg md:text-xl mb-6 font-inter">&lt; {{ $home['title'] }} /&gt;</p>
            <p class="text-gray-400 text-base md:text-lg leading-relaxed mb-8 max-w-xl font-inter">
                {{ $home['deskripsi'] }}
            </p>

            <!-- Tombol -->
            <ul class="flex items-center justify-center md:justify-start gap-4 sm:gap-8 mb-10">
                <li>
                    <a href="{{ asset('storage/' . $home['cv']) }}" target="_blank" rel="noopener noreferrer" class="inline-block px-16 py-2 bg-blue-700 text-white text-2xl font-semibold rounded-full shadow-[0_0_25px_rgba(59,130,246,0.45)] hover:bg-blue-600 hover:shadow-[0_0_35px_rgba(59,130,246,0.65)] transition-colors">
                        CV
                    </a>
                </li>
                <li>
                    <a href="#projects" class="inline-block px-10 py-2 bg-[#1A1D2E]/30 border border-white/5 text-white text-2xl font-semibold rounded-full hover:bg-[#252940] transition-colors">
                        Projects
                    </a>
                </li>
            </ul>

            <!-- Media Sosial -->
            <ul class="flex items-center gap-4">
                <li>
                    <a href="{{ $home['linkinstagram'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-11 h-11 rounded-full border border-gray-600 text-white hover:border-blue-500 hover:text-blue-500 transition-colors">
                        
                        <!-- Instagram -->
                        <x-svg-instagram></x-svg-instagram>
                    </a>
                </li>
                <li>
                    <a href="{{ $home['linkemail'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-11 h-11 rounded-full border border-gray-600 text-white hover:border-blue-500 hover:text-blue-500 transition-colors">
                        
                        <!-- Email -->
                        <x-svg-email></x-svg-email>
                    </a>
                </li>
                <li>
                    <a href="{{ $home['linklinkedin'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-11 h-11 rounded-full border border-gray-600 text-white hover:border-blue-500 hover:text-blue-500 transition-colors">

                        <!-- LinkedIn -->
                        <x-svg-linkedin></x-svg-linkedin>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Kanan -->
        <div class="relative w-full md:w-1/2 flex items-start justify-center md:justify-end">
            <!-- Gradasi transparan di bagian bawah foto -->
            <div class="absolute bottom-15 left-0 w-full h-50 bg-linear-to-t from-[#0A0C18] to-transparent pointer-events-none"></div>
            <img src="{{ asset($home['foto']) }}" class="w-200 mt-8">
        </div>
</section>