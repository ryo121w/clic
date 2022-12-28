<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <style>body {
    margin: 0;
}

ul {
    list-style: none;
}

.container {
background-color: rgba(240, 238, 238, 0.884);
background-size: 100%;
padding-top: 10px;
height: 100px;
}

/* ---header--- */
#header {
max-width: 980px;
margin: 0 auto;
}

.header {
max-width: 980px;
margin: 0 auto;
display: flex;
justify-content: space-between;
}

.header_flex {
display: flex;
height: 30px;
margin-left: 40px;
}

.header_function_flex ul {
display: flex;
height: 30px;
margin-left: 40px;
margin-top: 0px;
margin-bottom: 0px;
}

.header_function_flex ul li {
margin-right: 20px;

}

.header_function_flex ul li p{
margin: 4px;
font-size: 15px;
font-weight: 900;
}
/* ---header_logo--- */

.header_logo {
margin-right: 15px;
margin-top: 5px;
.review_main {
margin-top:50px
}
.header_search {
position: relative;
display: flex;
}

.header_search_bar {
border: none;
border-radius: 1px;
width: 450px;
height: 15px;
}

.header_search_logo {
padding-left: 10px;
position: absolute;
top: 9px;
}

.header_search input[type="text"] {
flex-grow: 1;
padding: 8px;
border: none;
border-radius: 7px;
}

.header_search input:focus {
outline: 0;
border: none;
}

/* ---header_menu--- */
.header_menu {
display: flex;
justify-content: space-between;
align-items: inherit;
margin-top: 30px;
height: 30px;
}

.header_menu li {
margin-right: 30px;
margin-left: 30px;
padding-right: 100px;
padding-left: 100px;
padding-bottom: 40px;
border-bottom: 2px solid black;
}

.header_menu h1 {
margin: 0;
padding: 10px;
font-size: 15px;

}

/*---main----*/
.post {
max-width: 600px;
width: 100%;
margin: 0 auto;
}
.review {
display:flex;
}
</style>
<link rel="stylesheet" href="">
<title>CLIC</title>
</head>
＠評価一覧画面

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
            </ul>

            <a href="posts/create" style="color:inherit;text-decoration:none;">
                <p>投稿</p>
            </a>
        </header>
    </div>

    <main>

        <div class='post'>
            <h1>Rview</h1>
            @foreach($reviews as $review)
            <tr class="review_main">
                <td><a href="/posts/review/{{ $review->id }} ">{{ $review->title }}</a></td>
                <div class="reveiw">
                    <td>{{ $review->id }}</td>
                </div>
                <td>{{ $review->updated_at}}</td>
                <td class="body">{{ $review->body }}</td>
            </tr>
            @endforeach
        </div>
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