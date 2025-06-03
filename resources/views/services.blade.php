<x-layout>
    <x-slot name="title">NEXORA - Услуги</x-slot>
    
    <x-slot name="meta">
        <link rel="stylesheet" href="{{ asset('css/services-globals.css') }}">
        <link rel="stylesheet" href="{{ asset('css/services-style.css') }}">
    </x-slot>

    <div class="page-container">
        <main class="main-content">
            <!-- Шапка сайта с баннером услуг -->
            <header class="services-hero">
                <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/nexora_logo.svg') }}" alt="NEXORA Логотип" /></a>
                <img class="hero-background" src="{{ asset('images/services-hero-bg.png') }}" alt="Фоновое изображение услуг" />
                <div class="hero-overlay"></div>
                <h1 class="hero-title">УСЛУГИ</h1>
                <button class="menu-button" aria-label="Меню">
                    <img class="menu-icon" src="{{ asset('images/menu.svg') }}" alt="Меню" />
                </button>
            </header>
            
            <!-- Навигация -->
            <nav class="breadcrumbs">
                <a href="{{ route('home') }}" class="back-link">
                    <img class="back-arrow" src="{{ asset('images/arrow-back.svg') }}" alt="Стрелка назад" />
                    <span class="back-text">Вернуться назад</span>
                </a>
                <p class="breadcrumb-path">Главная / Услуги</p>
            </nav>
            
            <!-- Секция разработки сайтов под ключ -->
            <section id="development" class="service-section service-development">
                <div class="service-content">
                    <h2 class="service-title">Разработка сайтов <br />«ПОД КЛЮЧ»</h2>
                    <p class="service-subtitle">Создание уникальных сайтов, готовых к запуску <br /> и приносящих результат.</p>
                    <p class="service-description">
                        Мы берем на себя весь процесс: <br />от идеи и дизайна <br />до программирования и настройки. Ваш сайт будет
                        полностью готов <br />к использованию и адаптирован <br />под ваши бизнес-цели.
                    </p>
                </div>
                <img class="service-image" src="{{ asset('images/service-development.png') }}" alt="Разработка сайтов под ключ" />
            </section>
            
            <!-- Секция корпоративных сайтов -->
            <section id="corporate" class="service-section service-corporate">
                <div class="service-content service-content-right">
                    <h2 class="service-title service-title-right">КОРПОРАТИВНЫЕ САЙТЫ</h2>
                    <p class="service-subtitle service-subtitle-right">Современные сайты, которые подчеркивают статус и доверие к вашему бренду.</p>
                    <p class="service-description service-description-right">
                        Разрабатываем профессиональные корпоративные сайты, которые не только выглядят стильно, но и работают
                        эффективно, привлекая новых клиентов.
                    </p>
                </div>
                <img class="service-image service-image-left" src="{{ asset('images/service-corporate.png') }}" alt="Корпоративные сайты" />
            </section>
            
            <!-- Секция интернет-магазинов -->
            <section id="ecommerce" class="service-section service-ecommerce">
                <div class="service-content">
                    <h2 class="service-title">ИНТЕРНЕТ-МАГАЗИНЫ</h2>
                    <p class="service-subtitle">Полнофункциональные онлайн-магазины <br />для ваших продаж в интернете</p>
                    <p class="service-description">
                        Создаём удобные, безопасные и <br> адаптивные интернет-магазины с <br> интеграцией платёжных систем, <br> аналитикой и
                        удобным управлением.
                    </p>
                </div>
                <img class="service-image" src="{{ asset('images/service-ecommerce.png') }}" alt="Интернет-магазины" />
            </section>
            
            <!-- Секция лендингов -->
            <section id="landing" class="service-section service-landing">
                <div class="service-content service-content-right">
                    <h2 class="service-title service-title-right">ЛЕНДИНГИ</h2>
                    <p class="service-subtitle service-subtitle-right">Продающие страницы для эффективного привлечения клиентов.</p>
                    <p class="service-description service-description-right">
                        Создаём одностраничные сайты с ярким дизайном и высокой конверсией. Идеально для презентации услуг или запуска
                        рекламных кампаний.
                    </p>
                </div>
                <img class="service-image service-image-left" src="{{ asset('images/service-landing.png') }}" alt="Лендинги" />
            </section>
            
            <!-- Секция редизайна сайтов -->
            <section id="redesign" class="service-section service-redesign">
                <div class="service-content">
                    <h2 class="service-title">РЕДИЗАЙН САЙТОВ</h2>
                    <p class="service-subtitle">Обновление и улучшение ваших <br> текущих сайтов.</p>
                    <p class="service-description">
                        Освежим дизайн, повысим скорость <br> работы и улучшим пользовательский <br> опыт, чтобы сайт соответствовал <br> современным
                        стандартам.
                    </p>
                </div>
                <img class="service-image" src="{{ asset('images/service-redesign.png') }}" alt="Редизайн сайтов" />
            </section>

            <x-footer />
        </main>
    </div>

    <script>
        // Плавная прокрутка к якорю при загрузке страницы
        document.addEventListener('DOMContentLoaded', function() {
            if (window.location.hash) {
                const targetId = window.location.hash.substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    setTimeout(() => {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                }
            }
        });
    </script>
</x-layout>
