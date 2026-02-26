
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

        /* Стиль для уведомления о доставке */
        .delivery-notice {
            background-color: #fff8e6;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 12px 15px;
            margin: 15px 0;
            font-size: 0.9rem;
            color: #8a6d3b;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .delivery-notice i {
            color: #f39c12;
            font-size: 1rem;
            margin-top: 2px;
        }

        .delivery-notice strong {
            color: #e67e22;
        }

        /* Стили для ошибок валидации */
        .error-message {
            color: #dc3545;
            font-size: 0.85rem;
            margin-top: 5px;
            display: none;
        }

        .form-control.error {
            border-color: #dc3545;
        }

        .form-control.success {
            border-color: #28a745;
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
            <button class="close-modal" id="closeOrderModalBtn">&times;</button>
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
                <div class="total-price-label">Стоимость материалов:</div>
                <div class="total-price-value" id="totalPrice">0 ₽</div>
            </div>

            <!-- Уведомление о доставке -->
            <div class="delivery-notice">
                <i class="fas fa-info-circle"></i>
                <div>
                    <strong>Обратите внимание:</strong> В рассчитанную стоимость <strong>не включена доставка</strong>.
                    Стоимость доставки рассчитывается индивидуально и зависит от адреса, объема заказа и выбранного транспорта.
                    Точную стоимость доставки сообщит менеджер при подтверждении заказа.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">ФИО *</label>
                <input type="text" class="form-control" id="customerName" required>
                <div class="error-message" id="customerNameError">Пожалуйста, введите ваше ФИО (минимум 2 символа)</div>
            </div>

            <div class="form-group">
                <label class="form-label">Телефон *</label>
                <input type="tel" class="form-control" id="customerPhone" required placeholder="+7 (XXX) XXX-XX-XX">
                <div class="error-message" id="customerPhoneError">Пожалуйста, введите корректный номер телефона</div>
            </div>

            <div class="form-group">
                <label class="form-label">Email *</label>
                <input type="email" class="form-control" id="customerEmail" required placeholder="example@mail.ru">
                <div class="error-message" id="customerEmailError">Пожалуйста, введите корректный email адрес</div>
            </div>

            <div class="form-group">
                <label class="form-label">Адрес / Место доставки</label>
                <input type="text" class="form-control" id="deliveryAddress" placeholder="Укажите адрес для расчета доставки">
                <div class="small-text">Наш менеджер рассчитает точную стоимость доставки до вашего адреса</div>
            </div>

            <div class="form-group">
                <label class="form-label">Комментарий к заказу</label>
                <textarea class="form-control" id="orderComment" rows="2" placeholder="Уточните детали заказа, удобное время доставки и т.д."></textarea>
            </div>

            <div class="form-submit">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Отправить заявку на расчет</button>
            </div>
        </form>
    </div>
</div>

<div class="modal" id="successModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Заявка успешно отправлена!</h3>
            <button class="close-modal" id="closeSuccessModalBtn">&times;</button>
        </div>
        <div class="success-modal">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <p class="success-message">Ваша заявка принята в обработку. В ближайшее время с вами свяжется наш менеджер для подтверждения деталей заказа и расчета точной стоимости с учетом доставки.</p>

            <div class="success-details" id="successDetails">
                <!-- Сюда будет вставлена информация о заказе -->
            </div>

            <div class="filter-buttons">
                <button class="btn btn-primary" id="continueShoppingBtn">Продолжить</button>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/product.js') }}"></script>
</body>
</html>
