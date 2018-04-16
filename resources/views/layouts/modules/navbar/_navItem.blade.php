<li class="nav-item {{ ( !empty($dropdowns) )? 'nav-item--dropdown' : '' }}  {{ $navItemClass ?? null }}">
    <a class="nav-link {{ $navLinkClass ?? null }}" href="{{ $href ?? null }}">{{ $name ?? null }}</a>
    @if( !empty($dropdowns) )
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @foreach ($dropdowns as $item)
            <a class="dropdown-item" href="{{ $item['href'] }}">{{ $item['title'] }}</a>
        @endforeach
    </div>
    @endif
</li>
