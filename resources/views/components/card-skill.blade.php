@props(['skill'])

<div class="bg-[#151822] border border-[#262b3d] rounded-2xl p-6 flex flex-col justify-between hover:text-blue-300">
    <div class="flex items-center gap-3 mb-4">
        <img src="{{ asset($skill['iconskill']) }}" alt="{{ $skill['nameskill'] }}" class="w-8 h-8 object-contain" />
        <p class="text-xl font-bold">{{ $skill['nameskill'] }}</p>
    </div>
    <p class="text-gray-400 text-sm mb-6">{{ $skill['category'] }}</p>
    <p class="text-xs text-gray-300 flex items-center gap-2 font-medium">
        <span class="w-2 h-2 rounded-full bg-white inline-block"></span>
        {{ $skill['percent'] }}%
    </p>
</div>