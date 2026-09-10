<div x-data="{ sidebarOpen: false }">

    <!-- Tombol hamburger, HANYA muncul di mobile -->
    <button @click="sidebarOpen = !sidebarOpen" class="md:hidden fixed top-4 left-4 z-50 text-white bg-[#080913] border border-white/10 p-2 rounded-lg">
        <svg x-show="!sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="sidebarOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Overlay gelap, cuma muncul saat sidebar mobile terbuka -->
    <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         class="md:hidden fixed inset-0 bg-black/50 z-40">
    </div>

    <!-- Sidebar -->
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
           class="fixed md:static top-0 left-0 z-50 w-64 shrink-0 border-r border-white/5 flex flex-col justify-between h-screen bg-[#080913] text-white transition-transform duration-300 ease-in-out md:translate-x-0">

        <div>
            <!-- Logo / Brand -->
            <div class="px-6 py-6 flex items-center gap-2 whitespace-nowrap">
                <span class="text-blue-500 text-xl font-bold">&lt;/&gt;</span>
                <span class="font-bold text-lg text-white">dzaki. - Admin</span>
            </div>

            <!-- Navigation Links -->
            <nav class="mt-2 px-3 space-y-1">
                <a href="{{ route('admin.dashboard') }}"
                   class="block px-4 py-2.5 rounded-xl transition-all duration-200 text-sm {{ Route::currentRouteName() === 'admin.dashboard' ? 'bg-[#31333a] text-white font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Dashboard
                </a>

                <a href="{{ route('admin.home.edit') }}"
                   class="block px-4 py-2.5 rounded-xl transition-all duration-200 text-sm {{ Route::currentRouteName() === 'admin.home.edit' ? 'bg-[#31333a] text-white font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Home
                </a>

                <a href="{{ route('admin.skills.index') }}"
                   class="block px-4 py-2.5 rounded-xl transition-all duration-200 text-sm {{ Route::currentRouteName() === 'admin.skills.index' ? 'bg-[#31333a] text-white font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Skills
                </a>

                <a href="{{ route('admin.experience.index') }}"
                   class="block px-4 py-2.5 rounded-xl transition-all duration-200 text-sm {{ Route::currentRouteName() === 'admin.experience.index' ? 'bg-[#31333a] text-white font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Experience
                </a>

                <a href="{{ route('admin.projects.index') }}"
                   class="block px-4 py-2.5 rounded-xl transition-all duration-200 text-sm {{ Route::currentRouteName() === 'admin.projects.index' ? 'bg-[#31333a] text-white font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Projects
                </a>

                <a href="{{ route('admin.career.index') }}"
                   class="block px-4 py-2.5 rounded-xl transition-all duration-200 text-sm {{ Route::currentRouteName() === 'admin.career.index' ? 'bg-[#31333a] text-white font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Career
                </a>
            </nav>
        </div>

        <!-- Bottom Section -->
        <div>
            <!-- Logout Button -->
            <div class="px-6 py-6">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-400 font-semibold text-lg transition-colors">
                        Logout
                    </button>
                </form>
            </div>

            <!-- Sidebar Footer -->
            <div class="border-t border-white/10 px-6 py-4">
                <a href="{{ url('/') }}" target="_blank" class="block text-gray-300 hover:text-white transition-colors text-sm font-medium">
                    Lihat Web &rarr;
                </a>
            </div>
        </div>
    </aside>
</div>