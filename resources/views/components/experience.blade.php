@props(['experiences'])

<section id="experience" class="min-h-screen py-16 px-4 font-sans text-white mb-32">
    <!-- Utama -->
    <div class="max-w-5xl mx-auto mt-14">

        <!-- Judul -->
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-16">Experience</h1>

        @foreach (collect($experiences)->groupBy('grup') as $grup => $experiences)
            <h2 class="text-3xl font-semibold mt-16 mb-8">{{ $grup }}</h2>

            @foreach ($experiences as $experience)
                <x-card-experience :experience="$experience" />
            @endforeach
        @endforeach

    </div>
</section>