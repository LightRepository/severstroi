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

    const transportContent = document.querySelector('.transport-content');



    if (transportContent) {
        const transportPosition = transportContent.getBoundingClientRect().top;
        if (transportPosition < windowHeight - 100) {
            transportContent.classList.add('animate');
        }
    }

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

// Инициализация карты для точек самовывоза
function initPickupMap() {
    if (typeof ymaps === 'undefined') {
        // Загружаем API Яндекс.Карт, если ещё не загружен
        const script = document.createElement('script');
        script.src = 'https://api-maps.yandex.ru/2.1/?apikey=7317a0b1-4c54-4ccc-9d89-0f5edf9534ed&lang=ru_RU';
        script.type = 'text/javascript';
        script.onload = () => {
            ymaps.ready(createPickupMap);
        };
        document.head.appendChild(script);
    } else {
        ymaps.ready(createPickupMap);
    }
}

function createPickupMap() {
    const mapContainer = document.getElementById('map-pickup');
    if (!mapContainer) return;

    // Центр карты (Удмуртия)
    const center = [56.5, 53.5];
    const map = new ymaps.Map('map-pickup', {
        center: center,
        zoom: 8,
        controls: ['zoomControl', 'fullscreenControl']
    });

    // Список точек с координатами и типом
    const points = [
        { coords: [56.747004, 54.022544], name: 'Волковское месторождение (Карьер «Лагуна»)', type: 'river' },
        { coords: [56.841602, 53.852465], name: 'Сидоровы горы', type: 'river' },
        { coords: [56.521011, 53.794479], name: 'Ярамаска', type: 'river' },
        { coords: [55.996848, 53.682743], name: 'Каракулино', type: 'river' },
        { coords: [56.75, 53.60], name: 'Щебень разных фракций', type: 'crushed' },
        { coords: [56.95, 54.00], name: 'Пойма 34', type: 'crushed' }
    ];

    // Цвета меток в зависимости от типа
    const iconColors = {
        river: 'blue',
        crushed: 'orange'
    };
    pointItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            if (index < points.length) {
                map.setCenter(points[index].coords, 10, { duration: 300 });

                // Плавная прокрутка к блоку карты
                const mapContainer = document.getElementById('map-pickup');
                if (mapContainer) {
                    mapContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    });
    points.forEach(point => {
        const placemark = new ymaps.Placemark(point.coords, {
            hintContent: point.name,
            balloonContent: `<strong>${point.name}</strong><br>Тип: ${point.type === 'river' ? 'Речные материалы' : 'Щебень'}`
        }, {
            preset: `islands#${iconColors[point.type]}Icon`
        });
        map.geoObjects.add(placemark);
    });

    // Клик по пункту списка центрирует карту на соответствующей точке
    const pointItems = document.querySelectorAll('.point-item');
    pointItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            if (index < points.length) {
                map.setCenter(points[index].coords, 10, { duration: 300 });
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    initPickupMap();
});

// Модальное окно быстрой заявки
document.addEventListener('DOMContentLoaded', function() {
    const modalOverlay = document.getElementById('request-modal-overlay');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const modal = document.getElementById('request-modal');
    const form = document.getElementById('quick-request-form');

    // Проверяем, показывали ли окно в этой сессии
    if (!sessionStorage.getItem('modalShown')) {
        // Небольшая задержка, чтобы не вылетать сразу
        setTimeout(() => {
            showModal();
        }, 1500); // через 1.5 секунды после загрузки
    }

    // Функция показа
    function showModal() {
        modalOverlay.style.display = 'flex';
        // Небольшой таймаут для запуска CSS-перехода
        setTimeout(() => {
            modalOverlay.classList.add('active');
        }, 10);
        sessionStorage.setItem('modalShown', 'true');
    }

    // Функция скрытия
    function hideModal() {
        modalOverlay.classList.remove('active');
        setTimeout(() => {
            modalOverlay.style.display = 'none';
        }, 300); // время совпадает с transition
    }

    // Закрытие по крестику
    modalCloseBtn.addEventListener('click', hideModal);

    // Закрытие по клику на оверлей (но не на само окно)
    modalOverlay.addEventListener('click', function(e) {
        if (e.target === modalOverlay) {
            hideModal();
        }
    });

    // Обработка отправки формы через AJAX
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Отправка...';

            fetch('/quick-request', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Показываем сообщение об успехе
                        form.innerHTML = `<div class="success-message">${data.message || 'Заявка отправлена! Мы свяжемся с вами.'}</div>`;
                        setTimeout(() => {
                            hideModal();
                        }, 2000);
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
