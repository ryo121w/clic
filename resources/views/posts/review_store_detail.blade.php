
<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet"  href="{{ asset('/css/review_create.css') }}">

    <main>
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
    </main>
</x-app>