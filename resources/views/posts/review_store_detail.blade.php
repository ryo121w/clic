<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet"  href="{{ asset('/css/review_create.css') }}">

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
                          <a>
                            <img src="{{ asset('/img/ダウンロード.png')}}" class="icon_img">
                            <p class="user_name">
                                {{ $user }}
                            </p>
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

        @foreach($store->reviews as $review)
          <div class='post'>
            <tr class="review_main">
                <td><a href="/posts/review/{{ $review->id }} " style="color:inherit;text-decoration:none;"  >{{ $review->title }}</a></td>
                <div class="reveiw">
                    <td>{{ $review->id }}</td>
                </div>
                <td>{{ $review->updated_at}}</td>
                <br>
                <div>
                  @if($review->stars===5)
                    <h3 class="star_five">{{ str_repeat('★ ', $review->stars) }}</h3>
                  @elseif($review->stars!==5)
                    <div>
                      <h3 class="star_five">{{ str_repeat('★ ', $review->stars) }}
                      {{ str_repeat('☆ ', (5-$review->stars)) }}</h3>
                    </div>
                  @endif
            </div>
                <br>
                <td class="body">{{ $review->body }}</td>
            </tr>
            <br>
            </div>
        @endforeach