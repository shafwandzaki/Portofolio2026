@props(['careers'])

<section id="career" class=" min-h-screen py-16 px-4 font-sans text-white mb-32">
    <!-- Wrapper Utama -->
    <div class="max-w-5xl mx-auto mt-14">
        
        <!-- Judul -->
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-16">Career</h1>

        <div class="flex flex-col gap-8">

            @foreach ($careers as $career)
                <x-card-career :career="$career" />
            @endforeach 

        </div>

    </div>
</section>