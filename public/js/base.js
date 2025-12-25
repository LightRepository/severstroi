// Адаптация карты контактов для мобильных
function adaptContactMap() {
    const mapContainer = document.querySelector('.map-container-contact');
    const mapIframe = document.querySelector('.map-placeholder-contact iframe');

    if (!mapContainer || !mapIframe) return;

    // На мобильных устройствах
    if (window.innerWidth <= 767) {
        // Можно добавить динамическое изменение параметров карты
        // Например, изменить масштаб или центр
        mapIframe.style.width = '100%';
        mapIframe.style.height = '100%';
    }
}

// Инициализация при загрузке и изменении размера окна
document.addEventListener('DOMContentLoaded', function() {
    adaptContactMap();

    // Адаптация иконок в точках самовывоза
    const featureItems = document.querySelectorAll('.feature-item');
    featureItems.forEach(item => {
        const icon = item.querySelector('.feature-icon');
        const content = item.querySelector('.feature-content');

        // Центрируем контент по вертикали
        if (icon && content) {
            icon.style.display = 'flex';
            content.style.display = 'flex';
            content.style.flexDirection = 'column';
            content.style.justifyContent = 'center';
        }
    });
});

window.addEventListener('resize', adaptContactMap);
// Анимация футера при скролле
function animateFooterOnScroll() {
    const footer = document.querySelector('footer');
    const footerBrand = document.querySelector('.footer-brand');
    const footerLinks = document.querySelector('.footer-links');
    const footerServices = document.querySelector('.footer-services');
    const footerContact = document.querySelector('.footer-contact');
    const footerBottom = document.querySelector('.footer-bottom');

    if (!footer) return;

    const footerPosition = footer.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    // Если футер виден на 80% своей высоты
    if (footerPosition < windowHeight * 0.8) {
        if (footerBrand) footerBrand.classList.add('animate');
        if (footerLinks) footerLinks.classList.add('animate');
        if (footerServices) footerServices.classList.add('animate');
        if (footerContact) footerContact.classList.add('animate');
        if (footerBottom) footerBottom.classList.add('animate');
    }
}

// Инициализация анимации футера при загрузке и скролле
document.addEventListener('DOMContentLoaded', function() {
    animateFooterOnScroll();
});

window.addEventListener('scroll', function() {
    animateFooterOnScroll();
});

// Добавление hover-эффектов для иконок соцсетей
document.addEventListener('DOMContentLoaded', function() {
    const socialIcons = document.querySelectorAll('.footer-social a');

    socialIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
        });
    });
});
