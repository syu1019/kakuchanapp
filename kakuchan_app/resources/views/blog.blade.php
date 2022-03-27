<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Language" content="ja">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <title>サンプルトップページ（このタイトルは自由に変えてください）</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<script>
    function articleDisplay($ele) {
        $.ajax({
            type:'POST',
            url:'/articleGet',
            data:{
                id:$ele.getAttribute("id")
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
    }
</script>

<body>

<div class="container">
    <header>
        <h1>サイトタイトル</h1>
        <p>ここにサイトの説明を入力</p>
        <nav id="snav">
            <ul>
                <li><a href="#">メニュー1</a></li>
                <li><a href="#">メニュー2</a></li>
                <li><a href="#">メニュー3</a></li>
                <li><a href="#">メニュー4</a></li>
                <li><a href="#">メニュー5</a></li>
            </ul>
        </nav>
    </header>
    <div class="ads">ここに広告コードを挿入します。</div>
    <div id="page_content">
        <article>
            <h2>記事タイトル</h2>
            <div id="showArea">記事をここに表示する</div>
        </article>
    </div>
    <div id="sidebar">
        <div class="inner">
            <h3>プロフィール</h3>
            <p>HTML5 &amp;
                CSS3ベースのテンプレートです。あらかじめ［ツール］メニューの［ページ編集オプション］を選択し、［作成］タブを開いて、［ドキュメントの型宣言］を「HTML5」に、［CSSスキーマー］のバージョンを「CSS3
                default」にしてください。</p>
        </div>
        <nav>
            <h3>アーカイブ</h3>
            <ul>
                @foreach($articles as $article)
                    <li>
                        <a id="{{$article->id}}" href="#" onclick="articleDisplay(this)">
                            {{$article->title}}<br>
                            <div style="font-size: 12px">
                                {{$article->created_at}}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <footer>
        <p class="center">&copy;2018 wanichan</p>
    </footer>
</div>

</body>

</html>
