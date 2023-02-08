
<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet"  href="{{ asset('/css/review_store_detail.css') }}">
<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>
    <main id="main">
        @foreach($store->reviews as $review)
          <div class='post'>
            <tr class="review_main">
                <div class="review_main_flex">
                    @if($user->id === $review->user_id)
                    <td ><a href="/posts/review/{{ $review->id }} " style="color:inherit;text-decoration:none;"><p class="title">{{ $review->title }}</p></a></td>
                    @endif
                    <div class="reveiw">
                        <td><p class="review_name">{{ $review->user_name }}</p></td>
                    </div>
                </div>
                <td><p class="review_date">レビュー日:{{ $review->updated_at}}</p></td>
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
                  <div class="review_body"><p>{{ $review->body }}</p></td>
                  </div>
              </tr>
              <br>
            </div>
        @endforeach
    </main>
</x-app>