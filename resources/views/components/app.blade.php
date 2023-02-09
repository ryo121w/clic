<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">


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
                        <a href="/" style="color:inherit;text-decoration:none;">
                        <p>CLIC</p>
                        </a>
                    </div>

                    <form action="/posts/search" method="GET">
                        <div class="header_search">
                        <div class="search_bar">
                        <input type="text" name="cond_title" size="40">
                        </div>
                        <div class="search_icon">
                        <input type="image" src="{{ asset('/img/虫眼鏡.svg')}}" border="0" width="15px" height="25px">
                        </div>
                        </div>
                    </form>
                </section>


                <section class="header_flex">
                    <div class="header_login">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button >ログアウト</button>
                        </form>
                        @endauth

                        <div class="register">
                            <a href="{{ route('register') }}" style="color:inherit;text-decoration:none;">
                                <p>新規登録</p>
                            </a>
                        </div>

                        <div class="book">
                            <a href="/posts/holder/{{ $user->id }}" style="color:inherit;text-decoration:none;">
                                <input type="image" src="{{ asset('/img/star_close_24.png')}}" border="0" width="10px" height="15px">
                            </a>
                        </div>

                    　 <div class="user_icon">
                            @auth
                            <a>
                                <img src="{{ asset('/img/ダウンロード.png')}}" class="icon_img" width="10px" heith="15px">
                                <p class="user_name">
                                    {{ $user->name}}
                                    {{ $user->email}}
                                </p>
                            </a>
    　                      @if($user->owner!=null)
                                <p class="owner_user">OWNER</p>
                            @endif
                            @if($user->owner=null)
                                <p class="owner_user">USER</p>
                            @endif
                            @endauth
                        </div>

                  </div>
                </section>
            </div>
            <div class="header_format" id="store">
                @foreach($store_formats as $store_format)
                <div class="store_format">
                <a href="/posts/format_store/{{ $store_format->id }}" style="color:inherit;text-decoration:none;"><h1>{{$store_format->name}}</h1></a>
                </div>
                @endforeach

            </div>
        </header>
    </div>




    {{ $slot }}

    <footer id="footer">
        <div class="footer_element">
            @if($user->owner = null)
                <div>
                    <a href="/posts/owner/register/{{ $user->id }}" style="color:inherit;text-decoration:none;">
                       <p>店舗会員登録</p>
                    </a>
                </div>
            @endif

            @if($user->id ===1)
            <div>
                <a href="/posts/owners" style="color:inherit;text-decoration:none;">
                    <p>店舗登録予定</p>
                </a>
            </div>
            @endif

            <div>
                <a href='/show/brand' style="color:inherit;text-decoration:none;">
                    <p>ブランド一覧</p>
                </a>
            </div>

            <div>
                <a href="/posts/store" style="color:inherit;text-decoration:none;">
                    <p>ストア一覧</p>
                </a>
            </div>

            <div class="footer_store_register">
                <a href="/register/store/{{ $user->id }}" style="color:inherit;text-decoration:none;">
                    <p>店舗登録</p>
                </a>
            </div>


            @if($user->owner = 1)
                <div>
                    <a href="/posts/store/edit/{{$user->id}}" style="color:inherit;text-decoration:none;">
                        <p>運営店舗編集</p>
                    </a>
                </div>
            @endif
        </div>
    </footer>
</div>









</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script src="{{ asset('/js/swiper.js') }}"></script>
<script src="{{ asset('/js/index.js') }}"></script>

</html>

