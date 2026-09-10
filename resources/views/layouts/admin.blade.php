<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="custom-scrollbar bg-[#0A0C18] text-white h-screen flex overflow-hidden font-sans">

    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content Area -->
    <main class="flex-1 p-10 pt-20 md:p-12 overflow-y-auto h-full w-full">
        
        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/30 text-green-400 px-4 py-3 rounded-lg mb-8 w-full">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </main>

</body>
</html>