import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Animasi angka: hitung dari 0 sampai target
function countUp(el, target, duration = 2000) {
    const start = performance.now();

    function step(now) {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic, selaras dengan ease-out pada bar
        el.textContent = Math.round(target * eased) + '%';

        if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
}

// Animasi bar + angka (hanya jalan kalau card punya elemen tersebut, misalnya card tools)
function animateProgress(item) {
    const bar = item.querySelector('[data-bar]');
    const count = item.querySelector('[data-count]');

    if (bar) bar.style.width = bar.dataset.bar + '%';
    if (count) countUp(count, Number(count.dataset.count));
}

document.addEventListener('DOMContentLoaded', () => {
    const groups = document.querySelectorAll('.reveal-group');

    groups.forEach((group) => {
        const items = Array.from(group.querySelectorAll('.reveal-item'));

        const observer = new IntersectionObserver((entries) => {
            entries
                .filter((entry) => entry.isIntersecting)
                // urutkan sesuai posisi di grid supaya munculnya berurutan
                .sort((a, b) => items.indexOf(a.target) - items.indexOf(b.target))
                .forEach((entry, i) => {
                    const item = entry.target;
                    const delay = i * 250; // jeda 200ms per card yang muncul bersamaan

                    setTimeout(() => {
                        item.classList.add('is-visible');
                        animateProgress(item);

                        // Setelah animasi muncul selesai (0.7s), lepas class reveal
                        // supaya transisi hover milik card kembali berfungsi
                        setTimeout(() => {
                            item.classList.remove('reveal-item', 'is-visible');
                        }, 750);
                    }, delay);

                    observer.unobserve(item); // biar animasi cuma jalan sekali
                });
        }, { threshold: 0.15 });

        items.forEach((item) => observer.observe(item));
    });
});