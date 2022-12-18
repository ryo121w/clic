<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
    </body>
</html>
