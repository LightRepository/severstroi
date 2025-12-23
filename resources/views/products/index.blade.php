<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог материалов - СеверСтрой</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <style>
        .category-section {
            width: 100%;
            grid-column: 1 / -1;
            margin-top: 20px;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 10px;
        }

        .category-section:first-child {
            margin-top: 0;
        }

        .category-title {
            font-size: 1.8rem;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .category-title i {
            color: var(--accent-color);
        }

        /* Центрирование сетки */
        .products-grid {
            justify-content: center;
        }

        /* Одинаковая высота карточек */
        .product-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            padding: 20px;
        }

        .product-description {
            flex-grow: 1;
            margin-bottom: 15px;
        }

        /* Кнопка прижата к низу */
        .product-actions {
            margin-top: auto;
            display: flex;
            width: 100%;
            align-items: center;
        }

        .btn-buy {
            width: 100%;
            display: block;
            text-align: center;
        }

        /* Адаптив для мобильных */
        @media (max-width: 600px) {
            .products-grid {
                grid-template-columns: minmax(280px, 100%);
            }

            .category-title {
                font-size: 1.5rem;
            }

            .breadcrumbs {
                font-size: 0.9rem;
                padding: 15px 0;
            }

            .page-title {
                font-size: 1.8rem;
            }

            .page-subtitle {
                font-size: 1rem;
            }
        }

        .small-text {
            font-size: 0.85rem;
            color: var(--text-gray);
            margin-top: 5px;
            font-style: italic;
        }

        /* Стили для активного фильтра при переходе со страницы */
        .filter-highlight {
            animation: highlightFilter 1.5s ease;
            background-color: rgba(255, 107, 0, 0.1);
            border: 2px solid var(--accent-color);
        }

        @keyframes highlightFilter {
            0% { background-color: rgba(255, 107, 0, 0.3); }
            70% { background-color: rgba(255, 107, 0, 0.1); }
            100% { background-color: transparent; }
        }
    </style>
</head>
<body>
@include("includes.header")

<div class="breadcrumbs">
    <div class="container">
        <a href="{{ route('home') }}">Главная</a> >
        <span>Каталог материалов</span>
    </div>
</div>

<div class="container">
    <h1 class="page-title">Каталог строительных материалов</h1>
    <p class="page-subtitle">Песок, щебень, ПГС и другие материалы с доставкой по Ижевску и Удмуртии</p>

    <button class="mobile-filters-toggle" id="mobileFiltersToggle">
        <i class="fas fa-filter"></i>
        Фильтры
        <i class="fas fa-chevron-down"></i>
    </button>

    <div class="content-layout">
        <div class="filters-section" id="filtersSection">
            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-layer-group"></i> Категория</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="sand" id="filter-category-sand">
                        <span>Песок</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="mix" id="filter-category-mix">
                        <span>ПГС / ОПГС</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="stone" id="filter-category-stone">
                        <span>Щебень</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="asphalt" id="filter-category-asphalt">
                        <span>Асфальтная крошка</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-dumbbell"></i> Марка прочности</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="strength" value="M800">
                        <span>M800</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="strength" value="M1000">
                        <span>M1000</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="strength" value="M1400">
                        <span>M1400</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h3 class="filter-title"><i class="fas fa-ruler-combined"></i> Фракция / Модуль</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="1.2-1.5">
                        <span>1.2-1.5 (Песок)</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="1.5-2.2">
                        <span>1.5-2.2 (Песок)</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value=">2.2">
                        <span>свыше 2.2 (Песок)</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="0-4">
                        <span>0-4 (Отсев)</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="4-8">
                        <span>4-8 мм</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="5-20">
                        <span>5-20 мм</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="20-40">
                        <span>20-40 мм</span>
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="fraction" value="40-70">
                        <span>40-70 мм</span>
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
                <h3 class="filter-title"><i class="fas fa-ruble-sign"></i> Цена (за тонну)</h3>
                <div class="price-inputs">
                    <input type="number" class="price-input" id="priceMin" placeholder="От" min="0">
                    <input type="number" class="price-input" id="priceMax" placeholder="До" min="0">
                </div>
            </div>

            <div class="filter-buttons">
                <button class="btn btn-outline" id="resetFilters">Сбросить все фильтры</button>
            </div>
        </div>

        <div class="products-section">
            <div class="active-filters" id="activeFilters" style="display: none;">
                <span>Активные фильтры:</span>
                <button class="clear-all-filters" id="clearAllFilters">Очистить все</button>
            </div>

            <div class="products-grid" id="productsGrid">
                <!-- Товары будут загружены через JavaScript -->
            </div>
        </div>
    </div>
