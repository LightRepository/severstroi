<footer>
    <div class="container">
        <div class="footer-main">
            <div class="footer-brand">
                <div class="footer-logo">
                    <img src="{{ asset('img/Logo.svg') }}" alt="СеверСтрой">
                    <p class="footer-about">Мы предлагаем широкий ассортимент инертных материалов высокого качества по доступным ценам с оперативной доставкой по всему региону.</p>

                </div>
                <div class="footer-social">
                    <a href="#" title="ВКонтакте"><i class="fab fa-vk"></i></a>
                    <a href="#" title="Телеграм"><i class="fab fa-telegram"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Навигация</h3>
                <ul>
                    <li><a href="{{ route('home') }}#transport">Транспортные услуги</a></li>
                    <li><a href="{{ route('home') }}#catalog">Материалы</a></li>
                    <li><a href="{{ route('home') }}#transport">Преимущества</a></li>
                    <li><a href="{{ route('home') }}#contacts">Контакты</a></li>
                </ul>
            </div>

            <div class="footer-services">
                <h3>Услуги</h3>
                <ul>
                    <li><a href="{{ route('catalog') }}?category=sand">Доставка песка</a></li>
                    <li><a href="{{ route('catalog') }}?category=stone">Доставка щебня</a></li>
                    <li><a href="{{ route('catalog') }}?category=mix">Доставка ПГС</a></li>
                    <li><a href="{{ route('catalog') }}?category=mix">Доставка ОПГС</a></li>
                    <li><a href="{{ route('catalog') }}?category=asphalt">Доставка асфальтной крошки</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Контакты</h3>
                <p><i class="fas fa-phone"></i><a href="tel:+79991897098">+7 (999) 189-70-98</a></p>
                <p><i class="fas fa-envelope"></i><a href="mailto:office@severstroy18.ru">office@severstroy18.ru</a></p>
                <p><i class="fas fa-map-marker-alt"></i>Удмуртская Республика, г Ижевск, Дерябина 3</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 СеверСтрой. Все права защищены.</p>
        </div>
    </div>
</footer>
