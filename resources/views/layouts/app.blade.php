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
                          <a class="item"><i class="bbclub-bos-alt"></i> Boston Red Sox</a>
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
                            <a href="#" class="item"><i class="bbclub-atl"></i> Atlanta Braves</a>
                            <a href="#" class="item"><i class="bbclub-phi"></i> Philadelphia Phillies</a>
                            <a href="#" class="item"><i class="bbclub-wsh"></i> Washington Nationals</a>
                            <a href="#" class="item"><i class="bbclub-nym"></i> New York Mets</a>
                            <a href="#" class="item"><i class="bbclub-mia"></i> Miami Marlins</a>
                        </div>
                      </div>
                <div class="ui simple dropdown item">
                        NL Central
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a href="#" class="item"><i class="bbclub-chc"></i> Chicago Cubs</a>
                          <a href="#" class="item"><i class="bbclub-stl"></i> Saint Louis Cardinals</a>
                          <a href="#" class="item"><i class="bbclub-mil"></i> Milwaukee Brewers</a>
                          <a href="#" class="item"><i class="bbclub-pit"></i> Pittsburg Pirates</a>
                          <a href="#" class="item"><i class="bbclub-cin"></i> Cincinnati Reds</a>
                        </div>
                      </div>
                <div class="ui simple dropdown item">
                        NL West
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <a href="#" class="item"><i class="bbclub-lad"></i> Los Angeles Dodgers</a>
                          <a href="#" class="item"><i class="bbclub-ari"></i> Arizona Diamondbacks</a>
                          <a href="#" class="item"><i class="bbclub-sf"></i> San Francisco Giants</a>
                          <a href="#" class="item"><i class="bbclub-sd"></i> San Diego Padres</a>
                          <a href="#" class="item"><i class="bbclub-col"></i> Colorado Rockies</a>
                        </div>
                      </div>
              </div>
        <main class="ui container">
                <div class="container">
                        <div class="ui stackable grid">
                            <div class="four wide column">

                                    <div class="ui segment">
                                      <a href="/">
                                      <img src="https://bejzbol.info/wp-content/uploads/2019/02/logo-dark.png" width="100%" max-height="72px" alt="">

                                      </a>
                                    </div>

                                    

                                    <div class="ui vertical menu" style="width:100%">
                                            <a class="active teal item">
                                              Inbox
                                              <div class="ui teal left pointing label">1</div>
                                            </a>
                                            <a class="item">
                                              Spam
                                              <div class="ui label">51</div>
                                            </a>
                                            <a class="item">
                                              Updates
                                              <div class="ui label">1</div>
                                            </a>
                                            <div class="item">
                                              <div class="ui transparent icon input">
                                                <input type="text" placeholder="Search mail...">
                                                <i class="search icon"></i>
                                              </div>
                                            </div>
                                          </div>

                                          @if(auth()->user())
                                      <div class="ui vertical menu" style="width:100%">
                                        <a class="item" href="#">
                                        <img src="{{auth()->user()->gravatar()}}" class="ui avatar image"  alt="">
                                          {{auth()->user()->name}}
                                        </a>
                                        <a href="#" class="item"><i class="user icon"></i> View My Profile</a>
                                        <a href="#" class="item"><i class="sliders horizontal icon"></i> My Preferences</a>
                                        <a href="#" class="item"><i class="cog icon"></i> My Settings</a>
                                        <a href="#" class="item"><i class="sign-out icon"></i> Logout</a>
                                      </div>
                                    @endif


                            </div>
            @yield('content')
                        </div>
                </div>


        </main>

        <footer class="ui container"></footer>


        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="/js/app.js" />
</body>
</html>
