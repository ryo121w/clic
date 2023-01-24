
    <x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/store_detail.css')}}">

    <main id="main">
        <div class="position_flex">
           <nav>
                <ul>
                <li><a href="/" style="color:inherit;text-decoration:none;"><p>TOP</p></a></li>
                <li><p>></p></li>
                <li><a href="/posts/store" style="color:inherit;text-decoration:none;"><p>ストア一覧</p></a></li>
                <li><p>></p></li>
                <li><a style="color:inherit;text-decoration:none;"><p>{{$store->name}}</p></a></li>
                </ul>
            </nav>
        </div>
        <div class="main_functions">
            <div class="function_post">
            <a href="/posts/review_store/{{ $store->id }}" style="color:inherit;text-decoration:none;">
                <p>投稿</p>
            </a>
            </div>
            <div class="function_review">
            <a href="/posts/review_detail/{{ $store->id }}" style="color:inherit;text-decoration:none;">
                <p>評価</p>
            </a>
            </div>
            <div class="function_holder">
            <form method="POST" action="/posts/holder/{{ $store->id }}" >
             @csrf
            <div class="book">
                <input type="image" src="{{ asset('/img/book.gif')}}" border="0" width="15px" height="25px">
            </div>
            </div>
           </form>
        </div>
    <div class="store_detail">
        <div class="store_info">
            <h2>{{ $store->name }}</h2>
            @if($star===5)
                <h3 class="star_five">{{ str_repeat('★ ', $star) }}</h3>
                @elseif($star!==5)
                <div>
                    <h3 class="star_five">{{ str_repeat('★ ', $star) }}
                    {{ str_repeat('☆ ', (5-$star)) }}</h3>
                </div>
            @endif
            <h4>{{ $store->phone }}</h4>
            <p>{{ $store->body }}</p>
        </div>
        <div class="store_img">
            <img src="{{ $store->image_path }}">
        </div>
    </div>
    </main>
    </x-app>

