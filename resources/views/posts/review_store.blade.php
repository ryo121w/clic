
 <x-app :store-formats="$store_formats" :user="$user">
   <link rel="stylesheet"  href="{{ asset('/css/review_create.css') }}">
<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>
  <main id="main">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="review_title">{{ $store->name }} レビューフォーム</h2>
            <form action='/posts/store/{{ $store->id }}' method="POST" class="review_form">
              @csrf
              <div class="title"><h2>タイトル</h2>
                  <input type="text" name="review[title]" placeholder="タイトル" size="40" value="{{ old('review.title')}}"/>
              </div>
              @if($errors->has('review.title'))
                <div><p style="color:red" class="error">{{ $errors->first('review.title') }}</p></div>
              @endif

              <div class="body">
                  <h2>レビュー</h2>
                  <div>
                    <textarea name="review[body]" placeholder="レビュー" class="review_textarea" >{{ old('review.body')}}</textarea>
                  </div>
              </div>
            @if($errors->has('review.body'))
            <div><p style="color:red" class="error">{{ $errors->first('review.body') }}</p></div>
            @endif




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
            @if($errors->has('review.star'))
            <div><p style="color:red" class="error">{{ $errors->first('review.star') }}</p></div>
            @endif

            <input type="submit" value="レビューする" class="store_review">
            </form>
      </div>
    </div>
    </main>
 </x-app>