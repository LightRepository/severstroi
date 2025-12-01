<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Песок строительный - СеверСтрой</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
<!-- Шапка -->
@include("includes.header")

<!-- Хлебные крошки -->
<div class="breadcrumbs">
    <div class="container">
        <a href="index.html">Главная</a> >
        <a href="index.html#catalog">Материалы</a> >
        <span>Песок строительный</span>
    </div>
</div>

<!-- Основной контент -->
<div class="container">
    <h1 class="page-title">Песок строительный</h1>
    <p class="page-subtitle">Широкий выбор песка для различных строительных работ с доставкой по Ижевску и Удмуртской Республике</p>

    <!-- Кнопка для показа/скрытия фильтров на мобильных -->
    <button class="mobile-filters-toggle" id="mobileFiltersToggle">
        <i class="fas fa-filter"></i>
        Фильтры
        <i class="fas fa-chevron-down"></i>
    </button>

    <div class="content-layout">
        <!-- Фильтры -->
        <div class="filters-section" id="filtersSection">
            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-star"></i> Особенность</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="feature" value="natural">
                        <span>Природный</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="feature" value="dry">
                        <span>Сухой</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-ruler-combined"></i> Модуль крупности</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="size" value="fine">
                        <span>Мелкозернистый</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="size" value="medium">
                        <span>Среднезернистый</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="size" value="coarse">
                        <span>Крупнозернистый</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-filter"></i> Популярные фракции</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="1.5-2.5">
                        <span>1,5-2,5 мм</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="2-2.5">
                        <span>2-2,5 мм</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="2.5-3.5">
                        <span>2,5-3,5 мм</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="2-3">
                        <span>2-3 мм</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-hard-hat"></i> Применение</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="application" value="road">
                        <span>Дорожный</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="application" value="foundation">
                        <span>Для фундамента</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="application" value="screed">
                        <span>Для стяжки</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="application" value="paving">
                        <span>Для тротуарной плитки</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="application" value="joints">
                        <span>Для заполнения швов</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="application" value="sandbox">
                        <span>Для песочницы</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="application" value="concrete">
                        <span>Для бетона</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-tag"></i> Цена за</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="radio" name="priceType" value="ton" checked>
                        <span>Тонна (т)</span>
                    </label>
                    <label class="filter-option">
                        <input type="radio" name="priceType" value="cube">
                        <span>Куб (м³)</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-ruble-sign"></i> Диапазон цен</h3>
                <div class="price-inputs">
                    <input type="number" class="price-input" id="priceMin" placeholder="От" min="0">
                    <input type="number" class="price-input" id="priceMax" placeholder="До" min="0">
                </div>
            </div>

            <div class="filter-buttons">
                <button class="btn btn-outline" id="resetFilters">Сбросить все фильтры</button>
            </div>
        </div>

        <!-- Сетка товаров -->
        <div class="products-section">
            <!-- Индикатор активных фильтров -->
            <div class="active-filters" id="activeFilters" style="display: none;">
                <span>Активные фильтры:</span>
                <!-- Активные фильтры будут добавляться здесь -->
                <button class="clear-all-filters" id="clearAllFilters">Очистить все</button>
            </div>

            <div class="products-grid" id="productsGrid">
                <!-- Товары будут отображаться здесь -->
            </div>
        </div>
    </div>
</div>

