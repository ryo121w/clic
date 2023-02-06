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