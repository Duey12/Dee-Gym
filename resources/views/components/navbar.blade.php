<header class="fs-5" id="nav-header">
    <nav class="navbar navbar-expand-lg navbar-light  bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white fs-3" href="/">Dee Sweat Camp</a>

            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                <ul class="navbar-nav  mb-2 mb-lg-0 mx-5">
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="{{Route('about')}}">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="{{Route('price')}}">Prices</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white small-auth" href="{{Route('canvas-ui')}}">Blogs</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="{{Route('contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>