
<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet" href="{{ asset('/css/shop_register.css')}}">

<main id="main">
    <h2 class="store_register">店舗登録フォーム</h2>
    <form action="/posts/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="store_register_flex">
            <div class="store_features">
                <h2>店舗名</h2>
                <input type="text" name="store[name]" value="{{old('store.name')}}" placeholder="店舗名"  class="store_name" size="30">

                @if($errors->has('store.name'))
                <div><p style="color:red">{{ $errors->first('store.name') }}</p></div>
                @endif


                <h2>店舗の特徴</h2>
                <textarea name="store[body]" placeholder="私たちの店は、、、" class="store_textarea">{{old('store.body')}}</textarea>
                @if($errors->has('store.body'))
                    <div><p style="color:red">{{ $errors->first('store.body') }}</p></div>
                @endif

                <h2>店舗イメージ</h2>
                <input type="file" name="image" value="{{old('image')}}">
                @if($errors->has('image'))
                    <div><p style="color:red">{{ $errors->first('image') }}</p></div>
                @endif

                <h2>店舗形態</h2>

                <select name="store[store_format_id]" value="{{old('store.store_format_id')}}">
                    @foreach($store_formats as $storeformat)
                        <option value="{{ $storeformat->id }}">{{ $storeformat->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('store.store_format_id'))
                    <div><p style="color:red">{{ $errors->first('store.store_format_id') }}</p></div>
                @endif


                <h2>ターゲット</h2>
            @foreach($sexes as $sex)
            <label>
                <input type="checkbox" value="{{ $sex->id }}" name="sex">{{ $sex->sex }}</input>
            </label>
        @endforeach
        @if($errors->has('sex'))
        <div><p style="color:red">{{ $errors->first('sex') }}</p></div>
        @endif
        </div>

        <div class="store_prefecture">
            <div class="address">
               <h2>住所</h2>
               <h3>都道府県</h3>
               <select name="store[prefecture_id]">
               @foreach($prefectures as $prefecture)
                <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
               @endforeach
               </select>


            <div class="form_address">
                <div class="form-group">
                   <label for="postal_code">郵便番号</label>
                   <input type="text" id="postal_code" name="store[zip]"  >
                </div>
                <button type="button" id="get_address">検索</button>

                <div class="form-prefecture">
                    <label for="address">住所（都道府県・市町村）</label>
                    <input type="text" id="addressPref" name="store[pref]" value="" size="20">
                    <input type="text" id="addressCity" name="store[city]" value="" size="20">
                    <input type="text" id="addressTown" name="store[town]" value="" size="20">
                </div>

            <div>
                <p>番地</p>
                <input type="text" name="store[house_number]">
            </div>

                <div>
                <p>建物</p>
                <input type="text" name="store[building]">
            </div>
            </div>


                @if($errors->has('store.prefecture_id'))
                <div><p style="color:red">{{ $errors->first('store.prefecture_id') }}</p></div>
                @endif

                <h2>ブランド登録</h1>
                @foreach($brands as $brand)
                <label>
                    <input type="checkbox" value="{{ $brand->id }}" name="brands_array[]">{{ $brand->name }}</input>
                </label>
                @endforeach
                <br>
                @if($errors->has('brands_array[]'))
                <div><p style="color:red">{{ $errors->first('brands_array[]') }}</p></div>
                @endif
            </div>


        <h2>電話番号</h2>
        <input type="text" name="store[phone]"  placeholder="123-456-7890">
        @if($errors->has('store[phone]'))
        <div><p style="color:red">{{ $errors->first('store[phone]') }}</p></div>
        @endif
        <br>

        </div>
        </div>
        <div class="button021">
　　　　<button type="submit">
　　　　ストア登録
　　　　</button>
　　　</div>
   </form>

</main>
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
</x-app>
