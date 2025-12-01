<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СеверСтрой - Инертные материалы с доставкой</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Оверлей для мобильного меню -->
<div class="menu-overlay" id="menu-overlay"></div>

<!-- Шапка сайта -->
@include("includes.header")

<!-- Герой-секция с видео -->
<section class="hero">
    <video autoplay muted loop class="hero-video">
        <!-- Вставьте ваше видео здесь -->
        <source src="img/инетр.mp4" type="video/mp4">
        Ваш браузер не поддерживает видео.
    </video>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Инертные материалы <span>с доставкой</span></h1>
            <p class="hero-subtitle">Широкий ассортимент инертных материалов высокого качества по доступным ценам с оперативной доставкой</p>
            <div class="hero-buttons">
                <a href="#catalog" class="btn btn-primary">Каталог материалов</a>
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
                    <i class="fas fa-mountain"></i>
                </div>
                <div class="catalog-content">
                    <h3>Песок</h3>
                    <p>Различные виды песка для строительных работ</p>
                    <div class="catalog-price">от 450 руб/т</div>
                    <a href="./product"><button class="btn btn-primary" >Подробнее</button></a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <i class="fas fa-gem"></i>
                </div>
                <div class="catalog-content">
                    <h3>ПГС</h3>
                    <p>Песчано-гравийная смесь для различных нужд</p>
                    <div class="catalog-price">от 600 руб/т</div>
                    <button class="btn btn-primary">Подробнее</button>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-badge">Хит продаж</div>
                <div class="catalog-img">
                    <i class="fas fa-cubes"></i>
                </div>
                <div class="catalog-content">
                    <h3>Щебень</h3>
                    <p>Щебень различных фракций и происхождения</p>
                    <div class="catalog-price">от 800 руб/т</div>
                    <button class="btn btn-primary">Подробнее</button>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <i class="fas fa-fire"></i>
                </div>
                <div class="catalog-content">
                    <h3>Известь</h3>
                    <p>Строительная известь для различных работ</p>
                    <div class="catalog-price">от 1200 руб/т</div>
                    <button class="btn btn-primary">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Преимущества -->
<section class="advantages" id="advantages">
    <div class="container">
        <div class="advantages-content">
            <div class="advantages-text">
                <h2>Почему выбирают нас</h2>
                <p>Мы предлагаем не просто материалы, а комплексное решение для ваших строительных задач с гарантией качества и оперативной доставкой.</p>
                <a href="#contacts" class="btn btn-accent">Связаться с нами</a>
            </div>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Быстрая доставка</h3>
                    <p>Доставка в день заказа собственным транспортом</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Гарантия качества</h3>
                    <p>Все материалы соответствуют ГОСТ и имеют сертификаты</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-ruble-sign"></i>
                    </div>
                    <h3>Доступные цены</h3>
                    <p>Прямые поставки от производителей без посредников</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Круглосуточная поддержка</h3>
                    <p>Консультации и прием заказов 24/7</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- О компании -->
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
                        <!-- Здесь будет карта с точками самовывоза -->
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
                                <!-- Здесь будет стилизованная карта региона -->
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
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-map-marker-alt"></i> Адрес</h3>
                    <p>Удмуртская Республика, г Ижевск, ул Карла Маркса, д. 244, офис 24</p>
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-clock"></i> Режим работы</h3>
                    <p>Пн-Пт: 9:00-18:00<br>Сб: 10:00-16:00<br>Вс: выходной</p>
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
                        [Карта с расположением компании]
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Подвал -->
@include("includes.footer")

<script src="js/script.js"></script>
</body>
</html>
