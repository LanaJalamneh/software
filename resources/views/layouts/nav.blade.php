
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Welcome to the most extraordinary hotel in Boston Massachusetts ">
    <meta name="keywords" content="hotel,boston hotel,new england hotel">

    <link rel="stylesheet" href="/style.css">

    <title>Hotel BT | @yield('title')</title>
    <style>

    </style>
</head>
<body>
<header>
    <nav id="main-navbar">
        <div class="navbar-container">
            <h1 class="navbar-logo"><a href="/">HBT</a></h1>

            <ul>
                <li><a href="/" @if(Request::is('/')) active class="current" @endif>Home</a></li>
                <li><a href="/about" @if(Request::is('about')) active class="current" @endif>About</a></li>
                <li><a href="/contact"  @if(Request::is('contact')) active class="current" @endif>Feedback</a></li>
            </ul>
        </div>
    </nav>

</header>
</body>
</html>