</div>

<!-- Модальные окна -->
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

            <div class="total-price">
                <div class="total-price-label">Общая стоимость:</div>
                <div class="total-price-value" id="totalPrice">0 ₽</div>
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

<div class="modal" id="successModal">
    <div class="modal-content">
        <div class="success-modal">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h3 class="success-title">Заказ успешно оформлен!</h3>
            <p class="success-message">Ваш заказ принят в обработку. В ближайшее время с вами свяжется наш менеджер для подтверждения деталей.</p>

            <div class="success-details" id="successDetails">
            </div>

            <div class="filter-buttons">
                <button class="btn btn-primary" id="closeSuccessModal">Продолжить покупки</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Данные товаров
    const products = [
        // --- ПЕСОК ---
        {
            id: 1,
            name: "Песок карьерный",
            description: "Универсальный строительный песок для различных работ.",
            price: { ton: 480, cube: 670 },
            image: "{{ asset('img/pesok/pesok2.png') }}",
            category: "sand",
            fraction: "fine",
            strength: null,
            badge: "Выгодно"
        },
        {
            id: 2,
            name: "Песок речной (1,2-1,5)",
            description: "Мелкий модуль крупности. Для штукатурки и отделочных работ.",
            price: { ton: 780, cube: 1090 },
            image: "{{ asset('img/pesok/pesok2.png') }}",
            category: "sand",
            fraction: "1.2-1.5",
            strength: null,
            badge: ""
        },
        {
            id: 3,
            name: "Песок речной (1,5-2,2)",
            description: "Средний модуль крупности. Идеален для стяжки и бетона.",
            price: { ton: 900, cube: 1260 },
            image: "{{ asset('img/pesok/pesok2.png') }}",
            category: "sand",
            fraction: "1.5-2.2",
            strength: null,
            badge: "Хит"
        },
        {
            id: 4,
            name: "Песок речной (свыше 2,2)",
            description: "Крупный модуль крупности. Для высокопрочных бетонов.",
            price: { ton: 1250, cube: 1750 },
            image: "{{ asset('img/pesok/pesok2.png') }}",
            category: "sand",
            fraction: ">2.2",
            strength: null,
            badge: ""
        },

        // --- ПГС / ОПГС ---
        {
            id: 5,
            name: "ПГС",
            description: "Песчано-гравийная смесь природная для дорожных работ.",
            price: { ton: 1000, cube: 1400 },
            image: "{{ asset('img/pgs/pgs1.png') }}",
            category: "mix",
            fraction: null,
            strength: null,
            badge: ""
        },
        {
            id: 6,
            name: "ОПГС (Гравий 40-60%)",
            description: "Обогащенная песчано-гравийная смесь для бетона.",
            price: { ton: 1200, cube: 1680 },
            image: "{{ asset('img/opgs/opgs.png') }}",
            category: "mix",
            fraction: null,
            strength: null,
            badge: "Популярный"
        },

        // --- ЩЕБЕНЬ М800 ---
        {
            id: 7,
            name: "Щебень М800 (20-40, 40-70)",
            description: "Гравийный щебень средней прочности для строительства.",
            price: { ton: 2100, cube: 2835 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "20-40",
            strength: "M800",
            badge: ""
        },
        {
            id: 8,
            name: "Щебень М800 (5-20)",
            description: "Гравийный щебень мелкой фракции для бетона.",
            price: { ton: 2250, cube: 3035 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "5-20",
            strength: "M800",
            badge: ""
        },
        {
            id: 9,
            name: "Щебень М800 (70-120)",
            description: "Крупный бутовый камень для ландшафтных работ.",
            price: { ton: 2250, cube: 3035 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "70-120",
            strength: "M800",
            badge: ""
        },

        // --- ЩЕБЕНЬ М1000 ---
        {
            id: 10,
            name: "Щебень М1000 (16-31, 31-63)",
            description: "Высокопрочный щебень для ответственных конструкций.",
            price: { ton: 2200, cube: 2970 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "20-40",
            strength: "M1000",
            badge: ""
        },
        {
            id: 11,
            name: "Щебень М1000 (4-8, 8-16)",
            description: "Еврофракции для мостовых и дорожных покрытий.",
            price: { ton: 2520, cube: 3400 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "5-20",
            strength: "M1000",
            badge: ""
        },
        {
            id: 12,
            name: "Отсев М1000 (0-4)",
            description: "Отсев дробления для тротуарных плит и блоков.",
            price: { ton: 1960, cube: 2650 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "0-4",
            strength: "M1000",
            badge: ""
        },

        // --- ЩЕБЕНЬ М1400 ---
        {
            id: 13,
            name: "Щебень М1400 (20-40, 40-70)",
            description: "Гранитный щебень максимальной прочности.",
            price: { ton: 2280, cube: 3080 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "20-40",
            strength: "M1400",
            badge: ""
        },
        {
            id: 14,
            name: "Щебень М1400 (5-20)",
            description: "Гранитный щебень мелкой фракции для высокопрочного бетона.",
            price: { ton: 2450, cube: 3300 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "5-20",
            strength: "M1400",
            badge: ""
        },
        {
            id: 15,
            name: "Щебень М1400 (16-31, 31-63)",
            description: "Гранитный щебень средней фракции.",
            price: { ton: 2480, cube: 3350 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "40-70",
            strength: "M1400",
            badge: ""
        },
        {
            id: 16,
            name: "Щебень М1400 (4-8, 8-16)",
            description: "Мелкий гранитный щебень для декоративных работ.",
            price: { ton: 2900, cube: 3900 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "4-8",
            strength: "M1400",
            badge: ""
        },
        {
            id: 17,
            name: "Отсев М1400 (0-4)",
            description: "Гранитный отсев для ландшафтного дизайна.",
            price: { ton: 2200, cube: 2970 },
            image: "{{ asset('img/sheben/sheben1000f31-63.png') }}",
            category: "stone",
            fraction: "0-4",
            strength: "M1400",
            badge: ""
        },

        // --- АСФАЛЬТ ---
        {
            id: 18,
            name: "Асфальтная крошка",
            description: "Для отсыпки дорог, парковок и временных покрытий.",
            price: { ton: 1900, cube: 2565 },
            image: "{{ asset('img/asfalt/asfalt1.png') }}",
            category: "asphalt",
            fraction: null,
            strength: null,
            badge: ""
        }
    ];

    // Текущий выбранный тип цены
    let currentPriceType = 'ton';

    // Получить параметры из URL
    function getUrlParams() {
        const params = new URLSearchParams(window.location.search);
        const urlParams = {};

        for (const [key, value] of params) {
            urlParams[key] = value;
        }

        return urlParams;
    }

    // Инициализация страницы с учетом параметров URL
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = getUrlParams();

        // Если есть параметр category, активируем соответствующий фильтр
        if (urlParams.category) {
            const filterCheckbox = document.getElementById(`filter-category-${urlParams.category}`);
            if (filterCheckbox) {
                filterCheckbox.checked = true;
                // Добавляем анимацию подсветки
                const filterGroup = filterCheckbox.closest('.filter-group');
                if (filterGroup) {
                    filterGroup.classList.add('filter-highlight');
                    setTimeout(() => {
                        filterGroup.classList.remove('filter-highlight');
                    }, 1500);
                }
            }
        }

        // Применяем фильтры (включая те, что из URL)
        applyFilters();
        setupEventListeners();
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

                if (filtersSection.classList.contains('mobile-active')) {
                    this.innerHTML = '<i class="fas fa-filter"></i> Скрыть фильтры <i class="fas fa-chevron-up"></i>';
                } else {
                    this.innerHTML = '<i class="fas fa-filter"></i> Фильтры <i class="fas fa-chevron-down"></i>';
                }
            });
        }
    }

    // Рендеринг товаров (С ГРУППИРОВКОЙ ПО КАТЕГОРИЯМ)
    function renderProducts(productsToRender) {
        const productsGrid = document.getElementById('productsGrid');
        productsGrid.innerHTML = '';

        if (productsToRender.length === 0) {
            productsGrid.innerHTML = `
                    <div class="no-products" style="grid-column: 1 / -1;">
                        <i class="fas fa-search"></i>
                        <h3>Товары не найдены</h3>
                        <p>Попробуйте изменить параметры фильтрации</p>
                    </div>
                `;
            return;
        }

        // Порядок отображения категорий
        const categoryOrder = ['sand', 'mix', 'stone', 'asphalt'];
        const categoryNames = {
            'sand': 'Песок строительный',
            'mix': 'ПГС и ОПГС',
            'stone': 'Щебень',
            'asphalt': 'Асфальтовая крошка'
        };

        // Группируем товары
        const groupedProducts = {};
        productsToRender.forEach(product => {
            if (!groupedProducts[product.category]) {
                groupedProducts[product.category] = [];
            }
            groupedProducts[product.category].push(product);
        });

        // Проходим по заданному порядку категорий
        categoryOrder.forEach(catKey => {
            if (groupedProducts[catKey] && groupedProducts[catKey].length > 0) {
                // 1. Добавляем заголовок категории
                const sectionHeader = document.createElement('div');
                sectionHeader.className = 'category-section';
                sectionHeader.innerHTML = `
                    <h2 class="category-title">
                        <i class="fas fa-chevron-right" style="font-size: 0.8em;"></i>
                        ${categoryNames[catKey]}
                    </h2>
                `;
                productsGrid.appendChild(sectionHeader);

                // 2. Добавляем товары этой категории
                groupedProducts[catKey].forEach(product => {
                    const productCard = document.createElement('div');
                    productCard.className = 'product-card';
                    productCard.setAttribute('data-id', product.id);

                    productCard.innerHTML = `
                        <div class="product-image">
                            <img src="${product.image}" alt="${product.name}" onerror="this.src='${"{{ asset('img/pesok/pesok2.png') }}"}'">
                            ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">${product.name}</h3>
                            <p class="product-description">${product.description}</p>

                            <div class="product-features">
                                ${product.fraction ? `<span class="feature-tag">${product.fraction}</span>` : ''}
                                ${product.strength ? `<span class="feature-tag">${product.strength}</span>` : ''}
                                <span class="feature-tag">${getCategoryName(product.category)}</span>
                            </div>

                            <div class="product-price">${product.price[currentPriceType]} ₽/${currentPriceType === 'ton' ? 'т' : 'м³'}</div>
                            <div class="product-actions">
                                <button class="btn btn-buy" data-product="${product.name}" data-price-ton="${product.price.ton}" data-price-cube="${product.price.cube}">Купить</button>
                            </div>
                        </div>
                    `;
                    productsGrid.appendChild(productCard);
                });
            }
        });

        setupModalEventListeners();
    }

    function getCategoryName(cat) {
        const map = {
            'sand': 'Песок',
            'mix': 'Смесь',
            'stone': 'Щебень',
            'asphalt': 'Асфальт'
        };
        return map[cat] || cat;
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

        setupModalEventListeners();
    }

    // Настройка обработчиков для модальных окон
    function setupModalEventListeners() {
        const buyButtons = document.querySelectorAll('.btn-buy');
        const orderModal = document.getElementById('orderModal');
        const closeButtons = document.querySelectorAll('.close-modal');

        buyButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product');
                const priceTon = this.getAttribute('data-price-ton');
                const priceCube = this.getAttribute('data-price-cube');

                document.getElementById('selectedProduct').value = productName;
                document.getElementById('selectedProduct').setAttribute('data-price-ton', priceTon);
                document.getElementById('selectedProduct').setAttribute('data-price-cube', priceCube);

                const initialUnit = document.getElementById('unit').value;
                const initialPrice = initialUnit === 'ton' ? priceTon : priceCube;
                document.getElementById('selectedProduct').setAttribute('data-current-price', initialPrice);
                document.getElementById('selectedProduct').setAttribute('data-current-unit', initialUnit);

                updateTotalPrice();
                orderModal.classList.add('active');
            });
        });

        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                orderModal.classList.remove('active');
            });
        });

        window.addEventListener('click', function(event) {
            if (event.target === orderModal) {
                orderModal.classList.remove('active');
            }
            if (event.target === document.getElementById('successModal')) {
                document.getElementById('successModal').classList.remove('active');
            }
        });

        // Обработчики для расчета стоимости
        const qtyInput = document.getElementById('quantity');
        if (!qtyInput.getAttribute('data-listener')) {
            qtyInput.addEventListener('input', updateTotalPrice);
            qtyInput.setAttribute('data-listener', 'true');
        }

        const unitSelect = document.getElementById('unit');
        if (!unitSelect.getAttribute('data-listener')) {
            unitSelect.addEventListener('change', function() {
                updateProductPrice('order');
                updateTotalPrice();
            });
            unitSelect.setAttribute('data-listener', 'true');
        }

        setupFormValidation();
    }

    function updateProductPrice(formType) {
        if (formType === 'order') {
            const unit = document.getElementById('unit').value;
            const priceTon = document.getElementById('selectedProduct').getAttribute('data-price-ton');
            const priceCube = document.getElementById('selectedProduct').getAttribute('data-price-cube');
            const currentPrice = unit === 'ton' ? priceTon : priceCube;

            document.getElementById('selectedProduct').setAttribute('data-current-price', currentPrice);
            document.getElementById('selectedProduct').setAttribute('data-current-unit', unit);
        }
    }

    function updateTotalPrice() {
        const currentPrice = parseFloat(document.getElementById('selectedProduct').getAttribute('data-current-price')) || 0;
        const quantity = parseFloat(document.getElementById('quantity').value) || 0;
        const unit = document.getElementById('unit').value;
        const total = currentPrice * quantity;

        document.getElementById('totalPrice').textContent = `${total.toFixed(0)} ₽`;
    }

    // Валидация форм
    function setupFormValidation() {
        const orderForm = document.getElementById('orderForm');
        const newOrderForm = orderForm.cloneNode(true);
        orderForm.parentNode.replaceChild(newOrderForm, orderForm);

        newOrderForm.addEventListener('submit', function(e) {
            e.preventDefault();
            if(document.getElementById('customerName').value && document.getElementById('customerPhone').value) {
                submitOrderForm();
            }
        });
    }

    // Отправка форм (имитация)
    function submitOrderForm() {
        document.getElementById('orderModal').classList.remove('active');
        document.getElementById('successModal').classList.add('active');

        const prod = document.getElementById('selectedProduct').value;
        const price = document.getElementById('totalPrice').textContent;
        document.getElementById('successDetails').innerHTML = `<p>Товар: ${prod}</p><p>Итого: ${price}</p>`;
    }

    // Функции фильтрации
    function applyFilters() {
        const selectedCategories = getSelectedCheckboxValues('category');
        const selectedStrengths = getSelectedCheckboxValues('strength');
        const selectedFractions = getSelectedCheckboxValues('fraction');
        const priceMin = document.getElementById('priceMin').value;
        const priceMax = document.getElementById('priceMax').value;

        const filteredProducts = products.filter(product => {
            if (selectedCategories.length > 0 && !selectedCategories.includes(product.category)) {
                return false;
            }

            if (selectedStrengths.length > 0) {
                if (!product.strength) return false;
                if (!selectedStrengths.includes(product.strength)) return false;
            }

            if (selectedFractions.length > 0) {
                if (!product.fraction) return false;
                if (!selectedFractions.some(f => product.fraction.includes(f) || f.includes(product.fraction))) {
                    return false;
                }
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
        updateActiveFiltersDisplay(selectedCategories, selectedStrengths, selectedFractions, priceMin, priceMax);
    }

    function updateActiveFiltersDisplay(cats, strengths, fractions, priceMin, priceMax) {
        const activeFiltersContainer = document.getElementById('activeFilters');
        const activeFilters = [];

        cats.forEach(val => activeFilters.push({type: 'category', value: val, name: getCategoryName(val)}));
        strengths.forEach(val => activeFilters.push({type: 'strength', value: val, name: val}));
        fractions.forEach(val => activeFilters.push({type: 'fraction', value: val, name: val}));

        if (priceMin || priceMax) {
            let priceText = '';
            if (priceMin) priceText += `от ${priceMin} `;
            if (priceMax) priceText += `до ${priceMax}`;
            activeFilters.push({ type: 'price', value: 'price', name: priceText });
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
                tag.innerHTML = `${filter.name} <span class="remove" data-type="${filter.type}" data-value="${filter.value}">&times;</span>`;
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
                    removeFilter(this.getAttribute('data-type'), this.getAttribute('data-value'));
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
            if (checkbox) checkbox.checked = false;
        }
        applyFilters();
    }

    function resetFilters() {
        document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
        document.querySelectorAll('.price-input').forEach(inp => inp.value = '');
        applyFilters();
    }

    function getSelectedCheckboxValues(name) {
        return Array.from(document.querySelectorAll(`input[name="${name}"]:checked`)).map(cb => cb.value);
    }

    function debounce(func, wait) {
        let timeout;
        return function(...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func(...args), wait);
        };
    }
</script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
