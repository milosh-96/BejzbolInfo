<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
        <link rel="stylesheet" href="https://daigofuji.github.io/bbclub-font/css/bbclub-font.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

        <div class="ui seven stackable item menu inverted" style="border-radius:0">
                <div class="ui simple dropdown item">
                        AL East
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item"><i class="bbclub-nyy"></i> New York Yankees</a>
                          <a class="item"><i class="bbclub-bos"></i> Boston Red Sox</a>
                          <a class="item"><i class="bbclub-tb"></i> Tampa Bay Rays</a>
                          <a class="item"><i class="bbclub-tor"></i> Toronto Blue Jays</a>
                          <a class="item"><i class="bbclub-bal"></i> Baltimore Orioles</a>
                        </div>
                      </div>
                <div class="ui simple dropdown item">
                        AL Central
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item"><i class="bbclub-min"></i> Minesotta Twins</a>
                          <a class="item"><i class="bbclub-cle"></i> Cleveland Indians</a>
                          <a class="item"><i class="bbclub-kc"></i> Kansas City Royals</a>
                          <a class="item"><i class="bbclub-cws"></i> Chicago White Sox</a>
                          <a class="item"><i class="bbclub-det"></i> Detroit Tigers</a>
                        </div>
                      </div>
                <div class="ui simple dropdown item">
                        AL West
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item"><i class="bbclub-hou"></i> Houston Astros</a>
                          <a class="item"><i class="bbclub-oak"></i> Oakland Athletics</a>
                          <a class="item"><i class="bbclub-sea"></i> Seattle Mariners</a>
                          <a class="item"><i class="bbclub-laa"></i> Los Angeles Angels</a>
                          <a class="item"><i class="bbclub-tex"></i> Texas Rangers</a>
                        </div>
                      </div>

                      <div class="ui  simple dropdown item">
                            <i class="bbclub-mlb"></i>
                            <ul class="menu">
                                <a href="#" class="item">Pravila</a>
                                <a href="#" class="item">Terminologija</a>
                                <a href="#" class="item">Cilj igre</a>
                            </ul>
                      </div>
                <div class="ui simple dropdown item">
                        NL East
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item">New York Yankees</a>
                          <a class="item">Boston Red Sox</a>
                          <a class="item">Tampa Bay Rays</a>
                          <a class="item">Toronto Blue Jays</a>
                          <a class="item">Baltimore Orioles</a>
                        </div>
                      </div>
                <div class="ui simple dropdown item">
                        NL Central
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item">New York Yankees</a>
                          <a class="item">Boston Red Sox</a>
                          <a class="item">Tampa Bay Rays</a>
                          <a class="item">Toronto Blue Jays</a>
                          <a class="item">Baltimore Orioles</a>
                        </div>
                      </div>
                <div class="ui simple dropdown item">
                        NL West
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item">New York Yankees</a>
                          <a class="item">Boston Red Sox</a>
                          <a class="item">Tampa Bay Rays</a>
                          <a class="item">Toronto Blue Jays</a>
                          <a class="item">Baltimore Orioles</a>
                        </div>
                      </div>
              </div>
        <main class="ui container">
            @yield('content')
        </main>

        <footer class="ui container"></footer>


        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="/js/app.js" />
</body>
</html>
