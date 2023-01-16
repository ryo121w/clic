<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('/css/review_detail.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css')}}">

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
    <main id="main">
        <div class="review_detail_flex">
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
          <h3>{{ $review->title }}</h3>
        </div>

      <p>{{ $users }}</p>
      <span>作成日:{{ $review->created_at }}</span>
      <span>更新日:{{ $review->updated_at }}</span>
      <p>{{ $review->body }}</p>


      <button type="button" onclick="location.href='/posts/review/edit/{{ $review->id }}'">EDIT</button>
      <form method="POST" action="{{ route('delete', $review->id) }}" onSubmit="returncheckDelete()">
        @csrf
       <button type="submit" onclick=>DELETE</button>
      </form>
</div>
      <script>
      function checkDelete(){
      if(window.confirm('削除してよろしいですか？')){
         return true;
         } else {
         return false;
                }
        }
      </script>
     </main>

    </body>
</html>
