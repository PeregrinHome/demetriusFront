<section id="section_{{ $name }}" class="section__{{ $name }} position-relative overflow-hidden {{ $sectionClass ?? null }}">
    <div class="template__orientation-backward-out">
        <div class="template__orientation-backward-in section__{{ $name }}-background {{ $backgroundClass ?? null }}">
            <div class="template__orientation-backward-compensation">
                <div style="padding: 0 5%;">
                    @yield('section_content')
                </div>
            </div>
        </div>
    </div>
</section>
