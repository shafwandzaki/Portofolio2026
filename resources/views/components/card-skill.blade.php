@props(['skill'])

<div class="reveal-item bg-white/5  border border-white/10 rounded-2xl p-6 flex flex-col justify-between shadow-lg hover:text-blue-500 transition-all duration-300">
    <div class="flex items-center gap-2 mb-2">
        <img src="{{ asset($skill['iconskill']) }}" alt="{{ $skill['nameskill'] }}" class="w-6 h-6 sm:w-8 sm:h-8 object-contain" />
        <p class="text-xl font-medium sm:font-bold">{{ $skill['nameskill'] }}</p>
    </div>
    <p class="text-gray-400 text-xs sm:text-sm mb-2 sm:mb-4">{{ $skill['category'] }}</p>
    <p class="text-xs text-gray-300 flex items-center gap-2 font-medium">
        <span class="w-2 h-2 rounded-full bg-white inline-block"></span>
        {{ $skill['percent'] }}%
    </p>
</div>