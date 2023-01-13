<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('/css/review.css') }}">
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



        </header>
    </div>

    <main id="main">
　　　　<div class="main_review_flex">
　　　　    <div>
            <h1>Rview</h1>
            </div>
            <div>
            <a href="posts/create" style="color:inherit;text-decoration:none;">
                <p>投稿する</p>
            </a>
            </div>
        </div>
            @foreach($reviews as $review)
            <div class='post'>
            <tr class="review_main">
                <td><a href="/posts/review/{{ $review->id }} ">{{ $review->title }}</a></td>
                <div class="reveiw">
                    <td>{{ $review->id }}</td>
                </div>
                <td>{{ $review->updated_at}}</td>
                <br>
                <td class="body">{{ $review->body }}</td>
            </tr>
            <br>
            </div>
            @endforeach

        <script src="https://unpkg.com/vue@next"></script>
<script>
    import StarRating from 'vue-star-rating'
    Vue.component('star-rating', StarRating);
    const app = new Vue({
    el: '#star',
    data: {
        rating: 0
    }
    });
</script>

    </main>