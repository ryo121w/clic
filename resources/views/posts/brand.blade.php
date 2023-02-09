<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet" href="{{ asset('/css/brand.css') }}">
    <div class="back_button">
        <button type="button" onClick="history.back()" class="back"><img src="{{ asset('/img/left.png')}}" width="20px" height="20px"></button>
        </div>
            <main id="main">
                <h1>ブランド一覧</h1>
                <div class="brand_flex">
                    @foreach($brands as $brand)
                    <a href="/brand/{{ $brand->id }}" style="color:inherit;text-decoration:none;"><p>{{ $brand->name }}</p></a>
                    @endforeach
                </div>

                <div class="bootstrap">
                    {{ $brands->links() }}
                </div>

                <div class="ifBrand">
                    <p>もしもブランドがない際はこちら</p>
                    <a href='/register/brand' style="color:inherit;text-decoration:none;"><p>ブランド登録</p></a>
                </div>
        </main>
</x-app>





