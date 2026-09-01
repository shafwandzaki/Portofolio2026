@props(['skills'])

<section id="skills" class="bg-[#0A0C18] min-h-screen py-16 px-4 font-sans text-white mb-32">
    <div class="max-w-6xl mx-auto mt-14">
        <!-- Judul -->
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-32">Skills</h1>

        <!-- Grid Container (4 Kolom) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @foreach ($skills as $skill)
                <x-card-skill :skill="$skill" />
            @endforeach

        </div>
    </div>
</section>