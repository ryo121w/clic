
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

        <div class="main_function_flex">
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

                <div class="btn-container">
           　        <button id="btn">アクセスマップ</button>
        　　  　  </div>

        　　  　  <div id="mask" class="hidden"></div>
        　　　          <section id="modal" class="hidden">
        　　      <div>
            　　　     <h1>アクセスマップ</h1>
            　　　   <div  class="map_flex">
                    <div id="map" ></div>
                    <div>
                        <h2>{{ $store->name }}</h2>
            　　　         <h3>{{ $store->pref }}{{ $store->city }}{{ $store->town}}{{ $store->house_number }}{{ $store->building }}</h3>
            　　　         <h3>{{ $store->station }}から徒歩{{ $store->min}}分</h3>
            　　　     </div>
                  </div>
         　　     </div>
        　　　</section>
        　　</div>

            <div class="function_holder">
                <form method="POST" action="/posts/holder/{{ $store->id }}" >
                     @csrf
                    <div class="book_mark">
                        <input type="image" src="{{ asset('/img/book.gif')}}" border="0" width="15px" height="25px">
                    </div>
               </form>
           </div>
       </div>


    <div class="store_detail">
        <div class="store_info">
            <div class="store_access">
                <div class="store_name">
                    <h2>{{ $store->name }}</h2>
                </div>
            </div>
            @if($star===5)
                <h3 class="star_five">{{ str_repeat('★ ', $star) }}</h3>
                @elseif($star!==5)
                <div>
                    <h3 class="star_five">{{ str_repeat('★ ', $star) }}
                    {{ str_repeat('☆ ', (5-$star)) }}</h3>
                </div>
            @endif
            <h3>{{ $store->pref }}{{ $store->city }}{{ $store->town}}{{ $store->house_number }}{{ $store->building }}</h3>
            <h4>{{ $store->phone }}</h4>
            <p>{{ $store->body }}</p>
        </div>
        <div class="store_img">
            <img src="{{ $store->image_path }}">
        </div>
    </div>

　　<script src="{{ asset('/js/address.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAusOJIKGrHp7iHGSHSnM-jCvBl6Zm1B3k&callback=initMap" async defer></script>
	<script >
         function initMap() {

          var target = document.getElementById('map'); //マップを表示する要素を指定
          var address = '{{ $store->pref }}{{ $store->city }}{{ $store->town}}{{ $store->house_number }}'; //住所を指定
          var geocoder = new google.maps.Geocoder();

          geocoder.geocode({ address: address }, function(results, status){
            if (status === 'OK' && results[0]){

              console.log(results[0].geometry.location);

              var mapOptions = {

              };

               var map = new google.maps.Map(target,{
                 center: results[0].geometry.location,
                 gestureHandling: 'cooperative',
                 mapTypeControl:false,
                 streetViewControl: false,
                 zoom: 16,
               });

               var marker = new google.maps.Marker({
                 position: results[0].geometry.location,
                 map: map,
                 animation: google.maps.Animation.DROP
               });

            }else{
              //住所が存在しない場合の処理
              alert('住所が正しくないか存在しません。');
              target.style.display='none';
            }
          });
        }
	</script>

    </main>
    </x-app>

