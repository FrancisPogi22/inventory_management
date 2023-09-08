<header class="header-section">
    <div class="header-content">
        <p></p>
        {{-- <p>{{ \Carbon\Carbon::now()->format('F j, Y, h:i A') }}</p> --}}
        <div class="header-dropdown">
            <button class="bi bi-caret-down-fill" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/img/profile-img.png') }}" alt="Profile">
            </button>
            <ul class="dropdown-menu">
                <li id="logoutBtn">
                    <a class="logout dropdown-item" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-in-left"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
