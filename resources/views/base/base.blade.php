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

@include("includes.modal")
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
                    <div class="catalog-price">от 800 руб/т</div>
                    <a href="{{ route('catalog') }}?category=sand" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="{{ asset('img/items/ПГС.jpeg') }}" alt="ПГС">
                </div>
                <div class="catalog-content">
                    <h3>ПГС и ОПГС</h3>
                    <p>Песчано-гравийная смесь природного происхождения для дорожных работ и фундаментов</p>
                    <div class="catalog-price">от 900 руб/т</div>
                    <a href="{{ route('catalog') }}?category=mix" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="{{ asset('img/items/Щебень.jpg') }}" alt="Щебень">
                </div>
                <div class="catalog-content">
                    <h3>Щебень</h3>
                    <p>Гранитный и гравийный щебень различных фракций и марок прочности для бетона и строительства</p>
                    <div class="catalog-price">от 1900 руб/т</div>
                    <a href="{{ route('catalog') }}?category=stone" class="btn btn-primary">Подробнее</a>
                </div>
            </div>

            <div class="catalog-card">
                <div class="catalog-img">
                    <img src="{{ asset('img/items/Асфальтная крошка.jpg') }}" alt="Асфальтная крошка">
                </div>
                <div class="catalog-content">
                    <h3>Асфальтная крошка</h3>
                    <p>Вторичный материал для отсыпки дорог, парковок и временных покрытий</p>
                    <div class="catalog-price">от 1200 руб/т</div>
                    <a href="{{ route('catalog') }}?category=asphalt" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>

        <!-- Дополнительные материалы и информация о ценообразовании -->
        <div class="additional-info">
            <div class="additional-wrapper">
                <div class="price-note">
                    <i class="fas fa-calculator"></i>
                    <p>Цена рассчитывается индивидуально, зависит от объёма и логистики.<br>
                        <span class="pickup-small">При самовывозе — специальные условия, уточняйте у менеджера.</span></p>
                </div>

                <div class="additional-materials">
                    <h3>Дополнительные материалы</h3>
                    <div class="additional-grid">
                        <div class="additional-item">
                            <div class="additional-icon"><i class="fas fa-mountain"></i></div>
                            <h4>Грунт песчаный</h4>
                            <p>Цена по запросу</p>
                        </div>
                        <div class="additional-item">
                            <div class="additional-icon"><i class="fas fa-layer-group"></i></div>
                            <h4>Глина</h4>
                            <p>Цена по запросу</p>
                        </div>
                        <div class="additional-item">
                            <div class="additional-icon"><i class="fas fa-seedling"></i></div>
                            <h4>Плодородная земля</h4>
                            <p>Цена по запросу</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Транспортные логистические услуги -->
<section class="transport" id="transport">
    <div class="container">
        <div class="section-title">
            <h2>Транспортные логистические услуги</h2>
        </div>
        <div class="transport-content">
            <div class="transport-description">
                <p>Перевозим сыпучие материалы по Ижевску и Удмуртии. Собственный автопарк самосвалов гарантирует оперативность и надёжность. Индивидуальный подход к каждому клиенту.</p>
            </div>
            <div class="transport-features">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Самосвалы</h4>
                        <p>Современная техника различной грузоподъёмности</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-truck-arrow-right"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Перевозка сыпучих материалов</h4>
                        <p>Песок, щебень, ПГС, грунт и другие сыпучие грузы</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-road"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Доставка песка, ПГС, щебня</h4>
                        <p>Быстрая и аккуратная доставка до объекта</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Индивидуальный расчёт стоимости</h4>
                        <p>Учитываем объём, дальность и особенности заказа</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Точки самовывоза / Карьеры -->
