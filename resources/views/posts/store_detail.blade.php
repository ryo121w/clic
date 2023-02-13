
<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="https://kit.fontawesome.com/2b0c0a97c9.css" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/store_detail.css')}}">
<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>

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
                    　　　   <div class="map_flex">
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



        <div class="function_holder_share">
            <div class="function_holder">

                    <div class="book_mark">
                        <button type="button" id="add_star" class="star_before">
                            <img src="{{ asset('/img/star_close_24.png')}}" border="0" width="25px" height="25px">
                        </button>

                        <button type="button" id="remove_star" class="star_hide">
                            <img src="{{ asset('/img/red.png')}}" border="0" width="25px" height="25px">
                        </button>
                    </div>

            </div>

            <!--<form method="POST" action="/posts/holder/{{ $store->id }}" >-->
            <!--</form>-->







        <div class="modal_wrapper">
            <div class="btn-container2">
                <button id="btn2" type="button"><img src="{{ asset('/img/share_icon_124864.png')}}" width="25px" height="25px"></button>
            </div>

            <div id="mask2" class="hidden"></div>
                <section id="modal2" class="hidden">
                    <div class="show_share">
                        <ul>
                            <!--フェイスブック-->
                            <li>
                                <a href="http://www.facebook.com/share.php?u={URL}" rel="nofollow noopener" target="_blank" style="color:inherit;text-decoration:none;"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <!--ツイッター-->
                            <li>
                                <a href="https://twiter.com/share?url={URL}" rel="nofollow noopener" target="_blank" style="color:inherit;text-decoration:none;"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <!--ライン-->
                            <li>
                                <a href="http://line.me/R/msg/text/?{URL}%0a{ページのタイトルなど表示したいテキスト}" target="_blank" rel="nofollow noopener" style="color:inherit;text-decoration:none;"><i class="fa-brands fa-line"></i></a>
                            </li>
                            <!--ポケット-->
                            <li>
                                <a href="http://getpocket.com/edit?url={URL}&title={ページのタイトル}" rel="nofollow" rel="nofollow" target="_blank" style="color:inherit;text-decoration:none;"><i class="fa-brands fa-get-pocket"></i></a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <div class="store_detail">
        <div class="store_info">
            <div class="store_access">
                <div class="store_name">
                    <h1>{{ $store->name }}</h1>
                </div>

                <a href="/posts/format_store/{{ $store->store_format->id }}" style="color:inherit;text-decoration:none;"><p class="store_format_detail">{{ $store->store_format->name }}</p></a>

            </div>



            <div class="detail_star">
                <div>
                @if($review_math===5)
                    <h3 class="star_five">{{ str_repeat('★ ', $review_math) }}</h3>
                    @elseif($review_math!==5)
                    <div>
                        <h3 class="star_five">{{ str_repeat('★ ', $review_math) }}
                        {{ str_repeat('☆ ', (5-$review_math)) }}</h3>
                    </div>
                @endif
                </div>
                <div class="star_math">
                <h1>{{$store->stars}}</h1>
                </div>
            </div>


            <h3 class="detail_address">{{ $store->pref }}{{ $store->city }}{{ $store->town}}{{ $store->house_number }}{{ $store->building }}</h3>

            <p class="detail_brand">取り扱いブランド</p>
            <div class="brand_flex">
            @foreach($store->brands->take(5) as $brand)
            <a href="/brand/{{ $brand->id }}" style="color:inherit;text-decoration:none;"><p class="brand">{{ $brand->name }}</p></a>
            @endforeach
            <p class="etc">...etc</p>
        </div>

            <div class="phone_flex">
                <img src="{{ asset('/img/ifn0811.png')}}">
                <p>{{ $store->phone }}</p>
            </div>

            @foreach($store->sexes as $sex)
                <p class="show_gender">gender</p>
                <p class="sex">{{ $sex->sex }}</p>
            @endforeach
        </div>


        <div class="store_img">
            <img src="{{ $store->image_path }}">
        </div>

    </div>

<div class="store_body">
    <p>{{ $store->body }}</p>
</div>

    <div class="products">
        @foreach($store_products as $product)
        <div class="detail_product">
        <img src="{{ $product->image_path}}" width="150px" height="200px">
        <p>{{$product->name}}</p>
        </div>
        @endforeach
    </div>



　　<script src="{{ asset('/js/detail.js') }}"></script>
　　<script src="https://kit.fontawesome.com/2b0c0a97c9.js" crossorigin="anonymous"></script>
　　<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
	<script>
	    const before = document.getElementById('add_star');
	    const after = document.getElementById('remove_star');

	    before.addEventListener('click', () => {
	        after.classList.remove('star_hide');
	        before.classList.add('star_hide');
	    })

	    after.addEventListener('click', () => {
	        before.classList.remove('star_hide');
	        after.classList.add('star_hide');
	    })


	</script>
	<script>
               $('#add_star').on('click', function(){
               var store = {{ $store->id }}
               var request = $.ajax({
                    type: 'POST',
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'Content-Type': 'application/json'
                                },
                    url: '/posts/holder/' + store ,
                    cache: false,
                    dataType: 'json',
                    timeout: 3000
                });

            });
	</script>
	<script>
               $('#remove_star').on('click', function(){
               var store = {{ $store->id }}
               var request = $.ajax({
                    type: 'POST',
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'Content-Type': 'application/json'
                                },
                    url: '/posts/holder/delete/' + store ,
                    cache: false,
                    dataType: 'json',
                    timeout: 3000
                });

            });
    </script>
    </main>
    </x-app>

