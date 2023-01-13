<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/store.css')}}">

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
     <h1>全国のストア</h1>




    <main id="main">
      @foreach ($stores as $store)
        <div class="store_detail_flex">
          <div class="store_detail">
            <h2>{{ $store->name }}</h2>
            <p>{{ $store->phone }}</p>
            <a href="/prefecture/{{ $store->prefecture->id }}">{{ $store->prefecture->name }}</a>
            <a href="/store/format/{{ $store->store_format->id }}"><p>{{ $store->store_format->name }}</p></a>
          @foreach($store->brands as $brand)
         <a href="/brand/{{ $brand->id }}"><p>{{ $brand->name }}</p></a>
        @endforeach
        <!--<p>{{ $store->city }}</p>-->
        <!--<p>{{ $store->town }}</p>-->
        <!--<p>{{ $store->building }}</p>-->
        <p>{{ $store->body }}</p>
         <!--star-->
          <div class="rate-form">
            <input id="star5" type="radio" name="rate" value="5">
            <label for="star5">★</label>
            <input id="star4" type="radio" name="rate" value="4">
            <label for="star4">★</label>
            <input id="star3" type="radio" name="rate" value="3">
            <label for="star3">★</label>
            <input id="star2" type="radio" name="rate" value="2">
            <label for="star2">★</label>
            <input id="star1" type="radio" name="rate" value="1">
            <label for="star1">★</label>
          </div>
        </div>

        <div class="store_img">
            <img src="{{ $store->image_path }}" alt="画像が読み込めません。"/>
        </div>
          @endforeach
      </div>
    </main>

    <div>
        <a href="/show/search"><button>search</button></a>
    </div>

<a href="/"><p>return</p></a>

</body>


</html>