<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/brand.css') }}">
        <main id="main">
            <a href='/register/brand' ><p>ブランド登録</p></a>
            @foreach($brands as $brand)
            <a href="/brand/{{ $brand->id }}" style="color:inherit;text-decoration:none;"><p>{{ $brand->name }}</p></a>
            @endforeach
        </main>
</x-app>





