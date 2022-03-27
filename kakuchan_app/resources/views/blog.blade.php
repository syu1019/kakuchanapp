<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>サイトタイトル</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="{{ asset('assets/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

</head>

<body>
<div class="wrapper" id="blog">
    <!----- ヘッダー ----->
    <header>
        <div class="top_container">
            <div class="header_container"></div>
            <div class="menu_container"></div>
        </div>
    </header>
    <nav>ナビ</nav>
    <!----- ヘッダー END ----->

    <!----- メインコンテンツ ----->
    <article>
        <h1>タイトル</h1>
        <div class="test_color" style="width: 100px; height: 100px;"></div>
        <div class="test_color" style="width: 100px; height: 100px; background-color: blue;"></div>
        <section>
            @foreach($articles as $article)
            <h2>タイトル</h2>
            {{$article->title}}debugaaaaaaaaaaaaa
            <p>コンテンツの内容</p>
            @endforeach
        </section>
    </article>
    <!----- メインコンテンツ END ----->

{{--[{--}}
{{--    "id":1,--}}
{{--    "title":"\u3066\u3059\u3068\u30bf\u30a4\u30c8\u30eb",--}}
{{--    "text":"\u3066\u3059\u3068\u30c6\u30ad\u30b9\u30c8",--}}
{{--    "created_at":"2022-03-25 12:02:09",--}}
{{--    "updated_at":null--}}
{{--}]--}}

    <!----- フッター ----->
    <footer>フッター</footer>
    <!----- フッター END ----->
</div>
</body>
</html>
