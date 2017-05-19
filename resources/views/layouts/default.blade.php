<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Home') - Kenneth's Blog</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layouts._header')
        <section class="container">
            @include('shared.messages')
            @yield('content')
        </section>
        @include('layouts._footer')

        @if (!Auth::user())
        @include('shared.signup')
        @include('shared.signin')
        @endif
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
