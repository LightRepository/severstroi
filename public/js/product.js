// product.js — скрипт для страницы каталога материалов
// Все функции безопасны, используют проверки существования элементов

// ==================== ДАННЫЕ ТОВАРОВ ====================
const products = [
    // --- ПЕСОК ---
    {
        id: 1,
        name: "Песок карьерный",
        description: "Универсальный строительный песок для различных работ.",
        price: { ton: 480, cube: 670 },
        image: "/img/pesok/pesok2.png",
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
        image: "/img/pesok/pesok2.png",
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
        image: "/img/pesok/pesok2.png",
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
        image: "/img/pesok/pesok2.png",
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
        image: "/img/pgs/pgs1.png",
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
        image: "/img/opgs/opgs.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/sheben/sheben1000f31-63.png",
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
        image: "/img/asfalt/asfalt1.png",
        category: "asphalt",
        fraction: null,
        strength: null,
        badge: ""
    }
];

// ==================== ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ ====================
let currentPriceType = 'ton';       // для фильтрации
let currentPriceTon = 0;            // цена за тонну выбранного товара
let currentPriceCube = 0;           // цена за куб выбранного товара
let currentProductPrice = 0;        // текущая цена за единицу (зависит от выбранной единицы)
let currentUnit = 'ton';            // выбранная единица в модальном окне ('ton' или 'cube')

// ==================== ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ ====================
function getUrlParams() {
    const params = new URLSearchParams(window.location.search);
    const urlParams = {};
    for (const [key, value] of params) {
        urlParams[key] = value;
    }
    return urlParams;
}

function debounce(func, wait) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func(...args), wait);
    };
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

function getSelectedCheckboxValues(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
    return Array.from(checkboxes).map(cb => cb.value);
}

// ==================== ФУНКЦИИ ДЛЯ МОДАЛЬНЫХ ОКОН ====================
function closeOrderModal() {
    const modal = document.getElementById('orderModal');
    if (modal) modal.classList.remove('active');
}

function closeSuccessModal() {
    const modal = document.getElementById('successModal');
    if (modal) modal.classList.remove('active');
}

// ==================== РЕНДЕРИНГ ТОВАРОВ ====================
function renderProducts(productsToRender) {
    const productsGrid = document.getElementById('productsGrid');
    if (!productsGrid) return;

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

    const categoryOrder = ['sand', 'mix', 'stone', 'asphalt'];
    const categoryNames = {
        'sand': 'Песок строительный',
        'mix': 'ПГС и ОПГС',
        'stone': 'Щебень',
        'asphalt': 'Асфальтовая крошка'
    };

    const groupedProducts = {};
    productsToRender.forEach(product => {
        if (!groupedProducts[product.category]) {
            groupedProducts[product.category] = [];
        }
        groupedProducts[product.category].push(product);
    });

    categoryOrder.forEach(catKey => {
        if (groupedProducts[catKey] && groupedProducts[catKey].length > 0) {
            const sectionHeader = document.createElement('div');
            sectionHeader.className = 'category-section';
            sectionHeader.innerHTML = `
                <h2 class="category-title">
                    <i class="fas fa-chevron-right" style="font-size: 0.8em;"></i>
                    ${categoryNames[catKey]}
                </h2>
            `;
            productsGrid.appendChild(sectionHeader);

            groupedProducts[catKey].forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.setAttribute('data-id', product.id);

                productCard.innerHTML = `
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}" onerror="this.src='/img/pesok/pesok2.png'">
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
                            <button class="btn btn-buy" data-id="${product.id}" data-name="${product.name}" data-price-ton="${product.price.ton}" data-price-cube="${product.price.cube}">Купить</button>
                        </div>
                    </div>
                `;
                productsGrid.appendChild(productCard);
            });
        }
    });
}

// ==================== ФИЛЬТРАЦИЯ ====================
function applyFilters() {
    const selectedCategories = getSelectedCheckboxValues('category');
    const selectedStrengths = getSelectedCheckboxValues('strength');
    const selectedFractions = getSelectedCheckboxValues('fraction');
    const priceMinInput = document.getElementById('priceMin');
    const priceMaxInput = document.getElementById('priceMax');
    const priceMin = priceMinInput ? priceMinInput.value : '';
    const priceMax = priceMaxInput ? priceMaxInput.value : '';

    const filteredProducts = products.filter(product => {
        if (selectedCategories.length > 0 && !selectedCategories.includes(product.category)) return false;
        if (selectedStrengths.length > 0) {
            if (!product.strength) return false;
            if (!selectedStrengths.includes(product.strength)) return false;
        }
        if (selectedFractions.length > 0) {
            if (!product.fraction) return false;
            if (!selectedFractions.some(f => product.fraction.includes(f) || f.includes(product.fraction))) return false;
        }
        const currentPrice = product.price[currentPriceType];
        if (priceMin && currentPrice < parseInt(priceMin)) return false;
        if (priceMax && currentPrice > parseInt(priceMax)) return false;
        return true;
    });

    renderProducts(filteredProducts);
    updateActiveFiltersDisplay(selectedCategories, selectedStrengths, selectedFractions, priceMin, priceMax);
}

