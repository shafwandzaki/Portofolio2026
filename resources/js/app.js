import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const groups = document.querySelectorAll('.reveal-group');

    groups.forEach((group) => {
        const items = group.querySelectorAll('.reveal-item');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const item = entry.target;
                    const index = Array.from(items).indexOf(item);
                    const delay = (index % 6) * 100; // jeda 100ms per card, reset tiap 6 card

                    setTimeout(() => {
                        item.classList.add('is-visible');
                    }, delay);

                    observer.unobserve(item); // biar animasi cuma jalan sekali
                }
            });
        }, { threshold: 0.15 });

        items.forEach((item) => observer.observe(item));
    });
});
