<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
   <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <title>CLIC</title>
</head>

<body>
    <div class="conteiner">
        <header id="header">
            <div class="header">
                <section class="header_flex">
                    <div class="header_logo">
                        <img src="img/CLIC_logo.gif" alt="" width="60px">
                    </div>

                    <div class="header_search">
                        <form action="" method="post">
                            <input class="header_search_logo" type="image" src="img/search-e1510450486325.png"
                                width="20" height="11" name="submit" value="search">
                            <input class="header_search_bar" type="text" name="serch" placeholder="       すべてのストアから探す"
                                size="50">
                        </form>
                    </div>
                </section>


                <section class="header_flex">
                    <div class="header_login">
                        <div>
                            <a href="{{ route('login') }}" style="color:inherit;text-decoration:none;">
                                <p>ログイン</p>
                            </a>
                        </div>

                        <div>
                            <a href="{{ route('register') }}" style="color:inherit;text-decoration:none;">
                                <p>新規登録</p>
                            </a>
                        </div>

                        <div>
                            <a href="{{route('reviews')}}" style="color:inherit;text-decoration:none;">
                                <p>評価</p>
                            </a>
                        </div>

                        <div>
                            <a href="" style="color:inherit;text-decoration:none;">
                                <p>保存</p>
                            </a>
                        </div>
                    </div>
                    　 <div class="user_icon">
                        @auth
                        <a>
                            <img src="{{ asset('/img/ダウンロード.png')}}" class="icon_img">
                            <p class="user_name">
                                {{ $user->name }}
                                {{ $user->email }}
                            </p>
                        </a>
                        @endauth
                    </div>
                </section>
            </div>
            <div class="header_format">
                <div class="header_title">
                    <a>
                        <h1>SELECT</h1>
                    </a>
                </div>
                <div class="header_title">
                    <a>
                        <h1>USED</h1>
                    </a>
                </div>
                <div class="header_title">
                    <a>
                        <h1>EC</h1>
                    </a>
                </div>
            </div>

        </header>
    </div>

    {{ $slot }}

        <footer id="footer">
        <div class="footer_element">
            <div class="footer_store_register">
                <a href="/register/store" style="color:inherit;text-decoration:none;">
                    <p>店舗登録</p>
                </a>
            </div>

            <div>
                <a href='/register/brand' style="color:inherit;text-decoration:none;">
                    <p>ブランド登録</p>
                </a>
            </div>

            <div>
                <a href='/show/brand' style="color:inherit;text-decoration:none;">
                    <p>ブランド一覧</p>
                </a>
            </div>

            <div>
                <a href="/posts/store" style="color:inherit;text-decoration:none;">
                    <p>ストア一覧</p>
                </a>
            </div>
        </div>
    </footer>
    </div>









</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script src="{{ asset('/js/swiper.js') }}"></script>
<script src="{{ asset('/js/index.js') }}"></script>

</html>

