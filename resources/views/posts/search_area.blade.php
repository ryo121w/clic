
<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/store.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/search_area.css') }}">

<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>
<main id="main">
    <div class="allPref">
        <div class="hokkido">
            <h3>北海道</h3>
            <a href="/prefecture/{{ $prefecture_1->id }}" style="color:inherit;text-decoration:none;">
    　　　　<p>{{ $prefecture_1->name }}</p>
    　　　　</a>
    　　</div>


        <div class="tohoku">
    　　　　<h3>東北</h3>
    　　　　<div class="pref_flex">
                @foreach($prefecture_2 as $prefecture)
                <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
                <p>{{ $prefecture->name }}</p>
                </a>
                @endforeach
            </div>
        </div>


        <div class="kanto">
            <h3>関東</h3>
            <div class="pref_flex">
                @foreach($prefecture_3 as $prefecture)
                <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
                <p>{{ $prefecture->name }}</p>
                </a>
                @endforeach
            </div>
        </div>


        <div class="chubu">
            <h3>中部</h3>
            <div class="pref_flex">
                @foreach($prefecture_4 as $prefecture)
                <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
                <p>{{ $prefecture->name }}</p>
                </a>
                @endforeach
            </div>
            </div>



        <div class="kinki">
            <h3>近畿</h3>
            <div class="pref_flex">
                @foreach($prefecture_5 as $prefecture)
                <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
                <p>{{ $prefecture->name }}</p>
                </a>
                @endforeach
            </div>
        </div>


        <div class="chugoku">
            <h3>中国</h3>
            <div class="pref_flex">
                @foreach($prefecture_6 as $prefecture)
                <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
                <p>{{ $prefecture->name }}</p>
                </a>
                @endforeach
            </div>
        </div>


        <div class="shikoku">
            <h3>四国</h3>
            <div class="pref_flex">
                @foreach($prefecture_7 as $prefecture)
                <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
                <p>{{ $prefecture->name }}</p>
                </a>
                @endforeach
            </div>
        </div>


        <div class="kyushu">
            <h3>九州</h3>
            <div class="pref_flex">
                @foreach($prefecture_8 as $prefecture)
                <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
                <p>{{ $prefecture->name }}</p>
                </a>
                @endforeach
            </div>
        </div>


        <div class="okinawa">
            <h3>沖縄</h3>
            <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;">
            <p>{{ $prefecture_9->name}}</p>
            </a>
        </div>


    </div>
</main>
</x-app>
