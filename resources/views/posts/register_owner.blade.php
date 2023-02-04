<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/register_owner.css') }}">
       <div class="main">
           <form method="POST" action="/posts/owner/{{ $user->id }}">
                @csrf
                <h1>店舗会員登録 <span class="please"> （店舗登録前にお願いします。）</span></h1>

                <p>店舗名</p>
                <input type="text" name="owner[store_name]"  placeholder="123-456-7890">
                <p>店舗の代表名</p>
                <input type="text" name="owner[owner_name]"  placeholder="123-456-7890">
                <p>店舗住所</p>
                <input type="text" name="owner[store_address]"  placeholder="123-456-7890">
                <p>店舗メールアドレス</p>
                <input type="text" name="owner[owner_email]"  placeholder="123-456-7890">
                <p>電話番号</p>
                <input type="text" name="owner[phone]"  placeholder="123-456-7890">
                <button type="submit">store</button>
                <p>{{ $user->id}}</p>
                </form>
                <p>※店舗会員登録後に店舗登録をお願いいたします。（店舗会員登録には数日いただく可能性がございます。）</p>
        </div>
</x-app>