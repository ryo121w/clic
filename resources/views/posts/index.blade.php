<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" >
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
                        <a href="{{ route('login') }}" style="color:inherit;text-decoration:none;">
                            <p>ログイン</p>
                        </a>
                        <a href="{{ route('register') }}" style="color:inherit;text-decoration:none;">
                            <p>新規登録</p>
                        </a>
                        <a href="review" style="color:inherit;text-decoration:none;">
                            <p>評価</p>
                        </a>

                        <a href="" style="color:inherit;text-decoration:none;">
                            <p>保存</p>
                        </a>
                    </div>


                </section>
            </div>



            <div class="header_format">
                <a>
                    <h1>SELECT</h1>
                </a>
                <a>
                    <h1>USED</h1>
                </a>
                <a>
                    <h1>EC</h1>
                </a>
            </div>

        </header>
    </div>


    <main id="main">
        <div>
            <div class="main_gender">
                <ul>
                    <li class="main_gender_all">
                        <a href="" style="color:inherit;text-decoration:none;">
                            <p>すべて</p>
                        </a>
                    </li>
                    <li class="main_gender_men">
                        <a href="" style="color:inherit;text-decoration:none;">
                            <p>メンズ</p>
                        </a>
                    </li>
                    <li class="main_gender_women">
                        <a href="" style="color:inherit;text-decoration:none;">
                            <p>ウィメンズ</p>
                        </a>
                    </li>
            </div>





            <body>
                <div class="container">
                    <div class="swiper infinite-slider">
                        <div class="swiper-wrapper">
                            @foreach ($stores as $store)
                                    <div class="swiper-slide" href="">
                                       <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                                       <p>{{ $store->name }}</p>
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
    </main>

    <footer id="footer">
        <div class="footer_store_register">
            <a href="/register/store" style="color:inherit;text-decoration:none;">
                <p>店舗登録</p>
            </a>
        </div>
        <a href='/register/brand' style="color:inherit;text-decoration:none;">
            <p>ブランド登録</p>
        </a>
        <a href='/show/brand' style="color:inherit;text-decoration:none;">
            <p>ブランド一覧</p>
        </a>
        <a href="/posts/store" style="color:inherit;text-decoration:none;">
            <p>Search</p>
        </a>
    </footer>
    </div>









</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="{{ asset('/js/swiper.js') }}"></script>


</html>