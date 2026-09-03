<nav
    x-data="{ open: false, scrolled: false }"
    x-init="
        scrolled = window.scrollY > 10;
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 10;
        });
    "
    :class="scrolled
        ? 'bg-white/3 backdrop-blur-lg border-b border-white/5 px-8 py-4'
        : 'bg-transparent backdrop-blur-none border-b border-transparent px-8 py-4'"
    class="sticky top-0 z-50 flex items-center justify-between"
>
    <a href="#home" class="flex items-center gap-4">
        <img src="img/logo.png" alt="Logo" class="w-8 h-8 rounded-full">
        <h2 class="text-xl font-bold text-white">dzaki.</h2>
    </a>

    <!-- Menu desktop -->
    <ul class="hidden md:flex items-center gap-10 text-gray-400 font-normal">
        <li><a href="#home" class="hover:text-blue-600 transition-colors">Home</a></li>
        <li><a href="#skills" class="hover:text-blue-600 transition-colors">Skills</a></li>
        <li><a href="#experience" class="hover:text-blue-600 transition-colors">Experience</a></li>
        <li><a href="#projects" class="hover:text-blue-600 transition-colors">Projects</a></li>
        <li><a href="#career" class="hover:text-blue-600 transition-colors">Career</a></li>
        <li>
            <a href="pdf/cv.pdf" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-blue-700 text-white rounded-full hover:bg-blue-600 transition-colors">CV</a>
        </li>
    </ul>

    <!-- Tombol hamburger (mobile) -->
    <button @click="open = !open" class="md:hidden text-white focus:outline-none">
        <svg x-show="!open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="open" x-cloak class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Menu mobile (dropdown) -->
    <ul
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        @click.outside="open = false"
        class="md:hidden absolute top-full left-0 w-full bg-white/10 backdrop-blur-lg border-b border-white/10 flex flex-col items-center gap-6 py-6 text-gray-300 font-normal"
    >
        <li><a href="#home" @click="open = false" class="hover:text-blue-500 transition-colors">Home</a></li>
        <li><a href="#skills" @click="open = false" class="hover:text-blue-500 transition-colors">Skills</a></li>
        <li><a href="#experience" @click="open = false" class="hover:text-blue-500 transition-colors">Experience</a></li>
        <li><a href="#projects" @click="open = false" class="hover:text-blue-500 transition-colors">Projects</a></li>
        <li><a href="#career" @click="open = false" class="hover:text-blue-500 transition-colors">Career</a></li>
        <li>
            <a href="pdf/cv.pdf" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-blue-700 text-white rounded-full hover:bg-blue-600 transition-colors">CV</a>
        </li>
    </ul>
</nav>