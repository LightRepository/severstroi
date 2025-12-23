<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СеверСтрой - Инертные материалы с доставкой</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- Оверлей для мобильного меню -->
<div class="menu-overlay" id="menu-overlay"></div>

<!-- Шапка сайта -->
@include("includes.header")

<!-- Герой-секция -->
<section class="hero">
    <img class="hero-img" src="{{ asset('img/background.png') }}" alt="Строительные материалы">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Инертные материалы <br><span>с доставкой</span></h1>
            <p class="hero-subtitle">Широкий ассортимент инертных материалов высокого качества по доступным ценам с оперативной доставкой по Ижевску и Удмуртии</p>
            <div class="hero-buttons">
                <a href="{{ route('catalog') }}" class="btn btn-primary">Каталог материалов</a>
                <a href="#contacts" class="btn btn-outline">Связаться с нами</a>
            </div>
        </div>
    </div>
</section>

<!-- Каталог материалов -->
<section class="catalog" id="catalog">
    <div class="container">
        <div class="section-title">
            <h2>Инертные сыпучие материалы</h2>
            <p>Широкий выбор строительных материалов для любых задач</p>
        </div>
        <div class="catalog-grid">
            <div class="catalog-card">
                <div class="catalog-badge">Популярный</div>
                <div class="catalog-img">
                    <img src="{{ asset('img/pesok/pesok2.png') }}" alt="Песок строительный">
                </div>
                <div class="catalog-content">
                    <h3>Песок</h3>
                    <p>Карьерный и речной песок различных фракций для строительных и отделочных работ</p>
                    <div class="catalog-price">от 450 руб/т</div>
                    <a href="{{ route('catalog') }}?category=sand" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="{{ asset('img/pgs/pgs1.png') }}" alt="ПГС">
                </div>
                <div class="catalog-content">
                    <h3>ПГС</h3>
                    <p>Песчано-гравийная смесь природного происхождения для дорожных работ и фундаментов</p>
                    <div class="catalog-price">от 600 руб/т</div>
                    <a href="{{ route('catalog') }}?category=mix" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-badge">Хит продаж</div>
                <div class="catalog-img">
                    <img src="{{ asset('img/opgs/opgs.png') }}" alt="ОПГС">
                </div>
                <div class="catalog-content">
                    <h3>ОПГС</h3>
                    <p>Обогащенная песчано-гравийная смесь с повышенным содержанием гравия для бетона</p>
                    <div class="catalog-price">от 800 руб/т</div>
                    <a href="{{ route('catalog') }}?category=mix" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="{{ asset('img/sheben/sheben1000f31-63.png') }}" alt="Щебень">
                </div>
                <div class="catalog-content">
                    <h3>Щебень</h3>
                    <p>Гранитный и гравийный щебень различных фракций и марок прочности</p>
                    <div class="catalog-price">от 1200 руб/т</div>
                    <a href="{{ route('catalog') }}?category=stone" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="{{ asset('img/asfalt/asfalt1.png') }}" alt="Асфальтная крошка">
                </div>
                <div class="catalog-content">
                    <h3>Асфальтная крошка</h3>
                    <p>Вторичный материал для отсыпки дорог, парковок и временных покрытий</p>
                    <div class="catalog-price">от 1200 руб/т</div>
                    <a href="{{ route('catalog') }}?category=asphalt" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Точки самовывоза -->
