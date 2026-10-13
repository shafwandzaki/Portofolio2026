<div 
    x-data="{
        stars: Array.from({ length: 250 }, () => ({
            size: Math.random() * 2 + 1,
            top: Math.random() * 100,
            left: Math.random() * 100,
            twinkleDuration: Math.random() * 3 + 2,
            twinkleDelay: Math.random() * 5
        }))
    }"
    class="fixed inset-0 -z-10 pointer-events-none bg-[#0A0C18]"
>
    <template x-for="(star, index) in stars" :key="index">
        <div
            class="star absolute bg-white rounded-full"
            :style="`
                width: ${star.size}px;
                height: ${star.size}px;
                top: ${star.top}%;
                left: ${star.left}%;
                animation-duration: ${star.twinkleDuration}s;
                animation-delay: ${star.twinkleDelay}s;
            `"
        ></div>
    </template>
</div>

<style>
    .star {
        animation-name: twinkle;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    @keyframes twinkle {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 1; }
    }
</style>