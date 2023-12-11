<!-- navbar.blade.php -->

<nav class="navbar">
    <div class="logo">
        <h1>My Dashboard</h1>
    </div>
    <div class="navbar-items">
        @auth
            <span class="username">{{ auth()->user()->name }}</span>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ url('/login') }}">Login</a>
        @endauth
        <!-- Add more navbar items as needed -->
    </div>
</nav>
