<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文一覧</title>
</head>

<body>
    <h1>論文一覧</h1>

    @foreach ($articles as $article)
    <a href="/articles/{{ $article->id }}">
        <p>{{ $article->title }}</p>
    </a>
    @endforeach

    <form action="">
        <input type="submit" value="新規論文投稿">
    </form>
</body>

</html>
