<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                        <a href="profile" style="color:inherit;text-decoration:none;">
                            <p>新規登録</p>
                        </a>
                        <a href="review" style="color:inherit;text-decoration:none;">
                            <p>評価</p>
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
            <h2>店舗登録フォーム</h2>
            <form action="/posts/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>店舗名</h2>
                <input type="text" name="store[name]"  placeholder="店舗名">

                <h2>店舗の特徴</h2>
                 <textarea name="store[body]" placeholder="私たちの店は、、、"></textarea>

                <h2>店舗イメージ</h2>
                <input type="file" name="store[image_id]">

            <div class="address">
                 <h2>住所</h2>
                 <h3>都道府県</h3>
                 <input type="text" name="store[prefecture]"  placeholder="・・県">

　　　　　　　　 <h3>市</h3>
                 <input type="text" name="store[city]"  placeholder="・・市">

                 <h3>町・番地</h3>
                 <input type="text" name="store[town]"  placeholder="・・町">

                 <h3>建物名</h3>
                 <input type="text" name="store[building]"  placeholder="・・ビル・・階">
           </div>


                <h2>電話番号</h2>
                <input type="text" name="store[phone]"  placeholder="123-456-7890">

                <button type="submit">登録</button>
            </form>

        </main>





</body>


</html>
