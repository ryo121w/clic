

<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
    <main>
        <div class="main">

             <div class="main_gender">
                 <div class="all">
                 <a href="/" style="color:inherit;text-decoration:none;"><p class="gender_all">ALL</p></a>
                 </div>
                 <div class="gender_men">
                 <a href="/posts/store/men/{{$sex_mens->id}}"><input type="image" src="{{asset('/img/boy_2.png')}}" width="10px" heith="15px"></a>
                 <a href="/posts/store/men/{{$sex_mens->id}}" style="color:inherit;text-decoration:none;"><p>MEN</p></a>
                 </div>




                <div class="gender_women">
                 <a href="/posts/store/men/{{$sex_womens->id}}"><input type="image" src="{{asset('/img/girl_2.png')}}" width="10px" heith="15px"></a>
                 <a href="/posts/store/women/{{$sex_womens->id}}" style="color:inherit;text-decoration:none;"><p>WOMEN</p></a>
                 </div>

             </div>
                <div class="container">
                    <div class="swiper infinite-slider">
                        <div class="swiper-wrapper">
                            @foreach ($stores as $store)
                            <div class="swiper-slide" href="">
                                <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                                <div class="swiper-title">
                                    <h2>{{ $store->prefecture->name }}</h2>
                                    <h1>{{ $store->name }}</h1>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper_pagination"></div>
                    </div>

                    <div class="main_container">
                        <section class="main_below">
                            <div class="main_search">
                                <ul>
                                    <li>
                                        <a href="/search/area" style="color:inherit;text-decoration:none;">
                                            <h3>エリアから探す</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/search/category" style="color:inherit;text-decoration:none;">
                                            <h3>ブランドから探す</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/posts/rank" style="color:inherit;text-decoration:none;">
                                            <h3>ランキングから探す</h3>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
<div class="flixed_flex">
    <div class="cd-fixed-bg cd-bg-1">
        <div class="fixed_title">

        </div>
    </div>

    <div class="cd-fixed-bg cd-bg-2">
        <div class="fixed_title">

        </div>
    </div>
    </div>

           <div class="main">
            <div class="main_rank">
                 @foreach($store_formats as $store_format)
                <div class="store_format_rank">
                    <a href="/posts/format_store/rank/{{ $store_format->id }}" style="color:inherit;text-decoration:none;"><h1>{{$store_format->name}}ランキング</h1></a>
                </div>
                @if($store_format->id === 1)
                <div class="flex_format">
                    @foreach($select as $store)
                    <div class="select">
                    <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                    <p class="select_name">{{ $store->name }}</p>
                    <p>{{ $store->pref }}{{ $store->city }}</p>
                    </div>
                    @endforeach
                </div>
                @elseif($store_format->id === 2)
                <div class="flex_format">
                    @foreach($used as $store)
                    <div class="select">
                    <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                    <p class="select_name">{{ $store->name }}</p>
                    <p>{{ $store->pref }}{{ $store->city }}</p>
                    </div>
                    @endforeach
                </div>
                @elseif($store_format->id === 3)
                <div class="flex_format">
                    @foreach($ec as $store)
                    <div class="select">
                    <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                    <p class="select_name">{{ $store->name }}</p>
                    <p>{{ $store->pref }}{{ $store->city }}</p>
                    </div>
                    @endforeach
                </div>
                @endif


                @endforeach
                </section>

            </div>
        </div>

</div>



    </main>
</x-app>




