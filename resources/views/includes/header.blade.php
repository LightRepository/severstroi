<header>
    <div class="container header-container">
        <div class="logo">
            <div class="logo-icon"><a href="{{ route('home') }}"><img src="{{ asset('img/Full Logo.svg') }}" alt="СеверСтрой"></a></div>
        </div>

        <nav id="main-nav">
            <ul>
                <li><a href="{{ route('home') }}#about">О компании</a></li>
                <li><a href="{{ route('product') }}">Каталог</a></li>
                <li><a href="{{ route('home') }}#pickup-points">Точки самовывоза</a></li>
                <li><a href="{{ route('home') }}#contacts">Контакты</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <div class="phone">
                <i class="fas fa-phone"></i> +7 (XXX) XXX-XX-XX
            </div>
            <div class="social-icons">
                <a href="#" title="ВКонтакте"><i class="fab fa-vk"></i></a>
                <a href="#" title="Телеграм"><i class="fab fa-telegram"></i></a>
                <a href="#" title="Вайбер"><i class="fab fa-viber"></i></a>
            </div>
            <button class="mobile-menu-btn" id="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
