<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>instruments</title>
</head>
<body>
    <h1 class="text-3xl font-bold mb-4">計測器一覧</h1>
    <div class="text-blue-600 font-bold underline mb-4">
        <a href="{{ route('instruments.create') }}">計測器を新規登録する</a>
    </div>

    <table class="border border-gray-300">
        <thead>
            <tr class="font-bold bg-gray-100 text-left">
                <th class="px-2 py-1 border border-gray-300">管理番号</th>
                <th class="px-2 py-1 border border-gray-300">計測器名</th>
                <th class="px-2 py-1 border border-gray-300">配置場所</th>
                <th class="px-2 py-1 border border-gray-300">校正頻度</th>
                <th class="px-2 py-1 border border-gray-300">次回校正日</th>
                <th class="px-2 py-1 border border-gray-300">メーカー</th>
                <th class="px-2 py-1 border border-gray-300">計測器登録日</th>
                <th class="px-2 py-1 border border-gray-300">編集｜削除</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($instruments as $instrument)
            <tr class="">
                <td class="px-2 py-1 border border-gray-300">{{ $instrument->management_number }}</td>
                <td class="px-2 py-1 border border-gray-300">{{ $instrument->name }}</td>
                <td class="px-2 py-1 border border-gray-300">{{ $instrument->location }}</td>
                <td class="px-2 py-1 border border-gray-300">{{ $instrument->calibration_cycle }}</td>
                <td class="px-2 py-1 border border-gray-300">{{ $instrument->next_calibration_date }}</td>
                <td class="px-2 py-1 border border-gray-300">{{ $instrument->maker}}</td>
                <td class="px-2 py-1 border border-gray-300">{{ $instrument->registered_at }}</td>
                <td class="px-2 py-1 border border-gray-300 text-blue-600">
                
                    <a href="{{ route('instruments.edit' , $instrument->id) }}" class="inline">編集</a> |
                    <form action="{{ route('instruments.destroy', $instrument->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">削除</button>
                    </form>
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>