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
        <h1>セレクトショップ</h1>

        @foreach ($stores as $store)
        <div class="store_detail_flex">
          <div class="store_detail">
            <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;"><h2>{{ $store->name }}</h2></a>
            <p>{{ $store->phone }}</p>
            <a href="/prefecture/{{ $store->prefecture->id }}" style="color:inherit;text-decoration:none;">{{ $store->prefecture->name }}</a>
            <a href="/posts/format_store/{{ $store->store_format->id }}" style="color:inherit;text-decoration:none;"><p>{{ $store->store_format->name }}</p></a>


          @foreach($store->brands as $brand)
           <a href="/brand/{{ $brand->id }}" style="color:inherit;text-decoration:none;"><p>{{ $brand->name }}</p></a>
          @endforeach

          @foreach($store->sexes as $sex)
          <p>{{ $sex->sex }}</p>
          @endforeach

          <p>{{ $store->body }}</p>

        </div>

        <div class="store_img">
            <img src="{{ $store->image_path }}" alt="画像が読み込めません。"/>
        </div>
        @endforeach`
    </main>

<a href="/"><p>return</p></a>

</body>


</html>