function updateActiveFiltersDisplay(cats, strengths, fractions, priceMin, priceMax) {
    const activeFiltersContainer = document.getElementById('activeFilters');
    if (!activeFiltersContainer) return;

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
        const priceMin = document.getElementById('priceMin');
        const priceMax = document.getElementById('priceMax');
        if (priceMin) priceMin.value = '';
        if (priceMax) priceMax.value = '';
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

// ==================== ОБРАБОТЧИКИ СОБЫТИЙ ====================
function setupEventListeners() {
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', applyFilters);
    });

    document.querySelectorAll('input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.name === 'priceType') {
                currentPriceType = this.value;
                applyFilters();
            }
        });
    });

    document.querySelectorAll('.price-input').forEach(input => {
        input.addEventListener('input', debounce(applyFilters, 300));
    });

    const resetBtn = document.getElementById('resetFilters');
    if (resetBtn) resetBtn.addEventListener('click', resetFilters);
}

function setupMobileFilters() {
    const toggle = document.getElementById('mobileFiltersToggle');
    const filters = document.getElementById('filtersSection');
    if (toggle && filters) {
        toggle.addEventListener('click', function() {
            filters.classList.toggle('mobile-active');
            this.classList.toggle('active');
            this.innerHTML = filters.classList.contains('mobile-active')
                ? '<i class="fas fa-filter"></i> Скрыть фильтры <i class="fas fa-chevron-up"></i>'
                : '<i class="fas fa-filter"></i> Фильтры <i class="fas fa-chevron-down"></i>';
        });
    }
}

function setupGlobalEventListeners() {
    document.addEventListener('click', function(event) {
        if (event.target.closest('#closeOrderModalBtn')) {
            closeOrderModal();
            return;
        }
        if (event.target.closest('#closeSuccessModalBtn')) {
            closeSuccessModal();
            return;
        }
        if (event.target.closest('#continueShoppingBtn')) {
            closeSuccessModal();
            return;
        }
        if (event.target.classList.contains('modal')) {
            event.target.classList.remove('active');
            return;
        }
    });

    const qtyInput = document.getElementById('quantity');
    if (qtyInput) qtyInput.addEventListener('input', updateTotalPrice);

    const unitSelect = document.getElementById('unit');
    if (unitSelect) {
        unitSelect.addEventListener('change', function() {
            currentUnit = this.value;
            // Обновляем текущую цену в соответствии с выбранной единицей
            if (currentUnit === 'ton') {
                currentProductPrice = currentPriceTon;
            } else {
                currentProductPrice = currentPriceCube;
            }
            updateTotalPrice();
        });
    }
}

// ==================== РАБОТА С ФОРМОЙ ЗАКАЗА ====================
function resetOrderForm() {
    const form = document.getElementById('orderForm');
    if (!form) return;
    form.reset();
    const qty = document.getElementById('quantity');
    if (qty) qty.value = 1;
    const unit = document.getElementById('unit');
    if (unit) unit.value = 'ton';

    document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');
    document.querySelectorAll('.form-control').forEach(el => {
        el.classList.remove('error', 'success');
    });
}

function updateTotalPrice() {
    const qty = parseFloat(document.getElementById('quantity')?.value) || 0;
    const total = currentProductPrice * qty;
    const totalEl = document.getElementById('totalPrice');
    if (totalEl) totalEl.textContent = `${total.toFixed(0)} ₽`;
}

// ==================== ВАЛИДАЦИЯ ====================
function validateName(name) {
    return name && name.trim().length >= 2;
}

function validatePhone(phone) {
    const phoneRegex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
    return phone && phoneRegex.test(phone.replace(/\s+/g, ''));
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return email && emailRegex.test(email);
}

function validateField(field, validationFunction) {
    if (!field) return true;
    const errorElement = document.getElementById(field.id + 'Error');
    if (!errorElement) return true;

    const isValid = validationFunction(field.value);
    if (isValid) {
        field.classList.remove('error');
        field.classList.add('success');
        errorElement.style.display = 'none';
    } else {
        field.classList.remove('success');
        field.classList.add('error');
        errorElement.style.display = 'block';
    }
    return isValid;
}

