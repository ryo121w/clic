<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('/css/review_create.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="review_title">REVIEW投稿フォーム</h2>
            <form action='/posts/store' method="POST">
              @csrf
              <div class="title"><h2>Title</h2>
                  <input type="text" name="review[title]" placeholder="タイトル" size="40"/>
              </div>
              <div class="body">
                  <h2>Body</h2>
                  <div>
                    <textarea name="review[body]" placeholder="REVIEW" class="review_textarea"></textarea>
                  </div>
              </div>
            <div class="rate-form">
            <input id="star5" type="radio" name="review[stars]" value="5">
            <label for="star5">★</label>
            <input id="star4" type="radio" name="review[stars]" value="4">
            <label for="star4">★</label>
            <input id="star3" type="radio" name="review[stars]" value="3">
            <label for="star3">★</label>
            <input id="star2" type="radio" name="review[stars]" value="2">
            <label for="star2">★</label>
            <input id="star1" type="radio" name="review[stars]" value="1">
            <label for="star1">★</label>
            </div>

            <input type="submit" value="store" >
            </form>
      </div>
    </div>
    </main>
    </body>
</html>