<section class="pickup-points" id="pickup-points">
    <div class="container">
        <div class="section-title">
            <h2>Точки самовывоза</h2>
            <p>Заберите ваш заказ самостоятельно в удобном для вас месте</p>
        </div>

        <div class="pickup-content">
            <div class="pickup-info animate">
                <div class="pickup-intro">
                    <h3>Самовывоз материалов</h3>
                    <p>Мы предлагаем несколько удобных точек самовывоза по всей Удмуртской Республике. Вы можете самостоятельно забрать заказанные материалы в удобное для вас время.</p>
                </div>

                <div class="pickup-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Гибкий график</h4>
                            <p>Работаем с 8:00 до 20:00 без выходных</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Погрузка включена</h4>
                            <p>Бесплатная помощь с погрузкой материалов</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Удобное расположение</h4>
                            <p>Точки рядом с основными транспортными магистралями</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Скидка на самовывоз</h4>
                            <p>Экономьте до 10% при самостоятельном вывозе материалов</p>
                        </div>
                    </div>
                </div>

                <div class="pickup-instructions">
                    <h4>Как забрать заказ:</h4>
                    <ol>
                        <li>Оформите заказ на сайте или по телефону</li>
                        <li>Получите подтверждение и номер заказа</li>
                        <li>Приезжайте в выбранную точку самовывоза</li>
                        <li>Предъявите номер заказа сотруднику</li>
                        <li>Получите материалы с нашей помощью</li>
                    </ol>
                </div>
            </div>

            <div class="pickup-map animate">
                <div class="map-container">
                    <div class="map-visual">
                        <div class="map-placeholder">
                            <div class="map-points">
                                <div class="map-point active" style="top: 30%; left: 45%;" data-point="1">
                                    <div class="point-marker">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="point-info">
                                        <h5>Центральный склад</h5>
                                        <p>ул. Карла Маркса, 244</p>
                                    </div>
                                </div>

                                <div class="map-point" style="top: 60%; left: 35%;" data-point="2">
                                    <div class="point-marker">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="point-info">
                                        <h5>Склад "Восточный"</h5>
                                        <p>ул. 9 Января, 213</p>
                                    </div>
                                </div>

                                <div class="map-point" style="top: 40%; left: 60%;" data-point="3">
                                    <div class="point-marker">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="point-info">
                                        <h5>Склад "Западный"</h5>
                                        <p>ул. Автозаводская, 15</p>
                                    </div>
                                </div>
                            </div>
                            <div class="map-base">
                                <div class="region-outline"></div>
                            </div>
                        </div>
                    </div>

                    <div class="points-list">
                        <h4>Наши точки самовывоза:</h4>
                        <div class="point-item active" data-point="1">
                            <div class="point-header">
                                <h5>Центральный склад</h5>
                                <span class="point-badge">Основной</span>
                            </div>
                            <div class="point-details">
                                <p><i class="fas fa-map-marker-alt"></i> г. Ижевск, ул. Карла Маркса, 244</p>
                                <p><i class="fas fa-clock"></i> Пн-Вс: 8:00-20:00</p>
                                <p><i class="fas fa-phone"></i> +7 (XXX) XXX-XX-XX</p>
                            </div>
                        </div>

                        <div class="point-item" data-point="2">
                            <div class="point-header">
                                <h5>Склад "Восточный"</h5>
                            </div>
                            <div class="point-details">
                                <p><i class="fas fa-map-marker-alt"></i> г. Ижевск, ул. 9 Января, 213</p>
                                <p><i class="fas fa-clock"></i> Пн-Сб: 9:00-19:00</p>
                                <p><i class="fas fa-phone"></i> +7 (XXX) XXX-XX-XX</p>
                            </div>
                        </div>

                        <div class="point-item" data-point="3">
                            <div class="point-header">
                                <h5>Склад "Западный"</h5>
                            </div>
                            <div class="point-details">
                                <p><i class="fas fa-map-marker-alt"></i> г. Ижевск, ул. Автозаводская, 15</p>
                                <p><i class="fas fa-clock"></i> Пн-Вс: 8:00-20:00</p>
                                <p><i class="fas fa-phone"></i> +7 (XXX) XXX-XX-XX</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Контакты -->
<section class="contacts" id="contacts">
    <div class="container">
        <div class="section-title">
            <h2>Контакты</h2>
            <p>Свяжитесь с нами удобным для вас способом</p>
        </div>
        <div class="contacts-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <h3><i class="fas fa-phone"></i> Телефон</h3>
                    <p>+7 (XXX) XXX-XX-XX</p>
                    <p class="small-text">Работаем круглосуточно</p>
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-map-marker-alt"></i> Адрес</h3>
                    <p>Удмуртская Республика, г Ижевск, ул Карла Маркса, д. 244, офис 24</p>
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-envelope"></i> Email</h3>
                    <p>info@severstroy.ru</p>
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-share-alt"></i> Социальные сети</h3>
                    <p>Свяжитесь с нами через удобный для вас мессенджер</p>
                    <div class="contact-social">
                        <a href="#" title="ВКонтакте"><i class="fab fa-vk"></i></a>
                        <a href="#" title="Телеграм"><i class="fab fa-telegram"></i></a>
                        <a href="#" title="Вайбер"><i class="fab fa-viber"></i></a>
                        <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="map-container-contact">
                <div class="map-contact">
                    <div class="map-placeholder-contact">
                        <i class="fas fa-map-marked-alt"></i>
                        <p>Карта с расположением нашей компании</p>
                        <p style="font-size: 0.9rem; margin-top: 10px;">г. Ижевск, ул. Карла Маркса, 244</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Подвал -->
@include("includes.footer")

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
