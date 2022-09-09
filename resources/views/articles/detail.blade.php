<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>論文詳細</h1>

    <p>タイトル：{{ $articles->title }}</p>
    <p>{{ $articles->body }}</p>

    <form action="">
        <a href="/articles/" class="block">
            <button type="button">一覧へ戻る</button>
        </a>

        <a href="/articles/create" class="block">
            <button type="button">新規論文投稿</button>
        </a>

        <a href="/articles/{{ $articles->id }}/edit" class="block">
            <button type="button">編集する</button>
        </a>
        <!-- <button onclick="location.href='/articles/'">一覧へ戻る</button> -->
    </form>
</body>

</html>
