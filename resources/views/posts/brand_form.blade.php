<x-app :store-formats="$store_formats" :user="$user">
        <main>
            <form method="POST" action="/store/brand">
                @csrf
            <h1>ブランド登録</h1>
            <input type="text" name="brand[name]" placeholder="ブランド名">
            <button type="submit">Store</button>
            </form>
        </main>
</x-app>



