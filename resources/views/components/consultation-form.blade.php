<section class="consultation-section" id="consultation-form">
    <h2 class="consultation-title">ЗАПИШИСЬ НА КОНСУЛЬТАЦИЮ</h2>
    <p class="consultation-description">
        Получи бесплатную обратную связь и рекомендации <br />по своему сайту в кратчайшие сроки
    </p>
    
    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label class="name-input-container">
            <input type="text" name="name" placeholder="ФИО" class="form-input" required>
        </label>
        <label class="email-input-container">
            <input type="email" name="email" placeholder="E-mail" class="form-input" required>
        </label>
        <label class="phone-input-container">
            <input type="tel" name="phone" placeholder="Телефон" class="form-input" required>
        </label>
        <button type="submit" class="submit-button">
            <span class="submit-text">ЗАПИСАТЬСЯ</span>
        </button>
        <p class="privacy-notice">
            Нажимая «Записаться», вы соглашаетесь с условиями <br />"Пользовательского соглашения"
        </p>
    </form>
</section>
