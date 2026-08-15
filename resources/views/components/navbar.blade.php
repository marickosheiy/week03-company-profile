<nav>

    <a href="{{ url('/') }}" class="brand">
        <span class="brand-mark">V</span>
        <span class="brand-name">Velora</span>
        <span class="brand-digital">Digital</span>
    </a>

    <div class="nav-links">

        <a href="{{ url('/') }}"
           class="{{ request()->is('/') ? 'active' : '' }}">
            Home
        </a>

        <a href="{{ url('/about') }}"
           class="{{ request()->is('about') ? 'active' : '' }}">
            About
        </a>

        <a href="{{ url('/services') }}"
           class="{{ request()->is('services') ? 'active' : '' }}">
            Services
        </a>

        <a href="{{ url('/contact') }}"
           class="{{ request()->is('contact') ? 'active' : '' }}">
            Contact
        </a>

    </div>

</nav>