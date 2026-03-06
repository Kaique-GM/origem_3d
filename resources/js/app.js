import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

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


document.addEventListener("DOMContentLoaded", () => {

    const products = [
        {
            category: "DECORATIVOS",
            title: "Vasos e Jarros",
            description: "Peças modernas e minimalistas desenvolvidas com impressão 3D de alta precisão, ideais para transformar qualquer ambiente. Produzimos vasos e jarros com diferentes formatos, texturas e acabamentos, combinando design contemporâneo, resistência e personalidade para sua decoração."
        },
        {
            category: "ORGANIZAÇÃO",
            title: "Suportes e Organizadores",
            description: "Itens funcionais feitos em impressão 3D que ajudam a manter seu espaço organizado com design moderno e resistente."
        },
        {
            category: "PERSONALIZADOS",
            title: "Peças Sob Medida",
            description: "Criamos modelos exclusivos sob medida para sua necessidade, desde decoração até peças técnicas."
        }
    ];

    const swiper = new Swiper('.swiper', {
        modules: [Autoplay, Pagination],

        loop: true,
        speed: 700,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        on: {
            slideChange(swiper) {
                const index = swiper.realIndex;

                document.getElementById("product-category").textContent = products[index].category;
                document.getElementById("product-title").textContent = products[index].title;
                document.getElementById("product-description").textContent = products[index].description;

            }
        }
    });

});
