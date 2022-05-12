<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
<h1>つぶやきアプリ</h1>
<div>
    <p>投稿フォーム</p>
    <?php // フォームの送信先は hogeで、送信方式はhugaです。?>
    <form action="{{ route('tweet.create') }}" method="post">
        @csrf
        <label for="tweet-content">つぶやき</label>
        <span>140文字まで</span>
        <?php // textareaのname要素の値"tweet"は、CreateRequestクラスのrules()の中の"tweet"と紐づく ?>
        <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやきを入力"></textarea>
        @error('tweet')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">投稿</button>
    </form>
</div>
<div>
    @foreach($tweets as $tweet)
        <details>
            <summary>{{ $tweet->content }}</summary>
            <div>
                <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
            </div>
        </details>
    @endforeach
</div>
</body>
</html>
