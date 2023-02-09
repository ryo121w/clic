<x-app :store-formats="$store_formats" :user="$user">
<link rel="stylesheet" href="{{ asset('/css/thank.css') }}">
    <main id="main">
        <h1>Thanks!!!</h1>
        <div class="sub_title">
        <h2>登録ありがとうございます</h2>
        <h2>CLICを楽しんでください!!</h2>
        </div>
        <h3>登録までにお時間をいただく場合があります</h2>
        <h3>少々お待ちくださいメインページに遷移します</h3>

    </main>

    <script>
        setTimeout(function(){
          window.location.href = '/';
        }, 5*1000);
    </script>
</x-app>
