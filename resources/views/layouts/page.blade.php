<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="日本のジュエリーブランド sangai 公式サイト">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="/css/style.css" rel="stylesheet">
    <title>sangai</title>
</head>


<body>
    <div id="wrapper">
        <header>
            <h1 class="top_title"><a href="/"><img src="/img/logo.svg" alt="sangai logo"></a></h1>
            <nav class="global_nav">
                <ul class="nav_list">
                    <li class="nav_list_content"><a href="/about" class="a_default">ABOUT</a></li>
                    <li class="nav_list_content"><a href="/news" class="a_default">NEWS</a></li>
                    <li class="nav_list_content"><a href="/collections" class="a_default">COLLECTION</a></li>
                    <li class="nav_list_content"><a href="/bridal" class="a_default">BRIDAL</a></li>
                    <li class="nav_list_content"><a href="/shop" class="a_default">SHOP</a></li>
                    <li class="nav_list_content"><a href="/contact" class="a_default">CONTACT</a></li>
                </ul>
            </nav>
            <button id="menu">MENU</button>
        </header>

        <main>
            @yield('main')
        </main>

        <footer>
        </footer>
    </div>
</body>

</html>