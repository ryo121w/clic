

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
                 <a href="/posts/store/women/{{$sex_womens->id}}"><input type="image" src="{{asset('/img/girl_2.png')}}" width="10px" heith="15px"></a>
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
                                    <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;">
                                    <h2>{{ $store->prefecture->name }}</h2>
                                    <h1>{{ $store->name }}</h1>
                                    </a>
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


            <div class="scroll_flex">
                <div class="scroll_up">
                    <div class="title_clic">
                        <h1>CLIC</h1>
                    </div>
                </div>
                <div class="explanation">
                    <ul>
                        <li><h2 class="scroll_up clothing"><span class="red">CL</span>OTHING</h2></li>
                        <li><h2 class="scroll_up information"><span class="red">I</span>NFORMATION</h2></li>
                        <li><h2 class="scroll_up center"><span class="red">C</span>ENTER</h2></li>
                    </ul>
                </div>
              </div>




<div class="scroll_main">
    <div class="flex_1">
            <div class="cd-fixed-bg cd-bg-1">
                <div class="fixed_title"></div>
            </div>




            <div class="scroll_flex_2">
              <h1 class="scroll_up clic_title">クリックは、<br>皆様に"お気に入りストア"<br>を届ける</h1>
              <h2 class="scroll_up clic_title_2">クリックは全国にあるファッションストアをまとめ、<br>皆様のお気に入りストア探しのお手伝いをさせていただきます</h2></h2>
              <ul>
                    <li class="scroll_up a">
                        <a href="/search/area" style="color:inherit;text-decoration:none;">
                            <h3>エリアから探す</h3>
                        </a>
                    </li>
                    <li class="scroll_up b">
                        <a href="/search/category" style="color:inherit;text-decoration:none;">
                            <h3>ブランドから探す</h3>
                        </a>
                    </li>
                    <li class="scroll_up c">
                        <a href="/posts/rank" style="color:inherit;text-decoration:none;">
                            <h3>ランキングから探す</h3>
                        </a>
                    </li>
                </ul>
            </div>



    </div>



<div class="flex_2">
            <div class="scroll_flex_3">
                  <h2 class="scroll_up clic_title_3">初めていくストアはどこか入りにくいと感じる<br>そんな経験をしたことはありませんか？<br>クリックはそんな不安をなくし、”最高のストア選択体験を”</h2>

                  <h1 class="scroll_up clic_title_4">さあ、始めよう</h1>
                 <ul>
                    <li class="scroll_up w">
                        <a href="/search/area" style="color:inherit;text-decoration:none;">
                            <h3>エリアから探す</h3>
                        </a>
                    </li>
                    <li class="scroll_up q">
                        <a href="/search/category" style="color:inherit;text-decoration:none;">
                            <h3>ブランドから探す</h3>
                        </a>
                    </li>
                    <li class="scroll_up l">
                        <a href="/posts/rank" style="color:inherit;text-decoration:none;">
                            <h3>ランキングから探す</h3>
                        </a>
                    </li>
                </ul>
            </div>


                <div class="cd-fixed-bg cd-bg-2">
                    <div class="fixed_title"></div>
                </div>
    </div>
</div>










           <div class="main_2">
            <div class="main_rank">
                 @foreach($store_formats as $store_format)
                <div class="store_format_rank">
                    <a href="/posts/format_store/rank/{{ $store_format->id }}" style="color:inherit;text-decoration:none;"><h1>{{$store_format->name}}ランキング</h1></a>
                </div>
                @if($store_format->id === 1)
                <div class="flex_format">
                    @foreach($select as $store)
                    <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;">
                    <div class="select">
                    <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                    <p class="select_name">{{ $store->name }}</p>
                    <p>{{ $store->pref }}{{ $store->city }}</p>
                    </div>
                    </a>
                    @endforeach
                </div>
                @elseif($store_format->id === 2)
                <div class="flex_format">
                    @foreach($used as $store)
                    <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;">
                    <div class="select">
                    <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                    <p class="select_name">{{ $store->name }}</p>
                    <p>{{ $store->pref }}{{ $store->city }}</p>
                    </div>
                     </a>
                    @endforeach
                </div>
                @elseif($store_format->id === 3)
                <div class="flex_format">
                    @foreach($ec as $store)
                    <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;">
                    <div class="select">
                    <img src="{{ $store->image_path }}" alt="画像が読み込めません。">
                    <p class="select_name">{{ $store->name }}</p>
                    <p>{{ $store->pref }}{{ $store->city }}</p>
                    </div>
                     </a>
                    @endforeach
                </div>
                @endif


                @endforeach
                </section>

            </div>
        </div>





    </main>
</x-app>




