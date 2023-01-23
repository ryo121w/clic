<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
   <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <title>CLIC</title>
</head>

<body>
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
    </main>
