<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/owner.css') }}">
    <div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
    </div>
    @foreach($owners as $owner)
    <div class="main">
    <div>
        <p>店舗名</p>
        <p>{{ $owner->store_name }}</p>
    </div>

    <div>
        <p>店舗住所</p>
        <p>{{ $owner->store_address }}</p>
    </div>

    <div>
        <p>店舗代表</p>
        <p>{{ $owner->owner_name }}</p>
    </div>

    <div>
        <p>店舗メール</p>
        <p>{{ $owner->owner_email }}</p>
    </div>

    <div>
        <p>電話番号</p>
        <p>{{ $owner->phone }}</p>
    </div>

    <div>{{ $owner->user_id}}</div>

    <form method="POST" action="posts/posts/owners/{{ $owner->id }}">
        @csrf
        <button type="submit" name="user[owner]" >store</button>
    </form>
    </div>
    @endforeach
</x-app>