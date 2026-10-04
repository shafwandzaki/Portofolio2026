@props(['projects'])

<section id="projects" x-data="{ selected: null }" class="min-h-screen py-16 px-4 font-sans text-white mb-32">
    <!-- Wrapper Utama -->
    <div class="max-w-6xl mx-auto mt-18">
        
        <!-- Judul Utama -->
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-16 font-inter">Projects</h1>

        @foreach (collect($projects)->groupBy('grup') as $grup => $projects)
        <h2 class="text-2xl sm:text-3xl font-medium mt-16 mb-6 sm:mb-8 font-inter">{{ $grup }}</h2>
        
        <!-- Baris Column -->
        <div class="reveal-group grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            
            @foreach ($projects as $project)
                <x-card-project :project="$project" />
            @endforeach
            
        </div>
        @endforeach

        <x-modal-card-project/>
            
    </div>
</section>