<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/register_owner.css') }}">
<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>
       <div class="main">
           <form method="POST" action="/posts/owner/{{ $user->id }}">
                @csrf
                <h1>店舗会員登録 <span class="please"> （店舗登録前にお願いします。）</span></h1>
            <div class="detailOwner">
                <p>店舗名</p>
                <input type="text" name="owner[store_name]"  placeholder="クリック" size="40" value="{{ old('owner.store_name')}}">
                @if($errors->has('owner.store_name'))
                <div class="owner_error"><p style="color:red" class="error">{{ $errors->first('owner.store_name') }}</p></div>
                @endif
                <p>店舗の代表名</p>
                <input type="text" name="owner[owner_name]"  placeholder="フルネームでお願いします" size="40" value="{{ old('owner.owner_name')}}">
                @if($errors->has('owner.owner_name'))
                <div class="owner_error"><p style="color:red" class="error">{{ $errors->first('owner.owner_name') }}</p></div>
                @endif
                <p>店舗住所</p>
                <input type="text" name="owner[store_address]"  placeholder="○○県○○市○町1-1-1 clicヒルズ 4階" size="40" value="{{ old('owner.store_address')}}">
                @if($errors->has('owner.store_address'))
                <div class="owner_error"><p style="color:red" class="error">{{ $errors->first('owner.store_address') }}</p></div>
                @endif
                <p>店舗メールアドレス</p>
                <input type="text" name="owner[owner_email]"  placeholder="clic@gmail.com" size="40" value="{{ old('owner.owner_email')}}">
                @if($errors->has('owner.owner_email'))
                <div class="owner_error"><p style="color:red" class="error">{{ $errors->first('owner.owner_email') }}</p></div>
                @endif
                <p>電話番号</p>
                <input type="text" name="owner[phone]"  placeholder="123-456-7890" size="40" value="{{ old('owner.phone')}}">
                @if($errors->has('owner.phone'))
                <div class="owner_error"><p style="color:red" class="error">{{ $errors->first('owner.phone') }}</p></div>
                @endif


            <div>
                <button type="submit">store</button>
            </div>
            </div>
                </form>
                <p>※店舗会員登録後に店舗登録をお願いいたします。（店舗会員登録には数日いただく可能性がございます。）</p>
        </div>
</x-app>