<style>
    .topbar {
        height: 80px;
    }
</style>

<nav class="topbar navbar navbar-expand-lg bg-primary text-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">메뉴</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/chat">채팅</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/streaming">스트리밍</a>
                </li>
            </ul>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-success">Login</a>
            @endauth
        </div>
    </div>
</nav>
