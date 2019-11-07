<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOVELIVE!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/header.css">
    @yield('styles')
  </head>
  <body>
    <header class="header">
      <div class="headerContainerWrap">
        <div class="headerContainer">
          <div class="headerLogoContainer">
            <p class="headerLogo">
              <a href="/">HOME</a>
            </p>
          </div>
          <nav class="headerNavigationContainer">
            <ul class="headerNavigation">
              <li class="headerNavIndex">
                <a href="{{ route('group.index',['group_id' => 3]) }}">
                  <span class="fontEn">μ's'</span>
                  <span class="fontJa">ミューズ</span>
                </a>
              </li>
              <li class="headerNavNew">
                <a href="{{ route('group.index',['group_id' => 4]) }}">
                  <span class="fontEn">Aqours</span>
                  <span class="fontJa">アクア</span>
                </a>
              </li>
            </ul>
          </nav>

          <nav class="headerMediaNavigationContainer">
            <ul class="headerMediaNavigation">
              <li class="headerMediaTwitter"><a href="https://twitter.com/LoveLive_staff" target="_blank"><span class="fab fa-twitter fa-2x" style="color: #55acee;"></span></a></li>
              <li class="headerMediaYoutube"><a href="https://www.youtube.com/channel/UCTkyJbRhal4voLZxmdRSssQ" target="_blank"><span class="fab fa-youtube fa-2x" style="color: red;"></span></a><li>
            </ul>
          </nav>

        </div>
      </div>
      <div id="nav_toggle">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <nav class="headerToggleNavigation">
        <ul class="headerToggleNav">
          <li><a href="{{ route('group.index',['name' => 'lovelive']) }}">GROUP</a></li>
          <li><a href="{{ route('episode.index',['name' => 'lovelive','id' => '1']) }}">EPISODE</a></li>
          <li><a href="{{ route('character.index',['name' => 'lovelive','id' => '1']) }}">CHARACTER</a></li>
        </ul>
      </nav>
    </header>
    <main>
      @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/header.js"></script>
    <script type="text/javascript" src="/js/pageTop.js"></script>
    @yield('scripts')
  </body>
</html>
