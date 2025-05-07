<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <button id="toggleSidebar" class="btn btn-dark top-0 start-0 m-3 z-3" style="z-index: 1050;">
            ☰
        </button>

        <div class="text-white">Welcome {{$username}}</div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"
                <li class="nav-item">
                    <li><a href="/profile" class="text-white d-block py-2">Profil</a></li>
                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
