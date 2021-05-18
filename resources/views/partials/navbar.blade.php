
<div class="container my-4">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link {{ !Route::currentRouteName() ? 'active' : '' }}" href="/">Welcome</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link {{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'services.index' ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'caracteristiques.index' ? 'active' : '' }}" href="{{ route('caracteristiques.index') }}">Caracteristiques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'portfolios.index' ? 'active' : '' }}" href="{{ route('portfolios.index') }}">Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'galeries.index' ? 'active' : '' }}" href="{{ route('galeries.index') }}">Galeries</a>
        </li>
    </ul>
</div>