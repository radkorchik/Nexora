<section class="cases-section">
    <h2 class="cases-title">КЕЙСЫ</h2>
    
    @foreach($cases as $index => $case)
        @if($index == 0)
            <h3 class="case-study-title">{{ $case['title'] }}</h3>
            <img class="case-study-image-1" src="{{ asset('images/' . $case['image']) }}" alt="Кейс {{ $case['id'] }}" />
        @elseif($index == 1)
            <p class="case-study-description">{!! nl2br(e($case['title'])) !!}</p>
            <img class="case-study-image-2" src="{{ asset('images/' . $case['image']) }}" alt="Кейс {{ $case['id'] }}" />
        @else
            <p class="case-study-title-3">{!! nl2br(e($case['title'])) !!}</p>
            <img class="case-study-image-3" src="{{ asset('images/' . $case['image']) }}" alt="Кейс {{ $case['id'] }}" />
        @endif
    @endforeach
    
    <button class="details-button">
        <span class="details-text">подробнее</span>
    </button>
</section>
