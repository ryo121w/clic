<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/store_detail.css')}}">

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

    <main id="main">
        <div class="position_flex">
           <nav>
                <ul>
                <li><a href="/" style="color:inherit;text-decoration:none;"><p>TOP</p></a></li>
                <li><p>></p></li>
                <li><a href="/posts/store" style="color:inherit;text-decoration:none;"><p>ストア一覧</p></a></li>
                <li><p>></p></li>
                <li><a style="color:inherit;text-decoration:none;"><p>{{$store->name}}</p></a></li>
                </ul>
            </nav>
        </div>
        <div class="main_functions">
            <div class="function_post">
            <a href="/posts/review_store/{{ $store->id }}" style="color:inherit;text-decoration:none;">
                <p>投稿</p>
            </a>
            </div>
            <div class="function_review">
            <a href="/posts/review_detail/{{ $store->id }}" style="color:inherit;text-decoration:none;">
                <p>評価</p>
            </a>
            </div>
            <div class="function_holder">
            <form method="POST" action="/posts/holder/{{ $store->id }}" >
             @csrf
            <div class="book">
                <input type="image" src="{{ asset('/img/book.gif')}}" border="0" width="15px" height="25px">
            </div>
            </div>
           </form>
        </div>
    <div class="store_detail">
        <div class="store_info">
            <h2>{{ $store->name }}</h2>
            @if($star===5)
                <h3 class="star_five">{{ str_repeat('★ ', $star) }}</h3>
                @elseif($star!==5)
                <div>
                    <h3 class="star_five">{{ str_repeat('★ ', $star) }}
                    {{ str_repeat('☆ ', (5-$star)) }}</h3>
                </div>
            @endif
            <h4>{{ $store->phone }}</h4>
            <p>{{ $store->body }}</p>
        </div>
        <div class="store_img">
            <img src="{{ $store->image_path }}">
        </div>
    </div>
    </main>