<section class="pickup-points" id="pickup-points">
    <div class="container">
        <div class="section-title">
            <h2>Карьеры и точки самовывоза</h2>
            <p>Заберите материал непосредственно с карьера или со склада</p>
        </div>

        <div class="pickup-content">
            <div class="pickup-info animate">
                <div class="pickup-intro">
                    <h3>Месторождения и площадки</h3>
                    <p>Мы работаем напрямую с карьерами, поэтому вы можете забрать материалы по минимальным ценам. Для удобства на карте отмечены все точки с указанием типа добываемого материала.</p>
                </div>

                <div class="pickup-features">
                    <div class="feature-item">
                        <div class="feature-icon" style="background: #1e88e5;">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Инертные материалы</h4>
                            <p>Песок, ПГС, гравий — синие метки на карте</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" style="background: #ff6b00;">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Щебень разных фракций</h4>
                            <p>Гранитный и гравийный щебень — оранжевые метки</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Карта с точками (статичное фото + кликабельные метки) -->
            <div class="pickup-map animate">
                <div class="map-container" style="position: relative; display: inline-block; width: 100%;">
                    <!-- Фоновое изображение карты (замените на своё) -->
                    <img src="{{ asset('img/map.png') }}" alt="Схема расположения карьеров" style="width: 100%; height: auto; border-radius: 16px; box-shadow: var(--shadow); display: block;">

                    <!-- Волковское месторождение (речные) -->
                    <div class="map-point" data-point="volkovskoe" style="position: absolute; left: 57%; top: 60%;">
                        <div class="point-marker" style="background-color: #1e88e5;">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="point-tooltip">
                            <strong>Волковское месторождение (Карьер «Лагуна»)</strong><br>
                            <span style="color: #1e88e5;">Инертные материалы (песок, ПГС, гравий)</span>
                        </div>
                    </div>

                    <!-- Сидоровы горы (речные) -->
                    <div class="map-point" data-point="sidorovy" style="position: absolute; left: 57%; top: 43%;">
                        <div class="point-marker" style="background-color: #1e88e5;">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="point-tooltip">
                            <strong>Сидоровы горы</strong><br>
                            <span style="color: #1e88e5;">Инертные материалы (песок, ПГС, гравий)</span>
                        </div>
                    </div>

                    <!-- Яромаска (речные) -->
                    <div class="map-point" data-point="yaromaska" style="position: absolute; left: 57%; top: 70%;">
                        <div class="point-marker" style="background-color: #1e88e5;">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="point-tooltip">
                            <strong>Яромаска</strong><br>
                            <span style="color: #1e88e5;">Инертные материалы (песок, ПГС, гравий)</span>
                        </div>
                    </div>

                    <!-- Каракулино (речные) -->
                    <div class="map-point" data-point="karakulino" style="position: absolute; left: 60%; top: 95%;">
                        <div class="point-marker" style="background-color: #1e88e5;">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="point-tooltip">
                            <strong>Каракулино</strong><br>
                            <span style="color: #1e88e5;">Инертные материалы (песок, ПГС, гравий)</span>
                        </div>
                    </div>
                    <!-- Пойма 34 -->
                    <div class="map-point" data-point="poima34" style="position: absolute; left: 42%; top: 42%;">
                        <div class="point-marker" style="background-color: #ff6b00;">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="point-tooltip">
                            <strong>Пойма</strong><br>
                            <span style="color: #ff6b00;">Гранитный и гравийный щебень</span>
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
                    <p><a href="tel:+79991897098">+7 (999) 189-70-98</a></p>
                    <p class="small-text">Работаем круглосуточно</p>
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-map-marker-alt"></i> Адрес</h3>
                    <p>Удмуртская Республика, г Ижевск, Дерябина 3</p>
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-envelope"></i> Email</h3>
                    <p><a href="mailto:office@severstroy18.ru">office@severstroy18.ru</a></p>
                </div>

                <div class="contact-item">
                    <h3><i class="fas fa-share-alt"></i> Социальные сети</h3>
                    <p>Свяжитесь с нами через удобный для вас мессенджер</p>
                    <div class="contact-social">
                        <a href="#" title="ВКонтакте"><i class="fab fa-vk"></i></a>
                        <a href="#" title="Телеграм"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
            </div>

            <div class="map-container-contact">
                <div class="map-contact">
                    <div class="map-placeholder-contact">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A21012e5d30341c8d9c7dd3a3e4b1bb12345e95be85589465409fb38ce8889ccd&amp;source=constructor"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0;"
                            allowfullscreen="true"
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Подвал -->
@include("includes.footer")

<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/base.js') }}"></script>
</body>
</html>
