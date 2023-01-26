
<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet" href="{{ asset('/css/store.css') }}">
 <main id="main">
    <div class="position_flex">
        <nav>
            <ul>
                <li><a href="/" style="color:inherit;text-decoration:none;"><p>TOP</p></a></li>
                <li><p>></p></li>
                <li><a style="color:inherit;text-decoration:none;"><p>ストア一覧</p></a></li>
            </ul>
        </nav>
    </div>
     <h1>全国のストア</h1>





      @foreach ($stores as $store)
        <div class="store_detail_flex">
          <div class="store_detail">
            <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;"><h2>{{ $store->name }}</h2></a>
            @if($store->stars===5)
                <h3 class="star_five">{{ str_repeat('★ ', $store->stars) }}</h3>
                @elseif($store->stars!==5)
                <div>
                    <h3 class="star_five">{{ str_repeat('★ ', $store->stars) }}
                    {{ str_repeat('☆ ', (5-$store->stars)) }}</h3>
                </div>
            @endif
            <p>{{ $store->phone }}</p>
            <a href="/prefecture/{{ $store->prefecture->id }}" style="color:inherit;text-decoration:none;"><p>{{ $store->pref }}{{ $store->city }}{{ $store->town}}{{ $store->building }}</p></a>
            <a href="/posts/format_store/{{ $store->store_format->id }}" style="color:inherit;text-decoration:none;"><p>{{ $store->store_format->name }}</p></a>


          @foreach($store->brands as $brand)
           <a href="/brand/{{ $brand->id }}" style="color:inherit;text-decoration:none;"><p>{{ $brand->name }}</p></a>
          @endforeach

          @foreach($store->sexes as $sex)
          <p>{{ $sex->sex }}</p>
          @endforeach

          <p>{{ $store->body }}</p>

        </div>

        <div class="store_img">
            <img src="{{ $store->image_path }}" alt="画像が読み込めません。"/>
        </div>
          @endforeach
      </div>
    </main>

    <div>
        <a href="/show/search" style="color:inherit;text-decoration:none;"><button>search</button></a>
    </div>

<a href="/"><p>return</p></a>

</x-app>