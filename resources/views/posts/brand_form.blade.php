<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/brand_form.css') }}">
<div class="back_button">
    <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
</div>
        <main id="main">
            <form method="POST" action="/store/brand">
                @csrf
            <h1>ブランド登録</h1>
            <input type="text" name="brand[name]" placeholder="ブランド名">
            <button type="submit">Store</button>
            </form>
        </main>
</x-app>



