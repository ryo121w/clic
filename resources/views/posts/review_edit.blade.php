
<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet"  href="{{ asset('/css/review_edit.css') }}">
<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>
<main id="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="review_edit_title">レビュー編集フォーム</h2>
            <form method="POST" action="/posts/update/{{ $review->id}}" onSubmit="return checkSubmit()" class="review_edit_form">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $review->id }}">
                <div class="form-group">
                    <h2>タイトル</h2>
                    <input id="title" name="review[title]" class="form-control" value="{{ $review->title }}" type="text" size="40">
                    @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <h2>レビュー</h2>
                    <textarea id="content" name="review[body]" class="form-controll" rows="4" value="{{ $review->body }}"></textarea>
                    @if ($errors->has('body'))
                    <div class="text-danger">
                        {{ $errors->first('body') }}
                    </div>
                    @endif
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







            <div class="review_detail_function">
                <button type="submit"><p>更新</p></button>
                <button type="button"><a href="/" style="color:inherit;text-decoration:none;"><p>キャンセル</p></a></button>
             </div>





            </form>
        </div>
    </div>
</main>
<script>
    function checkSubmit() {
        if (window.confirm('更新してよろしいですか？')) {
            return true;
        } else {
            return false;
        }
    }
</script>
</x-app>
