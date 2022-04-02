<nav class="navbar navbar-expand-lg navbar-light bg-light" style="max-height:80px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            Wire Commerce
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openNav()">Choose Branch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <ul class="d-flex navbar-nav mb-2 mr-1 mb-lg-0 px-1">
                    @if (Auth::user())
                        <li class="nav-item mx-2 my-0 py-0">
                            <a href="#" class="nav-link my-0 py-0">
                                <i class="fa-solid fa-dolly fa-sm"></i>
                                 <span style="font-size: 10px;">
                                    Cart
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mx-2 my-0 py-0">
                            <a href="/logout" class="nav-link my-0 py-0" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span style="font-size: 10px;">
                                    Logout
                                </span>
                            </a>
                        </li>

                        <li class="nav-item mx-2 my-0 py-0">
                            <a href="{{route('dashboard')}}" class="nav-link my-0 py-0">
                                <i class="fa-solid fa-address-card"></i>
                                <span style="font-size: 10px;">
                                    Dashboard
                                </span>
                            </a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link my-0 py-0">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span style="font-size: 10px;">
                                    Login
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register')}}" class="nav-link my-0 py-0">
                                <i class="fa-solid fa-user-plus"></i>
                                <span style="font-size: 10px;">
                                    Register
                                </span>
                            </a>
                        </li>
                    @endif
                </ul>
            </form>
            @if (Auth::user())
                <form action="{{route('logout')}}" id="logout" method="POST">
                    @csrf
                </form>
            @endif
        </div>
    </div>
</nav>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>
