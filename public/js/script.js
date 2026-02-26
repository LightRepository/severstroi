// Мобильное меню
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

// Анимация появления элементов при скролле
function animateOnScroll() {
    const windowHeight = window.innerHeight;

    const cards = document.querySelectorAll('.catalog-card');
    cards.forEach(card => {
        const cardPosition = card.getBoundingClientRect().top;
        if (cardPosition < windowHeight - 100) {
            card.classList.add('animate');
        }
    });

    const advantagesText = document.querySelector('.advantages-text');
    if (advantagesText) {
        const advantagesTextPosition = advantagesText.getBoundingClientRect().top;
        if (advantagesTextPosition < windowHeight - 100) {
            advantagesText.classList.add('animate');
        }
    }

    const advantagesGrid = document.querySelector('.advantages-grid');
    if (advantagesGrid) {
        const advantagesGridPosition = advantagesGrid.getBoundingClientRect().top;
        if (advantagesGridPosition < windowHeight - 100) {
            advantagesGrid.classList.add('animate');
        }
    }

    const aboutText = document.querySelector('.about-text');
    if (aboutText) {
        const aboutTextPosition = aboutText.getBoundingClientRect().top;
        if (aboutTextPosition < windowHeight - 100) {
            aboutText.classList.add('animate');
        }
    }

    const aboutVisual = document.querySelector('.about-visual');
    if (aboutVisual) {
        const aboutVisualPosition = aboutVisual.getBoundingClientRect().top;
        if (aboutVisualPosition < windowHeight - 100) {
            aboutVisual.classList.add('animate');
        }
    }

    const contactInfo = document.querySelector('.contact-info');
    if (contactInfo) {
        const contactInfoPosition = contactInfo.getBoundingClientRect().top;
        if (contactInfoPosition < windowHeight - 100) {
            contactInfo.classList.add('animate');
        }
    }

    const mapContainer = document.querySelector('.map-container');
    if (mapContainer) {
        const mapContainerPosition = mapContainer.getBoundingClientRect().top;
        if (mapContainerPosition < windowHeight - 100) {
            mapContainer.classList.add('animate');
        }
    }

    const transportContent = document.querySelector('.transport-content');
    if (transportContent) {
        const transportPosition = transportContent.getBoundingClientRect().top;
        if (transportPosition < windowHeight - 100) {
            transportContent.classList.add('animate');
        }
    }
}

window.addEventListener('load', animateOnScroll);
window.addEventListener('scroll', animateOnScroll);

// Взаимодействие между картой и списком точек
document.addEventListener('DOMContentLoaded', function() {
    const mapPoints = document.querySelectorAll('.map-point');
    const listPoints = document.querySelectorAll('.point-item');

    if (mapPoints.length === 0 || listPoints.length === 0) return;

    function activatePoint(pointId) {
        mapPoints.forEach(point => point.classList.remove('active'));
        listPoints.forEach(point => point.classList.remove('active'));

        const selectedMapPoint = document.querySelector(`.map-point[data-point="${pointId}"]`);
        const selectedListItem = document.querySelector(`.point-item[data-point="${pointId}"]`);

        if (selectedMapPoint) selectedMapPoint.classList.add('active');
        if (selectedListItem) selectedListItem.classList.add('active');
    }

    mapPoints.forEach(point => {
        point.addEventListener('click', function() {
            const pointId = this.getAttribute('data-point');
            activatePoint(pointId);
        });
    });

    listPoints.forEach(point => {
        point.addEventListener('click', function() {
            const pointId = this.getAttribute('data-point');
            activatePoint(pointId);
        });
    });
});

// Инициализация карты для точек самовывоза
function initPickupMap() {
    const mapContainer = document.getElementById('map-pickup');
    if (!mapContainer) return;

    if (typeof ymaps === 'undefined') {
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

    const center = [56.5, 53.5];
    const map = new ymaps.Map('map-pickup', {
        center: center,
        zoom: 8,
        controls: ['zoomControl']
    });

    const points = [
        { coords: [56.747004, 54.022544], name: 'Волковское месторождение (Карьер «Лагуна»)', type: 'river' },
        { coords: [56.841602, 53.852465], name: 'Сидоровы горы', type: 'river' },
        { coords: [56.521011, 53.794479], name: 'Ярамаска', type: 'river' },
        { coords: [55.996848, 53.682743], name: 'Каракулино', type: 'river' },
        { coords: [56.75, 53.60], name: 'Щебень разных фракций', type: 'crushed' },
        { coords: [56.95, 54.00], name: 'Пойма 34', type: 'crushed' }
    ];

    const iconColors = { river: 'blue', crushed: 'orange' };

    points.forEach(point => {
        const placemark = new ymaps.Placemark(point.coords, {
            hintContent: point.name,
            balloonContent: `<strong>${point.name}</strong><br>Тип: ${point.type === 'river' ? 'Речные материалы' : 'Щебень'}`
        }, {
            preset: `islands#${iconColors[point.type]}Icon`
        });
        map.geoObjects.add(placemark);
    });

    const pointItems = document.querySelectorAll('.point-item');
    pointItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            if (index < points.length) {
                map.setCenter(points[index].coords, 10, { duration: 300 });
                const mapContainer = document.getElementById('map-pickup');
                if (mapContainer) {
                    mapContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', initPickupMap);

// Модальное окно быстрой заявки
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
