<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Language" content="ja">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <title>サンプルトップページ（このタイトルは自由に変えてください）</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

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
            <h2>このテンプレートの使い方</h2>
            <p>このテンプレートはレスポンシブWebデザイン対応で、デスクトップでは右側コンテンツ、左側サイドバーの段組みレイアウトです。</p>
            <dl>
                <dt>サイドバー #sidebar</dt>
                <dd>要素幅：スマホ・タブレット縦向きはデバイス幅、1024px以上は300px</dd>
                <dt>コンテンツ #page_content</dt>
                <dd>要素幅：スマホ・タブレット縦向きはデバイス幅、1024px以上は660px、1124px 以上は 730px</dd>
            </dl>
        </article>
        <aside>
            <p>モノトーンの色合いにしています。あとで自由にスタイルを変更してお使いいただけます。</p>
            <p>このページはトップページになります。このページのみダイナミックWebテンプレートを適用せず、このページ独自のコンテンツを作ってください。</p>
            <p>トップページ以外のページは、master.dwtを右クリックし、ショートカットメニューより［ダイナミックWebテンプレートから新規作成］を選択して記事作成してください。</p>
            <h2>参考リンク</h2>
            <p>Expression Web 4についての各機能の解説サイトは、wanichan.comの姉妹コンテンツ『<a href="https://www.wanichan.com/web/expression/web4/"><strong>Expression
                        Web 4を使ってみよう</strong></a>』を参照してください。</p>
        </aside>
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
                <li><a href="#">メニュー1</a></li>
                <li><a href="#">メニュー2</a></li>
                <li><a href="#">メニュー3</a></li>
            </ul>
        </nav>
    </div>
    <footer>
        <p class="center">&copy;2018 wanichan</p>
    </footer>
</div>

</body>

</html>
