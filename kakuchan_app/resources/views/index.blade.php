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
<div class="wrapper">
    <!----- ヘッダー ----->
    <header>
        <div class="top_container">
            <div class="header"></div>
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
            <h2>タイトル</h2>
            <p>コンテンツの内容</p>
        </section>
    </article>
    <!----- メインコンテンツ END ----->

    <!----- フッター ----->
    <footer>フッター</footer>
    <!----- フッター END ----->
</div>
</body>
</html>
