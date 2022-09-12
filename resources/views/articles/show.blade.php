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

    <a href="/articles/" class="block">一覧へ戻る</a>

    <a href="/articles/{{ $articles->id }}/edit" class="block">編集する</a>

    <form action="/articles/{{ $articles->id }}" id="form_recipe" method="post">
        @csrf
        @method('DELETE')

        <input type="submit" value="削除する" id="btn" class="block">
    </form>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>
