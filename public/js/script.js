

// ==================== МОБИЛЬНОЕ МЕНЮ ====================
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mainNav = document.getElementById('main-nav');
const menuOverlay = document.getElementById('menu-overlay');

function toggleMenu() {
    if (!mobileMenuToggle || !mainNav || !menuOverlay) return;
    mobileMenuToggle.classList.toggle('active');
    mainNav.classList.toggle('active');
    menuOverlay.classList.toggle('active');
    document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
}

if (mobileMenuToggle && mainNav && menuOverlay) {
    mobileMenuToggle.addEventListener('click', toggleMenu);
    menuOverlay.addEventListener('click', toggleMenu);
}

// Закрытие меню при клике на ссылку
const navLinks = document.querySelectorAll('nav a');
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        if (mobileMenuToggle && mainNav && menuOverlay) {
            mobileMenuToggle.classList.remove('active');
            mainNav.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
});

// ==================== АНИМАЦИЯ ПРИ СКРОЛЛЕ (Intersection Observer) ====================
const animatedElements = [
    ...document.querySelectorAll('.catalog-card'),
    ...document.querySelectorAll('.contact-info'),
    ...document.querySelectorAll('.transport-content'),
    ...document.querySelectorAll('.footer-brand'),
    ...document.querySelectorAll('.footer-links'),
    ...document.querySelectorAll('.footer-services'),
    ...document.querySelectorAll('.footer-contact'),
    ...document.querySelectorAll('.footer-bottom')
];

if (animatedElements.length > 0) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target); // больше не наблюдаем
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px' // небольшой отступ для раннего срабатывания
    });

    animatedElements.forEach(el => observer.observe(el));
}


// ==================== МОДАЛЬНОЕ ОКНО БЫСТРОЙ ЗАЯВКИ ====================
document.addEventListener('DOMContentLoaded', function() {
    const modalOverlay = document.getElementById('request-modal-overlay');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const form = document.getElementById('quick-request-form');

    if (!modalOverlay) return;

    function showModal() {
        modalOverlay.style.display = 'flex';
        setTimeout(() => {
            modalOverlay.classList.add('active');
        }, 10);
        sessionStorage.setItem('modalShown', 'true');
    }

    function hideModal() {
        modalOverlay.classList.remove('active');
        setTimeout(() => {
            modalOverlay.style.display = 'none';
        }, 300);
    }

    if (!sessionStorage.getItem('modalShown')) {
        setTimeout(showModal, 1500);
    }

    if (modalCloseBtn) {
        modalCloseBtn.addEventListener('click', hideModal);
    }

    modalOverlay.addEventListener('click', function(e) {
        if (e.target === modalOverlay) {
            hideModal();
        }
    });

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            if (!submitBtn) return;

            const originalText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Отправка...';

            fetch('/quick-request', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')?.value || '',
                    'Accept': 'application/json'
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        form.innerHTML = `<div class="success-message">${data.message || 'Заявка отправлена! Мы свяжемся с вами.'}</div>`;
                        setTimeout(hideModal, 2000);
                    } else {
                        alert('Ошибка: ' + (data.message || 'Попробуйте позже'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Произошла ошибка при отправке. Проверьте соединение.');
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                });
        });
    }
});

// ==================== ОПТИМИЗАЦИЯ RESIZE (DEBOUNCE) ====================
// Добавляем debounce для адаптации карты контактов (функция определена в base.js, но мы можем вызвать её с задержкой)
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        // Если функция adaptContactMap определена в base.js, вызываем её
        if (typeof adaptContactMap === 'function') {
            adaptContactMap();
        }
    }, 150);
});

// ==================== АДАПТИВНОЕ ПОЗИЦИОНИРОВАНИЕ ТУЛТИПОВ ====================
function adjustTooltipPosition() {
    const mapPoints = document.querySelectorAll('.map-point');
    mapPoints.forEach(point => {
        point.removeEventListener('mouseenter', positionTooltip);
        point.addEventListener('mouseenter', positionTooltip);
    });
}

function positionTooltip(e) {
    const tooltip = this.querySelector('.point-tooltip');
    if (!tooltip) return;

    // Сбрасываем все возможные классы позиционирования
    tooltip.classList.remove('tooltip-bottom', 'tooltip-left', 'tooltip-right');

    requestAnimationFrame(() => {
        const markerRect = this.getBoundingClientRect();
        const tooltipRect = tooltip.getBoundingClientRect(); // после сброса классов получим естественное положение (сверху)
        const viewportWidth = window.innerWidth;
        const viewportHeight = window.innerHeight;

        // Проверяем, помещается ли тултип сверху
        if (markerRect.top < tooltipRect.height + 10) {
            // Сверху не помещается – пробуем снизу
            tooltip.classList.add('tooltip-bottom');
            // Даём браузеру обновиться с новым классом, затем проверяем по горизонтали
            requestAnimationFrame(() => {
                const newTooltipRect = tooltip.getBoundingClientRect();
                // По горизонтали: если выходит за правый край
                if (newTooltipRect.right > viewportWidth) {
                    tooltip.classList.add('tooltip-left');
                }
                // Если выходит за левый край
                if (newTooltipRect.left < 0) {
                    tooltip.classList.add('tooltip-right');
                }
            });
        } else {
            // Сверху помещается, но проверяем по горизонтали
            if (tooltipRect.right > viewportWidth) {
                tooltip.classList.add('tooltip-left');
            }
            if (tooltipRect.left < 0) {
                tooltip.classList.add('tooltip-right');
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', adjustTooltipPosition);
window.addEventListener('resize', adjustTooltipPosition);
