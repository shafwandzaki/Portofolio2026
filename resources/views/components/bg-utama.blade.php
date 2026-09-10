<div 
    x-data="{
        stars: Array.from({ length: 250 }, () => ({
            size: Math.random() * 2 + 1,
            top: Math.random() * 100,
            left: Math.random() * 100,
            twinkleDuration: Math.random() * 3 + 2,
            twinkleDelay: Math.random() * 5,
            moveDuration: Math.random() * 8 + 5,
            moveX: (Math.random() - 0.5) * 200,
            moveY: (Math.random() - 0.5) * 200
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
                --move-x: ${star.moveX}px;
                --move-y: ${star.moveY}px;
                animation-duration: ${star.twinkleDuration}s, ${star.moveDuration}s;
                animation-delay: ${star.twinkleDelay}s, 0s;
            `"
        ></div>
    </template>
</div>

<style>
    .star {
        animation-name: twinkle, drift;
        animation-timing-function: linear, ease-in-out;
        animation-iteration-count: infinite, infinite;
        animation-direction: normal, alternate;
    }

    @keyframes twinkle {
        0%, 100% { opacity: 0.2; }
        100% { opacity: 900; }
    }

    @keyframes drift {
        0% { transform: translate(0, 0); }
        100% { transform: translate(var(--move-x), var(--move-y)); }
    }
</style>