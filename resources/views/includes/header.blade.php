<header>
    <div class="container header-container">
        <div class="logo">
            <div class="logo-icon"><a href="{{ route('home') }}"><img src="{{ asset('img/Full Logo.svg') }}" alt="СеверСтрой"></a></div>
        </div>

        <nav id="main-nav">
            <ul>
                <li><a href="{{ route('home') }}#transport">Транспортные услуги</a></li>
                <li><a href="{{ route('product') }}">Каталог</a></li>
                <li><a href="{{ route('home') }}#pickup-points">Точки самовывоза</a></li>
                <li><a href="{{ route('home') }}#contacts">Контакты</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <div class="phone">
                <i class="fas fa-phone"></i><a href="tel:+79991897098">+7 (999) 189-70-98</a>
            </div>
            <div class="social-icons">
                <a href="https://t.me/+79128566756" target="_blank" rel="noopener noreferrer" title="Телеграм"><img src="{{ asset('img/icon/telegram_black.svg') }}" alt="Телеграм"></a>
                <a href="https://max.ru/u/f9LHodD0cOInb7XYQbGqykTbZ1bAlogSCK3sbgHG7qgb2FIKKdlIzjNpn70" target="_blank" rel="noopener noreferrer" title="Max"><img src="{{ asset('img/icon/Max_logo_black.svg') }}" alt="Max"></a>
            </div>
            <button class="mobile-menu-btn" id="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
