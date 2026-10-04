@props(['skills'])

<section id="skills" class="min-h-screen py-16 px-4 font-sans text-white mb-32">
    <div class="max-w-6xl mx-auto mt-14">
        <!-- Judul -->
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-16 font-inter">Skills</h1>

        <!-- Grid Container (4 Kolom) -->
        <div class="reveal-group grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

            @foreach ($skills as $skill)
                <x-card-skill :skill="$skill" />
            @endforeach

        </div>
    </div>
</section>