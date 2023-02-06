
<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet"  href="{{ asset('/css/review_detail_store.css') }}">
    <main id="main">
        <div class="review_detail_title">
            <h3>{{ $review->title }}</h3>
            <p>レビュアー : {{ $user->name }}</p>
        </div>

        <div class="date">
            <p>作成日 : {{ $review->created_at }}</p>
            <p>更新日 : {{ $review->updated_at }}</p>
        </div>





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
        </div>


<div class="review_body">
        <p class="body">{{ $review->body }}</p>
</div>


    <div class="review_detail_function">
        <button type="button" onclick="location.href='/posts/review/edit/{{ $review->id }}'"><p>編集</p></button>
        <form method="POST" action="/posts/delete/{{$review->id}}" onSubmit="return checkDelete()">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="deleteReview()"><p>削除</p></button>
        </form>
     </div>
</div>
      <script>
    function checkDelete() {
        if (window.confirm('削除してよろしいですか？')) {
            return true;
        } else {
            return false;
        }
    }
      </script>
</main>
</x-app>


