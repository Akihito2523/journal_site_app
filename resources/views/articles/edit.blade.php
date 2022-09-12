<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文編集</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>投稿論文編集</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/articles/{{ $articles->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" value="{{ old('title', $articles->title) }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body">{{ old('body', $articles->body) }}</textarea>
        </p>
        <input type="submit" value="更新">
    </form>
</body>

</html>
