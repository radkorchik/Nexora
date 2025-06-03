@props(['id', 'title', 'subtitle', 'description', 'image', 'imageAlt', 'reverse' => false])

<section class="service-section" id="{{ $id }}">
    <div class="service-content{{ isset($reverse) && $reverse ? '-right' : '' }}">
        <h2 class="service-title{{ isset($reverse) && $reverse ? '-right' : '' }}">
            {!! $title !!}
        </h2>
        <p class="service-subtitle{{ isset($reverse) && $reverse ? '-right' : '' }}">
            {!! $subtitle !!}
        </p>
        <p class="service-description{{ isset($reverse) && $reverse ? '-right' : '' }}">
            {!! $description !!}
        </p>
    </div>
    <img src="{{ asset('images/' . $image) }}" alt="{{ $imageAlt }}" class="service-image{{ isset($reverse) && $reverse ? '-left' : '' }}">
</section>
