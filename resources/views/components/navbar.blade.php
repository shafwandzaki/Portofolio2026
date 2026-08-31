<nav class="sticky top-0 z-50 flex items-center justify-between px-8 py-4 bg-[#0A0C18]/70 backdrop-blur-md shadow-md">
    <div class="flex items-center gap-2">
        <img src="#" alt="Logo" class="w-8 h-8 rounded-full">
        <h2 class="text-xl font-bold text-white">dzaki.</h2>
    </div>

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

    <!-- Tombol hamburger (muncul di mobile) -->
    <button id="menu-btn" class="md:hidden text-white focus:outline-none">
        <svg id="icon-open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Menu mobile (dropdown) -->
    <ul id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-[#0A0C18]/70 backdrop-blur-md flex flex-col items-center gap-6 py-6 text-gray-400 font-normal shadow-md">
        <li><a href="#home" class="hover:text-blue-600 transition-colors">Home</a></li>
        <li><a href="#skills" class="hover:text-blue-600 transition-colors">Skills</a></li>
        <li><a href="#experience" class="hover:text-blue-600 transition-colors">Experience</a></li>
        <li><a href="#projects" class="hover:text-blue-600 transition-colors">Projects</a></li>
        <li><a href="#career" class="hover:text-blue-600 transition-colors">Career</a></li>
        <li>
            <a href="" class="px-4 py-2 bg-blue-700 text-white rounded-full hover:bg-blue-600 transition-colors">CV</a>
        </li>
    </ul>
</nav>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });
</script>