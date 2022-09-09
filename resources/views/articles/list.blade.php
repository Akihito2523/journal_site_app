<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>論文一覧</h1>

    @foreach ($articles as $article)
    <a href="/articles/{{ $article->id }}">
        <p>{{ $article->title }}</p>
    </a>
    @endforeach

    <a href="/articles/create">
        <button type="button">新規論文投稿</button>
    </a>
</body>

</html>
