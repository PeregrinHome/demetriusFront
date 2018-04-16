<section id="section_{{ $name }}" class="section__{{ $name }} position-relative overflow-hidden {{ $sectionClass ?? null }}">
    <div class="template__orientation-direct-out">
        <div class="template__orientation-direct-in section__{{ $name }}-background {{ $backgroundClass ?? null }}">
            <div class="template__orientation-direct-compensation">
                @yield('section_content')
            </div>
        </div>
    </div>
</section>
