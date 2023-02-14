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




        DB::table('stores')->insert([
        'name' => '',
        'phone' =>'',
        'body' =>'',
        'store_format_id' => ,
        'image_path' => '',
        'prefecture_id' => ,
        'zip' => ,
        'pref' => '',
        'city' => '',
        'town' => '',
        'building' => '',
        'house_number' => '',
        'station' => '',
        'min' =>,
        ]);

                DB::table('stores')->insert([
        'name' => 'スキキライ',
        'phone' =>'0662133201',
        'body' =>'服の好き嫌いをなくして欲しいとの思いから始まったセレクトショップ「スキキライ」。国内外問わず集めたセレクトブランド＋ブランド物の古着やアメリカ古着を中心にセレクトしており、様々なファッションジャンルを楽しめ、新たな服に挑戦してみたいと考える人にはオススメのお店。夜21時まで営業しており、仕事帰りにも気軽に立ち寄れるのも嬉しいポイントとなっている。',
        'store_format_id' => 1,
        'image_path' => '/img/LUIK.jpeg',
        'prefecture_id' => 27,
        'zip' => 5420086,
        'pref' => '大阪府',
        'city' => '中央区',
        'town' => '西心斎橋',
        'building' => 'アンクルサムビル4F',
        'house_number' => '2-11-14',
        'station' => '難波',
        'min' =>15,
        ]);