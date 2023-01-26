




<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet" href="{{ asset('/css/store.css')}}">
<h1>全国のストア</h1>
    <main id="main">
      @foreach ($user->stores as $store)
        <div class="store_detail_flex">
          <div class="store_detail">
            <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;"><h2>{{ $store->name }}</h2></a>
            <p>{{ $store->phone }}</p>
            <a href="/prefecture/{{ $store->prefecture->id }}" style="color:inherit;text-decoration:none;">{{ $store->prefecture->name }}</a>
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
      <br>


    </main>
        <div>
        <a href="/show/search" style="color:inherit;text-decoration:none;"><button>search</button></a>
    </div>

     <a href="/"><p>return</p></a>
</x-app>


