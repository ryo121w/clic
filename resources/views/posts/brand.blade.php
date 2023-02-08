<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/brand.css') }}">
        <div class="back_button">
        <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
        </div>
        <main id="main">

            <a href='/register/brand' ><p>ブランド登録</p></a>
            <div class="brand_flex">
                @foreach($brands as $brand)
                <a href="/brand/{{ $brand->id }}" style="color:inherit;text-decoration:none;"><p>{{ $brand->name }}</p></a>
                @endforeach
            </div>
        </main>
</x-app>





