<nav class="navbar navbar-expand-lg navbar-style">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="home">
            <img src="assets\images\red-icon.png" alt="Logo" width="100" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center nav-items">
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('home') ? ' active' : '' }}" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('calendar') ? ' active' : '' }}" href="calendar">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('programs') ? ' active' : '' }}" href="programs">Programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('contact-us') ? ' active' : '' }}" href="contact-us">Contact
                        Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('#ff') ? ' active' : '' }}" href="#ff">Home</a>
                </li>
            </ul>
            <a href="{{ url('/login') }}">
                <button class="btn btn-light login-btn text-center me-2" type="button"><i
                        class="bi bi-box-arrow-in-right lgin-icon"></i> Login</button>
            </a>
            <button class="btn btn-light text-center me-5 lang-btn" type="button">Ar</button>
        </div>
    </div>
</nav>
