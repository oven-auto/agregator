<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Овен-Авто') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('images/fav.png')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div>
            @section('header')
                @include('main.header')
            @show

            @section('nav')
                @include('main.nav')
            @show
        </div>

        <main class="">
            @yield('content')
        </main>

        @section('map')
            <div class="container py-3">
                <div class="row">
                    <div class="col">
                       <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac2fca488e293632c690e765dab50541d78a6d14e9c4e42be850e1e9c2324a42f&amp;width=100%25&amp;height=349&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        @show

        <div class="footer container-fluid py-3" style="background: #333; color: #ddd;">
            <div class="container">
                <div class="row">
                    <div class="col-sx-12 col-sm-6">
                        2006-2021 © ООО «Фирма Овен-Авто». 
                    </div>

                    <div class="col">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(74019088, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/74019088" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</body>
</html>
