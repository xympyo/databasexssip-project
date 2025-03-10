<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <ul class="logo" style="list-style: none;">
            <li>
                <a href="{{ route('LandingIndex') }}">
                    <img src="{{ asset('simpan/logo.png') }}" width="30px" height="30px">
                </a>
            </li>
        </ul>
        <ul class="menu" style="list-style: none;">
            <li><a href="{{ route('LandingIndex') }}">Home</a></li>
            <li><a href="{{ route('restaurant') }}">Menu</a></li>
            <li><a href="{{ route('landing.team') }}">Team</a></li>
            <li><a href="{{ route('landing.about') }}">About us</a></li>
        </ul>
        <ul class="right" style="list-style: none;">
            <li>
                <button class="order-button" onclick="">Order Now</button>
            </li>
        </ul>
    </header>
</body>

</html>