<!-- Компактное модальное окно заказа -->
<div class="modal" id="orderModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Оформление заказа</h3>
            <button class="close-modal">&times;</button>
        </div>
        <form id="orderForm">
            <div class="form-group">
                <label class="form-label">Товар</label>
                <input type="text" class="form-control" id="selectedProduct" readonly>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Количество</label>
                    <input type="number" class="form-control" id="quantity" min="1" value="1" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Единица</label>
                    <select class="form-control" id="unit">
                        <option value="ton">Тонны (т)</option>
                        <option value="cube">Кубы (м³)</option>
                    </select>
                </div>
            </div>

            <!-- Блок расчета общей стоимости -->
            <div class="total-price">
                <div class="total-price-label">Общая стоимость:</div>
                <div class="total-price-value" id="totalPrice">450 ₽</div>
            </div>

            <div class="form-group">
                <label class="form-label">ФИО *</label>
                <input type="text" class="form-control" id="customerName" required>
                <div class="error-message" id="customerNameError">Пожалуйста, введите ваше ФИО</div>
            </div>

            <div class="form-group">
                <label class="form-label">Телефон *</label>
                <input type="tel" class="form-control" id="customerPhone" required>
                <div class="error-message" id="customerPhoneError">Пожалуйста, введите корректный номер телефона</div>
            </div>

            <div class="form-group">
                <label class="form-label">Адрес доставки</label>
                <input type="text" class="form-control" id="deliveryAddress">
            </div>

            <div class="form-group">
                <label class="form-label">Комментарий</label>
                <textarea class="form-control" id="orderComment" rows="2" placeholder="Необязательно"></textarea>
            </div>

            <div class="form-submit">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Отправить заявку</button>
            </div>
        </form>
    </div>
</div>

<!-- Компактное модальное окно доставки -->
<div class="modal" id="deliveryModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Расчет доставки</h3>
            <button class="close-modal">&times;</button>
        </div>
        <form id="deliveryForm">
            <div class="form-group">
                <label class="form-label">Товар</label>
                <input type="text" class="form-control" id="deliveryProduct" readonly>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Количество</label>
                    <input type="number" class="form-control" id="deliveryQuantity" min="1" value="1" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Единица</label>
                    <select class="form-control" id="deliveryUnit">
                        <option value="ton">Тонны (т)</option>
                        <option value="cube">Кубы (м³)</option>
                    </select>
                </div>
            </div>

            <!-- Блок расчета стоимости товара -->
            <div class="total-price">
                <div class="total-price-label">Стоимость товара:</div>
                <div class="total-price-value" id="deliveryProductPrice">450 ₽</div>
            </div>

            <div class="form-group">
                <label class="form-label">Адрес доставки *</label>
                <input type="text" class="form-control" id="deliveryAddress" required>
                <div class="error-message" id="deliveryAddressError">Пожалуйста, введите адрес доставки</div>
            </div>

            <div class="form-group">
                <label class="form-label">Телефон *</label>
                <input type="tel" class="form-control" id="deliveryPhone" required>
                <div class="error-message" id="deliveryPhoneError">Пожалуйста, введите корректный номер телефона</div>
            </div>

            <div class="form-group">
                <label class="form-label">Желаемая дата</label>
                <input type="date" class="form-control" id="deliveryDate">
            </div>

            <div class="form-submit">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Рассчитать стоимость</button>
            </div>
        </form>
    </div>
</div>

<!-- Модальное окно успешного заказа -->
<div class="modal" id="successModal">
    <div class="modal-content">
        <div class="success-modal">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h3 class="success-title">Заказ успешно оформлен!</h3>
            <p class="success-message">Ваш заказ принят в обработку. В ближайшее время с вами свяжется наш менеджер для подтверждения деталей.</p>

            <div class="success-details" id="successDetails">
                <!-- Детали заказа будут добавлены здесь -->
            </div>

            <div class="filter-buttons">
                <button class="btn btn-primary" id="closeSuccessModal">Продолжить покупки</button>
            </div>
        </div>
    </div>
</div>

