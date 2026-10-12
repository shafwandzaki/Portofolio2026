@props(['skill'])

<div class="reveal-item bg-white/5  border border-white/10 rounded-2xl p-6 flex flex-col justify-between shadow-lg transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/10 hover:shadow-blue-300/10 hover:text-blue-500">
    <div class="flex items-center gap-2 mb-2">
        <img src="{{ asset($skill['iconskill']) }}" alt="{{ $skill['nameskill'] }}" class="w-6 h-6 sm:w-8 sm:h-8 object-contain" />
        <p class="text-xl font-semibold sm:font-bold">{{ $skill['nameskill'] }}</p>
    </div>
    <p class="text-gray-400 text-xs sm:text-sm mb-2 sm:mb-4">{{ $skill['category'] }}</p>
    <div class="flex flex-col gap-1">
        <div class="w-full bg-gray-200 rounded-full h-2">
            <div class="bg-blue-500 h-2 rounded-full" style="width: {{ $skill['percent'] }}%"></div>
        </div>
        <p class="text-xs text-gray-300 font-medium">{{ $skill['percent'] }}%</p>
    </div>
</div>