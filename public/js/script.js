// Мобильное меню
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mainNav = document.getElementById('main-nav');
const menuOverlay = document.getElementById('menu-overlay');

function toggleMenu() {
    mobileMenuToggle.classList.toggle('active');
    mainNav.classList.toggle('active');
    menuOverlay.classList.toggle('active');
    document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
}

mobileMenuToggle.addEventListener('click', toggleMenu);
menuOverlay.addEventListener('click', toggleMenu);

// Закрытие меню при клике на ссылку
const navLinks = document.querySelectorAll('nav a');
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        mobileMenuToggle.classList.remove('active');
        mainNav.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    });
});

// Анимация появления элементов при скролле
function animateOnScroll() {
    const cards = document.querySelectorAll('.catalog-card');
    const advantagesText = document.querySelector('.advantages-text');
    const advantagesGrid = document.querySelector('.advantages-grid');
    const aboutText = document.querySelector('.about-text');
    const aboutVisual = document.querySelector('.about-visual');
    const contactInfo = document.querySelector('.contact-info');
    const mapContainer = document.querySelector('.map-container');

    const windowHeight = window.innerHeight;

    cards.forEach(card => {
        const cardPosition = card.getBoundingClientRect().top;

        if (cardPosition < windowHeight - 100) {
            card.classList.add('animate');
        }
    });

    if (advantagesText) {
        const advantagesTextPosition = advantagesText.getBoundingClientRect().top;
        if (advantagesTextPosition < windowHeight - 100) {
            advantagesText.classList.add('animate');
        }
    }

    if (advantagesGrid) {
        const advantagesGridPosition = advantagesGrid.getBoundingClientRect().top;
        if (advantagesGridPosition < windowHeight - 100) {
            advantagesGrid.classList.add('animate');
        }
    }

    if (aboutText) {
        const aboutTextPosition = aboutText.getBoundingClientRect().top;
        if (aboutTextPosition < windowHeight - 100) {
            aboutText.classList.add('animate');
        }
    }

    if (aboutVisual) {
        const aboutVisualPosition = aboutVisual.getBoundingClientRect().top;
        if (aboutVisualPosition < windowHeight - 100) {
            aboutVisual.classList.add('animate');
        }
    }

    if (contactInfo) {
        const contactInfoPosition = contactInfo.getBoundingClientRect().top;
        if (contactInfoPosition < windowHeight - 100) {
            contactInfo.classList.add('animate');
        }
    }

    if (mapContainer) {
        const mapContainerPosition = mapContainer.getBoundingClientRect().top;
        if (mapContainerPosition < windowHeight - 100) {
            mapContainer.classList.add('animate');
        }
    }
}

// Инициализация при загрузке страницы
window.addEventListener('load', function() {
    animateOnScroll();
});

// Обработка скролла для анимации элементов
window.addEventListener('scroll', animateOnScroll);
// Взаимодействие между картой и списком точек
document.addEventListener('DOMContentLoaded', function() {
    // Получаем все точки на карте и в списке
    const mapPoints = document.querySelectorAll('.map-point');
    const listPoints = document.querySelectorAll('.point-item');

    // Функция для активации точки
    function activatePoint(pointId) {
        // Деактивируем все точки
        mapPoints.forEach(point => {
            point.classList.remove('active');
        });
        listPoints.forEach(point => {
            point.classList.remove('active');
        });

        // Активируем выбранную точку
        const selectedMapPoint = document.querySelector(`.map-point[data-point="${pointId}"]`);
        const selectedListItem = document.querySelector(`.point-item[data-point="${pointId}"]`);

        if (selectedMapPoint) selectedMapPoint.classList.add('active');
        if (selectedListItem) selectedListItem.classList.add('active');
    }

    // Добавляем обработчики для точек на карте
    mapPoints.forEach(point => {
        point.addEventListener('click', function() {
            const pointId = this.getAttribute('data-point');
            activatePoint(pointId);
        });
    });

    // Добавляем обработчики для точек в списке
    listPoints.forEach(point => {
        point.addEventListener('click', function() {
            const pointId = this.getAttribute('data-point');
            activatePoint(pointId);
        });
    });
});
