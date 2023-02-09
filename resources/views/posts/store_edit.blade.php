
<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet" href="{{ asset('/css/store.css') }}">
<link rel="stylesheet" href="{{ asset('/css/store_edit.css') }}">
<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>
 <main id="main">
    <div class="position_flex">
        <nav>
            <ul>
                <li><a href="/" style="color:inherit;text-decoration:none;"><p>TOP</p></a></li>
                <li><p>></p></li>
                <li><a style="color:inherit;text-decoration:none;"><p>運営店舗編集</p></a></li>
            </ul>
        </nav>
    </div>
     <h1 class="title">{{ $user->name }}のストア</h1>





      @foreach ($stores as $store)
        <div class="store_flex">
          <div class="store_detail">
            <div class="store_edit_flex">
                <a href="/posts/store/edit/owner/{{$store->id}}" style="color:inherit;text-decoration:none;"><button type="button">編集</button></a>
                <form method="POST" action="/posts/store/delete/{{$store->id}}" onSubmit="return checkDelete()" class="store_delete">
                    @csrf
                    @method('DELETE')
                   <button type="submit" onclick="deleteReview()">削除</button>
                </form>
            </div>
            <div class="store_detail_flex">

                    <a href="/posts/store/detail/{{$store->id}}" style="color:inherit;text-decoration:none;" ><h2 class="store_name">{{ $store->name }}</h2></a>

                    <a href="/posts/format_store/{{ $store->store_format->id }}" style="color:inherit;text-decoration:none;"><p class="store_format_detail">{{ $store->store_format->name }}</p></a>



                <div class="phone_flex">
                    <img src="{{ asset('/img/ifn0811.png')}}">
                    <p>{{ $store->phone }}</p>
                </div>


            </div>


            <div class="star_flex">
                @if($store->stars===5)
                    <h3 class="star_five">{{ str_repeat('★ ', $store->stars) }}</h3>
                    @elseif($store->stars!==5)
                    <div>
                        <h3 class="star_five">{{ str_repeat('★ ', $store->stars) }}
                        {{ str_repeat('☆ ', (5-$store->stars)) }}</h3>
                    </div>
                @endif
                <p>{{$store->stars}}</p>
            </div>
            <p class="address">住所</p>
            <a href="/prefecture/{{ $store->prefecture->id }}" style="color:inherit;text-decoration:none;"><p class="detailAddress">{{ $store->pref }}{{ $store->city }}{{ $store->town}}{{ $store->building }}</p></a>



        <p class="show_brand">取り扱いブランド</p>
        <div class="brand_flex">
            @foreach($store->brands->take(5) as $brand)
            <a href="/brand/{{ $brand->id }}" style="color:inherit;text-decoration:none;"><p class="brand">{{ $brand->name }}</p></a>
            @endforeach
            <p class="etc">...etc</p>
        </div>

            @foreach($store->sexes as $sex)
            <p class="show_gender">gender</p>
            <p class="sex">{{ $sex->sex }}</p>
            @endforeach
        </div>

        <div class="store_img">
            <img src="{{ $store->image_path }}" alt="画像が読み込めません。"/>
        </div>
          @endforeach
      </div>

    </main>
    <script>
    function checkDelete() {
        if (window.confirm('削除してよろしいですか？')) {
            return true;
        } else {
            return false;
        }
    }
      </script>
</x-app>