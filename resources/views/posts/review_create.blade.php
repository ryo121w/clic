
<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet"  href="{{ asset('/css/review_create.css') }}">
    <main id="main">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="review_title">REVIEW投稿フォーム</h2>
            <form action='/posts/store' method="POST">
              @csrf
              <div class="title"><h2>Title</h2>
                  <input type="text" name="review[title]" placeholder="タイトル" size="40"/>
              </div>
              <div class="body">
                  <h2>Body</h2>
                  <div>
                    <textarea name="review[body]" placeholder="REVIEW" class="review_textarea"></textarea>
                  </div>
              </div>
            <div class="rate-form">
            <input id="star5" type="radio" name="review[stars]" value="5">
            <label for="star5">★</label>
            <input id="star4" type="radio" name="review[stars]" value="4">
            <label for="star4">★</label>
            <input id="star3" type="radio" name="review[stars]" value="3">
            <label for="star3">★</label>
            <input id="star2" type="radio" name="review[stars]" value="2">
            <label for="star2">★</label>
            <input id="star1" type="radio" name="review[stars]" value="1">
            <label for="star1">★</label>
            </div>

            <input type="submit" value="store" >
            </form>
      </div>
    </div>
</main>
</x-app>
