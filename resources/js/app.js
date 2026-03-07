import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

// Menu Nav
const btn = document.getElementById('mobile-menu-btn');
const menu = document.getElementById('mobile-menu');

btn.addEventListener('click', () => {
    menu.classList.toggle('max-h-0');
    menu.classList.toggle('opacity-0');
    menu.classList.toggle('max-h-[500px]');
    menu.classList.toggle('opacity-100');
});

//WPP
window.maskPhone = function (input) {
    let value = input.value.replace(/\D/g, '');

    value = value.replace(/^(\d{2})(\d)/g, "($1) $2");
    value = value.replace(/(\d{5})(\d)/, "$1-$2");

    input.value = value;
}

// Swiper
document.addEventListener("DOMContentLoaded", () => {

    //Animações
    const elements = document.querySelectorAll('[class*="reveal-"]');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            const revealClass = [...entry.target.classList]
                .find(cls => cls.startsWith('reveal-'));
            if (!revealClass) return;

            const animationClass = revealClass.replace('reveal', 'animate');

            if (entry.isIntersecting) {
                entry.target.classList.add(animationClass);
            } else {
                entry.target.classList.remove(animationClass);
            }
        });
    }, {
        threshold: 0.2
    });

    elements.forEach(el => observer.observe(el));

    const products = [
        {
            category: "DECORATIVOS",
            title: "Vasos e Jarros",
            description: "Peças modernas e minimalistas ideais para transformar qualquer ambiente. Criamos vasos e jarros com diferentes formatos, texturas e acabamentos, combinando design contemporâneo, resistência e personalidade para valorizar sua decoração."
        },
        {
            category: "ACESSÓRIOS",
            title: "Chaveiros",
            description: "Peças criativas e cheias de personalidade, ideais para acompanhar suas chaves no dia a dia ou decorar mochilas e bolsas. Produzimos modelos em diversos formatos, estilos e cores, combinando design moderno, leveza e resistência para criar acessórios únicos e cheios de estilo."
        },
        {
            category: "COLECIONÁVEIS",
            title: "Bonecos e Miniaturas",
            description: "Produzimos bonecos e miniaturas detalhadas inspiradas em personagens, objetos e ideias criativas. Cada peça é desenvolvida com atenção aos detalhes, podendo ter diferentes tamanhos, estilos e acabamentos, sendo perfeitas para colecionar, decorar ambientes ou presentear."
        },
        {
            category: "ORGANIZAÇÃO",
            title: "Suportes e Organizadores",
            description: "Peças criadas para trazer mais praticidade e organização ao seu espaço. Produzimos suportes para celular, controles, fones de ouvido e pequenos objetos, unindo design funcional, resistência e estética para deixar seu ambiente mais organizado e moderno."
        }
    ];

    const categoryEl = document.getElementById("product-category");
    const titleEl = document.getElementById("product-title");
    const descEl = document.getElementById("product-description");

    const swiper = new Swiper('.swiper', {
        modules: [Autoplay, Pagination],

        loop: true,
        speed: 800,
        spaceBetween: 10,
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
                const { category, title, description } = products[swiper.realIndex];
                categoryEl.textContent = category;
                titleEl.textContent = title;
                descEl.textContent = description;
            }
        }
    });

});