function setupFormValidation() {
    const orderForm = document.getElementById('orderForm');
    if (!orderForm) return;

    const nameField = document.getElementById('customerName');
    const phoneField = document.getElementById('customerPhone');
    const emailField = document.getElementById('customerEmail');

    if (nameField) {
        nameField.addEventListener('input', function() {
            validateField(this, validateName);
        });
    }
    if (phoneField) {
        phoneField.addEventListener('input', function() {
            validateField(this, validatePhone);
        });
    }
    if (emailField) {
        emailField.addEventListener('input', function() {
            validateField(this, validateEmail);
        });
    }

    orderForm.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        if (nameField) isValid = validateField(nameField, validateName) && isValid;
        if (phoneField) isValid = validateField(phoneField, validatePhone) && isValid;
        if (emailField) isValid = validateField(emailField, validateEmail) && isValid;
        if (isValid) submitOrderForm();
    });
}

function submitOrderForm() {
    const productName = document.getElementById('selectedProduct')?.value || '';
    const quantity = document.getElementById('quantity')?.value || '1';
    const unit = document.getElementById('unit')?.value || 'ton';
    const totalPrice = document.getElementById('totalPrice')?.textContent || '0 ₽';
    const customerName = document.getElementById('customerName')?.value || '';
    const customerPhone = document.getElementById('customerPhone')?.value || '';
    const customerEmail = document.getElementById('customerEmail')?.value || '';
    const deliveryAddress = document.getElementById('deliveryAddress')?.value || '';
    const orderComment = document.getElementById('orderComment')?.value || '';

    closeOrderModal();

    const successModal = document.getElementById('successModal');
    if (successModal) successModal.classList.add('active');

    const successDetails = document.getElementById('successDetails');
    if (successDetails) {
        successDetails.innerHTML = `
            <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                <h4 style="margin-bottom: 10px; color: var(--primary-color);">Детали заявки:</h4>
                <p><strong>Товар:</strong> ${productName}</p>
                <p><strong>Количество:</strong> ${quantity} ${unit === 'ton' ? 'тонн' : 'м³'}</p>
                <p><strong>Стоимость материалов:</strong> ${totalPrice}</p>
                <p><strong>ФИО:</strong> ${customerName}</p>
                <p><strong>Телефон:</strong> ${customerPhone}</p>
                <p><strong>Email:</strong> ${customerEmail}</p>
                ${deliveryAddress ? `<p><strong>Адрес доставки:</strong> ${deliveryAddress}</p>` : ''}
                ${orderComment ? `<p><strong>Комментарий:</strong> ${orderComment}</p>` : ''}
                <p style="margin-top: 10px; color: var(--accent-color); font-weight: 600;">
                    *Стоимость доставки будет рассчитана менеджером и сообщена дополнительно
                </p>
            </div>
        `;
    }

    resetOrderForm();
}

// ==================== ОБРАБОТКА КНОПОК "КУПИТЬ" ====================
function setupBuyButtonsDelegation() {
    document.addEventListener('click', function(event) {
        const buyButton = event.target.closest('.btn-buy');
        if (!buyButton) return;

        event.preventDefault();
        const productName = buyButton.getAttribute('data-name');
        const priceTon = buyButton.getAttribute('data-price-ton');
        const priceCube = buyButton.getAttribute('data-price-cube');

        const selectedProduct = document.getElementById('selectedProduct');
        if (selectedProduct) selectedProduct.value = productName;

        // Сохраняем цены для текущего товара
        currentPriceTon = parseFloat(priceTon) || 0;
        currentPriceCube = parseFloat(priceCube) || 0;
        // По умолчанию показываем цену за тонну
        currentUnit = 'ton';
        currentProductPrice = currentPriceTon;

        // Сбрасываем форму и обновляем цену
        resetOrderForm();

        // Устанавливаем селект единиц в значение 'ton' (уже сделано в resetOrderForm)
        updateTotalPrice();

        const orderModal = document.getElementById('orderModal');
        if (orderModal) orderModal.classList.add('active');
    });
}

// ==================== ИНИЦИАЛИЗАЦИЯ ====================
document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, что мы на странице каталога
    if (!document.getElementById('productsGrid')) return;

    const urlParams = getUrlParams();

    if (urlParams.category) {
        const filterCheckbox = document.getElementById(`filter-category-${urlParams.category}`);
        if (filterCheckbox) {
            filterCheckbox.checked = true;
            const filterGroup = filterCheckbox.closest('.filter-group');
            if (filterGroup) {
                filterGroup.classList.add('filter-highlight');
                setTimeout(() => filterGroup.classList.remove('filter-highlight'), 1500);
            }
        }
    }

    applyFilters();
    setupEventListeners();
    setupMobileFilters();
    setupGlobalEventListeners();
    setupFormValidation();
    setupBuyButtonsDelegation();
});
