<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/shop_register.css')}}">

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
    </div>


        <main id="main">
            <h2 class="store_register">店舗登録フォーム</h2>
            <form action="/posts/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="store_register_flex">
                <div class="store_features">
                <h2>店舗名</h2>
                <input type="text" name="store[name]"  placeholder="店舗名"  class="store_name" size="30">

                <h2>店舗の特徴</h2>
                 <textarea name="store[body]" placeholder="私たちの店は、、、" class="store_textarea"></textarea>

                <h2>店舗イメージ</h2>
                <input type="file" name="image">

                <h2>店舗形態</h2>

                <select name="store[store_format_id]">
                    @foreach($storeformats as $storeformat)
                        <option value="{{ $storeformat->id }}">{{ $storeformat->name }}</option>
                    @endforeach
                </select>


                <h2>ターゲット</h2>
                @foreach($sexes as $sex)
                    <label>
                        <input type="checkbox" value="{{ $sex->id }}" name="sex">{{ $sex->sex }}</input>
                    </label>
                @endforeach
                </div>

        <div class="store_prefecture">
            <div class="address">
                <h2>住所</h2>
                <h3>都道府県</h3>
                <select name="store[prefecture_id]">
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                    @endforeach
                </select>

                <h2>ブランド登録</h1>
                @foreach($brands as $brand)
                    <label>
                        <input type="checkbox" value="{{ $brand->id }}" name="brands_array[]">{{ $brand->name }}</input>
                    </label>
                @endforeach
                <br>



         <!--        </select>-->
　　　　　　　　 <!--<h3>市</h3>-->
         <!--        <input type="text" name="store[city]" placeholder="・・市">-->

         <!--        <h3>町・番地</h3>-->
         <!--        <input type="text" name="store[town]"  placeholder="・・町">-->

         <!--        <h3>建物名</h3>-->
         <!--        <input type="text" name="store[building]"  placeholder="・・ビル・・階">-->
               </div>


                <h2>電話番号</h2>
                <input type="text" name="store[phone]"  placeholder="123-456-7890">
                <br>

                </div>
                </div>
                <div class="button021">
　　　　　　　　　<button type="submit">
	　　　　ストア登録
	　　　　　</button>
　　　　　　　　</div>
            </form>

        </main>





</body>


</html>
