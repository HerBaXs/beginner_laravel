<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fuild">
        <a href="#" class="navbar-brand">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->getName() == "Home" ? "active" : ""}}" href="{{ route("Home") }}" aria-current="page">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->getName() == "about" ? "active" : ""}}" href="{{ route("about") }}" aria-current="page">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->getName() == "contact" ? "active" : ""}}" href="{{ route("contact") }}" aria-current="page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
