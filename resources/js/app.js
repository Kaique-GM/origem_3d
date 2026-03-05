import './bootstrap';

// Menu Nav
const btn = document.getElementById('mobile-menu-btn');
const menu = document.getElementById('mobile-menu');

btn.addEventListener('click', () => {
    if (menu.classList.contains('max-h-0')) {
        menu.classList.remove('max-h-0', 'opacity-0');
        menu.classList.add('max-h-[500px]', 'opacity-100');
    } else {
        menu.classList.add('max-h-0', 'opacity-0');
        menu.classList.remove('max-h-[500px]', 'opacity-100');
    }
});