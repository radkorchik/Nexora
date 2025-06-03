<footer class="footer">
    <a href="{{ route('home') }}"><img class="footer-logo" src="{{ asset('images/nexora_logo.svg') }}" alt="NEXORA Логотип" /></a>
    <div class="footer-content">
        <nav class="footer-column">
            <h3 class="footer-heading">РАЗДЕЛЫ</h3>
            <ul class="footer-links">
                <li><a href="#services" class="footer-link-first">Услуги</a></li>
                <li><a href="#about" class="footer-link">О нас</a></li>
                <li><a href="#portfolio" class="footer-link">Наши работы</a></li>
                <li><a href="#process" class="footer-link">Этапы сотрудничества</a></li>
                <li><a href="#faq" class="footer-link">Часто задаваемые вопросы</a></li>
            </ul>
        </nav>
        <div class="footer-column">
            <h3 class="footer-heading">КОНТАКТЫ</h3>
            <div class="footer-contact-container">
                <address class="footer-contact-info">
                    <p class="footer-link-first">Тел. <a href="tel:+79288888888">+7 (928) 888-88-88</a></p>
                    <p class="footer-link">e-mail: <a href="mailto:nexora@gmail.com">nexora@gmail.com</a></p>
                </address>
                <div class="footer-social-icons">
                    <a href="#" class="social-icon-link" aria-label="WK">
                        <img src="{{ asset('images/WK.svg') }}" alt="ВКонтакте" class="social-icon" />
                    </a>
                    <a href="#" class="social-icon-link" aria-label="TG">
                        <img src="{{ asset('images/TG.svg') }}" alt="Telegram" class="social-icon" />
                    </a>
                    <a href="#" class="social-icon-link" aria-label="WhatsApp">
                        <img src="{{ asset('images/WhatsApp.svg') }}" alt="WhatsApp" class="social-icon" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
