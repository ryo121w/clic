<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('/css/select_log.css') }}">
    <title>Welecome to CLIC</title>
</head>

<body>
<main id="main">
    <div class="main">
        <div class="main_view">
            <h1 class="CLIC">CLIC</h1>
            <h2 class="title">WELECOME TO CLIC!!!!!!!</h2><br>
            <h2 class="sub_title">CLICは全国のファッションストアからあなたにあったストアを届ける</h2><br>
            <h4>CLICはあなたがまだ知らないストアを見つけれる!</h4>
            <h2>LET'S GO</h2>


            <div class="flex">
                <div class="login">
                    <p class="login_title">すでに登録されている方はこちら</p>
                    <a href="{{ route('login') }}" style="color:inherit;text-decoration:none;">
                        <p class="new_user">ログイン</p>
                    </a>
                </div>

                <div class="register">
                    <p class="login_title">まだ登録されていない方はこちら</p>
                    <a href="{{ route('register') }}" style="color:inherit;text-decoration:none;">
                        <p class="new_user">新規登録</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

</html>