<nav>
    <!-- Logo -->
    <a href="{{ route('dashboard') }}">
        <x-application-logo class="nav__logo" />
    </a>

    <ul>
        <li>
            <a href="{{ route('books.index') }}">{{ __('Livros') }}</a>
        </li>
        <li>
            <x-dropdown name="{{ Auth::user()->name }}">
                <a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </x-dropdown>
        </li>
    </ul>
</nav>
