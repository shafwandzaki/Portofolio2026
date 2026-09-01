@props(['career'])

<div class="flex flex-col md:flex-row gap-6">

    <!-- Box Kiri (Icon) -->
    <div class="w-full md:w-32 shrink-0 border border-[#262b3d] bg-[#151822] rounded-2xl flex justify-center items-center p-6 md:p-0">
        <img src="{{ asset($career['icon']) }}" alt="Career" class="w-12 h-12 object-contain" />
    </div>

    <!-- Box Kanan (Konten) -->
    <div class="flex-1 border border-[#262b3d] bg-[#151822] rounded-2xl p-6 md:p-8">

        <!-- Header Card: Judul dan Tanggal -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-1">
            <p class="text-xl md:text-2xl font-bold">{{ $career['tingkatan'] }}</p>
            <p class="text-xs md:text-sm text-gray-500 mt-1 md:mt-0 font-normal tracking-wide">{{ $career['waktu'] }}</p>
        </div>

        <!-- Nama Instansi -->
        <p class="text-blue-500 font-medium mb-4">{{$career['namainstitusi']}}</p>

        <!-- Deskripsi -->
        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
            {{ $career['deskripsi'] }}
        </p>
    </div>
</div>