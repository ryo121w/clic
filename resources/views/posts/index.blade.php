<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./resources/views/css/style.css">

    <link rel="stylesheet" href="">
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
                        <a href="login" style="color:inherit;text-decoration:none;">
                            <p>ログイン</p>
                        </a>
                        <a href="profile">
                            <p>新規登録</p>
                        </a>
                        <a href="review">
                            <p>評価</p>
                        </a>
                        <a href="post">
                            <p>投稿</p>
                        </a>

                    </div>

                    <div class="header_holder">
                        <a href=""><img src="" alt="保存" width="20" height="20"></a>
                    </div>
                </section>
            </div>


            <ul class="header_menu">
                <li>
                    <a href="" style="color:inherit;text-decoration:none;">
                        <h1>SELECT</h1>
                    </a>
                </li>
                <li>
                    <a href="" style="color:inherit;text-decoration:none;">
                        <h1>USED</h1>
                    </a>
                </li>
                <li>
                    <a href="" style="color:inherit;text-decoration:none;">
                        <h1>EC</h1>
                    </a>
                </li>
            </ul>
        </header>
    </div>


    <main>
        <div>
            <div class="main_gender">
                <ul>
                    <li class="main_gender_all">
                        <a href="" style="color:inherit;text-decoration:none;">
                            <p>すべて</p>
                        </a>
                    </li>
                    <li class="main_gender_icon">
                        <a href="" style="color:inherit;text-decoration:none;"><img src="img/gender12_man.png" alt="メンズ"
                                width="30px" height="30px"></a>
                    </li>
                    <li class="main_gender_icon">
                        <a href="" style="color:inherit;text-decoration:none;"><img src="img/woman.jpeg" alt="ウィメンズ"
                                width="30px" height="30px"></a>
                    </li>
            </div>



            <body>
                <div class="container">
                    <div class="swiper infinite-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img
                                    src="img/CDG_AOYAMA_2019_SS_COMME_des_GARCONS_HOMME_PLUS_Installation_1.jpeg"
                                    alt="画像1" /></div>
                            <div class="swiper-slide"><img src="img/graf.jpeg" alt="" /></div>
                            <div class="swiper-slide"><img src="img/kolor.jpeg" alt="画像3" /></div>
                            <div class="swiper-slide"><img src="img/jilsander.jpeg" alt="画像4" /></div>
                            <div class="swiper-slide"><img src="img/LUIK.jpeg" alt="画像4" /></div>
                            <div class="swiper-slide"><img src="img/sings.jpeg" alt="画像4" /></div>
                            <div class="swiper-slide"><img src="img/kitasennju.jpeg" alt="画像4" /></div>
                        </div>

                        <div class="swiper_pagination"></div>
                    </div>

                    <div class="main_container">
                        <section class="main_below">
                            <div class="main_search">
                                <ul>
                                    <li>
                                        <h3>エリアから探す</h3>
                                    </li>
                                    <li>
                                        <h3>カテゴリーから探す</h3>
                                    </li>
                                    <li>
                                        <h3>ランキングから探す</h3>
                                    </li>
                                </ul>
                            </div>

                            <div class="main_rank">
                                <h4>SELECTランキング</h4>
                                <div class="swiper-below">
                                    <div id="slid" class="swiper-pagination-below">
                                        <img src="img/graf.jpeg" alt="" width="300" height="200px">
                                        <img src="img/kolor.jpeg" alt="" width="300" height="200px">
                                        <img src="img/jilsander.jpeg" alt="" width="300" height="200px">
                                        <img src="img/CDG_AOYAMA_2019_SS_COMME_des_GARCONS_HOMME_PLUS_Installation_1.jpeg"
                                            alt="" width="300" height="200px">
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
            <a href="">
                <p>店舗登録</p>
            </a>
        </div>
    </footer>
    </div>







    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./resources/views/js/index.js"></script>

</body>


</html>