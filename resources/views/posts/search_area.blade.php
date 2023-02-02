
<x-app :store-formats="$store_formats" :user="$user">
    <link rel="stylesheet" href="{{ asset('/css/store.css') }}">
    <main id="main">

        @foreach($prefectures as $prefecture)
        <div class="area">
            <a href="/prefecture/{{ $prefecture->id }}" style="color:inherit;text-decoration:none;"><p>{{ $prefecture->name }}</p></a>
            <a type="button" id="prefecture" href="/city/{{ $prefecture->id }}">></a>
        </div>
        @endforeach

        <div><p></p></div>
    </main>
</x-app>
