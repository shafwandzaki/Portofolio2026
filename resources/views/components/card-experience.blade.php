@props(['experience'])

<div class="flex md:flex-row gap-6 mb-8">

    <!-- Box Kiri -->
    <div class="w-full md:w-32 shrink-0 border border-[#262b3d] bg-[#151822] rounded-2xl flex justify-center items-center p-6 md:p-0">
        <img src="{{ asset($experience['iconex']) }}" class="w-12 h-12 object-contain"/>
    </div>

    <!-- Box Kanan -->
    <div class="border border-[#262b3d] bg-[#151822] rounded-2xl p-6 md:p-8 justify-center">
        <p class="text-xl md:text-2xl font-bold mb-2">{{ $experience['posisi'] }}</p>
        <p class="text-blue-500 font-medium mb-4">{{ $experience['namaperusahaan'] }}</p>
        <div class="flex gap-8 mb-4">
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