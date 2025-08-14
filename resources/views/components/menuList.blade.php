<ul class="main-menu__list">

    <li @if (request()->is(['about'])) class="current" @endif>
        <a href="{{ route('about') }}">About</a>
    </li>
    <li @if (request()->is(['contact'])) class="current" @endif>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>
