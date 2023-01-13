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
            <form method="POST" action="/store/brand">
                @csrf
            <h1>ブランド登録</h1>
            <input type="text" name="brand[name]" placeholder="ブランド名">
            <button type="submit">Store</button>
            </form>
        </main>





</body>


</html>
