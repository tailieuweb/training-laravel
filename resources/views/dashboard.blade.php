<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="border: solid 1px black; margin: 40px 20px;">
    <div class="container">
        <a class="navbar-brand mr-auto" style="margin-left: 440px;" href="#">Home</a>
        <p style="margin-bottom: 5px;">|</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                    </li>
                    <p style="margin-top: 4.5px; margin-bottom: 0;">|</p>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.createUser') }}">Đăng kí</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Đăng xuất</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<p style="padding: 5px;text-align: center; border: solid 1px black; margin: 40px 20px;">Lập trình web @01/2024</p>
</body>
</html>