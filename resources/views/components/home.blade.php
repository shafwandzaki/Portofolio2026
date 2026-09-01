@props(['home'])

<section id="home" class="scroll-mt-18 relative flex  justify-center min-h-screen overflow-hidden bg-[#0A0C18] px-8 pt-10 md:py-0 mb-32">

        <!-- Kiri -->
        <div class="items-start text-center md:text-left w-full md:w-1/2 mx-auto md:mx-0">
            <p class="text-gray-300 text-lg mt-20 mb-2">Selamat Datang di Portofolio Saya!</p>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight">Hai, Saya</h1>
    
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-blue-500 leading-tight mb-6">{{ $home['name'] }}</h1>
            <p class="text-white text-lg md:text-xl mb-6">&lt;{{ $home['title'] }}/&gt;</p>
            <p class="text-gray-400 text-base md:text-lg leading-relaxed mb-8 max-w-xl">
                {{ $home['deskripsi'] }}
            </p>

            <!-- Tombol -->
            <ul class="flex items-center gap-8 mb-10">
                <li>
                    <a href="pdf/cv.pdf" target="_blank" rel="noopener noreferrer" class="inline-block px-16 py-2 bg-blue-700 text-white text-2xl font-semibold rounded-full shadow-[0_0_25px_rgba(59,130,246,0.45)] hover:bg-blue-600 hover:shadow-[0_0_35px_rgba(59,130,246,0.65)] transition-colors">
                        CV
                    </a>
                </li>
                <li>
                    <a href="#projects" class="inline-block px-10 py-2 bg-[#1A1D2E] text-white text-2xl font-semibold rounded-full hover:bg-[#252940] transition-colors">
                        Projects
                    </a>
                </li>
            </ul>

            <!-- Media Sosial -->
            <ul class="flex items-center gap-4">
                <li>
                    <a href="https://www.instagram.com/shafwandzaki_?igsi=MWp5eTR3Y2kwMWF1ZQ==" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-11 h-11 rounded-full border border-gray-600 text-white hover:border-blue-500 hover:text-blue-500 transition-colors">
                        
                        <!-- Instagram -->
                        <x-svg-instagram></x-svg-instagram>
                    </a>
                </li>
                <li>
                    <a href="mailto:shafwandzaki19@gmail.com" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-11 h-11 rounded-full border border-gray-600 text-white hover:border-blue-500 hover:text-blue-500 transition-colors">
                        
                        <!-- Email -->
                        <x-svg-email></x-svg-email>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/muhamad-shafwan-dzaki-8744b93aa?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-11 h-11 rounded-full border border-gray-600 text-white hover:border-blue-500 hover:text-blue-500 transition-colors">

                        <!-- LinkedIn -->
                        <x-svg-linkedin></x-svg-linkedin>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Kanan -->
        <div class="relative w-full md:w-1/2 flex items-start justify-center md:justify-end">
            <img src="{{ asset($home['foto']) }}" class="w-200 mt-8">
        </div>
</section>