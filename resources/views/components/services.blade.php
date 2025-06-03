<h2 class="services-title">ЧТО МЫ УМЕЕМ / УСЛУГИ</h2>

<button class="next-button" aria-label="Следующий">
    <img src="{{ asset('images/next.svg') }}" alt="Следующий" />
</button>
<button class="prev-button" aria-label="Предыдущий">
    <img src="{{ asset('images/prev.svg') }}" alt="Предыдущий" />
</button>

<section class="services-section">
    @foreach($services as $service)
        @php
            $anchor = '';
            if (strpos($service['title'], 'Разработка сайтов') !== false) {
                $anchor = 'development';
            } elseif (strpos($service['title'], 'КОРПОРАТИВНЫЕ') !== false) {
                $anchor = 'corporate';
            } elseif (strpos($service['title'], 'ИНТЕРНЕТ-МАГАЗИНЫ') !== false) {
                $anchor = 'ecommerce';
            } elseif (strpos($service['title'], 'ЛЕНДИНГИ') !== false) {
                $anchor = 'landing';
            } elseif (strpos($service['title'], 'РЕДИЗАЙН') !== false) {
                $anchor = 'redesign';
            }
        @endphp
        <a href="{{ route('services.index') }}#{{ $anchor }}" class="service-card-link">
            <article class="{{ $service['class'] }}">
                @if(in_array($service['id'], [1, 2, 3, 5]))
                    <img class="service-card-background" src="{{ asset('images/service-card-' . ($service['id'] == 5 ? '1' : $service['id']) . '.svg') }}" alt="Фон услуги" />
                @endif
                <div class="service-card-content{{ in_array($service['id'], [2, 3, 4]) ? '-2' : '' }}">
                    <h3 class="service-title-{{ in_array($service['id'], [1, 5]) ? '1' : '2' }}">
                        {!! nl2br(e($service['title'])) !!}
                    </h3>
                    <p class="service-description-{{ in_array($service['id'], [1, 5]) ? '1' : '2' }}">
                        {{ $service['description'] }}
                    </p>
                </div>
            </article>
        </a>
    @endforeach
</section>
