<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <a class="nav-link" href="#">{{ Auth::user()->firstName }} <span class="caret"></span></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <form class="nav-link" id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light">Sign Out</button>
            </form>
        </li>
    </ul>
</header>
