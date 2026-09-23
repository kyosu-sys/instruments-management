<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instruments</title>
</head>
<body>
    <h1>計測器一覧</h1>

    <a href="{{ route('instruments.create') }}">新規登録</a>
    <ul>
        @foreach($instruments as $instrument)
        <li>{{ $instrument->name }}
            <a href="{{ route('instruments.edit' , $instrument->id) }}">編集</a> |
            <form action="{{ route('instruments.destroy', $instrument->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>