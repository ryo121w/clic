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


    <main>
        <div class="main">
                @foreach($sex_mens as $sex)
                  <a
                   @if($sex->id === 1)
                    href="/posts/store/men/{{ $sex->id }}" style="color:inherit;text-decoration:none;"
                   @elseif ($sex->id == 2)
                    href="/posts/store/women/{{ $sex->id }}" style="color:inherit;text-decoration:none;"
                    @endif
                    ><p>{{ $sex->sex }}</p></a>
                @endforeach



                <div class="container">
                    <div class="swiper infinite-slider">
                        <div class="swiper-wrapper">
                            @foreach ($sex_men->stores as $store)
                            <div class="swiper-slide" href="">
                                <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                                <div class="swiper-title">
                                    <h2>{{ $store->prefecture->name }}</h2>
                                    <h1>{{ $store->name }}</h1>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper_pagination"></div>
                    </div>

                    <div class="main_container">
                        <section class="main_below">
                            <div class="main_search">
                                <ul>
                                    <li>
                                        <a href="/search/area" style="color:inherit;text-decoration:none;">
                                            <h3>エリアから探す</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/search/category" style="color:inherit;text-decoration:none;">
                                            <h3>ブランドから探す</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/search/rank" style="color:inherit;text-decoration:none;">
                                            <h3>ランキングから探す</h3>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
<div class="flixed_flex">
    <div class="cd-fixed-bg cd-bg-1">
        <div class="fixed_title">

        </div>
    </div>

    <div class="cd-fixed-bg cd-bg-2">
        <div class="fixed_title">

        </div>
    </div>

</div>


       <div class="main">
            <div class="main_rank">
                <h4>SELECTランキング</h4>
                <div class="swiper-below">
                    <div id="slid" class="swiper-pagination-below">
                        <img src="img/22.jpeg" alt="" width="300" height="200px">
                        <img src="img/kitasennju.jpeg" alt="" width="300" height="200px">
                        <img src="img/LUIK.jpeg" alt="" width="300" height="200px">
                        <img src="img/sings.jpeg" alt="" width="300" height="200px">
                        <a class="arrow next" id="right" href=""></a>
                        <a class="arrow back" id="left" href=""></a>
                    </div>
                    <div class="swiper-pagination_below"></div>
                </div>

                        <h4>USEDランキング</h4>
                        <div class="swiper-pagination-below">
                            <img src="img/22.jpeg" alt="" width="300" height="200px">
                            <img src="img/kitasennju.jpeg" alt="" width="300" height="200px">
                            <img src="img/LUIK.jpeg" alt="" width="300" height="200px">
                            <img src="img/sings.jpeg" alt="" width="300" height="200px">
                            <a class="arrow next" id="right" href=""></a>
                            <a class="arrow back" id="left" href=""></a>
                        </div>

                        <h4>ECランキング</h4>
                        <div class="swiper-pagination-below">
                            <img src="img/FERFETCH.png" alt="" width="300" height="200px">
                            <img src="img/GILT.png" alt="" width="300" height="200px">
                            <img src="img/YOOX.png" alt="" width="300" height="200px">
                            <img src="img/SSENSE.png" alt="" width="300" height="200px">
                            <a class="arrow next" id="right" href=""></a>
                            <a class="arrow back" id="left" href=""></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

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