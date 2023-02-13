
<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet" href="{{ asset('/css/shop_register.css')}}">
    <div class="back_button">
        <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
    </div>
<main id="main">

    <h2 class="store_register">店舗登録フォーム</h2>
    <form action="/posts/upload/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="store_register_flex">
            <div class="store_features">
                <h2>店舗名</h2>
                <input type="text" name="store[name]" value="{{old('store.name')}}" placeholder="店舗名"  class="store_name" size="40">

                @if($errors->has('store.name'))
                <div><p style="color:red" class="error">{{ $errors->first('store.name') }}</p></div>
                @endif


                <h2>店舗の特徴</h2>
                <textarea name="store[body]" placeholder="お店の特徴やこだわっている部分をお書きください" class="store_textarea">{{old('store.body')}}</textarea>
                @if($errors->has('store.body'))
                    <div><p style="color:red" class="error">{{ $errors->first('store.body') }}</p></div>
                @endif

                <h2>店舗イメージ</h2>
                <input type="file" name="image" value="{{old('image')}}">
                @if($errors->has('image'))
                    <div><p style="color:red" class="error">{{ $errors->first('image') }}</p></div>
                @endif

                <h2>店舗形態</h2>

                <select name="store[store_format_id]" value="{{old('store.store_format_id')}}">
                    @foreach($store_formats as $storeformat)
                        <option value="{{ $storeformat->id }}">{{ $storeformat->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('store.store_format_id'))
                    <div><p style="color:red" class="error">{{ $errors->first('store.store_format_id') }}</p></div>
                @endif


                <h2>ターゲット</h2>
                    @foreach($sexes as $sex)
                    <label>
                        <input type="checkbox" value="{{ $sex->id }}" name="sex">{{ $sex->sex }}</input>
                    </label>
                    @endforeach


                    @if($errors->has('sex'))
                    <div><p style="color:red" class="error">{{ $errors->first('sex') }}</p></div>
                    @endif


                <div class="brand_flex">
                    <h2 class="shop_register_show_brand">ブランド</h1>
                        <p>もしかしてブランドがない？</p>
                        <div class="store_brand">
                            <a href='/register/brand' style="color:inherit;text-decoration:none;">
                                <p>ブランド登録</p>
                            </a>
                        </div>
            　　</div>

            <div class="btn-container">
                <button id="btn" type="button">ブランド一覧 ></button>
            </div>

            <div id="mask" class="hidden"></div>
                <section id="modal" class="hidden">
                    <div class="modal_scroll">
                        <h3 class="register_brand_show">ブランド一覧</h3>
                        @foreach($brands as $brand)
                        <div class="check_brand">
                            <label>
                            <input type="checkbox" id="brand_array" value="{{ $brand->id }}" name="brands_array[]" class="content_list" onchange="displaySelectedBrand()">{{ $brand->name }}</input>
                            <label for="brand_array" class="hidden">{{ $brand->name }}</label>
                            </input>
                            </label>
                        </div>
                        @endforeach
                        <button type="button" id="test" >store</button>
                    </div>
                </section>

                <div id="extracted_words">

                </div>
        </div>








        <div class="store_prefecture">
            <div class="address">
               <h2>住所</h2>
               <h3 class="shop_register_pref">都道府県</h3>
               <select name="store[prefecture_id]">
               @foreach($prefectures as $prefecture)
                <option value="{{ $prefecture->id }}" class="shop_register_select_pref" size="20">{{ $prefecture->name }}</option>
               @endforeach
               </select>


            <div class="form_address">
                <div class="shop_register_search_address">
                    <div class="form-group">
                       <label for="postal_code" class="zip" >郵便番号(ハイフンなし)</label><br>
                       <input type="text" id="postal_code" name="store[zip]"  placeholder="123456" value="{{old('store.zip')}}">
                    </div>
                    <button type="button" id="get_address" class="shop_register_search">検索</button>
                </div>
                @if($errors->has('store.zip'))
                    <div><p style="color:red" class="error">{{ $errors->first('store.zip') }}</p></div>
                @endif

                <div class="form-prefecture">
                    <label for="address"></label><br>
                    <p>都道府県</p>
                    <input type="text" id="addressPref" name="store[pref]" value="" size="20"><br>
                    <p>市区</p>
                    <input type="text" id="addressCity" name="store[city]" value="" size="20"><br>
                    <p>町村</p>
                    <input type="text" id="addressTown" name="store[town]" value="" size="20">
                </div>



                <div class="shop_register_detail_address">
                    <div>
                        <p>番地</p>
                        <input type="text" name="store[house_number]" placeholder="○-○-○-" size="40"value="{{old('store.house_number')}}">
                    </div>
                    @if($errors->has('store.house_number'))
                    <div class="house_number_error"><p style="color:red" class="error">{{ $errors->first('store.house_number') }}</p></div>
                    @endif

                    <div>
                        <p>建物</p>
                        <input type="text" name="store[building]" placeholder="CLICヒルズ 〜階" size="40" value="{{old('store.building')}}">
                    </div>

                    <div>
                        <p>最寄り駅・バス停</p>
                        <input type="text" name="store[station]" placeholder="〜駅・〜バス停" size="40" value="{{old('store.station')}}">
                    </div>

                    <div>
                        <div class="shop_register_staition">
                        <p>駅・バス停から徒歩でかかる時間</p>
                        <h1 class="staition_mins">(分単位で数字のみ書いてください)</h1>
                        </div>
                        <input type="text" name="store[min]" placeholder="25" size="40" value="{{old('store.min')}}">
                    </div>
                </div>
            </div>
            </div>

        <div class="phone_flex">
            <h2 class="phone">電話番号</h2>
            <p>（ハイフンなし）</p>
        </div>
        <input type="text" name="store[phone]"  placeholder="08012345678" class="phone_text" size="20" value="{{old('store.phone')}}" >
        @if($errors->has('store.phone'))
            <div class="house_number_error"><p style="color:red" class="error">{{ $errors->first('store.phone') }}</p></div>
        @endif

        <br>

        </div>
    </div>



    <div class="recommend">
        <h1>おすすめ商品</h1>
        <h4>（登録される際は10件全て登録してください）</h4>
    </div>

    <div class="form-group">
        <div>
            <input type="file"  name="images0" accept=".png, .jpg, .jpeg, .pdf, .doc">
            <p>商品名</p>
            <input type="text" name="name0">
            <p>価格</p>
            <input type="text" name="price0">
        </div>

        <div>
        <input type="file"  name="images1" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name1">
        <p>価格</p>
        <input type="text" name="price1">
        </div>

        <div>
        <input type="file"  name="images2" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name2">
        <p>価格</p>
        <input type="text" name="price2">
        </div>

        <div>
        <input type="file"  name="images3" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name3">
        <p>価格</p>
        <input type="text" name="price3">
        </div>

        <div>
        <input type="file"  name="images4" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name4">
        <p>価格</p>
        <input type="text" name="price4">
        </div>

        <div>
        <input type="file"  name="images5" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name5">
        <p>価格</p>
        <input type="text" name="price5">
        </div>

        <div>
        <input type="file"  name="images6" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name6">
        <p>価格</p>
        <input type="text" name="price6">
        </div>

        <div>
        <input type="file"  name="images7" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name7">
        <p>価格</p>
        <input type="text" name="price7">
        </div>

        <div>
        <input type="file"  name="images8" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name8">
        <p>価格</p>
        <input type="text" name="price8">
        </div>

        <div>
        <input type="file"  name="images9" accept=".png, .jpg, .jpeg, .pdf, .doc">
        <p>商品名</p>
        <input type="text" name="name9">
        <p>価格</p>
        <input type="text" name="price9">
        </div>
    </div>



        <div class="button021">
　　　　<button type="submit">
　　　　ストア登録
　　　　</button>
   </form>

</main>
　　<script src="{{ asset('/js/address.js') }}"></script>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script >
            $('#get_address').on('click', function(){
                var postal_code = $('#postal_code').val();
                var request = $.ajax({
                    type: 'GET',
                    url: '/postal-code/' + postal_code + '/address',
                    cache: false,
                    dataType: 'json',
                    timeout: 3000
                });

                request.done(function(data){
                    var AddressPref = document.getElementById("addressPref");
                    AddressPref.value = data.pref;

                    var AddressCity = document.getElementById("addressCity");
                    AddressCity.value = data.city;

                    var AddressTown = document.getElementById("addressTown");
                    AddressTown.value = data.town;
                });


                request.fail(function(){
                    alert("通信に失敗しました");
                });

            });
       </script>

       <script>

       </script>
</x-app>
