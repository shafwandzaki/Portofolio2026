@props(['experience'])

<div class="reveal-item flex flex-col md:flex-row gap-6 mb-8">

    <!-- Box Kiri -->
    <div class="w-full md:w-32 shrink-0  bg-white/5  border border-white/10 rounded-2xl flex justify-center items-center p-6 md:p-0">
        <img src="{{ asset($experience['iconex']) }}" class="w-12 h-12 object-contain"/>
    </div>

    <!-- Box Kanan -->
    <div class="flex-1 border border-[#262b3d] bg-white/5  rounded-2xl p-6 md:p-8">
        <p class="text-xl md:text-2xl font-bold mb-2">{{ $experience['posisi'] }}</p>
        <p class="text-blue-500 font-medium mb-4">{{ $experience['mitra'] }}</p>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-8 mb-4">
            <div class="flex items-center gap-2">
                <x-svg-kalender></x-svg-kalender>
                <p class="text-xs md:text-sm text-gray-500 font-normal tracking-wide">{{ $experience['waktu'] }}</p>
            </div>
            <div class="flex items-center gap-2">
                <x-svg-lokasi></x-svg-lokasi>
                <p class="text-xs md:text-sm text-gray-500 font-normal tracking-wide">{{ $experience['lokasi'] }}</p>
            </div>
        </div>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed">{{ $experience['deskripsi'] }}</p>
    </div>
</div>