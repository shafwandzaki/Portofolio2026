@props(['home'])

<div class="photo-wrap relative w-full">
    <img src="{{ asset($home['foto']) }}" alt="{{ $home['name'] }}" class="block w-full h-auto">

    <!-- Kilau yang menyapu foto (mengikuti bentuk foto) -->
    <div class="photo-shine absolute inset-0 pointer-events-none"
         style="-webkit-mask-image: url('{{ asset($home['foto']) }}'); mask-image: url('{{ asset($home['foto']) }}');"></div>

    <!-- Sparkle kecil -->
    <svg class="photo-sparkle" style="top: 10%; left: 20%; width: 9px; animation-delay: 0s;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C12 6.6 17.4 12 24 12C17.4 12 12 17.4 12 24C12 17.4 6.6 12 0 12C6.6 12 12 6.6 12 0Z"/></svg>
<svg class="photo-sparkle" style="top: 25%; left: 78%; width: 7px; animation-delay: 0.8s;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C12 6.6 17.4 12 24 12C17.4 12 12 17.4 12 24C12 17.4 6.6 12 0 12C6.6 12 12 6.6 12 0Z"/></svg>
<svg class="photo-sparkle" style="top: 55%; left: 12%; width: 6px; animation-delay: 1.6s;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C12 6.6 17.4 12 24 12C17.4 12 12 17.4 12 24C12 17.4 6.6 12 0 12C6.6 12 12 6.6 12 0Z"/></svg>
<svg class="photo-sparkle" style="top: 70%; left: 85%; width: 10px; animation-delay: 2.2s;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C12 6.6 17.4 12 24 12C17.4 12 12 17.4 12 24C12 17.4 6.6 12 0 12C6.6 12 12 6.6 12 0Z"/></svg>
<svg class="photo-sparkle" style="top: 40%; left: 50%; width: 5px; animation-delay: 1.2s;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C12 6.6 17.4 12 24 12C17.4 12 12 17.4 12 24C12 17.4 6.6 12 0 12C6.6 12 12 6.6 12 0Z"/></svg>
</div>

<style>
    .photo-shine {
        background: linear-gradient(110deg, transparent 35%, rgba(255, 255, 255, 0.132) 50%, transparent 65%);
        background-size: 250% 100%;
        background-position: 150% 0;
        -webkit-mask-size: 100% 100%;
        mask-size: 100% 100%;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center;
        animation: photo-shine 5s ease-in-out infinite;
    }

    @keyframes photo-shine {
        0%        { background-position: 150% 0; }
        100%, 100% { background-position: -50% 0; }
    }

    .photo-sparkle {
        position: absolute;
        color: white;
        opacity: 0;
        pointer-events: none;
        filter: drop-shadow(0 0 6px rgba(147, 197, 253, 0.9));
        animation: photo-sparkle 3s ease-in-out infinite;
    }

    @keyframes photo-sparkle {
        0%, 100% { opacity: 0; transform: scale(0.3) rotate(0deg); }
        50%      { opacity: 1; transform: scale(1) rotate(45deg); }
    }

    @media (prefers-reduced-motion: reduce) {
        .photo-shine, .photo-sparkle { animation: none; }
    }
</style>