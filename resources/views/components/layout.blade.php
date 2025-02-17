<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My PCO' }}</title> {{-- Dynamic page title --}}

    @vite(['/css/app.css'])



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
{{-- Sidebar --}}
<input type="checkbox" id="check">
<div class="container-side-bar">
    <label for="check">
        <span class="fas fa-times" id="times"></span>
        <span class="fas fa-bars" id="bars"></span>
    </label>
    <div class="head">Useful Sites</div>
    <ol>
        <li><a href="https://oer.hz.nl/" target="_blank">Course and Examination Regulations</a></li>
        <li><a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754" target="_blank">Implementation Regulations</a></li>
        <li><a href="https://fs.myhz.nl/adfs/ls/" target="_blank">Learn Environment</a></li>
        <li><a href="https://glaze-donut-5a5.notion.site/" target="_blank">Assignment Specifications</a></li>
        <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">GitHub Environment</a></li>
    </ol>
</div>

{{-- Navbar --}}
<nav class="topnav">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
    <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'is-active' : '' }}">Profile</a>
    <a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'is-active' : '' }}">FAQ</a>

    <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'is-active' : '' }}">Blog</a>
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'is-active' : '' }}">Dashboard</a>
</nav>s

{{-- Main Content --}}
<main>
    {{ $slot }} {{-- This is where child components will be inserted --}}
</main>

{{-- Footer --}}
<footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.facebook.com/bechan.shiven.9?locale=nl_NL" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/shiven-bechan-256b53233/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://x.com/?lang=nl" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://github.com/Shifu-boop" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="footernav">
            <ul>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                <li><a href="{{ url('/profile') }}">Who Am I?</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
            </ul>
        </div>
    </div>
    <div class="footerbottom">
        <p>Copyright &copy; {{ date('Y') }}; Designed by SHIVEN</p>
    </div>
</footer>
</body>

</html>