<!-- Модальное окно успешного расчета доставки -->
<div class="modal" id="successDeliveryModal">
    <div class="modal-content">
        <div class="success-modal">
            <div class="success-icon">
                <i class="fas fa-truck"></i>
            </div>
            <h3 class="success-title">Запрос на доставку отправлен!</h3>
            <p class="success-message">Мы получили вашу заявку на расчет доставки. Специалист свяжется с вами в течение 30 минут для уточнения стоимости.</p>

            <div class="success-details" id="successDeliveryDetails">
                <!-- Детали доставки будут добавлены здесь -->
            </div>

            <div class="filter-buttons">
                <button class="btn btn-primary" id="closeSuccessDeliveryModal">Продолжить покупки</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Данные о товарах с двумя ценами
    const products = [
        {
            id: 1,
            name: "Песок речной",
            description: "Чистый речной песок без примесей, идеален для бетонных работ и штукатурки.",
            price: { ton: 450, cube: 600 },
            image: "img/tekstura-peska.jpg",
            badge: "Хит",
            features: ["natural", "fine", "1.5-2.5"],
            applications: ["concrete", "screed", "paving", "joints"]
        },
        {
            id: 2,
            name: "Песок карьерный",
            description: "Песок для фундаментных работ и обратной засыпки. Содержит естественные примеси глины.",
            price: { ton: 380, cube: 500 },
            image: "https://images.unsplash.com/photo-1621550170264-4f8eef76dc82?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80",
            badge: "Популярный",
            features: ["natural", "medium", "2-2.5"],
            applications: ["foundation", "road", "sandbox"]
        },
        {
            id: 3,
            name: "Песок мытый",
            description: "Очищенный от примесей песок для высококачественных бетонных смесей и отделочных работ.",
            price: { ton: 520, cube: 680 },
            image: "img/vid-sverhu-tekstura-kukuruznoi-muki.jpg",
            badge: "",
            features: ["natural", "coarse", "2.5-3.5"],
            applications: ["concrete", "paving", "screed"]
        },
        {
            id: 4,
            name: "Песок сеяный",
            description: "Просеянный песок без крупных включений для штукатурных растворов и кладочных работ.",
            price: { ton: 480, cube: 620 },
            image: "https://images.unsplash.com/photo-1616012480717-fd986a1336ed?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80",
            badge: "",
            features: ["dry", "medium", "2-3"],
            applications: ["screed", "joints", "sandbox"]
        }
    ];

    // Текущий выбранный тип цены
    let currentPriceType = 'ton';

    // Инициализация страницы
    document.addEventListener('DOMContentLoaded', function() {
        renderProducts(products);
        setupEventListeners();
        applyFilters();
        setupMobileFilters();
    });

    // Настройка мобильных фильтров
    function setupMobileFilters() {
        const mobileFiltersToggle = document.getElementById('mobileFiltersToggle');
        const filtersSection = document.getElementById('filtersSection');

        if (mobileFiltersToggle && filtersSection) {
            mobileFiltersToggle.addEventListener('click', function() {
                filtersSection.classList.toggle('mobile-active');
                this.classList.toggle('active');

                // Обновляем текст кнопки
                if (filtersSection.classList.contains('mobile-active')) {
                    this.innerHTML = '<i class="fas fa-filter"></i> Скрыть фильтры <i class="fas fa-chevron-up"></i>';
                } else {
                    this.innerHTML = '<i class="fas fa-filter"></i> Фильтры <i class="fas fa-chevron-down"></i>';
                }
            });
        }
    }

    // Рендеринг товаров
    function renderProducts(productsToRender) {
        const productsGrid = document.getElementById('productsGrid');

        if (productsToRender.length === 0) {
            productsGrid.innerHTML = `
                    <div class="no-products">
                        <i class="fas fa-search"></i>
                        <h3>Товары не найдены</h3>
                        <p>Попробуйте изменить параметры фильтрации</p>
                    </div>
                `;
            return;
        }

        productsGrid.innerHTML = productsToRender.map(product => `
                <div class="product-card" data-id="${product.id}">
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                        ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">${product.name}</h3>
                        <p class="product-description">${product.description}</p>
                        <div class="product-features">
                            ${product.features.map(feature => `<span class="feature-tag">${getFeatureName(feature)}</span>`).join('')}
                        </div>
                        <div class="product-price">${product.price[currentPriceType]} ₽/${currentPriceType === 'ton' ? 'т' : 'м³'}</div>
                        <div class="product-actions">
                            <button class="btn btn-buy" data-product="${product.name}" data-price-ton="${product.price.ton}" data-price-cube="${product.price.cube}">Купить</button>
                            <button class="btn btn-delivery" data-product="${product.name}" data-price-ton="${product.price.ton}" data-price-cube="${product.price.cube}">Рассчитать доставку</button>
                        </div>
                    </div>
                </div>
            `).join('');

        setupModalEventListeners();
    }

    // Получение читаемого названия характеристики
    function getFeatureName(feature) {
        const featureNames = {
            'natural': 'Природный',
            'dry': 'Сухой',
            'fine': 'Мелкозернистый',
            'medium': 'Среднезернистый',
            'coarse': 'Крупнозернистый',
            '1.5-2.5': '1,5-2,5 мм',
            '2-2.5': '2-2,5 мм',
            '2.5-3.5': '2,5-3,5 мм',
            '2-3': '2-3 мм',
            'road': 'Дорожный',
            'foundation': 'Для фундамента',
            'screed': 'Для стяжки',
            'paving': 'Для тротуарной плитки',
            'joints': 'Для заполнения швов',
            'sandbox': 'Для песочницы',
            'concrete': 'Для бетона'
        };
        return featureNames[feature] || feature;
    }

    // Настройка обработчиков событий
    function setupEventListeners() {
        const filterCheckboxes = document.querySelectorAll('input[type="checkbox"]');
        const filterRadios = document.querySelectorAll('input[type="radio"]');
        const priceInputs = document.querySelectorAll('.price-input');

        filterCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', applyFilters);
        });

        filterRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.name === 'priceType') {
                    currentPriceType = this.value;
                    applyFilters();
                }
            });
        });

        priceInputs.forEach(input => {
            input.addEventListener('input', debounce(applyFilters, 300));
        });

        document.getElementById('resetFilters').addEventListener('click', resetFilters);
        document.getElementById('clearAllFilters').addEventListener('click', resetFilters);

        document.getElementById('closeSuccessModal').addEventListener('click', function() {
            document.getElementById('successModal').classList.remove('active');
            document.getElementById('orderForm').reset();
        });

        document.getElementById('closeSuccessDeliveryModal').addEventListener('click', function() {
            document.getElementById('successDeliveryModal').classList.remove('active');
            document.getElementById('deliveryForm').reset();
        });

        setupModalEventListeners();
    }

    // Настройка обработчиков для модальных окон
    function setupModalEventListeners() {
        const buyButtons = document.querySelectorAll('.btn-buy');
        const deliveryButtons = document.querySelectorAll('.btn-delivery');
        const orderModal = document.getElementById('orderModal');
        const deliveryModal = document.getElementById('deliveryModal');
        const closeButtons = document.querySelectorAll('.close-modal');

        buyButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product');
                const priceTon = this.getAttribute('data-price-ton');
                const priceCube = this.getAttribute('data-price-cube');

                document.getElementById('selectedProduct').value = productName;
                document.getElementById('selectedProduct').setAttribute('data-price-ton', priceTon);
                document.getElementById('selectedProduct').setAttribute('data-price-cube', priceCube);

                // Устанавливаем начальную цену в зависимости от выбранной единицы
                const initialUnit = document.getElementById('unit').value;
                const initialPrice = initialUnit === 'ton' ? priceTon : priceCube;
                document.getElementById('selectedProduct').setAttribute('data-current-price', initialPrice);
                document.getElementById('selectedProduct').setAttribute('data-current-unit', initialUnit);

                // Обновляем расчет стоимости
                updateTotalPrice();
                orderModal.classList.add('active');
            });
        });

        deliveryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product');
                const priceTon = this.getAttribute('data-price-ton');
                const priceCube = this.getAttribute('data-price-cube');

                document.getElementById('deliveryProduct').value = productName;
                document.getElementById('deliveryProduct').setAttribute('data-price-ton', priceTon);
                document.getElementById('deliveryProduct').setAttribute('data-price-cube', priceCube);

                // Устанавливаем начальную цену в зависимости от выбранной единицы
                const initialUnit = document.getElementById('deliveryUnit').value;
                const initialPrice = initialUnit === 'ton' ? priceTon : priceCube;
                document.getElementById('deliveryProduct').setAttribute('data-current-price', initialPrice);
                document.getElementById('deliveryProduct').setAttribute('data-current-unit', initialUnit);

                // Обновляем расчет стоимости
                updateDeliveryPrice();
                deliveryModal.classList.add('active');
            });
        });

        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                orderModal.classList.remove('active');
                deliveryModal.classList.remove('active');
            });
        });

        window.addEventListener('click', function(event) {
            if (event.target === orderModal) {
                orderModal.classList.remove('active');
            }
            if (event.target === deliveryModal) {
                deliveryModal.classList.remove('active');
            }
            if (event.target === document.getElementById('successModal')) {
                document.getElementById('successModal').classList.remove('active');
                document.getElementById('orderForm').reset();
            }
            if (event.target === document.getElementById('successDeliveryModal')) {
                document.getElementById('successDeliveryModal').classList.remove('active');
                document.getElementById('deliveryForm').reset();
            }
        });

        // Обработчики для расчета стоимости в реальном времени
        document.getElementById('quantity').addEventListener('input', updateTotalPrice);
        document.getElementById('unit').addEventListener('change', function() {
            updateProductPrice('order');
            updateTotalPrice();
        });

        document.getElementById('deliveryQuantity').addEventListener('input', updateDeliveryPrice);
        document.getElementById('deliveryUnit').addEventListener('change', function() {
            updateProductPrice('delivery');
            updateDeliveryPrice();
        });

        // Валидация форм
        setupFormValidation();
    }

    // Обновление цены товара при смене единицы измерения
    function updateProductPrice(formType) {
        if (formType === 'order') {
            const unit = document.getElementById('unit').value;
            const priceTon = document.getElementById('selectedProduct').getAttribute('data-price-ton');
            const priceCube = document.getElementById('selectedProduct').getAttribute('data-price-cube');
            const currentPrice = unit === 'ton' ? priceTon : priceCube;

            document.getElementById('selectedProduct').setAttribute('data-current-price', currentPrice);
            document.getElementById('selectedProduct').setAttribute('data-current-unit', unit);
        } else {
            const unit = document.getElementById('deliveryUnit').value;
            const priceTon = document.getElementById('deliveryProduct').getAttribute('data-price-ton');
            const priceCube = document.getElementById('deliveryProduct').getAttribute('data-price-cube');
            const currentPrice = unit === 'ton' ? priceTon : priceCube;

            document.getElementById('deliveryProduct').setAttribute('data-current-price', currentPrice);
            document.getElementById('deliveryProduct').setAttribute('data-current-unit', unit);
        }
    }

    // Расчет общей стоимости для заказа
    function updateTotalPrice() {
        const currentPrice = parseFloat(document.getElementById('selectedProduct').getAttribute('data-current-price'));
        const quantity = parseFloat(document.getElementById('quantity').value) || 0;
        const unit = document.getElementById('unit').value;
        const total = currentPrice * quantity;

        document.getElementById('totalPrice').textContent = `${total.toFixed(0)} ₽`;

        // Обновляем отображение цены за единицу
        const priceElement = document.querySelector('.total-price .total-price-label');
        if (priceElement) {
            priceElement.textContent = `Общая стоимость (${unit === 'ton' ? 'за тонны' : 'за кубы'}):`;
        }
    }

    // Расчет стоимости для доставки
    function updateDeliveryPrice() {
        const currentPrice = parseFloat(document.getElementById('deliveryProduct').getAttribute('data-current-price'));
        const quantity = parseFloat(document.getElementById('deliveryQuantity').value) || 0;
        const unit = document.getElementById('deliveryUnit').value;
        const total = currentPrice * quantity;

        document.getElementById('deliveryProductPrice').textContent = `${total.toFixed(0)} ₽`;

        // Обновляем отображение цены за единицу
        const priceElement = document.querySelector('#deliveryModal .total-price .total-price-label');
        if (priceElement) {
            priceElement.textContent = `Стоимость товара (${unit === 'ton' ? 'за тонны' : 'за кубы'}):`;
        }
    }

    // Настройка валидации форм
    function setupFormValidation() {
        // Валидация формы заказа
        const orderForm = document.getElementById('orderForm');
        const customerName = document.getElementById('customerName');
        const customerPhone = document.getElementById('customerPhone');

        customerName.addEventListener('blur', validateName);
        customerPhone.addEventListener('blur', validatePhone);

        orderForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const isNameValid = validateName();
            const isPhoneValid = validatePhone();

            if (isNameValid && isPhoneValid) {
                submitOrderForm();
            }
        });

        // Валидация формы доставки
        const deliveryForm = document.getElementById('deliveryForm');
        const deliveryAddress = document.getElementById('deliveryAddress');
        const deliveryPhone = document.getElementById('deliveryPhone');

        deliveryAddress.addEventListener('blur', validateAddress);
        deliveryPhone.addEventListener('blur', validateDeliveryPhone);

        deliveryForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const isAddressValid = validateAddress();
            const isPhoneValid = validateDeliveryPhone();

            if (isAddressValid && isPhoneValid) {
                submitDeliveryForm();
            }
        });
    }

    // Функции валидации
    function validateName() {
        const name = document.getElementById('customerName').value.trim();
        const errorElement = document.getElementById('customerNameError');

        if (name.length < 2) {
            showError('customerName', 'ФИО должно содержать минимум 2 символа');
            return false;
        } else {
            hideError('customerName');
            return true;
        }
    }

    function validatePhone() {
        const phone = document.getElementById('customerPhone').value.trim();
        const errorElement = document.getElementById('customerPhoneError');
        const phoneRegex = /^(\+7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;

        if (!phoneRegex.test(phone)) {
            showError('customerPhone', 'Введите корректный номер телефона');
            return false;
        } else {
            hideError('customerPhone');
            return true;
        }
    }

    function validateAddress() {
        const address = document.getElementById('deliveryAddress').value.trim();
        const errorElement = document.getElementById('deliveryAddressError');

        if (address.length < 5) {
            showError('deliveryAddress', 'Адрес должен содержать минимум 5 символов');
            return false;
        } else {
            hideError('deliveryAddress');
            return true;
        }
    }

    function validateDeliveryPhone() {
        const phone = document.getElementById('deliveryPhone').value.trim();
        const errorElement = document.getElementById('deliveryPhoneError');
        const phoneRegex = /^(\+7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;

        if (!phoneRegex.test(phone)) {
            showError('deliveryPhone', 'Введите корректный номер телефона');
            return false;
        } else {
            hideError('deliveryPhone');
            return true;
        }
    }

    function showError(fieldId, message) {
        const field = document.getElementById(fieldId);
        const errorElement = document.getElementById(fieldId + 'Error');

        field.classList.add('error');
        field.classList.remove('success');
        errorElement.textContent = message;
        errorElement.style.display = 'block';
    }

    function hideError(fieldId) {
        const field = document.getElementById(fieldId);
        const errorElement = document.getElementById(fieldId + 'Error');

        field.classList.remove('error');
        field.classList.add('success');
        errorElement.style.display = 'none';
    }

    // Отправка форм
    function submitOrderForm() {
        const formData = new FormData(document.getElementById('orderForm'));
        const productName = document.getElementById('selectedProduct').value;
        const currentPrice = document.getElementById('selectedProduct').getAttribute('data-current-price');
        const currentUnit = document.getElementById('selectedProduct').getAttribute('data-current-unit');
        const priceTon = document.getElementById('selectedProduct').getAttribute('data-price-ton');
        const priceCube = document.getElementById('selectedProduct').getAttribute('data-price-cube');

        const quantity = formData.get('quantity') || document.getElementById('quantity').value;
        const unit = formData.get('unit') || document.getElementById('unit').value;
        const customerName = formData.get('customerName') || document.getElementById('customerName').value;
        const customerPhone = formData.get('customerPhone') || document.getElementById('customerPhone').value;
        const deliveryAddress = formData.get('deliveryAddress') || document.getElementById('deliveryAddress').value;
        const orderComment = formData.get('orderComment') || document.getElementById('orderComment').value;

        const totalPrice = currentPrice * quantity;

        const successDetails = document.getElementById('successDetails');
        successDetails.innerHTML = `
                <h4>Детали заказа:</h4>
                <p><strong>Товар:</strong> ${productName}</p>
                <p><strong>Цена за ${unit === 'ton' ? 'тонну' : 'куб'}:</strong> ${currentPrice} ₽/${unit === 'ton' ? 'т' : 'м³'}</p>
                <p><strong>Количество:</strong> ${quantity} ${unit === 'ton' ? 'тонн' : 'м³'}</p>
                <p><strong>Общая стоимость:</strong> ${totalPrice} ₽</p>
                <p><strong>Имя:</strong> ${customerName}</p>
                <p><strong>Телефон:</strong> ${customerPhone}</p>
                ${deliveryAddress ? `<p><strong>Адрес доставки:</strong> ${deliveryAddress}</p>` : ''}
                ${orderComment ? `<p><strong>Комментарий:</strong> ${orderComment}</p>` : ''}
            `;

        document.getElementById('orderModal').classList.remove('active');
        document.getElementById('successModal').classList.add('active');
    }

    function submitDeliveryForm() {
        const formData = new FormData(document.getElementById('deliveryForm'));
        const productName = document.getElementById('deliveryProduct').value;
        const currentPrice = document.getElementById('deliveryProduct').getAttribute('data-current-price');
        const currentUnit = document.getElementById('deliveryProduct').getAttribute('data-current-unit');
        const priceTon = document.getElementById('deliveryProduct').getAttribute('data-price-ton');
        const priceCube = document.getElementById('deliveryProduct').getAttribute('data-price-cube');

        const quantity = formData.get('deliveryQuantity') || document.getElementById('deliveryQuantity').value;
        const unit = formData.get('deliveryUnit') || document.getElementById('deliveryUnit').value;
        const deliveryAddress = formData.get('deliveryAddress') || document.getElementById('deliveryAddress').value;
        const deliveryPhone = formData.get('deliveryPhone') || document.getElementById('deliveryPhone').value;
        const deliveryDate = formData.get('deliveryDate') || document.getElementById('deliveryDate').value;

        const productCost = currentPrice * quantity;

        const successDetails = document.getElementById('successDeliveryDetails');
        successDetails.innerHTML = `
                <h4>Детали запроса:</h4>
                <p><strong>Товар:</strong> ${productName}</p>
                <p><strong>Цена товара (${unit === 'ton' ? 'за тонну' : 'за куб'}):</strong> ${currentPrice} ₽/${unit === 'ton' ? 'т' : 'м³'}</p>
                <p><strong>Количество:</strong> ${quantity} ${unit === 'ton' ? 'тонн' : 'м³'}</p>
                <p><strong>Стоимость товара:</strong> ${productCost} ₽</p>
                <p><strong>Адрес доставки:</strong> ${deliveryAddress}</p>
                <p><strong>Телефон:</strong> ${deliveryPhone}</p>
                ${deliveryDate ? `<p><strong>Желаемая дата:</strong> ${new Date(deliveryDate).toLocaleDateString('ru-RU')}</p>` : ''}
                <p><em>* Стоимость доставки будет рассчитана менеджером и сообщена дополнительно</em></p>
            `;

        document.getElementById('deliveryModal').classList.remove('active');
        document.getElementById('successDeliveryModal').classList.add('active');
    }

    // Функции фильтрации
    function applyFilters() {
        const selectedFeatures = getSelectedCheckboxValues('feature');
        const selectedSizes = getSelectedCheckboxValues('size');
        const selectedFractions = getSelectedCheckboxValues('fraction');
        const selectedApplications = getSelectedCheckboxValues('application');
        const priceMin = document.getElementById('priceMin').value;
        const priceMax = document.getElementById('priceMax').value;

        const filteredProducts = products.filter(product => {
            if (selectedFeatures.length > 0 && !selectedFeatures.some(feature => product.features.includes(feature))) {
                return false;
            }

            if (selectedSizes.length > 0 && !selectedSizes.some(size => product.features.includes(size))) {
                return false;
            }

            if (selectedFractions.length > 0 && !selectedFractions.some(fraction => product.features.includes(fraction))) {
                return false;
            }

            if (selectedApplications.length > 0 && !selectedApplications.some(app => product.applications.includes(app))) {
                return false;
            }

            const currentPrice = product.price[currentPriceType];
            if (priceMin && currentPrice < parseInt(priceMin)) {
                return false;
            }

            if (priceMax && currentPrice > parseInt(priceMax)) {
                return false;
            }

            return true;
        });

        renderProducts(filteredProducts);
        updateActiveFiltersDisplay(selectedFeatures, selectedSizes, selectedFractions, selectedApplications, priceMin, priceMax);
    }

    function updateActiveFiltersDisplay(features, sizes, fractions, applications, priceMin, priceMax) {
        const activeFiltersContainer = document.getElementById('activeFilters');
        const activeFilters = [];

        features.forEach(feature => {
            activeFilters.push({
                type: 'feature',
                value: feature,
                name: getFeatureName(feature)
            });
        });

        sizes.forEach(size => {
            activeFilters.push({
                type: 'size',
                value: size,
                name: getFeatureName(size)
            });
        });

        fractions.forEach(fraction => {
            activeFilters.push({
                type: 'fraction',
                value: fraction,
                name: getFeatureName(fraction)
            });
        });

        applications.forEach(app => {
            activeFilters.push({
                type: 'application',
                value: app,
                name: getFeatureName(app)
            });
        });

        if (priceMin || priceMax) {
            let priceText = 'Цена: ';
            if (priceMin) priceText += `от ${priceMin} `;
            if (priceMax) priceText += `до ${priceMax}`;
            priceText += ` (${currentPriceType === 'ton' ? 'за тонну' : 'за куб'})`;
            activeFilters.push({
                type: 'price',
                value: 'price',
                name: priceText
            });
        }

        activeFiltersContainer.innerHTML = '';

        if (activeFilters.length > 0) {
            activeFiltersContainer.style.display = 'flex';

            const title = document.createElement('span');
            title.textContent = 'Активные фильтры:';
            activeFiltersContainer.appendChild(title);

            activeFilters.forEach(filter => {
                const tag = document.createElement('div');
                tag.className = 'active-filter-tag';
                tag.innerHTML = `
                        ${filter.name}
                        <span class="remove" data-type="${filter.type}" data-value="${filter.value}">&times;</span>
                    `;
                activeFiltersContainer.appendChild(tag);
            });

            const clearAllBtn = document.createElement('button');
            clearAllBtn.className = 'clear-all-filters';
            clearAllBtn.id = 'clearAllFilters';
            clearAllBtn.textContent = 'Очистить все';
            clearAllBtn.addEventListener('click', resetFilters);
            activeFiltersContainer.appendChild(clearAllBtn);

            const removeButtons = activeFiltersContainer.querySelectorAll('.remove');
            removeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const type = this.getAttribute('data-type');
                    const value = this.getAttribute('data-value');
                    removeFilter(type, value);
                });
            });
        } else {
            activeFiltersContainer.style.display = 'none';
        }
    }

    function removeFilter(type, value) {
        if (type === 'price') {
            document.getElementById('priceMin').value = '';
            document.getElementById('priceMax').value = '';
        } else {
            const checkbox = document.querySelector(`input[name="${type}"][value="${value}"]`);
            if (checkbox) {
                checkbox.checked = false;
            }
        }
        applyFilters();
    }

    function resetFilters() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const priceInputs = document.querySelectorAll('.price-input');

        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });

        priceInputs.forEach(input => {
            input.value = '';
        });

        document.querySelector('input[name="priceType"][value="ton"]').checked = true;
        currentPriceType = 'ton';

        renderProducts(products);
        document.getElementById('activeFilters').style.display = 'none';
    }

    function getSelectedCheckboxValues(name) {
        const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
        return Array.from(checkboxes).map(checkbox => checkbox.value);
    }

    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
</script>
<script src="js/script.js"></script>
</body>
</html>
